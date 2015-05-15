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
</head>
<body>

<div id="form">
	<h3>Login</h3>
	<form action="?action=acessar" method="post">
		<p>
			Usuario:<br /><input type="text" id="usuario" name="login" class="text">
		</p>
		<p>
			Senha:<br /><input type="password" id="senha" name="senha" class="text">
		</p>
		<input type="submit" name="entrar" value="Entrar">
	</form>
	<a href="cadastro.php" title="Cadastre-se">Cadastre-se</a>
</div>
	
</body>
</html>