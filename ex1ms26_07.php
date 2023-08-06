<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="texto">
        <input type="submit" value="Enviar texto">

    </form>
</body>
</html>

<?php 

function espacos($texto) {
    return strpos($texto, ' ') !== false; //strpos irá buscar na substring se há espaçamento, caso não tenha, irá retornar false
}

// Exemplo
$texto = $_POST['texto'];
echo espacos("$texto") ? 'true' : 'false'; 
?>