<?php
include("config.php");
$conn = mysqli_connect($server, $user, $pw, $db);
// execução
$idcarro = $_REQUEST['id'];
$query = "DELETE FROM carros WHERE id=$idcarro";
mysqli_query ($conn,$query);
header('location:select.php');

?>