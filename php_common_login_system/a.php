<?php
ob_start();
session_start();
if( isset($_SESSION["lged"]) ){
	header("Location: b.php");
	exit();
}

if ( isset($_GET['a']) ){
	$rdr = $_GET['a'];
	if($rdr == 'dsti'){
		$_SESSION["lged"] = $rdr;
		header("Location: b.php");
		exit();
	}else{
		echo $rdr;
	}
}
echo "<br /><br /><br />This is page A";

?>