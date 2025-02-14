<?php
session_start();
require_once dirname(__DIR__,2) . '/config.php'; 
require_once __DIR__ . '/../inc/books.php'; 
include __DIR__ . '/../inc/Header.php'; 

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$stmt = $pdo->prepare("SELECT * FROM bookstore");
$stmt->execute();
$results = $stmt->fetchAll();

?>
<div class="container" style="width:80vw;margin-left:15.5%;margin-top:3%;">
<div class="row row-cols-4 g-4">
    <?php foreach($results AS $result):?>

        <?php
        $query_params = http_build_query([
            "id" => $result['id'],
            "title" => $result['title']
         ]);
         $url = "http://" . $_SERVER['HTTP_HOST'] . "/bookstore/src/Views/details.php?" . $query_params;
         ?>
        <a href="<?= $url ?>"><img class="col me-5 border border-secondary" src="../../public/assets/<?=$result['image']?>" width="230px" height="280px" style="object-fit:cover;margin-top:15%;"/></a>
    <?php endforeach; ?>
</div>
</div>
<?php include __DIR__ . '/../inc/Footer.php'; ?>