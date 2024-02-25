<?php

//exercicios

//Escreva um programa em PHP para verificar se um número é positivo, negativo ou zero.

$numero = -3;

if($numero < 0){
    echo "este numero é negativo";
}else if($numero == 0){
    echo "esse numero é 0";
}else{
    echo "esse numero e positivo";
}


//Escreva um programa em PHP para imprimir os números de 1 a 10 usando um loop for.

for ($num = 0; $num < 11; $num++){ //$num++ é o incremento
    echo "o valor é $num <br>";
}


//Escreva um programa em PHP para calcular a soma dos números pares de 1 a 100.
//dificil

// Inicializando a variável para armazenar a soma
$somaPares = 0;

// Loop for para percorrer os números de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    // Verificando se o número é par
    if ($i % 2 == 0) {
        // Se for par, adicionamos à soma
        $somaPares += $i;
    }
}

// Exibindo o resultado
echo "A soma dos números pares de 1 a 100 é: $somaPares";

//---------------------------------------------------------------------------------

//Escreva um programa em PHP para contar o número de vogais em uma string.
//dificil


//resposta

$string = "Olá, mundo!";
$vogais = 0;

// Convertendo a string para minúsculas para tornar a verificação de vogais não sensível a maiúsculas ou minúsculas
$string = strtolower($string);

// Iterando sobre cada caractere da string
for ($i = 0; $i < strlen($string); $i++) {
    // Verificando se o caractere atual é uma vogal
    if (strpos("aeiou", $string[$i]) !== false) {
        $vogais++;
    }
}

echo "O número de vogais na string é: $vogais";
//---------------------------------------------------------------------------------------------------------------

//Escreva um programa em PHP para encontrar os números primos dentro de um intervalo especificado

$inicio = 1;
$fim = 100;

// Função para verificar se um número é primo
function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Iterando sobre os números no intervalo
echo "Números primos no intervalo de $inicio a $fim: ";
for ($i = $inicio; $i <= $fim; $i++) {
    // Verificando se o número atual é primo
    if (ehPrimo($i)) {
        echo $i . " ";
    }
}

