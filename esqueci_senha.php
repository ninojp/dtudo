<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci minha senha</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php include 'conexao.php';
	  include 'navbarra.php';
	  include 'header.php'; ?>

<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Recuperação de Senha</legend>
			<div class="form-group">
				<div class="form-group">
					<h3>Para Recuperar sua senha:</h3><br>
					<h2>Digite o email cadastrado</h2><br>
				</div>
				<div class="form-group">
				<form method="post" action="enviarEmail.php" name="logon">
					<div class="form-group">
						<input name="email" type="email" class="form-control" required id="email">
					</div>
					<div class="form-group">
					<button type="submit" class="meu_btn">
						<span class="glyphicon-envelope"> Enviar</span>	</button>
					</div>
				</form>
				</div>
				<a href="formUsuario.php">
				<button type="submit" class="meu_btn">
					Ainda não sou cadastrado</button></a>
			</div>
	</fieldset>
</section>
</main>
	<?php include 'rodape.php' ?>
</body>
</html>