        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link type="text/css" rel="stylesheet" href="css/main.css">
            <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
            <script type="text/javascript" src="js/main.js"></script>
            <title>Redirecionamento</title>
        </head>
<?php
include 'conecta_banco.php';
session_start();

$user = $_POST['user'];
$senha = $_POST['senha'];
$resposta = $con->query("SELECT * FROM tb_usuario WHERE nm_email = '$user' AND cd_senha = '$senha'");
if($verifica = mysqli_num_rows($resposta)>0){
    $_SESSION['login'] = $user;
    $_SESSION['senha'] = $senha;
    header('Location: principal.php');
}
else{
    echo "<h2 align='center'>LOGIN INVÁLIDO!</h2>";
}
  

//repetição para o SELECT --A Alternativo não tão certo
/* while($row = mysqli_fetch_row($resposta)){
    if($user == $row[1] && $senha == $row[2]){
        header('Location: https://pt.stackoverflow.com/questions/135324/como-redirecionar-p%C3%A1ginas-php');
    }
    else{
        echo "Login Incoerente!";
    }
}*/


$con->close();

?>