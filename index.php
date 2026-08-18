<?php

include "infra/conexao.php"
$cadastros = mysqli_query($conexao, "SELECT * FROM cadastros");
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Hey kiddo</h1>
    <main>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="titulo">
            <br>
            <label for="Email">Email:</label>
            <input type="text" name="autor">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>