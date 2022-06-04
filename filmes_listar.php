<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Listar TODOS os Filmes Anime</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
	<link rel="stylesheet" type="text/css" href="css/animeStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php session_start();
		if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
		}
		include 'conexao.php';	
		include 'navbarra.php';
		$consulta = $conexao->query("SELECT * FROM filmes");	?>
<header id="header_anime">
	<div id="div_header"><h1>Dtudo - Pagina para alterar ou EXCLUIR Filmes anime</h1>
		<p>CUIDADO Clicando em excluir - EXCLUI DIRETAMENTE - sem confirmação</p>
	</div>
</header>
    <hr>
<main id="main_princ"><!--GRID ITEM -->
	<div id="div_animes_conteiner">
	<?php while ($exibir = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
		<div id="div_animes">
			<a href="filme_detalhes.php?id=<?php echo $exibir['id']; ?>" title="Detalhes do Anime" target="_blank">
			<figure id="figure_foto">
				<img id="img_foto" src="imgs/filmes/<?php echo $exibir['fotomini_film']; ?>" class="img-responsive">
				<figcaption id="figcap_foto">
					<h2><?php echo $exibir['nome_film']; ?></h2>
				</figcaption>
			</figure></a>
			<div class="div_anime_nome">
				<h2><?php echo $exibir['nome_film']; ?></h2>
			</div>
			<div class="div_class_btn">
				<a href="filme_alterar.php?id=<?php echo $exibir['id']; ?>">	
					<button class="meu_btn"> Alterar </button></a><br><hr>
				<a href="filme_excluir.php?id=<?php echo $exibir['id']; ?>">	
					<button class="red_btn"> Excluir </button></a>
			</div> 
		</div>		
	<?php } ?>
	</div>
</main>
	<?php include 'rodape.php';	?>
</body>
</html>