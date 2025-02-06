<?php
global $books;
global $is_home;
$books = [
    [
        "id" => 1,
        "title" => "An Introduction to PHP",
        "year" => 2024,
        "desc" => "The book starts with steps to download and install a setup for a sample website that will form the basis for upcoming chapters. You start by writing PHP code and learn how to mix it with HTML and manage the code. From there, you will learn about dynamic content, along with a deep dive into form processing and sending email. Saving uploaded data and uploading files is discussed next. You will learn how to configure your PHP project and develop a library. You will then learn how to create an image catalog and manage data on your web page. By the end of the book, you will understand how to work with cookies, sessions, and logging in, followed by an example of creating a simple blog that reiterates the concepts developed in the previous chapters.",
        "img" => $is_home ? "../public/assets/php_book.png" : "../../public/assets/php_book.png",
        "price" => 35.89, 
        "stars" => "4.5",
        "font" => "https://link.springer.com/"
    ],
    [
        "id" => 2,
        "title" => "Learning Php, MySQL & JavaScript",
        "year" => 2021,
        "desc" => "Build interactive, data-driven websites with the potent combination of open source technologies and web standards, even if you have only basic HTML knowledge. With the latest edition of this popular hands-on guide, you'll tackle dynamic web programming using the most recent versions of today's core technologies: PHP, MySQL, JavaScript, CSS, HTML5, jQuery, and the powerful React library.",
        "img" =>$is_home ? "../public/assets/mysql_book.png" : "../../public/assets/mysql_book.png" ,
        "price" => 44.00, 
        "stars" => "4.8",
        "font" => "https://www.lakeforestbookstore.com/book/9781492093824"
    ],
    [
        "id" => 3,
        "title" => "SQL Essentials for Dummies (Paperback)",
        "year" => 2024,
        "desc" => "SQL Essentials For Dummies is your quick reference to all the core concepts of SQL--a valuable common standard language used in relational databases. This useful guide is straightforward--with no excess review, wordy explanations, or fluff--so you get what you need, fast. Great for a brush-up on the basics or as an everyday desk reference, this book is one you can rely on.",
        "img" =>  $is_home ? "../public/assets/sql_book.png" : "../../public/assets/sql_book.png",
        "price" => 64, 
        "stars" => "4.5",
        "font" => "https://www.wellesleybooks.com/book/9781394296941"
    ],
    [
        "id" => 4,
        "title" => "Vue.Js in Action",
        "year" => 2019,
        "desc" => "Vue.js in Action teaches readers to build fast, flowing web UI with the Vue.js framework. As they move through the book, readers put their skills to practice by building a complete web store application with product listings, a checkout process, and an administrative interface!",
        "img" =>  $is_home ? "../public/assets/vue_book.png" : "../../public/assets/vue_book.png",
        "price" => 39.90, 
        "stars" => "4.8",
        "font" => "https://www.amazon.com.br/Vue-js-Action_p1-Erik-Hanchett/dp/1617294624"
    ],
];