<?php
ob_start();
session_start();

if( isset($_SESSION["lged"]) ){
	if ( isset($_GET['b']) ){
		$rdr = $_GET['b'];
		/*if($rdr == 'daffodil'){
			header("Location: a.php");
		}else{*/
			echo $rdr;
		/*}*/
	}
	echo "<br /><br /><br />This is page B";
	echo "<br />SessionData: ".$_SESSION["lged"];
	echo '<br /><a href="c.php">LogOut</a>';
	echo '<br />Now is: '.time();
}else{
	header("Location: a.php");
	exit();
}

?>