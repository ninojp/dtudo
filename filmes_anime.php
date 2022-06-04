<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
<link rel="stylesheet" type="text/css" href="css/animeStyle.css">
<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
<title>Dtudo - Filmes Animação </title>
</head>
<body>
<section class="sect_grid_conteiner"><!--GRID CONTEINER -->
<?php 
	session_start();
	include('conexao.php');
	include('navbarra.php');
	$consulta = $conexao->query('SELECT * FROM filmes'); ?>	
<header id="header_anime">
	<div id="div_header"><h1>Animes - Animação 3D</h1>
		<p>Esta não é uma pagina para DONWLOAD, Clicando em GOSTEI, estando LOGADO, será gerado uma lista, que pode ser enviada para seu e-mail, com todos os animes e onde podem ser ENCONTRADOS!</p> <a href="animes_ecchi.php"><button class="meu_btn">Ecchis</button></a><br>
	</div>
</header>
<main id="main_princ"><!-- GRID ITEM main -->
	<div id="div_animes_conteiner"> 
	<?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)) { ?>
		<div id="div_animes">
			<a href="filme_detalhes.php?id=<?php echo $exibir['id']; ?>" title="Detalhes do Filme Anime" target="_blank">
				<figure id="figure_foto">
					<img id="img_foto" src="imgs/filmes/<?php echo $exibir['fotomini_film']; ?>">
					<figcaption id="figcap_foto">
						<h2><?php echo nl2br(mb_strimwidth($exibir['genero_film'],0,59,'...')); ?></h2>
						<p>Click para DETALHES</p>
					</figcaption>
				</figure></a>
			<div id="div_anime_nome">
				<h1><?php echo nl2br(mb_strimwidth($exibir['nome_film'],0,36,'...')); ?></h1>	
			</div>
			<div id="div_anime_botao">
				<a href="filme_detalhes.php?id=<?php echo $exibir['id']; ?>" title="Detalhes do Filme Anime" target="_blank">
					<button id="btn_detalhes" class="meu_btn"> Detalhes</button></a>
			</div>
		</div>
	<?php } ?>
	</div>
</main>
<?php include('rodape.php'); ?>
</section>
</body>
</html>