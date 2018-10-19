<?php require 'verifica_sessao.php' ?>
<!DOCTYPE html>
<html>
<head>
    <?php
        require 'conexao.php';
        $id = $_GET['id'];
        $sql = "select * from senhas where id = $id;";
        $query = $mysqli->query($sql);
        $dados = $query->fetch_array();
        $cod = $dados['id'];
        $senha = $dados['senha'];
        $utilizacao = $dados['utilizacao'];
    ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Senhas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>
<body>
<div class="container" style="position: absolute;width: 80%; top: 5%;left: 10%">
  <h2>Editar senha</h2>
  <hr>
<form action='editar-bd.php?id=<?=$id?>' method="POST">
    <div class="form-group">
        <label>Senha</label>
        <input type="text" name="senha" class="form-control" value="<?=$senha?>" required="">
    </div>
    <div class="form-group">
        <label>Utilização</label>
        <input type="text" name="utilizacao" class="form-control" value="<?=$utilizacao?>" required="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Enviar</button>
    </div>
</form>
</div>
</body>
</html>

