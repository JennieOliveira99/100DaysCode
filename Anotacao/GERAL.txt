<?php


//            WHILE--- usar quando precisar repetir mas NÃO SABE QUANTAS VEZES vai precisar repetir

//----------------------------------------------------------------------------------------------------
//Serve para repetir enquanto uma condição específica é verdadeira.

//ANALOGIA DO SORVETE

//Imagine que você está em uma sorveteria e deseja criar uma combinação de sorvetes com a condição de que a soma das calorias não ultrapasse 100 calorias.
// Você está rastreando tanto a quantidade total de calorias quanto o número de bolas de sorvete que você adicionou.

//Inicialização: Você começa com 0 calorias (soma) e 0 bolas de sorvete (contador).
//Condição: Enquanto a soma das calorias dos sorvetes for menor ou igual a 100, você continua adicionando bolas de sorvete.
//Incremento: cada vez que você adiciona uma bola de sorvete à sua casquinha, você adiciona 1 à contagem total de bolas de sorvete. É como se estivesse contando quantas você colocou.
//Então, o incremento simplesmente significa aumentar essa contagem em 1 a cada vez que você adiciona uma bola de sorvete.


//ANALOGIA DO SORVETE EXEMPLO
$calorias = 0;
$bolasDeSorvete = 0;

while ($calorias <= 100) {
    $sabor = escolherSaborAleatorio(); // Função fictícia para escolher um sabor aleatório
    $calorias += obterCaloriasDoSabor($sabor); // Função fictícia para obter as calorias de um sabor
    $bolasDeSorvete++; // Incrementa o número de bolas de sorvete
}

echo "Sorvete pronto! Você adicionou $bolasDeSorvete bolas de sorvete, totalizando $calorias calorias.";

//------------------------------------------
$soma = 0;
$contador = 0;

while ($soma <= 100) {
    $numero = rand(1, 10); // Gera um número aleatório entre 1 e 10
    $soma += $numero;//+= é como faz soma
    $contador++;//incremento
}

echo "A soma dos números ultrapassou 100 após $contador iterações.";

//Neste exemplo, o loop while continua até que a soma dos números exceda 100. 
//A variável $contador é usada para acompanhar o número de iterações necessárias para alcançar essa condição.




//--------------------------------------------------------------------------------------------------------
//                  FOR  ----- é usado quando você SABE QUANTAS VEZES deseja executar um bloco de código.

//Dividido em TRES partes: INICIALIZAÇÃO, CONDIÇÃO(enquanto verdadeira), INCREMENTO

for ($i = 0; $i < 5; $i++) {
    echo "O valor de i é: $i <br>";
}

//ANALOGIA DO SORVETE:

//Imagine que você está em uma sorveteria onde pode escolher até cinco sabores diferentes para colocar em sua casquinha de sorvete. 
//Você decide usar um loop for para selecionar e empilhar os sabores de sorvete na casquinha.

//Inicialização ($i = 0): Você começa com zero sabores na casquinha.
//Condição ($i < 5): Enquanto o número de sabores na casquinha for menor que 5, você continua adicionando sabores.
//Incremento ($i++): Após adicionar um sabor à casquinha, você passa para o próximo sabor.



//saida:
/*
Número: 1
Número: 2
Número: 3
Número: 4
Número: 5
*/




//--------------------------------------------------------------------------------------------------------
//                 SWITCH CASE -----  é útil quando você tem VÁRIAS OPÇÕES diferentes e precisa executar DIFERENTES AÇÕES com base em uma condição. 

//Imagine que você está em uma sorveteria e está decidindo qual sabor de sorvete pedir com base na sua preferência.
//Switch: Você está analisando as opções de sabor disponíveis na sorveteria.
//Case: Cada sabor de sorvete representa uma opção.
//Ação: Para cada sabor de sorvete, você decide se vai escolhê-lo ou não.

$sabor = "morango";

switch ($sabor) {
    case "baunilha":
        echo "Vou querer um sorvete de baunilha.";
        break;
    case "chocolate":
        echo "Prefiro um sorvete de chocolate.";
        break;
    case "morango":
        echo "Acho que vou de sorvete de morango.";
        break;
    case "limão":
        echo "Hoje estou com vontade de um sorvete de limão.";
        break;
    default:
        echo "Hmm, talvez não queira sorvete hoje.";
}



//--------------------------------------------------------------------------------------------------------

//                  IF ELSE ----O if-else é usado para tomar decisões baseado em CONDIÇÕES 


$sabor = "morango";

if ($sabor == "baunilha") {
    echo "Vou querer um sorvete de baunilha.";
} elseif ($sabor == "chocolate") {
    echo "Prefiro um sorvete de chocolate.";
} elseif ($sabor == "morango") {
    echo "Acho que vou de sorvete de morango.";
} elseif ($sabor == "limão") {
    echo "Hoje estou com vontade de um sorvete de limão.";
} else {
    echo "Hmm, talvez não queira sorvete hoje.";
}



//------------------------------------------------------SWITCH CASE   vs    IF ELSE-----------------------------


//SWITCH CASE 
// Funciona bem quando você precisa verificar um valor específico de uma variável e compará-lo com várias opções diferentes.
//É especialmente útil quando você tem uma série de opções para escolher com base em uma única variável ou expressão.

//IF ELSE
// É mais flexível e pode lidar com uma variedade mais ampla de condições, incluindo expressões booleanas complexas.
//quando precisar de mais flexibilidade em suas condições ou quando precisar lidar com múltiplas condições diferentes.