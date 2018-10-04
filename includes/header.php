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
            <li class='nav-item active'>
              <a class='nav-link' href='index.php'>Home
                <span class='sr-only'>(current)
                </span>
              </a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='#' class= 'dropdown-toggle' data-toggle='dropdown'>Browse
              </a>
                <ul class= 'dropdown-menu'>
                  <li><a href='#' >By Game Type</a></li>
                    <ul>
                      <li><a href='index.php?game=all>All</a></li>
                      <li><a href='index.php?game=strategy'>Strategy</a></li>
                      <li><a href='index.php?game=sports'>Sports</a></li>
                      <li><a href='index.php?game=adventure'>Adventure</a></li>
                      <li><a href='index.php?game=racing'>Racing</a></li>
                      <li><a href='index.php?game=multiplayer'>Multiplayer</a></li>
                    </ul>
                  <li><a href=''#>By Console Type</a></li>
                    <ul >
                      <li><a href='#'>Xbox</a></li>
                      <li><a href='#'>Nitendo</a></li>
                      <li><a href='#'>Playstation</a></li>
                      
                    </ul>
                </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link'"; if(isset($_SESSION['userEmail'])){ echo" href='publishAd.php'";}else{echo"href='login.php'"; } echo" > Put an ad
              </a>
            </li>
            <li class='nav-item'>
            
              <a class='nav-link' href='#'>About us
              </a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='/login.php'>Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>";


?>