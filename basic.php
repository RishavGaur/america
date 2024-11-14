<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of America - Banking, Credit Cards, Loans and Merrill Investing</title>
    <link rel="shortcut icon" href="static/img/logos/wbg-faviconn.png" type="image/png" />
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <section id="navigation-bar">
        <div class="container">
            <div id="first-nav" class="px-5 py-3">
                <div class="f-first-child">
                    <a href="#" style="border-bottom: 2px solid black;">Personal</a>
                    <a href="#">Small Business</a>
                    <a href="#">Wealth Management</a>
                    <a href="#">Business & Institutions</a>
                    <a href="#">Security</a>
                    <a href="#"><img src="static/img/logos/wbg-faviconn.png" alt="">About Us</a>
                </div>
                <div class="first-child">
                    <a href="#">En español</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Help</a>
                </div>
            </div>
            <div id="second-nav">
                <img src="static/img/logos/america.svg" alt="Bank of America" onclick="window.location='index.php'">
                <div class="second-child">
                    <input type="search" name="" id="" placeholder="Search"
                        style="padding:3px 10px;outline:none;border-radius:10px;border:none;background-color:#f5f5f5;">
                    <i class="bi bi-search nav-right"></i>
                </div>
                <div id="hidden-child">
                    <a href="logout.php" class="hide-me" style="color:red;">Logout</a><span class="hide-me">|</span>
                    <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"></i>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <img src="static/img/logos/america.svg" alt="Bank of America" onclick="window.location='index.php'">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul style="list-style-type:none;">
                                <li><a class="dropdown-item" href="#">Checking</a></li>
                                <li><a class="dropdown-item" href="#">Savings & CDs</a></li>
                                <li><a class="dropdown-item" href="#">Credit Cards</a></li>
                                <li><a class="dropdown-item" href="#">Home Loans</a></li>
                                <li><a class="dropdown-item" href="#">Auto Loans</a></li>
                                <li><a class="dropdown-item" href="#">Investing</a></li>
                                <li><a class="dropdown-item" href="#">Better Money Habbits&reg;</a></li>
                                <li><a class="dropdown-item" href="logout.php" style="color:red;">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third-nav" class="px-3">
                <a class="dropdown-item" href="#">Checking</a>
                <a class="dropdown-item" href="#">Savings & CDs</a>
                <a class="dropdown-item" href="#">Credit Cards</a>
                <a class="dropdown-item" href="#">Home Loans</a>
                <a class="dropdown-item" href="#">Auto Loans</a>
                <!-- <a class="dropdown-item" href="#">Investing</a> -->
                <a class="dropdown-item" href="#">Better Money Habbits&reg;</a>
                <a class="dropdown-item" href="logout.php" style="color:red;">Logout</a>
            </div>
        </div>
    </section>
    
    <script src="static/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>