<html>
    <head>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width,initial-scale = 1,shrink-to-fit=no">
        <title>Entrar</title>
    </head>

    <body>
        <div class="container-fluid" >
            <div class="row" style="margin-top: 6%;">
                <div class="col-md-3" style="margin: 0 auto;height: 70%; width: auto;margin-top: 2%;margin-bottom: 2%;padding-top: 2%;padding-bottom: 23%;">
                    <form action="autentica.php" method="POST" >
                        <h2 style="text-align: center">Faça seu Login</h2>
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" name="login" class="form-control" placeholder="Digite seu usuário" required>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                        </div>

                        <div class="form-group" style="margin-top: 15%;">

                            <button type="submit" class="btn btn-block btn-outline-info">Entrar</button>
                        </div>
                        <div class="form-group">
                        <?php
                        @$msg = $_GET['msg'];
                        if (isset($msg) && $msg != false && $msg == "erro") {
                            echo "<br/><div class='alert alert-danger' role='alert'>Preencha todos os campos </div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "aut") {
                            echo "<br/><div class='alert alert-danger' role='alert'>Autenticação Necessária</div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "erro_bd") {
                            echo "<br/><div class='alert alert-danger' role='alert'> Erro no banco de dados</div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "bad_passwd") {
                            echo "<br/><div class='alert alert-danger' role='alert'> Senha Incorreta</div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "bad_login") {
                            echo "<br/><div class='alert alert-danger' role='alert'>Login Inexistente</div>";
                        }
                        ?>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>