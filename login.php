
<!doctype html>

<!DOCTYPE html>
<html lang="en">

  <head>

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SELL MY GAME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Browse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Put an ad</a>
            </li>
            <li class="nav-item">
       <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
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
                    <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                      <php
                      if (isset($_GET["msg"]) && $_GET["msg"] == 'failed'){
                      header("location:index.php");
                      }
                      ?>
                </form>
          

        </div>
          <div class = "col-lg-1"></div>
          
         <div class="col-lg-7 col-md col-sm-6 portfolio-item"style=" border:1px solid none;border-radius:5px;background-color:#4db6ac;padding-bottom:10px;">
          
                <div class="panel">
                   <h1 class="my-4">Register
        
                   </h1>
                  
               </div>
                <form id="register" method = "POST" action="/classes/signup.class.php">
            
                    <div class="form-group">
            
            
                        <input type="text" name= "regEmail" class="form-control" id="userName" placeholder="Full Name">
            
                    </div>
                     <div class="form-group">
            
            
                        <input type="email" name= "regEmail" class="form-control" id="userEmail" placeholder="Email Address">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="password"  name= "regPassword" class="form-control" id="userPassword" placeholder="Password">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="text"  name= "regAddress" class="form-control" id="userAddress" placeholder="Address">
            
                    </div>
                    <div class="form-group">
            
                        <input type="text"  name= "regContact" class="form-control" id="userContact" placeholder="Contact">
            
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Register</button>
                    
            
                </form>
            

        </div>
        
        
        
        
        
        
          
        </div>
    </div>
   
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
