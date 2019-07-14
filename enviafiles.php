<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/corpo.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>NOTEC - Sobre</title>
</head>


<?php

$arquivo_nome  = $_FILES['arquivo']['name'];
$arquivo_temp  = $_FILES['arquivo']['tmp_name'];
$tamanho_arquivo = $_FILES['arquivo']['size'];
$caminho = "C:\Users\mm\AppData\Local\Temp\ " . "$arquivo_nome";

if(strstr($arquivo_nome, '.docx')||strstr($arquivo_nome, '.txt')){
 if(move_uploaded_file($arquivo_temp, $caminho)){
    echo "<h1>Envio feito com sucesso<h1>";
 }
 else{
     echo "O envio não foi realizado com sucesso!";
 }
}
else
{
    echo "Esse tipo de arquivo não é permitido para envio! Tente novamente!";
}


?>