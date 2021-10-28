<?php
ob_start();
session_start();

if( isset($_SESSION["loggedIn"]) ){
	echo '<h1 style="color: blue">Index page Comming soon.............................</h1>';
	echo '<br /> <a href="logout.php">LogOut</a>';
}
else{
	header("Location: login.php");
	exit();
}

?>