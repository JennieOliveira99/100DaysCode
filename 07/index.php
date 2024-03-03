<?php

//----------------------------------------SWITCH CASE

<?php
//estruturas condicionais
//O que cada condição me responde?

//Revisao das Estruturas de condicao
//definicao de condicao: é uma pergunta
//sim = true, nao = false
//--------------&&
//se na condicao estiver usando && e a primeira condicao for falsa, ele nem executa o restante das condicoes
//isso mesmo que as proximas condicoes sejam veraddeiras

$i = 1;

if($i == 2 && $i > 3 && ($i == 2 || $i > 2)){
    echo"condicao verdadeira";
}else {
    echo"condicao falsa";
}
//------------------- ||
//no OU pelo menos 1 condicao precisa ser verdadeira

$i = 1;

if($i == 2 || $i > 3){
    echo"alguma coisa";
}else {
    echo"outra coisa";
}

$DiaDaSemana = 1;
if($DiaDaSemana == 1){
    echo "DOMINGO";
}else if($DiaDaSemana == 2){
    echo "SEGUNDA";
}else if($DiaDaSemana == 3){
    echo "TERCA";
}else if($DiaDaSemana == 4){
    echo "QUARTA";
}else if($DiaDaSemana == 5){
    echo "QUINTA";
}else if($DiaDaSemana == 6){
    echo "SEXTA";
}else if($DiaDaSemana == 7){
    echo "SABADO";
}else{
    "NAO E UM DIA DA SEMANA";
}


//SWITCH CASE: VERIFICA SE É IGUAL
//USAR QUANDO SABER TODOS OS VALORES (O range de valores)
//switch: analisando tal variavel
//case é sempre o que é 
//caso seja verdadeiro: echo e BREAK
//default: se nao atender nenhum dos cases cai no default

switch ($DiadaSemana){
    case 1:
        echo 'DOMINGO';
        break;
    case 2:
        echo 'Segunda';
        break;
    default:
    echo 'Não é dia da semana';
    break

}


