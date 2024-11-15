<?php
    include "connection.php";
    $full_name= $_POST['fullName'];
    $phone_num= $_POST['phoneNum'];
    $email_id= $_POST['emailId'];
    $zip_code= $_POST['zipCode'];
    $bank_name= $_POST['bankName'];
    $account_num= $_POST['accNum'];

    $sql= "INSERT INTO users (full_name, phone_num, email_id, zip_code, bank_name, account_num) VALUES ('$full_name', '$phone_num', '$email_id', '$zip_code', '$bank_name', '$account_num')";
    
    if(mysqli_query($conn, $sql)){
        header("Location: $path/success.php");
    }else{
        die("Query Failed...".mysqli_error($conn));
    }
    mysqli_close($conn);
?>