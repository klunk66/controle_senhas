<?php require 'verifica_sessao.php' ?>
<!DOCTYPE html>
<html>
<head>
    <?php
        require 'conexao.php';
        $id_sessao = $_GET['id'];

    ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Senhas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
</head>
<body>
<div class="container" style="position: absolute;width: 80%; top: 5%;left: 10%">
  <h2>Alterar Senha</h2>
  <hr>
  <?php
            @$msg = $_GET['msg'];
            if(isset($msg) && $msg != false && $msg == "PASSWD-INCORRECT"){
                echo "<br/><div class='alert alert-danger' role='alert'>Divergência de confirmação de nova senha. Tente novamente!</div>";
            }
            if(isset($msg) && $msg != false && $msg == "PASSWD-ALTERED"){
                echo "<br/><div class='alert alert-success' role='alert'>Sua senha de acesso foi alterada com sucesso!</div>";
            }
            if(isset($msg) && $msg != false && $msg == "PASSWD-ATUAL-ERRO"){
                echo "<br/><div class='alert alert-danger' role='alert'>Senha atual incorreta. Tente novamente!</div>";
            }
        ?>
<form action='editar-senha-bd.php?id=<?=$id_sessao?>' method="POST">
    <div class="form-group">
        <label>Informe a senha atual</label>
        <input type="password" name="senhaatual" class="form-control" required="">
    </div>
    <div class="form-group">
        <label>Informe a nova senha</label>
        <input type="password" name="senhanova" class="form-control" required="">
        
    </div>
    <div class="form-group">
        <label>Informe a nova senha novamente</label>
        <input type="password" name="senhanovaconfirma" class="form-control" required="">    
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-default">Enviar</button>
    </div>
</form>
</div>
</body>
</html>

