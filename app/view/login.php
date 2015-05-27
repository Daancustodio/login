<?php

namespace fanap\login\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';

use fanap\login\AutoLoad;
use fanap\login\app\controller\AccessController;
AutoLoad::Register();

if (isset($_GET['action']) && $_GET['action'] == 'acessar') {

    $cadastroController = new AccessController();
    $cadastroController->Acessar();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
<<<<<<< HEAD
	<link rel="stylesheet" href="../css/Styles.css" >
	<link rel="stylesheet" href="../css/LogIn.css" >
    
=======
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/style.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/Styles.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/LogIn.css" >
>>>>>>> origin/master
</head>
    <style type="text/css">
       
        html{
                background: #1e5799; /* navegadores antigos*/
                background: -moz-linear-gradient(top,  #1e5799 19%, #207cca 48%, #7db9e8 84%, #7db9e8 84%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(19%,#1e5799), color-stop(48%,#207cca), color-stop(84%,#7db9e8), color-stop(84%,#7db9e8)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* IE10+ */
                background: linear-gradient(to bottom,  #1e5799 19%,#207cca 48%,#7db9e8 84%,#7db9e8 84%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */


        }
    </style>
<body>

<div id="container">
	<h3>Login</h3>
	<form action="?action=acessar" method="post" style="margin-left:18px;" id="form">
		<p>
<<<<<<< HEAD
			Usuario:<input type="text" id="usuario" name="login" required />
		</p>
		<p>
			Senha:&nbsp;&nbsp;<input type="password" id="senha" name="senha" required>
		</p>
		<input type="submit" name="entrar" value="Entrar" width="150px" class="button">
	</form>
	<a href="cadastro.php" title="Cadastre-se" class="button" style="float:left; height:15px; margin-left:18px;">Cadastre-se</a>
=======
			Usuario:<br /><input type="text" id="usuario" name="login" />
		</p>
		<p>
			Senha:<br /><input type="password" id="senha" name="senha">
		</p>
		<input type="submit" name="entrar" value="Entrar" width="150px" class="button">
	</form>
	<a href="cadastro.php" title="Cadastre-se" class="button" style="float:left; height:15px;">Cadastre-se</a>
>>>>>>> origin/master
</div>
	
</body>
</html>