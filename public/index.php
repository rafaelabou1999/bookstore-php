<?php 
$is_home = true;

include __DIR__ . '/../src/inc/Header.php'; 
include __DIR__ . '/../src/inc/books.php';
?>
    <main >
        <div class="bg-secondary bg-opacity-25" style="height:350px; width:100%;padding-top:3.5%;padding-left:19.5%;" >
            <h1 class="">Welcome to online TechStore books</h1>
            <p class="pt-5 fs-2 text-secondary ">Take your knowledge to the next level!</p>
            <p class="pt-1 fs-2 text-secondary ">Explore our tech books and add the ones you love to this bookstore</p>
        </div>
        <div class="container">
            <h3 class="row fw-bold text-secondary justify-content-lg-center" style="padding-top:5%;margin-left:.001%;">Latest Books</h3>
            <div class="row justify-content-lg-center py-5">
                
                <?php foreach ($books AS $book):?>
                     <?php 
                       $query_params = http_build_query([
                        "id" => $book['id'],
                        "title" => $book['title']
                       ]) ;
                       $url = "http://localhost/bookstore/src/Views/details.php?" . $query_params;
                    ?>
                    <div class="col-md-3 mb-3">
                        <a href='<?= $url ?>'><img class=' book img-fluid border border-secondary ' src='<?= $book['img'] ?>' style='width:100%; height:330px;object-fit:cover;'></a>
                    </div>
                      
                    <?php endforeach;?>
            
            </div>
        </div>
    </main>


<?php include __DIR__ . '/../src/inc/Footer.php' ?>



