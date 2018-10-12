
<html>
  <head>
    <?php

if($_GET['message']==1){
    echo "<script>alert('Item has been added to cart!');</script>";
}
   include("./includes/header.php");
   ?>
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
  </head>
  <body>
   
              <?php
              session_start();
include('autoloader.php');
$id = $_GET['product_id'];
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
echo " 
 <div class='container' style = 'margin-top:30px;border:1px solid black;border-radius:10px;'>
    <div class = 'row' style = 'margin:5px' >
      <div class='col-lg-5 col-md-4 col-sm-6 portfolio-item' style='margin-top:30px;'>
           <a href='#'><img class='card-img-top' src='$image_path' alt=''></a>
            
      </div>
       <div class='col-lg-5 col-md-4 col-sm-6 portfolio-item' style='margin-top:5px;'>
            <div class='card-body'>
              <h4 class='card-title' style='font-size:50px;'>
              $product_name
              </h4>
              <b>
              <p>Price: </b>$$product_price</p>
              <b><p>Console Type:</b> $product_console </p>
              <b><p>Game category:</b> $product_cat </p>
              <b><p>Seller:</b> $seller_name</p>
              <b><p>Delivery info:</b> $delivery_info</p>

      </div>
    </div>
    
    <div class = 'row' style = '' >
           <div class='col-lg-5 col-md-4 col-sm-6 portfolio-item' style='margin-top:5px;'>

   <b> <p>Description:</b><br>$product_description </p>

</div>
           <div class='col-lg-5 col-md-4 col-sm-6 portfolio-item' style='margin-top:5px;'>
           <form method='post' action='addToCart.php?id=$id'>
 <button name = 'searchButton' id = 'searchButton'  class = 'form-control btn btn-primary'>Add To Cart 
</button> 
</form>

</div>
    </div>
    </div>

    
    <div>
</div>
</div>";
}


?>
 
      <!-- /.row -->
     
    <?php
include("./includes/footer.php");
?>
  </body>
</html>


