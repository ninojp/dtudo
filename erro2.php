<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O termo procurado não foi encontrado!</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
	<link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php session_start();
  	  include('conexao.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
      include('header.php');  ?> <!-- GRID ITEM cabecalho -->
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Não encontrado no Banco de Dados</legend>
		<div class="form-group">
			<h2>O termo procurado não foi encontrado!!!</h2>
		</div>
		<div class="form-group">
			<p>Lembrando que por enquanto no Banco de DADOS tem apenas ANIMES</p>
		</div>
		<div class="form-group">
			<a href="index.php">
				<button type="button" class="meu_btn">
					Voltar para pagina inicial</button></a>
		</div>
	</div>
	</fieldset>
</section>
</main>
<?php include 'rodape.php' ?>
</body>
</html>