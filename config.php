<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>NOTEC - Sobre</title>
</head>

<?php
session_start();
if(!isset($_SESSION['login']) || !isset($_SESSION['senha']) ){
header('Location: index.php');
}
?>

<div class="">
    <h2></h2>
</div>

