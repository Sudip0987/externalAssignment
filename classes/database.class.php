<?php
class Database {
    private $username,$password,$dbhost,$dbname;
    protected $connection;
    public function  __construct(){
        $this -> username = getenv("dbuser");
        $this -> password = getenv("dbpassword");
        $this -> dbhost = getenv("dbhost");
        $this -> dbname = getenv("dbname");
        $this -> connection = mysqli_connect($this->dbhost,$this -> username,$this -> password,$this -> dbname);
    }
    
    public function getConnection(){
        return $this -> connection;
    }
}
?>