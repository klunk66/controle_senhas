<?php require 'verifica_sessao.php' ?>
<?php
//conexao
include_once ('conexao.php');

//passar os dados para variaveis
$id = $_GET['id'];
$login = $_POST['login'];

//enviar dados para o banco 

$sql = "update user set login = '$login',modified = now() where id = '$id'";

if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'users.php?msg=ALTERED'</script>";
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}