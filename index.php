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
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SELL MY GAME
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Browse
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Put an ad
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class = "row"style = "margin:0px;background-color:#4db6ac;" >
        <!--TODO put logo or some kind of title here -->
        <h1 class="my-4">   &nbsp  SellMyGame
        </h1>
      </div>
      <form id = "searchForm" method = "POST" action  ="#">
        <div class = "row" style = "margin:0px;padding-bottom:30px;background-color:#4db6ac;">
          <div class = "col-md-6 col-sm6">
            <input type = "text" name = "textGameName" placeHolder="Game name" class = "form-control"> 
          </div>
          <div class = "col-md-2 col-sm6">
            <input type = "text" name = "textGameName" placeHolder="Category" class = "form-control"> 
          </div>
          <div class = "col-md-2 col-sm6">
            <input type = "text" name = "textGameName" placeHolder="Console type"class = "form-control"> 
          </div>
          <div class = "col-md-2 col-sm6">
            <button name = "searchButton" class = "form-control btn btn-primary">Search
            </button>
          </div>
        </div>
      </form>
      <!-- Page Heading -->
      <p style ="margin-top:10px;margin-bottom:10px;">Recommended for you
      <p>
      <div class="row" style = " margin-top:10px;padding-bottom:30px; border-size:2px;">
        <?php
session_start();
include('autoloader.php');
$prods = new Products();
$products = $prods -> getProducts();
foreach( $products as $item ){
$product_name = $item['name'];
$product_price = $item['price'];
$seller_name = $item['userName'];
$image_path = $item['imageFilePath'];
$product_description =TextUtility::summarize($item['description'],15);
echo " <div class='col-lg-3 col-md-4 col-sm-6 portfolio-item'>
<div class='card h-100'>
<a href='#'><img class='card-img-top' src='$image_path' alt=''></a>
<div class='card-body'>
<h4 class='card-title'>
<a href='#'>$product_name</a>
</h4>
<b>
<p>Price: $$product_price</p>
<p>Seller: $seller_name</p>
</b>
<p>Description:$product_description </p>
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
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018
        </p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js">
    </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
