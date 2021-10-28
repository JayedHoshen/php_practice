<?php
ob_start();
session_start();

if(! isset($_SESSION["loggedIn"]) ){
	header("Location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      	<meta charset="UTF-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      	<title>Student || RMS</title>

		<!-- ************ all css link *********************** -->
		<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="./asset/css/all.min.css">
	  	<link rel="stylesheet" href="./asset/css/common.css">
   </head>
   <body>			
		<!-- ************ HEADER START *********************** -->
		<?php include_once('./inc/header.php'); ?>

		<!-- ************ MAIN CONTENT START ***************** -->
		

        <!-- ************ FOOTER START *********************** -->
		<?php include_once('./inc/footer.php'); ?>

    	<!-- *********** common plugin for all pages **********-->
		<script src="./asset/js/jquery.min.js"></script>
		<script src="./asset/js/all.min.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
		<script src="./asset/js/bootstrap.min.js"></script>
   </body>
</html>

