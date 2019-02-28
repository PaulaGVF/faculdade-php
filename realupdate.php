<?php
	include('conexaodb.php');

	$id = $_REQUEST['i'];
	$nome = $_REQUEST['n'];
	$ano = $_REQUEST['a'];
	$preco = $_REQUEST['p'];

	$query = "UPDATE carros 
			  SET 	nome='$nome',
			  		preco=$preco,
			  		ano=$ano
			  WHERE id=$id";

	//echo $query;
	mysql_query($query,$conn);
	header('Location: select.php');
?>
