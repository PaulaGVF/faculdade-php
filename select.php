<?php

include('checkSession.php');

include('cab.php');
include('conexaodb.php');

$numlinha=1;

$precomin = $_REQUEST['precominimo'];
$orderby = $_REQUEST['orderby'];

if($orderby=='')
{
	$orderby='id';
}

if($precomin=='')
{
	$precomin=100000;
}

$query="SELECT id,
				preco, 
				preco * 1.1  as 'novopreco', 
				nome, 
				ano 
				FROM carros
				WHERE preco < $precomin
				ORDER BY $orderby"; 	
				
// echo $query."<br><br>";
				
$recordset = mysql_query($query,$conn);
echo "<table>";
echo "<tr class='cab'>";
echo "<td>apagar</td>";
echo "<td>editar</td>";
echo "<td>id</td>";	
echo "<td>marca</td>";
echo "<td><a href='select.php?orderby=nome'>nome</a></td>";
echo "<td><a href='select.php?orderby=ano'>ano</a></td>";
echo "<td align='right'><a href='select.php?orderby=preco'>preco</a></td>";
echo "<td align='right'><a href='select.php?orderby=novopreco'>novopreco</a></td>";
echo "</tr>";
	
while($linha = mysql_fetch_assoc($recordset))
{
	$resto = ($numlinha / 2) - intval($numlinha / 2);
	if($resto == 0)
	{
		$classe = "trpar";
	}
	else
	{
		$classe = "trimpar";
	}

	$nomecarro = $linha['nome'];
	$marca=substr($nomecarro,0,4);
	echo "<tr class='$classe'>";
	if(strpos($_SESSION['acc'],'D',0))
	{
		echo "<td align='center'><a href='delete.php?id=".$linha['id']."'><img src='del.png' width='30'></a></td>";
	}
	if(strpos($_SESSION['acc'],'U',0))
	{
		echo "<td align='center'><a href='formupdate.php?id=".$linha['id']."'><img src='edit.png' width='30'></a></td>";		
	}
	echo "<td align='center'>".$linha['id']."</td>";
	echo "<td align='center'><img src='".$marca.".png'></td>";
	echo "<td>".$nomecarro."</td>";
	echo "<td>".$linha['ano']."</td>";
	echo "<td width=100 align='right'>".$linha['preco']."</td>";
	echo "<td width=100 align='right'>".$linha['novopreco']."</td>";
	echo "</tr>";
	$numlinha++;
}
echo "</table>";
?>
</body>
</html>


