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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/style.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/Styles.css" >
	<link rel="stylesheet" href="http://localhost:81/login-master/app/css/LogIn.css" >
</head>
<body>

<div id="container">
	<h3>Login</h3>
	<form action="?action=acessar" method="post">
		<p>
			Usuario:<br /><input type="text" id="usuario" name="login" />
		</p>
		<p>
			Senha:<br /><input type="password" id="senha" name="senha">
		</p>
		<input type="submit" name="entrar" value="Entrar" width="150px" class="button">
	</form>
	<a href="cadastro.php" title="Cadastre-se" class="button" style="float:left; height:15px;">Cadastre-se</a>
</div>
	
</body>
</html>