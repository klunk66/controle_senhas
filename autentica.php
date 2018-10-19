<?php 
include "conexao.php"; 
session_start(); 
$login = trim($_POST["login"]); 
$senha = trim($_POST["senha"]);

$senha_crypt = md5($senha);
echo "<br>";
if($login == "" || $senha == ""){ 
echo "<script type='text/javascript'> window.location.href = 'login.php?msg=erro'</script>"; 
exit; 
} 

$sql = "SELECT * FROM user WHERE login = '$login';";
$result = $mysqli->query($sql);
$cont = mysqli_num_rows($result);
if($cont > 0) { 
    $dados = $result->fetch_array(); 
    if($senha_crypt === $dados['senha']) { 
        $_SESSION["id_usuario"]= $dados["id"]; 
   
        $_SESSION["login"] = stripslashes($dados["nome"]); 
        header("Location: index.php"); 
        exit; 
    } 
    else { 
        echo "<script type='text/javascript'> window.location.href = 'login.php?msg=bad_passwd'</script>"; 
        exit; 
    } 
} 
else { 
    echo "<script type='text/javascript'> window.location.href = 'login.php?msg=bad_login'</script>"; 
    exit; 
} 