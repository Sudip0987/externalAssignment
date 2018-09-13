<?php
//include autoloader
include('../autoloader.php');

//check request method
//if request is a POST request
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //handle sign up here
    $account = new Account();
    //receive post variables from form
    $email = $_POST['userName'];
    $password = $_POST['userPassword'];
    $name = $_POST['userName'];
    $address = $_POST['userAddress'];
    $contant = $_POST['userContact'];
    //sign user up
    $signup = $account -> create($name,$email,$password, $address, $contact);
    if( $signup == true ){
        //signup succeeded
        //start session
        session_start();
        //create session variable with user's email
        $_SESSION['userEmail'] = $email;
        //show success message
        $message = 'Your account has been created!';
        header("location:../login.php");
    }
    else{
        //signup failed
        $message1='failed';
        header("location:../login.php");
        //get the errors and show to user
    }
}

$page_title = 'Sign Up';
?>