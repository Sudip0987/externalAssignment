
<?php
 
$dbuser = "root";
$dbname = "id6874875_karmeeapp";
$dbhost = "localhost";
$dbclientPassword = "";




   $con=mysqli_connect($dbhost,$dbuser,$dbclientPassword,$dbname);
       if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 
?>