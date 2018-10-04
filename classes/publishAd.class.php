<?php
//include autoloader
include('../autoloader.php');

//check request method
//if request is a POST request
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //handle sign up here
    
    //receive post variables from form
    $imageName=$_FILES['fileToUpload']['name']; 
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extension = pathinfo($imagename,PATHINFO_EXTENSION);
    $imagePath="../images/".$imageName;
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$imagePath);
      
  $name = $_POST['textGname'];
     $price = $_POST['textGprice'];
     $desc = $_POST['textGdesc'];
     
    $delivery = $_POST['textGdelivery'];
    $category = $_POST['selectorGcat'];
    $console = $_POST['selectorCcat'];
  
    $product = new Products();
    //add products
 $addProduct = $product -> addProduct($name,$price,$desc,$delivery, $console,$category,$imagePath);
    if( $addProduct== true ){
        
        header("location:../publishAd.php?sucess=true");
        
    }
    elseif($addProduct== false){
      
        header("location:../publishAd.php?sucess=false");
       
    }
}

?>
