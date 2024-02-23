<?php
//para abrir o doc:    http://localhost/aula02/ 
//boas praticas: cuidar da identação do codigo(os tabs depois das chaves de if else, chaves, parenteses etc )
//boas praticas: quando fazer diferenciação, é recomendado ver se é igual primeiro e talvez no else usar os != !==
//sem caractere especial nos nomes de pastas e arqv
//sem espaco nos nomes de pastas e arqv
//sem letra maiuscula nos nomes de pastas e arqv
//no PHP nao precisa declarar float, int, string etc

//comando de impressao: echo- o que esta nas '' é printado na tela
echo 'teste';

//variavel comeca com $
//tipagem dinamica(nao precisa identificar int etc)
//iniciando uma var: = 0;
//string entre ''(cpf, n°, idade)
//String com S maiusculo


//inteiro
$idade = 0;

//logico = boolean
$idade = false;

//caractere = String
$idade = 'nome';

//real = Double/ Real/ Numeric/ Decimal/ Float

$idade = 1.0;

// Vetores (Array) []
$idades = [1,3,5,'abcd', false];

// resto

$idade = ( 45 % 3);

//operadores logicos 
//OU = (OR ou || )

// E ( AND ou &&)



//= atribuição
//== ve se o numero é igual
//=== ele ve se o tipo é igual
// != diferente
// !==
$valor = 1;
$outrovalor = '1'; 

if ($valor == $outrovalor){ 
    echo 'IGUAL';
}else{
    echo 'Diferente';
}


if ($valor === $outrovalor){ 
    echo 'IGUAL';
}else{
    echo 'Diferente';
}

//nao verifica tipo
if ($valor != $outrovalor){ 
    echo 'IGUAL';
}else{
    echo 'Diferente';
}

//verificando valores e tipos
if ($valor !== $outrovalor){ 
    echo 'IGUAL';
}else{
    echo 'Diferente';
}


//quando for mais de um if (exemplo das faixas de imc), usar else if e nao varios if

//outro jeito de fazer a sintaxe if que o php le
if ($valor === $outrovalor):
    echo 'IGUAL';
 else:
    echo 'Diferente';
 endif;

 //operador de negacao :  NOT ou !
 
 $conta_vencida = true;
 if (!$conta_vencida){
    echo 'nao esta vencida';
 }else{
    echo 'vencida'
 }
?>