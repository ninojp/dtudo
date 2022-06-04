<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - ALTERAR os DADOS do Anime Ecchi</title>
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body><!-- GRID CONTEINER -->
<?php session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
	$id_ecchi = $_GET['id'];
	include 'conexao.php';	
	include 'navbarra.php';
	include 'header.php';
	$consulta = $conexao->query("SELECT * FROM ecchi WHERE id='$id_ecchi'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC)
?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner_form">
	<fieldset>
		<legend>CUIDADO! ALTERAÇÕES diretas no Banco d Dados!</legend>
			<div>
				<form method="post" action="alterarecchi.php?id=<?php echo $id_ecchi;?>" name="alteranime" enctype="multipart/form-data">
					<h2>Alterar Anime Ecchi Cadastrado</h2>
					<p>Altere apenas os campos necessários</p>
					<fieldset>
						<legend><label for="nome">Trocar o Nome ou Foto Miniatura?</label></legend>
						<div class="form-group">
							<label for="nome">Trocar o Nome?</label>
							<input type="text" name="nome" value="<?php echo $exibe['nome']; ?>" required id="nome">
						</div>
					<fieldset>
						<legend><label for="nome_completo_ecchi">Nome Completo ou Sinônimos:</label></legend>
						<textarea rows="5" name="nome_completo_ecchi"><?php echo $exibe['nome_completo_ecchi']; ?></textarea>
					</fieldset>

						<div class="form-group">
							<label for="fotomini">Escolher outra Foto Miniatura?</label><br>
							<input type="file" accept="imgs/ecchis/*" name="fotomini" id="fotomini">
						</div>
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['fotomini']; ?>" width="100px" >
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="genero">Gênero</label></legend>
						<textarea rows="3"name="genero"><?php echo $exibe['genero']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="descricao">Descrição</label></legend>
						<textarea rows="10" name="descricao"><?php echo $exibe['descricao']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="temporadas">Temporadas - Episodios - Datas</label></legend>
						<textarea rows="5" name="temporadas"><?php echo $exibe['temporadas']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="ovas">Links para Filmes - Especiais - Extras</label></legend>
						<textarea rows="3" name="ovas"><?php echo $exibe['ovas']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="elenco">Personagens Principais</label></legend>
						<textarea rows="3" name="elenco"><?php echo $exibe['elenco']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="direcao">Direção - Estudio -  Distribuição:</label></legend>
						<textarea rows="4" name="direcao"><?php echo $exibe['direcao']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="nota">De 1 a 10 o que eu achei do Anime:</label></legend>
						<textarea rows="1" name="nota"><?php echo $exibe['nota']; ?></textarea>
					</fieldset>
					<fieldset>
						<legend><label for="foto1">Trocar Foto 1 - Principal</label></legend>
						<input type="file" accept="imgs/ecchis/*" name="foto1" id="foto1">
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['foto1']; ?>" width="200px">
							<p>Foto Atual</p>
						</div>
					</fieldset>	
					<fieldset>
						<legend><label for="foto2">Trocar Foto 2</label></legend>
						<input type="file" accept="imgs/ecchis/*" name="foto2" id="foto2">
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['foto2']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto3">Trocar Foto 3</label></legend>
						<input type="file" accept="imgs/ecchis/*" name="foto3" id="foto3">
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['foto3']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto4">Trocar Foto 4</label></legend>
						<input type="file" accept="imgs/ecchis/*" name="foto4" id="foto4">
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['foto4']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend><label for="foto5">Trocar Foto 5</label></legend>
						<input type="file" accept="imgs/ecchis/*" name="foto5" id="foto5">
						<div class="form-group">
							<img src="imgs/ecchis/<?php echo $exibe['foto5']; ?>" width="150px">
						</div>
					</fieldset>
					<fieldset>
						<legend>CERTEZA! SALVAR as Alterações!</legend>
						<div class="form-group">
						<button type="submit" class="red_btn"> SALVAR Alterações!</button>
						</div>
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