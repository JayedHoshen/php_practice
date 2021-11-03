<?php
ob_start();
session_start();

if( isset($_SESSION["lged"]) ){
	unset($_SESSION["lged"]);
}
session_unset();
session_destroy();
header("Location: a.php");
exit();
?>