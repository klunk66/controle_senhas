<?php require 'verifica_sessao.php' ?>
<?php
//conexao
include_once ('conexao.php');

//passar os dados para variaveis
$id = $_GET['id'];
$senha = $_POST['senha'];
$utilizacao = $_POST['utilizacao'];

//enviar dados para o banco 

$sql = "update senhas set senha = '$senha',utilizacao = '$utilizacao',modified = now() where id = '$id'";

if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'index.php?msg=ALTERED'</script>";
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}