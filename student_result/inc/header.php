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

        <!--============ Title: php code ============-->		
      	<title>Student || RMS</title>

        <!--============ CSS file: All external css file ============-->
		<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="./asset/css/all.min.css">
	  	<link rel="stylesheet" href="./asset/css/custom.css">
   </head>
   <body>
        <!--============ Header: HTML code ============-->
        <div id="header_wrapper" class="container-fluid bg-secondary">
            <div class="row">
                <!-- logo start -->
                <div class="col-lg-1">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./asset/img/admin_profile.jpg" alt="Admin Logo">
                        </a>
                    </div>
                </div>
                <!-- Middle content -->
                <div class="col-lg-10">
                    <div class="middle_content text-center">
                        <h2>Student Result Management System Software</h2>
                    </div>
                </div>
                <!-- Log out btn -->
                <div class="col-lg-1">
                    <div class="log_out_btn">
                        <a class="btn btn-outline-primary w-100 text-white my-3" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    