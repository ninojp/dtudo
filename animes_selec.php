<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Animes Selecionados</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php session_start();
	if (empty($_SESSION['id'])){
	header('location:login.php');
	}
 	include 'conexao.php';	
	include 'navbarra.php';
	include 'header.php';
	if (!empty($_GET['id'])) {
		$id_prod=$_GET['id'];
	if (!isset($_SESSION['carrinho'])) {
		  $_SESSION['carrinho'] = array();
	}
	if (!isset($_SESSION['carrinho'][$id_prod])) {
		$_SESSION['carrinho'][$id_prod]=1;
	}
	else {
		  $_SESSION['carrinho'][$id_prod]+=1;
	}
		include 'animes_mostra.php';
	} else {
		include 'animes_mostra.php';
	}	?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Animes Selecionados</legend>
			<div class="form-group">
				<h1>Todos os Animes Seleciondos:<?php echo number_format($total,2,',','.'); ?> </h1>
			</div>
			<div class="form-group">
				<a href="animes.php">
					<button class="meu_btn">Escolher Outros Animes</button></a>
				<?php if (count($_SESSION['carrinho'])>0) { ?>
				<a href="finalizar_selec.php"><button class="meu_btn">Finalizar Escolha</button></a>
				<?php } ?>
			</div>
	</fieldset>
</section>
</main>
<?php include 'rodape.php'; ?>
</body>
</html>