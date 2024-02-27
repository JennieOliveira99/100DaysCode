<?php


//exercicios FOR

//Escreva um programa PHP que use um loop for para contar de 1 até 10 e exiba cada número.

for ($i = 10; $i > 0; $i--) {
    echo "O valor de i é: $i <br>";
}


//Desenvolva um script que use um loop for para exibir a tabuada do número 5 de 1 a 10.

for($i = 1; $i <= 10; $i++){
    $resultado =  5 * $i; 
    echo " 5x $i = $resultado <br>" ;
 }
 

//quando estamos lidando com multiplicação, tabuadas ou contagens progressivas, comece com 1 porque representa o início da sequência numérica.

Definir $i como 1              // Inicializa a variável de controle $i com o valor 1
Enquanto $i for menor ou igual a 10, faça:  // Enquanto $i for menor ou igual a 10, continue o loop
    Calcular o resultado da multiplicação de 5 pelo valor atual de $i   // Calcula 5 vezes o valor atual de $i
    Exibir a expressão "5 x valor_atual_de_i = resultado"   // Exibe a expressão formatada com o resultado da multiplicação
    Incrementar $i em 1        // Incrementa o valor de $i em 1 para passar para o próximo número na sequência
Fim do loop


//Tabuada do 7 

for($i = 0; $i <= 10; $i++){
    $result = $i * 7;
    echo "7 x $i = $result ";
}

//Escreva um programa PHP que use um loop for para calcular a soma dos números ímpares de 1 a 15 e exiba o resultado.

$soma = 0;

for ($i = 1; $i <= 15; $i += 2) {
    $soma += $i;
}

echo "A soma dos números ímpares de 1 a 15 é: $soma";

//Inicializando a variável $soma com 0.
// condição $i <= 15, que significa que o loop continuará até que $i seja menor ou igual a 15.
//Incrementando $i em 2 em cada iteração ($i += 2), garantindo que $i represente apenas números ímpares.
//Adicionando o valor de $i à variável $soma
//Após o loop, exibimos o valor final de $soma.
