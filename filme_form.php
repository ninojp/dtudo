<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Adicionar Novos Animes</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
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
		<legend>Pagina para Adicionar novos Filmes Animes </legend>
			<div class="form-group">
					<div class="form-group">
						<h2>Adicionar Novos Filmes Animação</h2>
						<form method="post" action="filme_incluir.php" name="incluiProd" enctype="multipart/form-data">
					</div>
					<div class="form-group">
						<label for="nome">Inserir o Nome do Filme Animação</label><br>
						<input name="nome" type="text" class="form-control" required id="nome">
					</div>
					<div class="form-group">
						<label for="nomecompleto_film">Nome Completo e Sinônimos</label><br>
						<textarea rows="5" class="form-control" name="nomecompleto_film" id="nomecompleto_film"></textarea>
					</div>
					<div class="form-group">
						<label for="genero_film">Gêneros e Temas</label><br>
						<input name="genero_film" type="text" class="form-control" id="genero_film">
					</div>
					<div class="form-group">
						<label for="descricao_film">Descrição e Enredo</label><br>
						<textarea rows="10" class="form-control" name="descricao_film"></textarea>
					</div>
					<div class="form-group">
						<label for="data_film">Filme (Animação, Animação 3D, Live Action) - Exibição - Duração</label><br>
						<textarea rows="6" class="form-control" name="data_film"></textarea>
					</div>
					<div class="form-group">
						<label for="elenco_film">Personagens Principais - Elenco</label><br>
						<textarea rows="5" class="form-control" name="elenco_film"></textarea>
					</div>
					<div class="form-group">
						<label for="direcao_film">Direção - Estudio - Distribuição</label><br>
						<textarea rows="3" class="form-control" name="direcao_film"></textarea>
					</div>

					<div class="form-group">
						<label for="nota_film">De 1 a 10 o que eu achei do Anime</label><br>
						<input name="nota_film" type="text" class="form-control" id="nota_film">
					</div>
					<div class="form-group">
						<label for="fotomini_film">Foto Miniatura </label><br>
						<input type="file" accept="imgs/filmes/*" class="form-control" name="fotomini_film" id="fotomini_film">
					</div>
					<div class="form-group">
						<label for="foto1_film">Foto 1(Fundo)</label><br>
						<input type="file" accept="imgs/filmes/*" class="form-control" name="foto1_film" id="foto1_film">
					</div>
					<div class="form-group">
						<label for="foto2_film">Foto 2</label><br>
						<input type="file" accept="imgs/filmes/*" class="form-control"  name="foto2_film" id="foto2_film">
					</div>
					<div class="form-group">
						<label for="foto3_film">Foto 3</label><br>
						<input type="file" accept="imgs/filmes/*" class="form-control"  name="foto3_film" id="foto3_film">
					</div>
					<div class="form-group">
						<button type="submit" class="meu_btn">Cadastrar</button>
					</div>
				</form>
			</div>
		</fieldset>
</section>
</main>
	<?php include 'rodape.php' ?>
</body>
</html>
<!-- mascara para o valor do dinheiro ex:Loja
<script>
$(document).ready(function(){
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
});
</script> -->