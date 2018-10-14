<?php
//include autoloader
include('../autoloader.php');

//check request method

    $product = new Products();
    //add products
 $addProduct = $product -> addProduct($name,$price,$desc,$delivery, $console,$category,$imagePath);
    if( $addProduct== true ){
        echo "<script>alert('Product has been delete successfully!')</script>";
        header("location:../viewMyProduct.php");
        
    }
    elseif($addProduct== false){
              echo "<script>alert('Couldn't delete product)</script>";


    }


?>
