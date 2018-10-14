<?php
//include autoloader
include('../autoloader.php');

//check request method
$id=$_GET['id'];
    $product = new Products();
    //add products
 $deleteProduct = $product -> deleteProduct($id);
  

?>
