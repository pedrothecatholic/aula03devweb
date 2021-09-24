<?php

if(isset($_POST["origem"]) && isset($_POST["destino"]) &&
    isset($_POST["distancia"]) && isset($_POST["pedagio"])){

}else{
    echo "Você não enviou os dados";
    die;
}

    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $distancia = $_POST["distancia"];
    $pedagio = $_POST["pedagio"];


    $valorFrete = 0;

    $valorFrete = $distancia * 6;

    $valorFrete += $pedagio * 9.4;


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Valor do Frete</title>
</head>
<body>
    <p class="resultado">A viagem de <?= $origem ?> à <?= $destino ?> custará o total de R$ <em><?= number_format($valorFrete, 2, ",", ".") ?></em></p>
</body>
</html>