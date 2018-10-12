<?php
//include autoloader
session_start();
include('../autoloader.php');
$page_title ="Sign In Page";


//check request method
//if request is a POST request
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $email = $_POST['textEmail'];
    $password = $_POST['textPassword'];
    
    $account = new Account();
    $success = $account -> authenticate($email, $password);
    if($success == true){
        //login successful
        $_SESSION['userEmail'] = $email;
        //redirect user to home page
        header("location:../publishAd.php");
       
    }
    else{
        $message = "Wrong Credentials supplied";
        header("location:../login.php?msg=failed");
        
        $message_class ='warning';
       
        
    }
}
?>