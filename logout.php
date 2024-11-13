<?php
    include "sql/connection.php";

    session_start();

    session_unset();

    session_destroy();

    header("Location: http://localhost/php/america/login.php");
?>