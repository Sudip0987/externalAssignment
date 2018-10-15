
<!doctype html>

<!DOCTYPE html>


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
include('autoloader.php');
$id = $_GET['id'];
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
echo $product_description;
}
echo "<div class='container' style = ' margin-top:30px;'>
      
    
   
      <div class='row' style = ' margin-top:10px;padding-bottom:30px;'>
      
          
       
       
          
          <div class='col-lg-5 col-md col-sm-5 portfolio-item'style=' border:1px solid none;border-radius:5px;background-color:#4db6ac;padding-bottom:10px;'>
          
                <div class='panel'>
                   <h1 class='my-4'>Edit Ad
                   </h1>
               </div>
                <form id='addProduct' enctype='multipart/form-data' method = 'POST' action='/classes/update.class.php?id=$id'></br>
            
                    <div class='form-group'>
            
            
                        <input type='text' name= 'textGname'  class='form-control' id='textGname' value='$product_name' placeholder='Game Name'></br>
            
                    </div>
                     <div class='form-group'>
            
            
                        <input type='textGprice' name= 'textGprice' class='form-control' value='$product_price' id='textGprice' placeholder='Price'></br>
            
                    </div>
            
                    <div class='form-group'>
            
                        <input type='textArea'  name= 'textGdesc' class='form-control' value='$product_description' id='textGdesc' placeholder='Description'></br>
            
                    </div>
            
                    <div class='form-group'>
            
                        <input type='textArea'  name= 'textGdelivery' class='form-control' value='$delivery_info' id='textGdelivery' placeholder='Delivery info: '></br>
                    </div>
                    
                      <div class='form-group'>
            
                        <label class='form-contol' > Game Category: </label>
                        <select name = 'selectorGcat' id = 'selectorGcat'class = 'form-contol'>
                          <option value='Strategy'>Strategy</option>
                          <option value='Adventure'>Adventure</option>
                          <option value='Racing'>Racing</option>
                          <option value='Sports'>Sports</option>
                          <option value='Multiplayer'>Multiplayer</option>
                          <option value='Other'>Other</option>
                        </select>   </br>                
                    </div>
                    
                    <div class='form-group'>
                        <label class='form-contol' > Console Type: </label>
                        <select name = 'selectorCcat' id='selectorCcat' class = 'form-contol'>
                          <option value='Xboxone'>Xbox one</option>
                          <option value='Xbox360'>Xbox 360</option>
                          <option value='PS4'>PS4</option>
                          <option value='PS3'>PS3</option>
                              <option value='Nitendo'>Nitendo</option>
                           <option value='Other'>Other</option></br>

                          
                        </select>                   
                    </div>
                    
                     <div class='form-group'>
                        <input type='file' name='fileToUpload'  class='form-control' id = 'fileToUpload'/>                
                    </div>
                   
                    <button type='submit' class=' form-control btn btn-primary'>Confirm Edit</button><br>
                     

                </form>
                <form action='viewMyProduct.php' method=''>
                <div class='form-group' style='margin-top:20px;'>
                <button type='submit' class=' form-control btn btn-primary'>Cancel</button>
                    </div>
              </form>
              <form action='/classes/deleteP.class.php?id=$id' method='POST'>
                <div class='form-group' style='margin-top:20px;'>
                <button type='submit' class=' form-control btn btn-primary'>Delete Product</button>
                    </div>
              </form>
        </div>
                  <div class='col-lg-7 col-md col-sm-5 portfolio-item'style=' border:1px solid none;border-radius:5px;padding-bottom:10px;'>
                  </div>
        </div>";
   ?>
    <!-- Page Content -->
  
    <!-- /.container -->
    <?php
        include("./includes/footer.php");
    ?>
    <!-- Footer -->
   
  </body>

</html>
