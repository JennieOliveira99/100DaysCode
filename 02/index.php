<?php
//Estruturas de Controle:

//Condicionais (if, else, elseif)
//if: O if avalia uma expressão booleana e executa um bloco de código se a condição for verdadeira.

$idade = 18;
if ($idade >= 18) {
    echo "Você é maior de idade.";
}
//se essa condicao nao for verdadeira, nada é exibido

//else: O else é usado em conjunto com o if para executar um bloco de código se a condição do if for falsa.

$idade = 16;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}


//elseif: avalia várias condições alternativas após o if. Se a condição if for falsa, ele verifica a próxima condição.
$idade = 16;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} elseif ($idade >= 13) {
    echo "Você é um adolescente.";
} else {
    echo "Você é uma criança.";
}


//Loops (for, while, foreach)

//Os loops são utilizados para executar um bloco de código várias vezes. 
//for:  usado quando você sabe antecipadamente quantas vezes deseja executar o bloco de código.
//exe,plo:
for ($i = 0; $i < 5; $i++) {
    echo "O valor de i é: $i <br>";
}

//Inicialmente, $i é definido como 0.
//O loop verifica se $i é menor que 5. Como $i é 0, a condição é verdadeira.
//O bloco de código dentro do for é executado, que neste caso é echo "O valor de i é: $i <br>";.
//Após isso, $i é incrementado em 1, tornando-se 1.
//O loop verifica novamente se $i é menor que 5. Como $i agora é 1, a condição ainda é verdadeira.
//Isso se repete até que $i seja 5. Quando $i se torna 5, a condição $i < 5 se torna falsa e o loop é encerrado.
//por isso nesse caso mostra até o 4.




//WHILE
//while: O while é usado quando você quer executar um bloco de código enquanto uma condição especificada for verdadeira

$i = 0;
while ($i < 5) {
    echo "O valor de i é: $i <br>";
    $i++;
}

//1° inicia a variavel $i, ela precisa ser definido antes que possa ser testado na condição do while.
//Condição: A condição do while ($i < 5) é testada antes de cada iteração do loop.
// Enquanto a condição for verdadeira, o bloco de código dentro do while será executado repetidamente.
//  enquanto $i for menor que 5, o loop continuará.

//entao o For eu uso quando sei ate quando deve se repetir uma condicao, e o while devo usar quando nao sei(nao tenho um valor definido)


//----------------------------------------------------FOR     VS    WHILE----------------------------------------------------------

//Suponha que você queira imprimir os números pares de 0 a 10. sabendo que os n°s sao (0, 2, 4, 6, 8, 10), você pode usar um loop for.

for ($i = 0; $i <= 10; $i += 2) {
    echo $i . " ";
}

//Neste exemplo, $i começa em 0, e a cada iteração é incrementado em 2. Isso garante que você obtenha apenas números pares até 10.

// Quando você escreve echo $i . " ";, você está dizendo ao PHP para imprimir o valor de $i, seguido por um espaço em branco.
//as aspas vazia criam um espaço entre os números que estão sendo impressos.
//Se você não quiser espaço entre os números, você pode simplesmente remover a parte da string vazia, e a declaração do echo se parecerá com isso: echo $i;.


//Agora, suponha que você queira somar números aleatórios até que a soma exceda 100. 
//Neste caso, você não sabe quantas iterações serão necessárias, portanto, um loop while é mais apropriado.

$soma = 0;
$contador = 0;

while ($soma <= 100) {
    $numero = rand(1, 10); // rand Gera um número aleatório entre 1 e 10
    $soma += $numero; //+= é como se faz a soma
    $contador++;
}

echo "A soma dos números ultrapassou 100 após $contador iterações.";

//Neste exemplo, o loop while continua até que a soma dos números exceda 100. A variável $contador é usada para acompanhar o número de iterações necessárias para alcançar essa condição.