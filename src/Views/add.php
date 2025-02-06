<?php
session_start();

$is_home = false;
include __DIR__ . '/../inc/Header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['title']) && isset($_POST['image'])){
        $_SESSION['title'] = htmlspecialchars($_POST['title']);
        $_SESSION['desc'] = htmlspecialchars($_POST['desc']);
        $_SESSION['image'] = htmlspecialchars($_POST['image']);
    }
}

?>
<div class="position-relative" style="width:20%;margin:5% auto;">
    <form action="">
        <label class="form-label fs-3 fw-bold text-secondary" for="title" style="letter-spacing:.05em">*Title</label>
        <input class="form-control mb-4 " type="text" name="title" id="title" required/>
        <label class="form-label  fs-3 fw-bold text-secondary" style="letter-spacing:.05em;padding-top: 3%;" for="image">Select an image of the book:</label>
        <input class="form-control mb-4" type="file" name="image" id="image"/>
        <label class="form-label  fs-3 fw-bold text-secondary" style="letter-spacing:.05em;padding-top: 3%;"  for="desc" required>*Description</label>
        <textarea  class="form-control mb-5" placeholder="Book description" id="desc"></textarea>
        <button type="submit" class="btn btn-primary border border-none position-absolute end-0 bottom-5">Add</button>
    </form>
</div>
<?php include __DIR__ . '/../inc/Footer.php'?>