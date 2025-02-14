<?php 
session_start();
$is_home = true;
require_once dirname(__DIR__,1) . '/config.php'; 
include __DIR__ . '/../src/inc/Header.php'; 

try{
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME , DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $stmt = $pdo->prepare('SELECT * FROM bookstore LIMIT 4');
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (PDOException $e){
    die("Database connection failed " . $e->getMessage());
}

?>
    <main>
        <div class="banner bg-secondary bg-opacity-25" style="height:350px; width:100%;padding-top:3.5%;padding-left:19.5%;" >
            <h1 class="">Welcome to online TechStore books</h1>
            <p class="pt-5 fs-2 text-secondary ">Take your knowledge to the next level!</p>
            <p class="pt-1 fs-2 text-secondary ">Explore our tech books and add the ones you love to this bookstore</p>
        </div>
        <div class="container">
            <h3 class="subtitle_book row fw-bold text-secondary justify-content-lg-center" style="padding-top:5%;margin-left:.001%;">Popular Books</h3>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4 justify-content-lg-center py-5">
                
                <?php foreach ($results AS $result):?>
                     <?php 
                       $query_params = http_build_query([
                        "id" => $result['id'],
                        "title" => $result['title']
                       ]) ;
                       $url = "http://localhost/bookstore/src/Views/details.php?" . $query_params;
                    ?>
                    <div class="col mb-3">
                    <?php if(!empty($result['image'])):?>
                        <a href='<?= $url ?>'><img class=' book border border-secondary ' src='<?= './assets/' . $result['image'] ?>' style='width:100%; height:330px;object-fit:cover;'></a>
                    <?php else:?>
                        <a href='<?= $url ?>'><img class='book border border-secondary ' src='./assets/empty_img.png' style='width:100%; height:330px;object-fit:cover;'></a>
                    <?php endif;?>
                    </div>
                    <?php endforeach;?>
            
            </div>
        </div>
    </main>


<?php include __DIR__ . '/../src/inc/Footer.php' ?>



