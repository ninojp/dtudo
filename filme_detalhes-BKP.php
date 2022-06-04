<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Detalhes do Filme Animação</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
	<link rel="stylesheet" type="text/css" href="css/anime_detalhes.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
	<link href="css/lightbox.css" rel="stylesheet">
	<script src="js/lightbox.js"></script>
</head>
<body>
<section class="sect_grid_conteiner"><!--GRID CONTEINER -->
<?php	session_start();
		include 'conexao.php';	
		include 'navbarra.php';
	if (!empty($_GET['id'])) {
	$id_film = $_GET['id'];
	$consulta = $conexao->query("SELECT * FROM filmes WHERE id='$id_film'");
	$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
	} else {
		header('location:index.php');
} ?>
<header id="header_animes_detal">
	<fieldset class="fieldset_anime_detal">	 
		<legend><h2 class="h2_titulo">Nome do Filme Animação:</h2></legend>
		<p id="p_nome"><?php echo $exibir['nome_film'];?></p>
	</fieldset>
	<fieldset class="fieldset_anime_detal">
		<legend><h2 class="h2_titulo">Gêneros do Filme Animação:</h2></legend>
		<p><?php echo nl2br($exibir['genero_film']);?></p> 
	</fieldset>
	<?php if ($exibir['series_film']!="") { ?>
		<fieldset class="fieldset_anime_detal">	
			<legend><h2 class="h2_titulo">Link para Series - OVAs - ONAs - Especiais:</h2></legend>
			<?php echo $exibir['series_film']; ?>
		</fieldset>
	<?php } ?>
</header>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_anime">
	<section id="sect_imgs_anime" style="background-image: url('imgs/filmes/<?php echo $exibir['foto1_film'];?>');">
		<?php if ($exibir['nomecompleto_film']!="") { ?>
		<fieldset id="fieldset_tempora">
			<legend><h2 class="h2_titulo">Nome Completo ou Sinônimos:</h2></legend>
				<p><?php echo nl2br($exibir['nomecompleto_film']); ?></p>
		</fieldset>
		<?php } ?>
		<?php if ($exibir['data_film']!="") { ?>
		<fieldset id="fieldset_ovas">
			<legend><h2 class="h2_titulo">Data de lançamento do Filme:</h2></legend>
			<p><?php echo nl2br($exibir['data_film']); ?></p>
		</fieldset>
		<?php } ?>
		<?php if ($exibir['foto1_film']!="") { ?>
		<div id="div_oculta_foto1">
		<a href="imgs/filmes/<?php echo $exibir['foto1_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
			<img src="imgs/filmes/<?php echo $exibir['foto1_film'];?>" class="img-responsive"></a>
		</div>
		<?php } if ($exibir['foto2_film']!="") { ?>
		<div class="div_imgs_detal">
		<a href="imgs/filmes/<?php echo $exibir['foto2_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
			<img src="imgs/filmes/<?php echo $exibir['foto2_film'];?>" class="img-responsive"></a>
		</div>
	 	<?php } if ($exibir['foto3_film']!="") { ?>
		<div class="div_imgs_detal">
			<a href="imgs/filmes/<?php echo $exibir['foto3_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
				<img src="imgs/filmes/<?php echo $exibir['foto3_film']; ?>" class="img-responsive"></a>
		</div>
		<?php } ?>
 	</section>
	<section id="sect_detal_anime">
 		<div id="div_anime_detal">
			<div class="divs_detals">
		  	<fieldset class="fieldset_anime_detal">
			  	<legend><h2 class="h2_titulo">Descrição do Filme Anime e Enredo: <?php echo $exibir['nome_film'];?></h2></legend>
				<p><?php echo nl2br($exibir['descricao_film']); ?></p>
			</fieldset>
			</div>
			<div class="divs_detals">
				<?php if ($exibir['elenco_film']!="") { ?>
				<fieldset class="fieldset_anime_detal">
			  		<legend><h2 class="h2_titulo">Persomagens do Anime:</h2></legend>
				  	<p><?php echo nl2br($exibir['elenco_film']); ?></p>
				</fieldset>
				<?php } ?>
			</div>
			<div class="divs_detals">
				<fieldset class="fieldset_anime_detal">
			  		<legend><h2 class="h2_titulo">Nota:</h2></legend>
				 	 <p> (0 a 10) O que EU achei!<br><?php echo nl2br($exibir['nota_film']); ?></p>
				</fieldset>
				<fieldset class="fieldset_anime_detal">
			  		<legend><h2 class="h2_titulo">Gostei Desse</h2></legend>
					<p>Colocar este na lista dos Anime que gostei</p>
					  <a href="finalizar_selec.php">
						<button class="meu_btn">Selecionar este Anime</button></a>
				</fieldset>
			</div>
		</div>	
	</section>	
</section>
<a href="filme_alterar.php?id=<?php echo $exibir['id']; ?>">Alterar</a>
</main>
	<?php include 'rodape.php'; ?>
</section>
</body>
</html>