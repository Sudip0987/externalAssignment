<?php
//include autoloader
include('../autoloader.php');

//check request method
//if request is a POST request
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //handle sign up here
    
    //receive post variables from form
    $email = $_POST['textEmail'];
    $password = $_POST['textPassword'];
    $name = $_POST['textName'];
    $address = $_POST['textAddress'];
    $contact = $_POST['textContact'];
    $account = new Account();
    //sign user up
    $signup = $account -> create($name,$email,$password, $address, $contact);
    if( $signup == true ){
        session_start();
        $_SESSION['userEmail'] = $email;
        header("location:../publishAd.php");
        
    }
    elseif($signup == false){
      
        header("location:../login.php?msg2=failed");
       
    }
}

?>
