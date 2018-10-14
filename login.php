
<!DOCTYPE html>
<html lang="en">

  <head>
<?php
$page="login";
session_start();

if($_SESSION['userEmail']==null){
    

}else {
    echo $_SESSION['userEmail'];
      header("location:../viewMyProduct.php");
}
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SellMyGame</title>

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
      
    
   
      <div class="row" style = " margin-top:10px;padding-bottom:30px;">
      
          
         <div class="col-lg-4 col-md col-sm-6 portfolio-item"style=" border:1px solid none;border-radius:5px;background-color:#4db6ac;">
         
                <div class="panel">
                   <h1 class="my-4">Login
        
                   </h1>
                   <p>Please enter your email and password</p>
               </div>
                <form id="Login" method = "POST" action="/classes/login.class.php">
            
                    <div class="form-group">
            
            
                        <input type="email" name= "textEmail" class="form-control" id="userEmail" placeholder="Email Address">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="password"  name= "textPassword" class="form-control" id="userPassword" placeholder="Password">
            
                    </div>
                    <div class="button">
                    <button type="submit" class="btn btn-primary" name="button">Login</button>
                    <divclass='form-group'>
                    <div class="form-group">
                      <?php
                      if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                        echo'<p>username or password incorrect</p>';
                      }
                      if( $message ){
                echo "<div class=\"alert alert-$message_class alert-dismissable fade show\">
                    $message
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\">
                        &times;
                    </button>
                </div>";
            }
            ?>
                      
                      
                    </div>   
                </form>
        </div>
       </div>
          <div class = "col-sm-1" >
            
          </div>
        
          
          <div class="col-lg-7 col-md col-sm-5 portfolio-item"style=" border:1px solid none;border-radius:5px;background-color:#4db6ac;padding-bottom:10px;">
          
                <div class="panel">
                   <h1 class="my-4">Register
                   </h1>
               </div>
                <form id="register" method = "POST" action="/classes/signup.class.php">
            
                    <div class="form-group">
            
            
                        <input type="text" name= "textName" class="form-control" id="userName" placeholder="Full Name">
            
                    </div>
                     <div class="form-group">
            
            
                        <input type="email" name= "textEmail" class="form-control" id="userEmail" placeholder="Email Address">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="password"  name= "textPassword" class="form-control" id="userPassword" placeholder="Password">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="text"  name= "textAddress" class="form-control" id="userAddress" placeholder="Address">
                    </div>
                    <div class="form-group">
            
                        <input type="text"  name= "textContact" class="form-control" id="userContact" placeholder="Contact">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                
                <div class="form-group">
                       <?php
                      if (isset($_GET["msg2"]) && $_GET["msg2"] == 'failed') {
                        echo'<p>Registration unsuccessfull</p>';
                      }elseif (isset($_GET["msg2"]) && $_GET["msg2"]=='successfull'){
                        echo '<p> Registration successful </p>';
                      }
                      
                      ?>
                    </div>  
                    </form>
        </div>
        </div>
   
   
    <!-- /.container -->
    <?php
        include("./includes/footer.php");
    
    ?>
    <!-- Footer -->
    <!-- 
    <footer class="py-5 bg-dark fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
   <!-- </footer>
    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    -->
  </body>

</html>
