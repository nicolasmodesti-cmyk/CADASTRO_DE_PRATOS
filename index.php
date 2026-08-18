<?php

include "infra/conexao.php"

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
        <h2>Usuario</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nomeUsuario">
            <br>
            <label for="Email">Email:</label>
            <input type="email" name="emailUsuario">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <h2>Pratos</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nomePrato">
            <br>
            <label for="valor">Valor:</label>
            <input type="number" name="valor">
            <br>
            <label for="categoria">Categoria:</label>
            <br>
            <input type="radio" id="entrada" name="categoria" value="entrada">
            <label for="categoria">Entrada</label>
            <br>
            <input type="radio" id="pratoPrincipal" name="categoria" value="pratoPrincipal">
            <label for="categoria">Prato Principal</label>
            <br>
            <input type="radio" id="acompanhamento" name="categoria" value="acompanhamento">
            <label for="categoria">Acompanhamento</label>
            <br>
            <input type="radio" id="sobremesa" name="categoria" value="sobremesa">
            <label for="categoria">Sobremesa</label>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>