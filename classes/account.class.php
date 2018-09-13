<?php
class Account extends Database {
    public $errors = array();
    public function __construct() {
        parent:: __construct() ;
        
    }
    //register new user
    public function create($name,$email,$password,$address, $contactNo){
        //create array to store errors
        $errors = array();
        //use validator class to validate username password and email
        if( Validator::password($password) == false ){
            $errors['password'] = Validator::$errors;
        }
        if( Validator::email($email) == false ){
            $errors['email'] = Validator::$errors;
        }
        //check if there are no errors
        if( count($errors) == 0 ){
            //proceed and create account
            $query = "INSERT INTO userTable 
                    (userName,userEmail,userPassword,address, contactNo)
                    VALUES 
                    (? , ? , ?, ?, ?)";
            //$hash = password_hash( $password, PASSWORD_DEFAULT );
            $statement = $this -> connection -> prepare($query);
            $statement -> bind_param('sssss', $username, $email, $password,$address,$contactNo );
            $success = $statement -> execute() ? true : false ;
            //check the error code
            if( $success == false && $this -> connection -> errno == '1062' ){
                //check if it is email or username error
                $msg = $this -> connection -> error;
                if( strpos($msg,'email') > 0 ){
                    $errors['email'] = 'email already taken';
                }
                
                $this -> errors = $errors;
            }
            return $success;
        }
        else{
            $this -> errors = $errors;
            return false;
        }
    }
    //login authentication
    public function authenticate($userEmail, $userPassword)
    {
            $sql = "select count(*) as log from userTable where userEmail = ? and userPassword = ? ";
         
            $statement= $this -> connection -> prepare($sql); 
            $statement ->bind_param("ss", $userEmail, $userPassword);
            $statement -> execute();
            $statement->bind_result($result);
            $statement->fetch();
            
            if($result > 0){
                return true;
            }else{
                return false;
            }
           
    }
}
?>