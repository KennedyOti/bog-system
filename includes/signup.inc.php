<?php

if(isset($_POST['submit']))
{
    //Grabbing The Form Data

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["password-confirm"];

    // Instantiate Class
    include "../classes/dbconnection.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller-class.php";

    $signup = new SignupController($username, $email, $password, $passwordrepeat);
    //Running error handlers and user signup
    $signup->signupUser();


    //Going back to the front page
    header("location: ../index.php? error =none");
    
}
