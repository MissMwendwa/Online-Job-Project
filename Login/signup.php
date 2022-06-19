<?php

include 'config.php';

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);


if($password == $cpassword){
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email ','$password' )";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "<script>alert('Error! Kindly Correct the input.' )</script>";
     }  
    }else{
        echo "<script>alert('Passwords Don't Match)</script>";
    }
    
}


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width+device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Login Page</title>
    </head>

    <body>
        <div class="container">
            <div>
                <form action="" method="POST"   class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Create your Account</p>
                    <div class="input-group">
                        <input type="username" placeholder="Username" name="username" required>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="input-group">
                        <input type="confirmpassword" placeholder="Confirm Password" name="cpassword" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Get In</button>
                    </div>
                </form>
                <p class="login-text">Already Have an Account?</p>
                <div class="login-socials">
                    <a href="login.php" class="linkedin"><i class="fa-fa-linkedin"></i> Login Here</a>
               
            </div>
    </body>
    </html>
