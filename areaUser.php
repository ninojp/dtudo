<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do Usuário - Animes Selecionados</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php
	session_start();
	if (empty($_SESSION['id'])) {
		header('location:login.php'); }
		
	include('conexao.php');	
	include('navbarra.php');
	include('header.php');
	$id_user = $_SESSION['id'];
	$consultaNota = $conexao->query("SELECT * FROM notas WHERE id_usuario='$id_user' GROUP BY ticket");
	?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Animes Selecionados</legend>
		<div class="form-group">
			<h1>Lista com todos os Animes que selecionei</h1>
		</div>
		<div class="form-group">
			<div class="form-group"><h4> Data </h4></div>
			<div class="form-group"><h4> Ticket </h4></div>
			<div class="form-group"><h4> Nome Anime </h4></div>
			<div class="form-group"><h4> Quantidade </h4></div>
			<div class="form-group"><h4> Nota </h4></div>
	</fieldset>
</section>
<?php while ($exibenota=$consultaNota->fetch(PDO::FETCH_ASSOC)) { ?>
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Selecionados</legend>
		<div class="form-group"> 
			<?php echo date('d/m/y',strtotime($exibenota['data'])); ?>
		</div>
		<div class="form-group">
			<a href="ticket.php?ticket=<?php echo $exibenota['ticket']; ?>">
			<?php echo $exibenota['ticket']; ?></a>
		</div>
		<?php $consultanome = $conexao->query("SELECT nome FROM animes WHERE id='$exibenota[id_anime]'");
		$exibenome=$consultanome->fetch(PDO::FETCH_ASSOC); ?>
		<div class="form-group"> <?php echo $exibenome['nome']; ?> 
		</div>
		<div class="form-group"> <?php echo $exibenota['quantidade']; ?> 
		</div>
		<div class="form-group"> <?php echo number_format($exibenota['nota'],2,',','.'); ?> 
		</div>
	</fieldset>
</section>
	<?php } ?>
</main>
	<?php include 'rodape.php'; ?>
</body>
</html>