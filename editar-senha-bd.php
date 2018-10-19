<?php require 'verifica_sessao.php' ?>
<?php
require 'conexao.php';

        $id_sessao = $_GET['id'];
        $sql = "select senha from user where id = $id_sessao;";
        $query = $mysqli->query($sql);
        $dados = $query->fetch_array();
        $senha = $dados['senha'];


$senha_atual = $_POST['senhaatual'];
$nova_senha = $_POST['senhanova'];
$nova_senha_confirma = $_POST['senhanovaconfirma'];

$senha_atual_crypt = md5($senha_atual);

if ($senha_atual_crypt == $senha){
    if ($nova_senha == $nova_senha_confirma){
        $nova_senha_crypt = md5($nova_senha);
        $sql = "update user set senha = '$nova_senha_crypt',modified = now() where id = $id_sessao";
        if($mysqli->query($sql)){
            echo "<script type='text/javascript'> window.location.href = 'index.php?msg=PASSWD-ALTERED&id=$id_sessao'</script>";
            exit();
        } else {
            echo ("Erro: %s\n".$mysqli->error);
        }
    } else {
        echo "<script type='text/javascript'> window.location.href = 'altera-senha.php?msg=PASSWD-INCORRECT&id=$id_sessao'</script>";
    }
} else {
    echo "<script type='text/javascript'> window.location.href = 'altera-senha.php?msg=PASSWD-ATUAL-ERRO&id=$id_sessao'</script>";
}

