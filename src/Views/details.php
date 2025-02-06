<?php 
$is_home = false;
include __DIR__ . '/../inc/books.php';
include __DIR__ . '/../inc/Header.php';
?>
    <?php foreach($books AS $book):?>
        <?php if($_GET['id'] == $book['id']): ?>
        <div class="d-flex flex-row" style="padding-left:19.5%;padding-top:5%;">
            <div class="">
                <?php if(!empty($book['img'])):?>
                <img class="border border-secondary" src="<?= $book['img'] ?>" width="300px" height="380px" style="object-fit:cover;"/>
                <?php else:?>
                    <img src="../../public/assets/empty_img.png"/>
                <?php endif;?>
            </div>
            <div class="ps-5 position-relative" style="width:40%;">
                 <h3 class="text-secondary fw-bold"><?= $_GET['title'] ?></h3>
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