<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	$id = $_REQUEST['id'];
	$nome = $_REQUEST['nomecarro'];
	$ano = $_REQUEST['anocarro'];
	$preco = $_REQUEST['precocarro'];
?>
	<div class="conteudo">
	<p>Confirma alteração destes dados?</p>
	<p>Carro: <?php echo $nome ?>, id=<?php echo $id ?></p>
	<p>Ano: <?php echo $ano ?></p>
	<p>Preço: <?php echo $preco ?></p>
	<p><b>
		<a href="realupdate.php?n=<?php echo $nome ?>&a=<?php echo $ano ?>&p=<?php echo $preco ?>&i=<?php echo $id ?>">SIM</a>
		&nbsp;&nbsp;
		<a href="select.php">NÃO</a>
	</b></p>
	</div>
	</body>
</html>