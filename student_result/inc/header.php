<?php
ob_start();
session_start();
include_once ('connect.php'); // connecting db file

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
        <title>
			<?php
                switch(basename($_SERVER['PHP_SELF'])){
                    case 'add_student.php':
                        echo "Add New Student || SRMS";
                        break;
                    case 'manage_student.php':
                        echo "Manage Student || SRMS";
                        break;
                    case 'edit_student.php':
                        echo "Edit & Update || SRMS";
                        break;
                    case 'add_subject.php':
                        echo "Add New Subject || SRMS";
                        break;
                    case 'manage_subject.php':
                        echo "Manage Subject Info || SRMS";
                        break;
                    case 'edit_subject.php':
                        echo "Edit & Update || SRMS";
                        break;
                    case 'create_result.php':
                        echo "Create & Publish Result || SRMS";
                        break;
                    case 'view_result.php':
                        echo "View & Download Result || SRMS";
                        break;
                    default:
                        echo "Dashboard || SRMS";
                }
			?>
		</title>

        <!--============ CSS file: All external css file ============-->
		<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="./asset/css/all.min.css">
        <link rel="stylesheet" href="./asset/css/jquery.dataTables.min.css">
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

        <!--============ Side menu:PHP/HTML code ============-->
        <div id="side_menu_wrapper" class="container-fluid">
            <div class="row">
                <?php include_once('./inc/sidebar.php'); ?>
                <div class="col-lg-9">
                    <div class="container-fluid p-2">
                        <div class="row">
                            <div class="col-lg-12 py-0">
        