<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - ALTERAR os DADOS do Filme Anime</title>
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!-- GRID CONTEINER -->
<?php session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
	$id_film = $_GET['id'];
	include 'conexao.php';	
	include 'navbarra.php';
	include 'header.php';
	$consulta = $conexao->query("SELECT * FROM filmes WHERE id='$id_film'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC)
?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>CUIDADO! ALTERAÇÕES diretas no Banco d Dados!</legend>
			<div>
				<form method="post" action="alterarfilme.php?id=<?php echo $id_film;?>" name="alteranime" enctype="multipart/form-data">
					<h2>Alterar os Filmes Anime Cadastrado</h2>
					<p>Altere apenas os campos necessários</p>
					<fieldset>
						<legend><label for="nome_film">Trocar o Nome ou Foto Miniatura?</label></legend>
						<div class="form-group">
							<label for="nome_film">Trocar o Nome?</label><br>
							<input type="text" name="nome_film" value="<?php echo $exibe['nome_film']; ?>"  class="form-control" required id="nome_film">
						</div>
						<div class="form-group">
						<label for="nomecompleto_film">Nome Completo</label><br>
						<textarea rows="5" class="form-control" name="nomecompleto_film"><?php echo $exibe['nomecompleto_film']; ?></textarea>	
						</div>
						<div class="form-group">
							<label for="fotomini_film">Escolher outra Foto Miniatura?</label><br>
							<input type="file" accept="imgs/filmes/*" class="form-control" name="fotomini_film" id="fotomini_film">
						</div>
						<div class="form-group">
							<img src="imgs/filmes/<?php echo $exibe['fotomini_film']; ?>" width="100px" >
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="genero_film">Gênero</label></legend>
						<textarea rows="3" class="form-control" name="genero_film"><?php echo $exibe['genero_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="descricao_film">Descrição</label></legend>
						<textarea rows="10" class="form-control" name="descricao_film"><?php echo $exibe['descricao_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="data_film">Data de Lançamento</label></legend>
						<textarea rows="3" class="form-control" name="data_film"><?php echo $exibe['data_film']; ?></textarea>
					</fieldset>

					<fieldset>
						<legend><label for="series_film">Links para Series - OVAS - ONAs - Especiais - Extras</label></legend>
						<textarea rows="5" class="form-control" name="series_film"><?php echo $exibe['series_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="elenco_film">Elenco - personagens</label></legend>
						<textarea rows="3" class="form-control" name="elenco_film"><?php echo $exibe['elenco_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="direcao_film">Direção - Estudio - Distribuição do Filme</label></legend>
						<textarea rows="4" class="form-control" name="direcao_film"><?php echo $exibe['direcao_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="nota_film">Nota para o Filme Anime</label></legend>
						<textarea rows="1" class="form-control" name="nota_film"><?php echo $exibe['nota_film']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="foto1_film">Trocar Foto 1 - Principal</label></legend>
						<input type="file" accept="imgs/filmes/*" class="form-control"  name="foto1_film" id="foto1_film">
						<div class="form-group">
							<img src="imgs/filmes/<?php echo $exibe['foto1_film']; ?>" width="200px">
							<p>Foto Atual</p>
						</div>
					</fieldset>	
					<fieldset>
						<legend><label for="foto2_film">Trocar Foto 2</label></legend>
						<input type="file" accept="imgs/filmes/*" class="form-control"  name="foto2_film" id="foto2_film">
						<div class="form-group">
							<img src="imgs/filmes/<?php echo $exibe['foto2_film']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto3_film">Trocar Foto 3</label></legend>
						<input type="file" accept="imgs/filmes/*" class="form-control"  name="foto3_film" id="foto3_film">
						<div class="form-group">
							<img src="imgs/filmes/<?php echo $exibe['foto3_film']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend>CERTEZA! SALVAR as Alterações!</legend>
						<button type="submit" class="red_btn"> SALVAR Alterações!</button>
					</fieldset>
				</form>
			</div>
		</fieldset>
</section>
</main>	
<?php include 'rodape.php' ?>
</body>
</html>