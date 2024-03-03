<?php

//Funcoes

//Uma função em PHP é um bloco de código que pode ser reutilizado para realizar uma tarefa específica. 
//Ela pode receber dados (parâmetros), executar operações e retornar um resultado.

//Sintaxe básica de uma função:

function nomeDaFuncao($parametro1, $parametro2) {
    // Corpo da função
    // Executa operações com os parâmetros
    // Retorna um resultado, se necessário
}

//Exemplo de uma função simples:

function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(3, 5); // Chamando a função e passando os parâmetros
echo $resultado; // Saída: 8


//Exemplo sem retorno explícito:

function exibirMensagem($mensagem) {
    echo "Mensagem: $mensagem";
}

exibirMensagem("Olá, Mundo!"); // Chamando a função

