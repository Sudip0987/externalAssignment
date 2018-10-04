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
<?php
echo "    <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
      <div class='container'>
        <a class='navbar-brand' href='#'>SELL MY GAME
        </a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'>
          </span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            <li>
              <a class='nav-link' href='index.php'>Home
                <span class='sr-only'>(current)
                </span>
              </a>
            </li>
            
            <li>
              <a class='nav-link' href='#' class= 'dropdown-toggle' data-toggle='dropdown'>Browse
              </a>
              <div>
              
                <ul class='navbar-nav ml-auto'>
                  <li><a class='nav-link' href='#' >By Game Type</a></li>
                    <ul class='navbar-nav ml-auto'>
                      <li><a class='nav-link' href='#'>All</a></li>
                      <li><a class='nav-link' href='#'>Strategy</a></li>
                      <li><a class='nav-link' href='#'>Sports</a></li>
                      <li><a class='nav-link' href='#'>Adventure</a></li>
                      <li><a class='nav-link' href='#'>Racing</a></li>
                      <li><a class='nav-link' href='#'>Multiplayer</a></li>
                    </ul>
                  <li><a class='nav-link' href=''#>By Console Type</a></li>
                    <ul class='navbar-nav ml-auto'>
                      <li><a href='#'>Xbox</a></li>
                      <li><a href='#'>Nitendo</a></li>
                      <li><a href='#'>Playstation</a></li>
                      
                    </ul>
                </ul>
              </div>  
            </li>
            
            <li >
              <a class='nav-link'"; if(isset($_SESSION['userEmail'])){ echo" href='publishAd.php'";}else{echo"href='login.php'"; } echo" > Put an ad
              </a>
            </li>
            <li>
            
              <a class='nav-link' href='#'>About us
              </a>
            </li>
            <li>
              <a class='nav-link' href='/login.php'>Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>";


?>

</body>
</html>
