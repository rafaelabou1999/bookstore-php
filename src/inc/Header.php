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
<body>
    <header class="p-4 bg-dark bg-gradient text-white d-flex flex-row justify-content-around align-items-center">
        <h4 class=""><a class="text-white" href="<?= $is_home ? "./index.php" : "../../public/index.php" ?>">TechStore</a></h4>
        <div class="d-flex flex-row justify-content-around">
            <a class="text-white px-4 tracking-wide" href="">Books</a>
            <a class="text-white px-4 tracking-wide" href="">Contact</a>
            <a class="text-white px-4 tracking-wide" href="">My Cart</a>
            <button class=" bg-transparent text-info fw-bold align-self-center">Add a book</button>
        </div>
    </header>