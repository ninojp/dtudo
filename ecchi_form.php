<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novos Animes Ecchis</title>
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!--GRID CONTEINER -->
<?php
	session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
	include 'conexao.php';	
	include 'navbarra.php';
	include('header.php');  ?> 
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>Adicionar Novos Animes Ecchis</legend>
			<div class="form-group">
				<form method="post" action="ecchi_incluir.php" name="incluiProd" enctype="multipart/form-data">
					<div class="form-group">
						<h2>Pagina para Adicionar novos Animes Ecchis</h2>
					</div><hbr>
					<div class="form-group">
						<label for="nome">Inserir o Nome do Anime Ecchi</label><br>
						<input name="nome" type="text" class="form-control" required id="nome">
					</div>
					<div class="form-group">
						<label for="nome_completo_ecchi">Nome Completo e Sinônimos</label><br>
						<textarea rows="5" class="form-control" name="nome_completo_ecchi" id="nome_completo_ecchi"></textarea>
					</div>
					<div class="form-group">
						<label for="genero">Gênero e TAGs de Tema:</label><br>
						<input name="genero" type="text" class="form-control" id="genero">
					</div>
					<div class="form-group">
						<label for="descricao">Descrição e Enredo:</label><br>
						<textarea rows="10" class="form-control" name="descricao"></textarea>
					</div>
					<div class="form-group">
						<label for="temporadas">Séries - Filmes - OVAs - ONAs - Especiais</label><br>
						<textarea rows="15" class="form-control" name="temporadas"></textarea>
					</div>
					<div class="form-group">
						<label for="elenco">Personagens Principais:</label><br>
						<textarea rows="3" class="form-control" name="elenco"></textarea>
					</div>
					<div class="form-group">
						<label for="direcao">Direção - Estúdio - Distribuição:</label><br>
						<textarea rows="3" class="form-control" name="direcao"></textarea>
					</div>
					<div class="form-group">
						<label for="nota">De 1 a 10 o que eu achei do Anime</label><br>
						<input name="nota" type="text" class="form-control" id="nota">
					</div>
					<div class="form-group">
						<label for="fotomini">Foto Miniatura(300hx200)</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control" name="fotomini" id="fotomini">
					</div>
					<div class="form-group">
						<label for="foto1">Imagem 1(plano de fundo)</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control" name="foto1" id="foto1">
					</div>
					<div class="form-group">
						<label for="foto2">Imagem 2</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto2" id="foto2">
					</div>
					<div class="form-group">
						<label for="foto3">Imagem 3</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto3" id="foto3">
					</div>
					<div class="form-group">
						<label for="foto4">Imagem 4</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto4" id="foto4">
					</div>
					<div class="form-group">
						<label for="foto5">Imagem 5</label><br>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto5" id="foto5">
					</div>
					<div class="form-group">
						<button type="submit" class="meu_btn">
						 Cadastrar </button>
					</div>
				</form>
			</div>
		</fieldset>
</section>
</main>
	<?php include 'rodape.php' ?>
</body>
</html>