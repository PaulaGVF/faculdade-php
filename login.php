<?php
	include('conexaodb.php');
	session_start();

	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pw'];

	$query="SELECT user, pw, access
			FROM usuarios 
			WHERE user='$user' 
			AND pw='$pass'";

	$recordset = mysql_query($query,$conn);

	if(mysql_num_rows($recordset)==1)
	{
		// tem esse usuário com essa senha
		$linha=mysql_fetch_assoc($recordset);
		$_SESSION['acc']=$linha['access'];
		$_SESSION['logou']="S";
		header('Location:select.php');
	} else {

		// SAI!
		header('Location:http://www.disney.com');
	}
?>