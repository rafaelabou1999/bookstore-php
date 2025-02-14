<?php
session_start();

$is_home = false;
$path = '../../public/assets/';
require_once dirname(__DIR__,2) . '/config.php'; 
include __DIR__ . '/../inc/sanitize.php';
include __DIR__ . '/../inc/Header.php';

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit'])){
    if($_FILES['image']['error'] == 0){
        $file_size = $_FILES['image']['size'] / 1024;
        $file_type = $_FILES['image']['type'];
        if(($file_size > 0 && $file_size < 300) && ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/pjpeg')){
            $filename = $_FILES['image']['name'] ?? '';
            $file_path =  $path . $filename;

            if(is_file($file_path)){
                unlink($file_path);
            }

            $move = move_uploaded_file($_FILES['image']['tmp_name'], $file_path);   
                    
            if($move){
                echo "<script>alert('File uploaded!')</script>";
            } else{
                echo "<script>alert('Upload failed')</script>";
            }

            $_SESSION['title'] = sanitize($_POST['title']);
            $_SESSION['desc'] = sanitize($_POST['desc']);
            $_SESSION['year'] = sanitize($_POST['year']);
            $_SESSION['price'] = sanitize($_POST['price']);
            $_SESSION['image'] = $_FILES['image']['name'];
            
    
            $stmt = $pdo->prepare('INSERT IGNORE INTO bookstore(title,`desc`,`image`,`year`,price) VALUES(:title,:desc,:image,:year,:price)');
            $stmt->execute([
                ':title' =>  $_SESSION['title'] ?? 'Title missing',
                ':desc' => $_SESSION['desc'] ?? 'No description',
                ':image' => $filename ?? '',
                ':year' => $_SESSION['year'] ?? '',
                ':price' => $_SESSION['price'] ?? 15.00,
            ]);    
        } else{
            echo "<script>alert(File above 300 kb or not compatible with png or jpeg)</script>";
        }
    } else{
        echo '<script>alert(File error!)</script>';
    }
   
}
?>
<div class="form_container position-relative" style="width:20%;margin:5% auto;">
    <form action="" enctype="multipart/form-data" method="POST">
        <label class="form-label fs-3 fw-bold text-secondary" for="title" style="letter-spacing:.05em">*Title</label>
        <input class="form-control mb-4 " type="text" name="title" id="title" required/>
        
        <label class="form-label fs-3 fw-bold text-secondary" for="year" style="letter-spacing:.05em">*Year of publication</label>
        <input class="form-control mb-4 " type="text" name="year" id="year" required/>
        
        <label class="form-label fs-3 fw-bold text-secondary" for="price" style="letter-spacing:.05em">*Price</label>
        <input class="form-control mb-4 " type="text" name="price" id="price" required/>
        
        <label class="form-label  fs-3 fw-bold text-secondary" style="letter-spacing:.05em;padding-top: 3%;" for="image">Select an image of the book:</label>
        <input class="form-control mb-4" type="file" name="image" id="image"/>
        
        <label class="form-label  fs-3 fw-bold text-secondary" style="letter-spacing:.05em;padding-top: 3%;"  for="desc" required>*Description</label>
        <textarea  class="form-control mb-5" name="desc" placeholder="Book description" id="desc"></textarea>
        <button type="submit" name="submit" class="btn btn-primary border border-none position-absolute end-0 bottom-5">Add</button>
    </form>
</div>
<script>
    
</script>
<?php include __DIR__ . '/../inc/Footer.php'?>
