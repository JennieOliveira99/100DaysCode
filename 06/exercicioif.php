
<?php





//calcular imc
//mostrar o valor tambem, alem da classificacao de baixo peso

//calcular notas
// 0 - 5 reprovado
//5.1 -6 avaliacao
//6.1 -10 aprovado

//calcular aumentos
//
$peso = 35;
$altura = 1.85;

$imc = $peso / ($altura * 2);

if ($imc <= 18.5 ){
    echo 'Voce esta abaixo do peso. Seu IMC é: '.$imc;
}else if($imc >= 18.6 && $imc <= 24.9 ){
    echo 'Seu peso é ideal para sua altura. Seu IMC é: '.$imc;
}else if($imc >= 25.0 && $imc <= 29.9 ){
    echo 'Voce esta levemente acima do peso. Seu IMC é: '.$imc;
}else if($imc >= 30.0 && $imc <= 34.9 ){
    echo 'Voce esta com obesidade grau 1. Seu IMC é: '.$imc;
}else if($imc >= 35.0 && $imc <= 39.9 ){
    echo 'Voce esta com obesidade grau 2. Seu IMC é: '.$imc;
}else {
    echo 'Voce esta com obesidade grau 3. Seu IMC é: '.$imc;
}

//notas

$nota1 = 5;
$nota2 = 5;
$nota3 = 3;
$media = ($nota1 + $nota2 + $nota3)/ 3;

if($media <= 5){
    echo 'voce foi reprovado'; 
}else if($media >= 5.1 &&  $media <= 6){
    echo 'Voce vai ficar em avaliacao';
}else if ($media >= 5.1){
    echo 'Voce foi aprovado';
}else if($nota1 > $nota2 && $nota1 > $nota3 ){
    echo 'sua maior nota é:  ' .$nota1;
}else if($nota2 > $nota1 && $nota2 > $nota3){
    echo ' sua maior nota é: ' .$nota2;
}else{
    echo 'sua maior nota é : ' .$nota3;
}
