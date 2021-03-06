<!DOCTYPE html>

<php 
$page="index";
?>
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
  </head>
  <body>
    <!-- Navigation -->
<?php

   include("./includes/header.php");
   ?>
    <!-- Page Content -->
    <div class="container" style = " margin-top:30px;">
        <div class = "row"style = "margin:0px;background-color:#4db6ac;" >
        <!--TODO put logo or some kind of title here -->
        <h1 class="my-4">   &nbsp  SellMyGame
        </h1>
      </div>
      <form id = "searchForm" method = "POST" action  ="#">
        <div class = "row" style = "margin:0px;padding-bottom:30px;background-color:#4db6ac;">
          <div class = "col-md-5 col-sm6">
            <input type = "text" name = "textGameName" placeHolder="Game name" class = "form-control"> 
          </div>
          <div class="form-group">
            
                        <label class="form-contol" > Game Category: </label>
                        
                        <select name = "selectorGcat" id = "selectorGcat" class = "form-contol control-label">
                          <option value="Strategy">Strategy</option>
                          <option value="Adventure">Adventure</option>
                          <option value="Racing">Racing</option>
                          <option value="Sports">Sports</option>
                          <option value="Multiplayer">Multiplayer</option>
                          <option value="Other">Other</option>
                        </select>                   
                    </div>
                    
                    <div class="form-group">
                        <label class="form-contol" > Console Type: </label>
                        <select name = "selectorCcat" id="selectorCcat" class = "form-contol">
                          <option value="Xboxone">Xbox one</option>
                          <option value="Xbox360">Xbox 360</option>
                          <option value="PS4">PS4</option>
                          <option value="PS3">PS3</option>
                           <option value="Other">Other</option>

                          
                        </select>                   
          </div>
          <div class = "col-md-2 col-sm6"> <button name = "searchButton" class = "form-control btn btn-primary">Search </button> 
          </div>
        </div>
      </form>
      <!-- Page Heading -->
      <p style ="margin-top:10px;margin-bottom:10px;">Recommended for you
      <p>
      <div class="row" style = " margin-top:10px;padding-bottom:30px; border-size:2px;">
        <?php
include('autoloader.php');
$prods = new Products();
$gameCat="";
$gameConsole="";

  if(isset($_POST['searchButton'])){
  $name=$_REQUEST['textGameName'];
  $gameConsole=$_REQUEST['selectorCcat'];
  $gameCat = $_REQUEST['selectorGcat'];
  $products = $prods -> searchProducts($name,$gameCat,$gameConsole);

  }else{
        if(isset($_GET['console'])){
        $gameConsole = $_GET['console'];
      }else {
        $gameConsole="";
      }
      if(isset($_GET['game'])){
        $gameCat = $_GET['game'];
      }else {
        $gameCat="";
      }
        $products = $prods -> getProducts($gameCat,$gameConsole);

  }







foreach( $products as $item ){
$product_name = $item['name'];
$product_Id = $item['id'];
$product_price = $item['price'];
$seller_name = $item['userName'];
$image_path = $item['imagePath'];
$product_description =TextUtility::summarize($item['description'],15);
echo " <div class='col-lg-3 col-md-4 col-sm-6 portfolio-item'>
<div class='card h-100'>
<a href='#'><img class='card-img-top'  height='200px' src='$image_path' alt=''></a>
<div class='card-body'>
<h4 class='card-title'>
<a href='productDetails.php?product_id=$product_Id'>$product_name</a>
</h4>
<b>
<p>Price: $$product_price</p>
<p>Seller: $seller_name</p>
</b>
<p><b>Description:</b>$product_description </p>
</div>
</div>
</div>";
}
?>
      </div>
      <!-- /.row -->
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;
            </span>
            <span class="sr-only">Previous
            </span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;
            </span>
            <span class="sr-only">Next
            </span>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.container -->
    <!-- Footer -->
   <?php
   include("./includes/footer.php");
   ?>
  </body>
</html>
