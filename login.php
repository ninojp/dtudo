<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Login de Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
	<link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<?php session_start();
  	  include('conexao.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
      include('header.php');  ?> <!--GRID ITEM -->
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Fazer Login</legend>
		<form id="form_login" method="post" action="validaUsuario.php" name="logon">
			<div class="form-group">
				<label for="email"> Email: </label>
				<input name="email" type="email" class="form-control" required id="email">
			</div>
			<div class="form-group">
				<label for="senha"> Senha: </label>
				<input name="senha" type="password" class="form-control" required id="senha">
			</div>			
			<button type="submit" class="meu_btn">Entrar</button>
		</form>	
	</fieldset>
	<fieldset>
		<legend>Ainda não sou cadastrado!</legend>
		<div class="form-group">
			<a href="formUsuario.php">
				<button type="submit" class="meu_btn">Cadastrar</button></a>
		</div>
	</fieldset>
	<fieldset>
		<legend>Recuperar Senha!</legend>
		<div class="form-group">
			<a href="esqueci_senha.php">
				<button type="submit" class="red_btn">Esqueci minha senha!</button>	</a>
		</div>
	</fieldset>
</section>
</main>
    <?php include('rodape.php'); ?>
</body>
</html>