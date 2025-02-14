<?php 
$is_home = false;
require_once dirname(__DIR__,2) . '/config.php'; 
require_once __DIR__ . '/../inc/books.php'; 
include __DIR__ . '/../inc/Header.php'; 

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$stmt = $pdo->prepare('SELECT * FROM bookstore');
$stmt->execute();
$books = $stmt->fetchAll();
?>
    <?php foreach($books AS $book):?>
        <?php if($book['id'] === $_GET['id']):?>
        <div class="details_container" style="padding-left:19.5%;padding-top:5%;">
            <div class="">
                <?php if(!empty($book['image'])):?>
                <img class="border border-secondary" src="../../public/assets/<?= $book['image'] ?>" width="300px" height="380px" style="object-fit:cover;"/>
                <?php else:?>
                    <img src="../../public/assets/empty_img.png"/>
                <?php endif;?>
            </div>
            <div class="ps-5 0 position-relative details_text" style="width:40%;">
                 <h3 class="text-secondary fw-bold"><?= $book['title'] ?></h3>
                 <p class="fs-3 pt-3"><?= $book['desc'] ?></p>
                 <p class="fs-4 fw-bold text-dark">Year: <span><?= $book['year'] ?></span></p>
                 <div class="d-flex flex-row px-5 align-items-center bg-secondary-subtle border border-secondary  justify-content-end position-absolute end-0 bottom-0">
                    <h4 class="me-3" style="font-size:18px;">Price: </h4>
                    <h4 style="font-size:18px;" class="">$<?= $book['price'] ?></h4>
                 </div>
            </div>
        </div>
        <?php endif;?>
    <?php endforeach;?>
<?php include __DIR__ . '/../inc/Footer.php'?>