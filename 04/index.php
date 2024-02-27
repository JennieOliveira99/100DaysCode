<?php
//EXERCICIOS IF


//Crie um script que receba um número inteiro e exiba uma mensagem indicando se o número é par ou ímpar.
$num = 0;


if ($num % 2 == 0){

    echo "numero par";
}else {
    echo "n° impar";
}

//$num % 2 calcula o resto da divisão de $num por 2.
//Se o resultado for igual a 0 ($num % 2 == 0), então $num é um número inteiro, caso contrário, não é.


//Desenvolva um programa em PHP que receba três números do usuário e determine qual é o maior entre eles.

$numum = 2;
$numdois = 3;
$numtres = 9;

if ($numum > $numdois && $numum > $numtres ){
    echo  $numum + " é maior";
}else if($numdois > $numtres &&  $numdois > $numum){
    echo  $numdois + " é maior";
}else {
    echo  $numtres + " é maior";
}

// receba o preço de um produto e a idade do cliente. Se o cliente for menor de 18 anos, conceda um desconto de 10% no preço do produto. Caso contrário, não aplique nenhum desconto.

$preco = 200;
$idade = 25;

$desc = $preco * 0.1;
$novovalor = $preco - $desc;
if ($idade >= 18){
    echo "o valor é " .$novovalor . "Voce vai receber de desconto:" . $desc;
}else{
    "voce nao tem direito a decsonto.";
}


