<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>4 Col Portfolio - Start Bootstrap Template
    </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
    <!-- Navigation -->
<?php
include("./includes/header.php");
//if(isset($_SESSION['productID'])){}
    include('autoloader.php');


if(count($_SESSION['productID']<=0)){
  echo "<h4  style='margin:20px;'> Your cart is empty </h4>";
}
foreach($_SESSION['productID'] as $key => $id) {
   $detail = new ProductDetail();

$products = $detail -> getProduct($id);
foreach( $products as $item ){
$product_name = $item['name'];
$product_Id = $item['id'];
$product_price = $item['price'];
$product_cat = $item['productCat'];
$product_console=$item['productConsole'];
$seller_name = $item['userName'];
$image_path = $item['imagePath'];
$delivery_info = $item['delivery'];
$product_description =$item['description'];

echo " </h1><div class='col-lg-4 col-md-4 col-sm-4 portfolio-item' >

<div class='card h-100' style='padding:10px;'>
<a href='#'><img class='card-img-top' height='250'  src='$image_path' alt=''></a>
<div class='card-body'>
<h4 class='card-title'>
<a href='productDetails.php?product_id=$product_Id'>$product_name</a>
</h4>
<b>
<p>Price: $$product_price</p>
<a href='deleteFromCart.php?delID=$product_Id'>Remove From Cart</a>


</b>
</div>
</div>
</div>";
}

}

include("./includes/footer.php");
?>
</body>
</html>