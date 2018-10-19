<?php require 'verifica_sessao.php' ?>
<?php
include 'conexao.php';

$cod = $_GET['id'];

$sql = "delete from user where id = $cod;";

if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'users.php?msg=DELETED'</script>";
	exit();
} else {
    echo "<script type='text/javascript'> window.location.href = 'users.php?url=mostrar-curso&msg=ERROR'</script>";
    exit();
}