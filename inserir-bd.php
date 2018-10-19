<?php require 'verifica_sessao.php' ?>
<?php
//conexao
include ('conexao.php');

//passar os dados para variaveis
$senha = $_POST['senha'];
$use = $_POST['use'];
$id_sessao = $_SESSION['id_usuario'];
//enviar dados para o banco
$sql = "insert into senhas(senha,utilizacao,user_id)"
    . " values('$senha','$use',$id_sessao);";
if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'index.php?msg=INCLUDED'</script>";
    exit();
} else {
    echo ("Erro: %s\n".$mysqli->error);
}