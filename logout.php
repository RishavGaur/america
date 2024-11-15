<?php
    include "sql/connection.php";

    session_start();

    session_unset();

    session_destroy();

    header("Location: $path/login.php");
?>