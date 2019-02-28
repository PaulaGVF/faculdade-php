<?php
	session_start();
	$_SESSION['logou']="";
	session_destroy();
	header('Location:index.php');
?>