<?php
include "../infra/conexao.php"

$pratoId = $_POST["ID do prato"];
$pratoNome = $_POST["Nome do prato"];
$pratoDescricao = $_POST["Descrição do prato"];
$pratoValor = $_POST["Preço do prato"];
$pratoCategoria = $_POST["Categoria do prato"];

$sql = "INSERT INTO pratos( pratoId,pratoNome,pratodescrição,pratoValor,pratoCategoria) VALUES ('$pratoId','$pratoNome','$pratoDescricao','$pratoValor','$pratoDescricao')";

mysql_query($conexao, $sql);
header("location: ../index.php")
?>