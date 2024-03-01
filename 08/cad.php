<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
</header>
<main>
    
<?php
  $nota1 = $_GET["f_nota1"];//a variavel esta pegando o conteudo da classe nome do label
  $nota2 = $_GET["f_nota2"];
  $nota3 = $_GET["f_nota3"];
  $media =  ($nota1 + $nota2 + $nota3)/ 3;

  
  
  if ($media <= 5) {
    echo 'Você foi reprovado<br>'; 
} else if ($media > 5 && $media <= 6) {
    echo 'Você vai ficar em avaliação <br>';
} else if ($media > 6) {
    echo 'Você foi aprovado <br>';
}

if ($nota1 > $nota2 && $nota1 > $nota3) {
    echo 'Sua maior nota é: ' . $nota1;
} else if ($nota2 > $nota1 && $nota2 > $nota3) {
    echo 'Sua maior nota é: ' . $nota2;
} else  {
    echo 'Sua maior nota é: ' . $nota3;
}
?>
</main>
</body>
</html>
