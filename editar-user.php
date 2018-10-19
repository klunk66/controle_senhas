<?php require 'verifica_sessao.php' ?>
<!DOCTYPE html>
<html>
<head>
    <?php
        require 'conexao.php';
        $id = $_GET['id'];
        $sql = "select * from user where id = $id;";
        $query = $mysqli->query($sql);
        $dados = $query->fetch_array();
        $cod = $dados['id'];
        $login = $dados['login'];
    ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Senhas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>
<body>
<div class="container" style="position: absolute;width: 80%; top: 5%;left: 10%">
  <h2>Editar Login</h2>
  <hr>
<form action='editar-user-bd.php?id=<?=$id?>' method="POST">
    <div class="form-group">
        <label>Login</label>
        <input type="text" name="login" class="form-control" value="<?=$login?>" required="">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-default">Enviar</button>
    </div>
</form>
</div>
</body>
</html>

