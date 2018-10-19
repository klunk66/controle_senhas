<?php require 'verifica_sessao.php' ?>
<?php
include ('conexao.php');

$cod = $_GET['id'];

$sql = "delete from senhas where id = '$cod';";


if($mysqli->query($sql)){
    echo "<script type='text/javascript'> window.location.href = 'index.php?url=mostrar-curso&msg=DELETED'</script>";
	exit();
} else {
    echo "<script type='text/javascript'> window.location.href = 'index.php?url=mostrar-curso&msg=ERROR'</script>";
    exit();
}