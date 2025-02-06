<?php global $is_home ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<style>
    body, html {
    margin: 0;
    padding: 0;
}
</style>
<body class="" >
    <header class="row p-4 bg-dark bg-gradient text-white  align-items-center justify-content-around" style="padding-left:19.5% !important;">
        <h4 class="pe-5 col-md-7 " style="margin-right:3.6%;"><a class="text-white" href="<?= $is_home ? "./index.php" : "../../public/index.php" ?>">TechStore</a></h4>
        <div class="col d-flex flex-row align-items-center" style="">
            <div class="d-flex flex-row justify-content-around">
                <a class="text-white px-4 tracking-wide" href="<?= $is_home ? "../src/Views/bookstore.php" : "./bookstore.php" ?>">Books</a>
            </div>
            <button class="align-self-center btn btn-primary" style="color:#f5f5f5;padding:1% 4%;border:none;width:145px;height:30px;border-radius:5px;" ><a class="text-white" href="<?= $is_home ? "../src/Views/add.php" : "./add.php" ?>">Add a book</a></button>
        </div>
    </header>