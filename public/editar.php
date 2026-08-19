<?php
include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pratos WHERE id =$pratoId";
$resultado = mysqli_query($conexao, $sql);

$prato = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - cadastro de pratos</title>
</head>
<body>
    <header>
        <h1>CRUD - cadastro de pratos</h1>
    </header>
    <main>
        <h2>Editando o prato<?php echo $prato["prato"]?>!</h2>
        <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $prato["id"]?>">

       
       <label for="id">ID:</label>
        <input type="text" name="id" value="<?php echo $prato["ID do prato"]?>">
        <br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $prato["Nome do prato"]?>">
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" name="decricao" value="<?php echo $prato["decricao"]?>">
        <br>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" value="<?php echo $prato["valor"]?>">
        <br>
         <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" value="<?php echo $prato["categoria"]?>">
        <br>
        <button type="submit">Atualizar</button>
        </form>
    </main>
    
</body>
</html>