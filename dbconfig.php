<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "img";
$dbh = mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysqli_select_db($dbh, $dbname) or die('database selection problem');
?>