<?php


$preco = 200;
$idade = 25;

$desc = $preco * 0.1;
$novovalor = $preco - $desc;
if ($idade >= 18){
    echo "o valor é " .$novovalor . " Voce vai receber de desconto:" . $desc;
}else{
    "voce nao tem direito a desconto.";
}