<?php
class Products extends Database{
    public $products = array();
    public function __construct(){
        parent::__construct();
    }
    public function getProducts(){
        $query = "SELECT * 
FROM products p, userTable u, images i, productImage pi
WHERE u.userId = p.sellerID
AND p.id = pi.productID
AND pi.imageID = i.imageID
LIMIT 0 , 30 ";
        $statement = $this -> connection -> prepare($query);
        $statement -> execute();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $this -> products, $row );
        }
        return $this -> products;
    }
}
?>