<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Dtudo - Resultado da Busca (BD Animes)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
<link rel="stylesheet" type="text/css" href="css/animeStyle.css">
<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
</head>
<body>	
	<?php
	session_start();
	include 'conexao.php';	
	include 'navbarra.php';

	if (empty($_GET['input_busca'])) {
		echo "<html><script>location.href='index.php'</script></hmtl>";
	}
	$recebe_busca = $_GET['input_busca'];
	$consulta = $conexao->query("SELECT * FROM animes WHERE nome LIKE CONCAT ('%','$recebe_busca','%') OR genero LIKE CONCAT ('%','$recebe_busca','%') OR nome_completo LIKE CONCAT ('%','$recebe_busca','%')");
//esta parte funcionou mas não tras as imagens corespondentes
/*	$consulta = $conexao->query("SELECT animes.nome, animes.genero FROM animes 
								LEFT JOIN ecchi
								ON animes.id = ecchi.id
								WHERE animes.nome LIKE CONCAT ('%','$recebe_busca','%') OR animes.genero LIKE CONCAT ('%','$recebe_busca','%')
								UNION 
								SELECT ecchi.nome, ecchi.genero FROM animes 
								RIGHT JOIN ecchi
								ON animes.id = ecchi.id
								WHERE ecchi.nome LIKE CONCAT ('%','$recebe_busca','%') OR ecchi.genero LIKE CONCAT ('%','$recebe_busca','%')"); */
	if ($consulta->rowCount()==0) {
		echo "<html><script>location.href='erro2.php'</script></hmtl>";	
	} ?>
<header id="header_anime">
	<div id="div_header"><h1>Resultado da busca</h1>
		<h2>Pesquise por NOME ou GENERO para encotrar as animações, Animação 3D e Animes (series e filmes).</h2>
		<p>Lembrando que atualmente o Banco de dados só tem ANIMES, que são pesquisados apenas no campos NOME DO ANIME e GENERO.</p>
	</div>
</header>
<main id="main_princ"><!-- GRID ITEM main -->
	<div id="div_animes_conteiner"> 
	<?php while ($exibir = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
		<div id="div_animes">
			<a href="anime_detalhes.php?id=<?php echo $exibir['id']; ?>" title="Detalhes do Anime" target="_blank">
			<figure id="figure_foto">
				<img src="imgs/animes/<?php echo $exibir['fotomini']; ?>" class="img-responsive">
				<figcaption id="figcap_foto">
					<h4 style="padding-top:20px"><?php echo $exibir['genero']; ?></h4>
					<p>Click para DETALHES</p>
				</figcaption>
			</figure></a>
			<div id="div_anime_nome">
				<h1><?php echo $exibir['nome']; ?></h1>
			</div>
			<div class="form-group">
			<a href="anime_detalhes.php?id=<?php echo $exibir['id']; ?>">
				<button type="button" class="meu_btn">
				Detalhes </button></a>
			</div> 
			<a href="anime_alterar.php?id=<?php echo $exibir['id']; ?>">Alterar</a>
		</div>	
	<?php } ?>
</div>
</main>
	<?php include 'rodape.php';	?>
</body>
</html>