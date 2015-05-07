<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

<div id="form">
	<h3>Cadastro de usuario comum</h3>
	<form action="?action=login" method="post">
		<p>
			Usuario:<br /><input type="text" id="usuario" name="login" class="text">
		</p>
		<p>
			Senha:<br /><input type="password" id="senha" name="senha" class="text">
		</p>
		<input type="submit" name="entrar" value="Entrar">
	</form>
	<a href="?action=cadastro" title="Cadastre-se">Cadastro</a>
</div>
	
</body>
</html>