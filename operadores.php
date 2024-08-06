<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>
<body>
    
</body>
</html>

<?php
//adição
$valor1 = 10;
$valor2 = 5;
$soma = $valor1 + $valor2;
echo "<h2> Adição </h2>";
echo "valor 1 = " . $valor1 . "<br>";
echo "valor 2 = " . $valor2 . "<br>";
echo "Soma: " . $soma . "<br>";

//Subtração
$valor3 = 20;
$valor4 = 8;
$subtracao = $valor3 - $valor4;
echo "<h2> Subtração </h2>";
echo "Valor 1 = " . $valor3 . "<br>";
echo "Valor 2 = " . $valor4 . "<br>";
echo "Subtração: " . $subtracao . "<br>";

// multiplicação
$valor5 = 6;
$valor6 = 4;
$multiplicacao = $valor5 * $valor6;
echo "<h2> Multiplicação </h2>";
echo "valor 1 = " . $valor5 . "<br>";
echo "valor 2= " . $valor6 . "<br>";
echo "Multiplicação: " . $multiplicacao ."<br>";

//Divisao
$valor7 = 15;
$valor8 = 3;
$divisao = $valor7 / $valor8;
echo "<h2> Divisão </h2>";
echo "valor 1 = " . $valor7 . "<br>";
echo "valor 2 = " . $valor8 . "<br>";
echo "Resto da divisão: " . $divisao . "<br>";

//Modulo
$valor10 = 10;
$valor11 = 3;
$resto = $valor10 % $valor11;
echo "<h2> Módulo </h2>";
echo "valor 1 = " . $valor10 . "<br>";
echo "valor 2 = " . $valor11 . "<br>";
echo "Resto da divisão: " . $resto;

//Atribuiçao com adição
echo "<h2> Atribuição com adição </h2>";
$valor = 5;
$valor += 3;
echo "Valor após atribuição com adição: " . $valor . "<br>";

//Atribuição com subtração 
echo "<h2> Atribuição com subtração </h2>";
$Valor = 10;
$valor -= 4;
echo "Valor após atribuição com subtração: " . $Valor . "<br>";

//Atribuição com Multiplicação
echo "<h2> Atribuição com Multiplicação </h2>";
$VAlor = 7;
$VAlor *= 2;
echo "Valor após atribuição com multiplicação: " . $VAlor . "<br>";

//Atrbuição com Divisão
echo "<h2> Atribuição com Divisão </h2>";
$VALor = 24;
$VALor /= 3;
echo "Valor após atribuição com divisão: " . $VALor . "<br>";

//Outras funções 
//A função pi()
echo "<h2> A Função PI </h2>";
echo(pi()) . "<br>";

//A função min() e max()
echo "<h2> A Função MIN e MAX </h2>";
echo(min(0, 150, 30, 20, -8, -200)) . "<br>";
echo(max(0, 150, 30, 20, -8, -200)) . "<br>";

//A função ABS()
echo "<h2> A Função ABS </h2>";
echo(abs(-6.7)) . "<br>";

//A função sqrt
echo "<h2> A Função SQRT </h2>";
echo(sqrt(25)) . "<br>";

// A função round
echo "<h2> A Função ROUND </h2>";
echo(round(0.60)) . "<br>";
echo(round(0.49)) . "<br>";

//A funçao rand
echo "<h2> A Função RAND </h2>";
echo(rand()) . "<br>";

// Inteiro 
echo "<h2> A Função RAND inteiro </h2>";
echo(rand(10, 100)) . "<br>";
?>
