
<?php
class ProductDetail extends Products{
    public function __construct(){
        parent::__construct();
    }
    public function getProduct( $id ){
        
             $query = "SELECT * 
FROM products p, userTable u
WHERE u.userId = p.sellerID
AND
 p.id=? order by p.id;";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i',$id);
        $statement -> execute();
        $result = $statement -> get_result();
        $product_detail = array();
        while( $row = $result -> fetch_assoc() ){
          array_push($product_detail, $row );
            
        }
      
        return $product_detail;
    }
}
?>