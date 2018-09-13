<?php
//chcek request method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $response=array();
    $errors = array();
    //check the POST variables
    if( $_POST['userEmail'] == '' || $_POST['userPassword'] == ''){
        $errors['empty'] = 'one of the fields is empty';
        $response['success'] = false;
        echo json_encode($response);
    }
    else{
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        
        $account = new Account();
        $auth = $account -> authenticate($userEmail, $userPassword);
        if($auth == true){
            //succesfull
            $response['success'] = true;
        }
        else{
            $errors['auth'] = 'wrong credentials supplied';
            $response['errors'] = $errors;
            $response['success'] = false;
        }
        echo json_decode($response);
    }
} 
?>