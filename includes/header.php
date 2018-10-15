<?php

session_start();

if($_SESSION['userEmail']==null){
    
$loginlogout="<a class='nav-link' href='/login.php'>Log in";
}else {
$loginlogout= "<a class='nav-link' href='/destroySession.php'>Log out";
}
$cartCount=count($_SESSION['productID']);


echo "    <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
      <div class='container'>
        <a class='navbar-brand' href='index.php'>SELL MY GAME
        </a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'>
          </span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='index.php'>Home
                <span class='sr-only'>(current)
                </span>
              </a>
            </li>
            <li class='nav-item dropdown navbar-nav ml-auto' >
              <a class='nav-link dropdown-toggle' href='index.php' data-toggle='dropdown'>Browse
              </a>
                <ul class= 'dropdown-menu '>
                  <li class='drop'><h5>By Game Type</h5></li>
                    <ul>
                      <li><a href='index.php?game=all' class='dropdown-item'>All</a></li>
                      <li><a href='index.php?game=strategy' class='dropdown-item'>Strategy</a></li>
                      <li><a href='index.php?game=sports' class='dropdown-item'>Sports</a></li>
                      <li><a href='index.php?game=adventure' class='dropdown-item'>Adventure</a></li>
                      <li><a href='index.php?game=racing' class='dropdown-item'>Racing</a></li>
                      <li><a href='index.php?game=multiplayer' class='dropdown-item'>Multiplayer</a></li>
                    </ul>
                  <li class='dropdown=header'><h5>By Console Type</h5></li>
                    <ul >
                      <li><a href='index.php?console=xboxone'class='dropdown-item'>Xbox One</a></li>
                      <li><a href='index.php?console=xbox360'class='dropdown-item'>Xbox 360</a></li>
                      <li><a href='index.php?console=nitendo'class='dropdown-item'>Nitendo</a></li>
                      <li><a href='index.php?console=ps4'class='dropdown-item'>PS4</a></li>
                      <li><a href='index.php?console=ps3'class='dropdown-item'>PS3</a></li>

                      
                    </ul>
                </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link'"; if(isset($_SESSION['userEmail'])){ echo" href='publishAd.php'";}else{echo"href='login.php'"; } echo" > Put an ad
              </a>
            </li>
            <li class='nav-item'>
            
              <a class='nav-link'"; if(isset($_SESSION['userEmail'])){ echo" href='viewMyProduct.php'";}else{echo"href='login.php'"; } echo">Manage Ads
              </a>
            </li>
            <li class='nav-item'>".
              $loginlogout
              ."</a>
              <li><a href='shoppingCart.php' > My cart:  <span class='glyphicon glyphicon-shopping-cart'>$cartCount</span></a></li>

            </li>
          </ul>
        </div>
      </div>
    </nav>";


?>