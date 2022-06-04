<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTUDO - Usuário Cadastrado com sucesso!</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<?php session_start();
  	  include('conexao.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
      include('header.php');  ?> <!-- GRID ITEM cabecalho -->
<main id="main_princ"><!-- GRID ITEM main -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Usuário Cadastrado</legend>
		<div class="form-group">
			<h2>Usuário Cadastrado com sucesso!!</h2>
		</div>
		<div class="form-group">
			<a href="login.php">
				<button type="button" class="meu_btn">
					Fazer o Login</button></a>
		</div>
	</fieldset>
</section>
</main>
<?php include 'rodape.php' ?>
</body>
</html>