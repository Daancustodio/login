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
        <title>Login</title>
    </head>
    <body>

        <div id="form">
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
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>

        </div>

    </body>
</html>

