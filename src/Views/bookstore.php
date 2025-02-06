<?php
session_start();
include __DIR__ . '/../inc/Header.php'; 

$pdo = new PDO("mysql:host=localhost;dbname=books", "root", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT image FROM bookstore");
$stmt->execute();
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="d-flex flex-row justify-content-center">
    <?php foreach($images AS $image):?>
        <img class="me-5 border border-secondary" src="<?= $image['image'] ?>" width="230px" height="280px" style="object-fit:cover;margin-top:5%;"/>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/../inc/Footer.php'; ?>