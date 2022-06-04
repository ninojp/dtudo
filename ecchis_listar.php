<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Listar TODOS os Animes</title>
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
		$consulta = $conexao->query("SELECT * FROM ecchi");	?>
<header id="header_anime">
	<div id="div_header"><h1>Dtudo - Pagina para alterar ou EXCLUIR animes</h1>
		<p>CUIDADO Clicando em excluir - EXCLUI DIRETAMENTE - sem confirmação</p>
	</div>
</header>
<main id="main_princ"><!--GRID ITEM -->
	<div id="div_animes_conteiner">
	<?php while ($exibir = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
		<div id="div_animes">
			<a href="ecchis_detalhes.php?id=<?php echo $exibir['id']; ?>" title="Detalhes do Anime" target="_blank">
			<figure id="figure_foto">
				<img id="img_foto" src="imgs/ecchis/<?php echo $exibir['fotomini']; ?>" class="img-responsive">
				<figcaption id="figcap_foto">
					<h2><?php echo $exibir['nome']; ?></h2>
				</figcaption>
			</figure></a>
			<div class="div_anime_nome">
				<h2><?php echo $exibir['nome']; ?></h2>
			</div>
			<div class="div_class_btn">
				<a href="ecchi_alterar.php?id=<?php echo $exibir['id']; ?>">	
					<button class="meu_btn"> Alterar </button></a>
				<a href="ecchi_excluir.php?id=<?php echo $exibir['id']; ?>">	
					<button class="red_btn"> Excluir </button></a>
			</div> 
		</div>		
	<?php } ?>
	</div>
</main>
	<?php include 'rodape.php';	?>
</body>
</html>