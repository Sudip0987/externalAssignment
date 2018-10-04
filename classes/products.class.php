<?php
class Products extends Database{
    public $products = array();
    public function __construct(){
        parent::__construct();
    }
    public function getProducts(){
        $query = "SELECT * 
            FROM products p, userTable ut where p.sellerID= ut.userid;; ";
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
    
            //proceed and create account
         $sellerID=1;
            $query = "INSERT INTO products (name,price,description,delivery,productConsole,productCat,sellerID,imagePath) VALUES (?, ? , ?, ?, ?, ?, ?, ?)";
          
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