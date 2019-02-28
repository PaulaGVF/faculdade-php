<?php	
	// conexao ao servidor (servidor, usuário e senha))
	$conn = mysql_connect("localhost","aluno","aluno") 
			or die("Servidor fora do ar");
	// identifica o banco de dados
	mysql_select_db("carros",$conn) 
			or die("Sem acesso ao banco");
?>
