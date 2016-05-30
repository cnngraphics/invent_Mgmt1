<?php
include_once 'dbconfig.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cargo Cube</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" />
   
<script src="js/jquery-1.11.3.js" type="text/javascript" /></script> 
     <script src="js/bootstrap.js" type="text/javascript" /></script>


<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})

</script>

</head>
<body>
<div class="loader"></div>

	<div id="header" class="row row-fluid">
		<label ><a href="index.php"  style="text-decoration: none;"><span style="color: white;">Inventory Manager</span></a></label>
		</div>
 
   <?php include('menu.php');?>
  