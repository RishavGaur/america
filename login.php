<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="static/img/logos/wbg-faviconn.png" type="image/png" />
    <link rel="stylesheet" href="static/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="login-container">
        <div class="container px-4 py-5">
            <div class="row text-center mb-5">
                <div class="col-md-12">
                    <h1>Login</h1>
                </div>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <input type="text" name="username" id="username" placeholder="Enter Username" autofocus
                            required>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <input type="password" name="password" id="password" placeholder="Enter Your Password" required>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['login'])){
            include "sql/connection.php";
            $username= mysqli_real_escape_string($conn, $_POST['username']);
            $password= mysqli_real_escape_string($conn, $_POST['password']);

            $sql= "SELECT id, username FROM admin WHERE username= '{$username}' AND password= '{$password}'";

            $result= mysqli_query($conn, $sql) or die("Query Failed...".mysqli_connect_error());

            if(mysqli_num_rows($result)>0){
                while($row= mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION['id']= $row['id'];
                    $_SESSION['username']= $row['username'];
                    header("Location: http://localhost/php/america/index.php");
                }
            }else{
                echo "<div class='alert alert-danger'>Username and Password are not Matched.</div>";
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>