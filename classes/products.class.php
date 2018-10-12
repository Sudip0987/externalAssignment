<?php
class Products extends Database{
    public $products = array();
    public function __construct(){
        parent::__construct();
    }
    
    public function getProductsByID($PID){
        $query="select * from products p, userTable ut where p.id='".$PID."' and p.sellerID = ut.userid ;";
        
        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
    
    public function getProducts($gameCat,$consoleCat){
        
        if($gameCat!="" or $consoleCat!=""){
            $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid and p.productCat='".$gameCat."' or p.productConsole='".$consoleCat."' group by p.id;";
            
        }else if ($consoleCat=="" and $gameCat=="" ){
             $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid group by p.id; ";
        }

        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
    
        public function searchProducts($name,$gameCat,$consoleCat){
        
        if($gameCat!="" or $consoleCat!="" or $name!="" ){
            $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid and p.productCat='".$gameCat."' and p.productConsole='".$consoleCat."' and p.name='".$name."' group by p.id;";
            
        }else if ($consoleCat=="" and $gameCat=="" and $name="" ){
             $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid group by p.id; ";
        }
 
        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
        public function getProductsByFilters($name,$console,$category){
        $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid";
        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
    
    
        public function addProduct($name,$price,$desc,$delivery, $console,$category,$imagePath){
//$name,$price,$desc,$delivery, $console,$category
        session_start();
            //proceed and create account
         $sellerID="(select userId from userTable where userEmail='".$_SESSION['userEmail']."')";
            $query = "INSERT INTO products (name,price,description,delivery,productConsole,productCat,sellerID,imagePath) VALUES (?, ? , ?, ?, ?, ?, ?, ?)";
          echo $query;
            $statement = $this -> connection -> prepare($query);
            $statement -> bind_param('ssssssss', $name,$price,$desc,$delivery, $console,$category,$sellerID,$imagePath);

          //  $statement -> bind_param('sssssss', $name,$price,$desc,$delivery, $console,$category,1);
            $success = $statement -> execute() ? true : false ;
            //check the error code
            if( $success == false ){
                //check if it is email or username error
                    $errors['email'] = 'error occured';           
            }
            return $sucess;
            
       
      
        
    }
    
   

}
    
    
?>