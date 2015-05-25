<?php

namespace fanap\login\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';

use fanap\login\AutoLoad;

AutoLoad::Register();

use fanap\login\app\controller\AccessController;

if (isset($_GET['action']) && $_GET['action'] == 'cadastrar') {

    $cadastroController = new AccessController();
    $cadastroController->Cadastrar();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
		<link rel="stylesheet" href="http://localhost:81/login-master/app/css/style.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/Styles.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/LogIn.css" >
    </head>
    <body>

        <div id="container">
            <h3>Cadastro de usuario</h3>
            <form action="?action=cadastrar" method="post">
                <p>
                    Nome:<br /><input type="text" id="nome" name="nome" class="text">
                </p>
                <p>
                    Login:<br /><input type="text" id="usuario" name="login" class="text">
                </p>
                <p>
                    Senha:<br /><input type="password" id="senha" name="senha" class="text">
                </p>
                <p>
                    Confirmar Senha:<br /><input type="password" id="confirmacao" name="confirmacao" class="text">
                </p>
                <input type="submit" name="cadastrar" value="Cadastrar" class="button" >
            </form>
            <a href="login.php" title="Acessar" class="button" style="float:left; height:15px;">Acessar</a>
        </div>

    </body>
</html>

