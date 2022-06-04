<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Animes Selecionados </title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<?php session_start();
      include('conexao.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
      include('header.php');  ?> 
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Animes Selecionados</legend>
			<div class="form-group">
				<h2>Animes selecionados!!(AINDA em desenvolvimento)<br><br>
				Seu número de registro é: <?php echo $ticket ?></h2><br>
				<a href="carrinho.php">
					<button type="button" class="meu_btn">Voltar a votar</button></a>
			</div>
	</fieldset>
</section>
</main>
    <?php include('rodape.php'); ?>
</body>
</html>