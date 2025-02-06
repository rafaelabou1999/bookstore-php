<?php 
$is_home = true;

include __DIR__ . '/../src/inc/Header.php'; 
include __DIR__ . '/../src/inc/books.php';
?>
    <main >
        <div class="bg-secondary bg-opacity-25" style="height:350px; width:100%; padding-left: 20%;padding-top:3.5%;" >
            <h1>Welcome to online TechStore books</h1>
            <p class="pt-5 fs-2 text-secondary ">This site has been made using PHP with MYSQL!</p>
            <p class="pt-1 fs-2 text-secondary ">The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
        </div>
        <div>
            <h3 class="text-center fw-bold text-secondary" style="padding-top:5%;">Latest Books</h3>
            <div class="d-flex flex-row justify-content-center py-5">
                
                <?php foreach ($books AS $book):?>
                     <?php 
                       $query_params = http_build_query([
                        "title" => $book['title']
                       ]) ;
                       $url = "http://localhost/bookstore/src/Views/details.php?" . $query_params;
                    ?>
                     <a href='<?= $url ?>'><img class='book img-fluid border border-secondary me-5' src='<?= $book['img'] ?>' style='width:250px; height:330px;object-fit:cover;'></a>
                      
                    <?php endforeach;?>
            
            </div>
        </div>
    </main>


<?php include __DIR__ . '/../src/inc/Footer.php' ?>



