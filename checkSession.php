<?php

	session_start();
	if($_SESSION['logou']!="S")
	{
		header('Location:http://www.disney.com');
	}

?>