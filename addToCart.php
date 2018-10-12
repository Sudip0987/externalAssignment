<?php
echo 'hi'. $_GET['id'];
$id=$_GET['id'];
session_start();

if(!isset($_SESSION['productID'])){
$_SESSION['productID'] = array();
}
array_push($_SESSION['productID'],$id);
$_SESSION['productID'] = array_unique($_SESSION['productID']);
header("location:../productDetails.php?product_id=".$id."&message=1");

?>