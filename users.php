<?php require 'verifica_sessao.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Senhas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

<div class="container" style="position: absolute;width: 80%; top: 5%;left: 10%">

<div class="row">
<div class="col-md-9"></div>
  <div class="col-md-3">
  <a href = "index.php" title = "Página Inicial"><i class="fa fa-home" style="font-size: 1.4em;margin-right: 13%;"></i></a>
  <a href = 'altera-senha.php?id=<?=$id_sessao = $_SESSION['id_usuario']?>' title = "Alterar Senha"><i class="fa fa-key" style="font-size: 1.4em"></i></a>
  <a href="users.php" title = "Gerenciar usuários"><i class="fa fa-users" style="font-size: 1.4em;margin-left: 13%;margin-right: 13%;"></i></a>
  <a href="logout.php" title = "sair"><i class = "fa fa-sign-out-alt" style="font-size: 1.6em"></i></a></div>
</div>
<?php
            @$msg = $_GET['msg'];
            if(isset($msg) && $msg != false && $msg == "DELETED"){
                echo "<br/><div class='alert alert-success' role='alert'> Usuário excluído com sucesso</div>";
            }
            if(isset($msg) && $msg != false && $msg == "ALTERED"){
                echo "<br/><div class='alert alert-success' role='alert'> Usuário editado com sucesso</div>";
            }
            if(isset($msg) && $msg != false && $msg == "INCLUDED"){
                echo "<br/><div class='alert alert-success' role='alert'> Usuário adicionado com sucesso</div>";
            }
        ?>
<h2>Gerenciar Usuários</h2>
  
  <p>Abaixo estão listadas os usuários com acesso ao sistema.</p>       
       
  <table class="table table-hover">
    <thead>
      <tr>
        <th><a href="inserir-user.php"><i class = "fa fa-plus-square" style="font-size: 1.6em"></i></a></th>
        <th>#</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Criado</th>
		    <th>Modificado</th>
      </tr>
    </thead>
    <tbody>
<?php require_once 'conexao.php';
//pega id da sessão (id_usuario deve ser igual ao id_usuario de autentica)

$sql = "SELECT * FROM user;";

$query = $mysqli->query($sql);
while($dados = $query->fetch_array()){
  
$id = $dados['id'];
$login = $dados['login'];
$senha = $dados['senha'];
$created = $dados['created'];
$modified = $dados['modified'];
?>
      <tr>									
        <td><a href = "editar-user.php?id=<?=$id?>"><i class = "fa fa-edit" style="font-size: 1.6em"></i></a>
        </td>
        <td><?=$id?></td>					
        <td><?=$login?></td>
        <td><?=$senha?></td>
        <td><?=$created?></td>
        <td><?=$modified?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>

