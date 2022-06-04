<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css">
    <link rel="stylesheet" type="text/css" href="css/formStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php
	session_start();
	if (empty($_SESSION['id'])) {
		header('location:Login.php');
	}
	include 'conexao.php';	
	include 'navbarra.php';

	$ticket_nota=$_GET['ticket'];
	$consultanota = $conexao->query("SELECT * FROM notas WHERE ticket='$ticket_nota'");
	?>
	
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Ticket</legend>
		<div class="form-group">
			<h1 class="text-center">Nota: <?php echo $ticket_nota ?></h1>
		</div>
		<div class="form-group">
			<div class="form-group"><h4>Data</h4> </div>
			<div class="form-group"><h4>Ticket </h4></div>
			<div class="form-group"><h4> Anime</h4></div>
			<div class="form-group"><h4> Quantidade</h4></div>
			<div class="form-group"><h4> Nota</h4></div>
		</div>
		<?php	$total=0;
			while ($exibenota=$consultanota->fetch(PDO::FETCH_ASSOC)) {
			$total += $exibenota['nota'] * $exibenota['quantidade'];
		?>
		<div class="form-group">
			<div class="form-group">
				<?php echo date('d/m/Y',strtotime($exibenota['data'])); ?> 
			</div>
			<div class="form-group">
				<?php echo $exibenota['ticket']; ?> 
			</div>
			<?php $consultanome = $conexao->query("SELECT nome FROM animes WHERE id='$exibenota[id_anime]'");
			$exibenome=$consultanome->fetch(PDO::FETCH_ASSOC);
			?>
			<div class="form-group"> 
				<?php echo $exibenome['nome']; ?> 
			</div>
			<div class="form-group"> 
				<?php echo $exibenota['quantidade']; ?> 
			</div>
			<div class="form-group"> 
				<?php echo number_format($exibenota['nota'],2,',','.');?>
			</div>
			<?php } ?>
			<div class="form-group">
				<h2>Total das Notas: <?php echo number_format($total,2,',','.');?></h2>
			</div>
		</div>
	</fieldset>
</section>
</main>
<?php 	include 'rodape.php'; 	?>
</body>
</html>