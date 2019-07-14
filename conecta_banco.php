<?php
$servidor = "localhost"; //Nome do servidor onde eestá alocado o banco de dados
$usuario = "root"; //Nome do usúario da conexão pela qual se refere
$senha = "usbw"; //Senha do usúario da conexão pela qual se refere
$db = "db_projetoEllen"; //O banco de dados em si

$con = new MYSQLI($servidor, $usuario, $senha, $db); //Criação da conexão

if(!$con){
    echo "A conexão com banco de dados falhou, tente novamente mais tarde!";
}
//Estabelecimento da conexão com o banco de dados do Projeto.
?>