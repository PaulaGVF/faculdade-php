<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	$id = $_REQUEST['id'];
	$query="SELECT nome, preco, ano FROM carros WHERE id=$id";
	$recordset = mysql_query($query,$conn);
	$linha = mysql_fetch_assoc($recordset);
	$nome = $linha['nome'];
	$ano = $linha['ano'];
	$preco = $linha['preco'];	
	?>
	<div class="conteudo">
		<form action="confirmaupdate.php">
			Id<br>
			<?php echo $id ?><br><br>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			Nome<br>
			<input type="text" name="nomecarro"  value="<?php echo $nome ?>"><br><br>
			Ano<br>
			<input type="number" name="anocarro" value="<?php echo $ano ?>"><br><br>
			Preço<br>
			<input type="number" name="precocarro" value="<?php echo $preco ?>"><br><br>
			<input type="submit" value="alteraa!">
		</form>
	</div>
	</body>
</html>