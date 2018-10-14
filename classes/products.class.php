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
            FROM products p, userTable ut where p.sellerID= ut.userid and p.productCat='".$gameCat."' or p.productConsole='".$consoleCat."' or p.name='".$name."' group by p.id;";
            
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
    
       public function getUserProducts(){
        $query = " select * from userTable ut, products p where ut.userId=p.sellerID and ut.userEmail='".$_SESSION['userEmail']."'";
        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
    

    
        public function updateProduct($name,$price,$desc,$delivery, $console,$category,$imagePath,$productID){
//$name,$price,$desc,$delivery, $console,$category
        
        
            //proceed and create account
            $query = "update products set name=?,price=?,description=?,delivery=?,productConsole=?,productCat=?,imagePath=? where id=? ";
            $statement = $this -> connection -> prepare($query);
            $statement -> bind_param('ssssssss', $name,$price,$desc,$delivery, $console,$category,$imagePath,$productID);

          //  $statement -> bind_param('sssssss', $name,$price,$desc,$delivery, $console,$category,1);
            $success = $statement -> execute() ? true : false ;
            echo $success;
            //check the error code
            if( $success == false ){
                //check if it is email or username error
                    $errors['email'] = 'error occured';           
            }
            return $sucess;
            
       
      
        
    }
    
        public function addProduct($name,$price,$desc,$delivery, $console,$category,$imagePath){
//$name,$price,$desc,$delivery, $console,$category
        session_start();
        
            //proceed and create account
             $sellerID=$_SESSION['userID'];

            $query = "INSERT INTO products (name,price,description,delivery,productConsole,productCat,sellerID,imagePath) VALUES (?, ? , ?, ?, ?, ?, ?, ?)";
            $statement = $this -> connection -> prepare($query);
            $statement -> bind_param('ssssssss', $name,$price,$desc,$delivery, $console,$category,$sellerID,$imagePath);

          //  $statement -> bind_param('sssssss', $name,$price,$desc,$delivery, $console,$category,1);
            $success = $statement -> execute() ? true : false ;
            echo $success;
            //check the error code
            if( $success == false ){
                //check if it is email or username error
                    $errors['email'] = 'error occured';           
            }
            return $sucess;
            
       
      
        
    }
   

}
    
    
?>