<?php
class Account extends Database {
    public $errors = array();
    public $user = array();
    public function __construct() {
        parent:: __construct() ;
        
    }
    //register new user
    public function create($name,$email,$password,$address, $contactNo){
        
            //proceed and create account
            
            $query = "INSERT INTO userTable (userName,userEmail,userPassword,address, contactNo) VALUES (?, ? , ?, ?, ?)";
            //hash = password_hash( $password, PASSWORD_DEFAULT );
            $statement = $this -> connection -> prepare($query);
            $statement -> bind_param('sssss', $name, $email, $password,$address,$contactNo );
            $success = $statement -> execute() ? true : false ;
            //check the error code
            if( $success == false ){
                return $success;
            }
        else{
            session_start();
                $_SESSION['userEmail']=$email;
                return $success;
    }
    }
    //login authentication
    public function authenticate($userEmail, $userPassword)
    {
        
        
        
                  session_start();

            $query = "SELECT userId, userName, userPassword, userEmail FROM userTable WHERE userEmail=? and userPassword=?";
                $statement = $this -> connection -> prepare($query);
                           $hash = password_hash( $password, PASSWORD_DEFAULT );
        
      $statement -> bind_param('ss', $userEmail,$userPassword);
      $statement -> execute();
      $result = $statement -> get_result();
      while( $row = $result -> fetch_assoc() ){
       $_SESSION['userEmail']=$userEmail;
       $_SESSION['userID']= $row['userId'];
       
      }
      if( $result -> num_rows == 0 ){

       return false;
      }
      else{
     return true;
    }
            
    }
   /* public function auth( $userEmail, $password ){
      $query = 'SELECT userID,userName, userPassword, userEmail, 
      FROM userTable 
      WHERE email=?';
      $statement = $this -> connection -> prepare($query);
      $statement -> bind_param('s', $email);
      $statement -> execute();
      $result = $statement -> get_result();
      if( $result -> num_rows == 0 ){
        //account does not exist
        $this -> errors['auth'] = 'account does not exist';
        return false;
      }
      else{
        $account = $result -> fetch_assoc();
        $this -> user['userID'] = $account['userID'];
        $this -> user['userEmail'] = $account['userEmail'];
        $this -> user['userName'] = $account['userName'];
        $hash = $account['userPassword'];
          
        $match = password_verify( $password, $hash );
        if( $match == true ){
          //password is correct
          return true;
        }
        else{
          //wrong password
          $this -> errors['auth'] = 'credentials do not match our records';
          return false;
        }
    }
  }*/
}
?>