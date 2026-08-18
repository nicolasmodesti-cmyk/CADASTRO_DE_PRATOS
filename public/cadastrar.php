<?php

include "../infra/conexao.php";

$cadastroNome = $_POST["Nome"];
$cadastroEmail = $_POST["Email"];

$sql = "INSERT INTO cadastros (cadastroNome,cadastroEmail) VALUES (?,?)"
$stmt = 