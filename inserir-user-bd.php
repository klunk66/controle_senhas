<?php require 'verifica_sessao.php' ?>
<?php
//conexao
include ('conexao.php');

//passar os dados para variaveis
$senha = $_POST['senha'];
$login = $_POST['login'];
$id_sessao = $_SESSION['id_usuario'];
//enviar dados para o banco
$sql = "insert into user(login,senha)"
    . " values('$login',md5('$senha'));";
if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'users.php?msg=INCLUDED'</script>";
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}