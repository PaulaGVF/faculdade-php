<?php
include('checkSession.php');
include("cab.php");
include("config.php");

$idcarro = $_REQUEST['id'];

print "<div class='conteudo'>Vou apagar o carro de id $idcarro.<br><br>";
print "Confirma?<br><br>";
print "<div class='confirma'><a href='realdelete.php?id=$idcarro'>SIM</a></div>";
print "&nbsp;&nbsp;&nbsp;&nbsp;";
print "<div class='confirma'><a href='select.php'>NAO</a></div></a>";


?>