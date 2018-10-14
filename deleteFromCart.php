<?php
session_start();
$del_val=$_GET['delID'];
$productArray=$_SESSION['productID'];

if (($key = array_search($del_val, $productArray)) !== false) {
    unset($_SESSION['productID'][$key]);
   
    header("location:../shoppingCart.php");
}

?>