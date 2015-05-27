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
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
<<<<<<< HEAD
		<link rel="stylesheet" href="../css/style.css" >
	<link rel="stylesheet" href="../css/Styles.css" >
	<link rel="stylesheet" href="../css/LogIn.css" >
        
        <style>
            html{
                background: #1e5799; /* navegadores antigos */
                background: -moz-linear-gradient(top,  #1e5799 19%, #207cca 48%, #7db9e8 84%, #7db9e8 84%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(19%,#1e5799), color-stop(48%,#207cca), color-stop(84%,#7db9e8), color-stop(84%,#7db9e8)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* IE10+ */
                background: linear-gradient(to bottom,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */
        }
        </style>
=======
		<link rel="stylesheet" href="http://localhost:81/login-master/app/css/style.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/Styles.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/LogIn.css" >
>>>>>>> origin/master
    </head>
    <body>

        <div id="container">
            <h3>Cadastro de usuario</h3>
            
            <form action="?action=cadastrar" method="post" style="margin-left:18px;">
                <p>
                    Nome:<br /><input type="text" id="nome" name="nome" class="textBox" required>
                </p>
                <p>
                    Login:<br /><input type="text" id="usuario" name="login" class="text" required>
                </p>
                <p>
                    Senha:<br /><input type="password" id="senha" name="senha" class="text" required>
                </p>
                <p>
                    Confirmar Senha:<br /><input type="password" id="confirmacao" name="confirmacao" class="text" required>
                </p>
<<<<<<< HEAD
                <input type="submit" name="cadastrar" value="Cadastrar" class="button">
            </form>
            <a href="login.php" title="Acessar" class="button" style="float:left; height:15px; margin-left:18px;">Acessar</a>
=======
                <input type="submit" name="cadastrar" value="Cadastrar" class="button" >
            </form>
            <a href="login.php" title="Acessar" class="button" style="float:left; height:15px;">Acessar</a>
>>>>>>> origin/master
        </div>

    </body>
</html>

