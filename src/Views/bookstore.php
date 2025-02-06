<?php
session_start();
include __DIR__ . '/../inc/Header.php'; 

$pdo = new PDO("mysql:host=localhost;dbname=books", "root", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM bookstore");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="d-flex flex-row justify-content-center">
    <?php foreach($results AS $result):?>
        <?php  
        $query_params = http_build_query([
            "id" => $result['id'],
            "title" => $result['title']
         ]);
         $url = "http://localhost/bookstore/src/Views/details.php?" . $query_params;
         ?>
        <a href="<?= $url ?>"><img class="me-5 border border-secondary" src="<?= $result['image'] ?>" width="230px" height="280px" style="object-fit:cover;margin-top:45%;"/></a>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/../inc/Footer.php'; ?>