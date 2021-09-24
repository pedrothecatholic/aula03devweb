<?php

$linguagemPreferida = "java";
$sabePOO = false;

/**
 * OPERADORES LÓGICOS
 * == - IGUAL
 * != - DIFERENTE
 * > - MAIOR
 * < - MENOR
 * >= - MAIOR IGUAL
 * <= - MENOR IGUAL
 * ! - NEGAÇÃO
 * && - (and) "e"
 * || - (or) "ou"
 */

//estrutura condicional if
if($linguagemPreferida == "java" && $sabePOO == true){
    echo "Você é um javeiro, prof. Celso gostou disso *O* ";
}else{
    echo "Você não é um javeiro ;_; ";
}

$opcao = 2;

//estrutura switch (escolha)
switch($opcao){
    case 1:
        echo "Você escolheu a opção 1 ";
        break;

    case 2:
        echo "Você escolheu a opção 2 ";
        break;

    case 3:
        echo "Você escolheu a opção 3 ";
        break;
    
    default:
        echo "Você não escolheu uma opção válida ";
        break;
}

echo "<br><br> ";

$salarioEstagiario = 1500;

$salarioJunior = 2200;

$salarioPleno = 4500;

$salarioSenior = 10000;

$mediaSalarial = ($salarioEstagiario + $salarioJunior + $salarioPleno + $salarioSenior) / 4;

echo "A média salarial é $mediaSalarial.";

echo "<br><br>";

//estruturas de repetição (laços, loops)

$cont = 0;
while($cont < 5){
    echo "O cont é: $cont <br>";
    $cont++;
}

echo "<br><br>";


for($cont = 0; $cont < 5; $cont++){
    echo "O cont é: $cont <br>";
}

echo "<br><br>";

$cont = 0;
do{
    echo "O cont é: $cont <br>";
}while($cont > 0);

