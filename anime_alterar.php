<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - ALTERAR os DADOS do Anime</title>
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!-- GRID CONTEINER -->
<?php session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
	$id_prod = $_GET['id'];
	include 'conexao.php';	
	include 'navbarra.php';
	include 'header.php';
	$consulta = $conexao->query("SELECT * FROM animes WHERE id='$id_prod'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC)
?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>CUIDADO! ALTERAÇÕES diretas no Banco d Dados!</legend>
			<div>
				<form method="post" action="alteraranime.php?id=<?php echo $id_prod;?>" name="alteranime" enctype="multipart/form-data">
					<h2>Alterar Anime Cadastrado</h2>
					<p>Altere apenas os campos necessários</p>
					<fieldset>
						<legend><label for="nome">Trocar o Nome do Anime</label></legend>
						<div class="form-group">
							<label for="nome">Trocar o Nome?</label><br>
							<input type="text" name="nome" value="<?php echo $exibe['nome']; ?>"  class="form-control" required id="nome">
						</div>
						<div class="form-group">
						<label for="nome_completo">Nome Completo</label><br>
						<textarea rows="5" class="form-control" name="nome_completo"><?php echo $exibe['nome_completo']; ?></textarea>	
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="genero">Gênero</label></legend>
						<textarea rows="2" class="form-control" name="genero"><?php echo $exibe['genero']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="descricao">Descrição</label></legend>
						<textarea rows="10" class="form-control" name="descricao"><?php echo $exibe['descricao']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="temporadas">Séries - Episódios - Datas</label></legend>
						<textarea rows="15" class="form-control" name="temporadas"><?php echo $exibe['temporadas']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="ovas">OVAS - ONAs - Especiais - Extras</label></legend>
						<textarea rows="5" class="form-control" name="ovas"><?php echo $exibe['ovas']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="anime_filmes">Links para pagina Filmes</label></legend>
						<textarea rows="3" class="form-control" name="anime_filmes"><?php echo $exibe['anime_filmes']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="elenco">personagens Principais</label></legend>
						<textarea rows="3" class="form-control" name="elenco"><?php echo $exibe['elenco']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="nota">Nota para o Anime</label></legend>
						<textarea rows="1" class="form-control" name="nota"><?php echo $exibe['nota']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="fotomini">Trocar a Imagen Miniatura:</label></legend>
					<div class="form-group">
							<input type="file" accept="imgs/animes/*" class="form-control" name="fotomini" id="fotomini">
						</div>
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['fotomini']; ?>" width="100px" >
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto1">Trocar Imagen 1 (Fundo)</label></legend>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto1" id="foto1">
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['foto1']; ?>" width="200px">
							<p>Foto Atual</p>
						</div>
					</fieldset>	
					<fieldset>
						<legend><label for="foto2">Trocar Imagen 2</label></legend>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto2" id="foto2">
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['foto2']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto3">Trocar Imagen 3</label></legend>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto3" id="foto3">
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['foto3']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto4">Trocar Imagen 4</label></legend>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto4" id="foto4">
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['foto4']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto5">Trocar Imagen 5</label></legend>
						<input type="file" accept="imgs/animes/*" class="form-control"  name="foto5" id="foto5">
						<div class="form-group">
							<img src="imgs/animes/<?php echo $exibe['foto5']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="direcao">Direção - Produção - Estúdio...</label></legend>
						<textarea rows="3" class="form-control" name="direcao"><?php echo $exibe['direcao']; ?></textarea>
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
<!-- <script>
$(document).ready(function(){
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
});
</script> -->