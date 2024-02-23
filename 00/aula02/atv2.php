<?php

$qtd_presenca = 1;
$qtd_faltas = 3;
$qtd_aulas = $qtd_presenca + $qtd_faltas;


if (($qtd_aulas + $qtd_faltas) /2 >=8 ){
    echo 'voce foi aprovado';

} else {
    echo 'nao foi dessa vez';
}

