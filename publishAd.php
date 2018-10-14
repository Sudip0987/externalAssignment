
<!doctype html>

<!DOCTYPE html>

<php 
$page="ad";
 
?>
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
<?php
session_start();
   include("./includes/header.php");
   ?>
    <!-- Page Content -->
    <div class="container" style = " margin-top:30px;">
      
    
   
      <div class="row" style = " margin-top:10px;padding-bottom:30px;">
      
          
       
       
          
          <div class="col-lg-5 col-md col-sm-5 portfolio-item"style=" border:1px solid none;border-radius:5px;background-color:#4db6ac;padding-bottom:10px;">
          
                <div class="panel">
                   <h1 class="my-4">Publish an Ad
                   </h1>
               </div>
                <form id="addProduct" enctype="multipart/form-data" method = "POST" action="/classes/publishAd.class.php"></br>
            
                    <div class="form-group">
            
            
                        <input type="text" name= "textGname" class="form-control" id="textGname" placeholder="Game Name"></br>
            
                    </div>
                     <div class="form-group">
            
            
                        <input type="textGprice" name= "textGprice" class="form-control" id="textGprice" placeholder="Price"></br>
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="textArea"  name= "textGdesc" class="form-control" id="textGdesc" placeholder="Description"></br>
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="textArea"  name= "textGdelivery" class="form-control" id="textGdelivery" placeholder="Delivery info: "></br>
                    </div>
                    
                      <div class="form-group">
            
                        <label class="form-contol" > Game Category: </label>
                        <select name = "selectorGcat" id = "selectorGcat" class = "form-contol">
                          <option value="Strategy">Strategy</option>
                          <option value="Adventure">Adventure</option>
                          <option value="Racing">Racing</option>
                          <option value="Multiplayer">Multiplayer</option>
                          <option value="Other">Other</option>
                        </select>   </br>                
                    </div>
                    
                    <div class="form-group">
                        <label class="form-contol" > Console Type: </label>
                        <select name = "selectorCcat" id="selectorCcat" class = "form-contol">
                          <option value="Xboxone">Xbox one</option>
                          <option value="Xbox360">Xbox 360</option>
                          <option value="PS4">PS4</option>
                          <option value="PS3">PS3</option>
                              <option value="Nitendo">Nitendo</option>
                           <option value="Other">Other</option></br>

                          
                        </select>                   
                    </div>
                    
                     <div class="form-group">
                        <input type="file" name="fileToUpload" class="form-control" id = "fileToUpload"/>                
                    </div>
                   
                    <button type="submit" class=" form-control btn btn-primary">Publish</button>
                </form>
                <?php
                if( isset($_GET["msg"]) ){
                        echo '<div class=\'alert alert-$_GET["msg_cls"] alert-dismissable fade show\'>
                            $_GET["msg" ]
                            <button class=\'close\' type=\'button\' data-dismiss=\'alert\'>
                                &times;
                            </button>
                        </div>';
                    }
                ?>
        </div>
                  <div class="col-lg-7 col-md col-sm-5 portfolio-item"style=" border:1px solid none;border-radius:5px;padding-bottom:10px;">
                  </div>
        </div>
   
   
    <!-- /.container -->
    <?php
        include("./includes/footer.php");
    ?>
    <!-- Footer -->
   
  </body>

</html>
