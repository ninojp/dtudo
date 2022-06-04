<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Detalhes do Filme Animação</title>
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="stylesheet" type="text/css" href="css/anime_detalhes.css">
    <link href="css/lightbox.css" rel="stylesheet">
	<script src="js/lightbox.js"></script>
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
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
<div id="grid-cont_anime-detalhes" style="background-image: url('imgs/filmes/<?php echo $exibir['foto1_film'];?>');"><!-- ESTE é o GRID CONTEINER -->

<header id="header_animes_detalhes"><!-- GRID ITEM header -->
	<fieldset class="fieldset_anime_detalhes">	 
		<legend>Nome do Filme Animação:</legend>
		<h1 id="h1_nome"><?php echo $exibir['nome_film']; ?></h1>
        <p><?php echo nl2br($exibir['nomecompleto_film']); ?></p>
	</fieldset>
</header>
<!-- <main id="main-anime_detalhes"> Agora permanecer para background imagem -->
    <section id="grid-item_temporadas"><!-- GRID ITEM TEMPORADAS -->
        <?php if ($exibir['data_film']!="") { ?>
		<div id="anime-detalhes_temporadas">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Data de lançamento do Filme:</h2></legend>
			        <p><?php echo nl2br($exibir['data_film']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>
        <?php if ($exibir['genero_film']!="") { ?>
        <div id="anime-detalhes_genero">
     	    <fieldset class="fieldset_anime_detalhes">
		        <legend><h2 class="h2_titulo">Gêneros e Temas do Filme:</h2></legend>
		            <p><?php echo $exibir['genero_film'];?></p> 
     	    </fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="grid-item_ovas"><!-- GRID ITEM OVAs -->
        <?php if ($exibir['series_film']!="") { ?>
        <div id="anime-detalhes_ovas">
    		<fieldset class="fieldset_anime_detalhes">
		    	<legend><h2 class="h2_titulo">Links para as Series - OVAS - ONAs:</h2></legend>
			    	<p><?php echo nl2br($exibir['series_film']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="grid-item_imgs">
		    <?php if ($exibir['foto1_film']!="") { ?>
		    <div id="div_oculta_foto1">
        		<a href="imgs/filmes/<?php echo $exibir['foto1_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
		    	    <img src="imgs/filmes/<?php echo $exibir['foto1_film'];?>"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto2_film']!="") { ?>
	    	<div class="div_imgs_detal">
	    	    <a href="imgs/filmes/<?php echo $exibir['foto2_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
    			    <img src="imgs/filmes/<?php echo $exibir['foto2_film'];?>" class="img_detalhes"></a>
	    	</div>
            <?php } ?>
    	 	<?php if ($exibir['foto3_film']!="") { ?>
    		<div class="div_imgs_detal">
    			<a href="imgs/filmes/<?php echo $exibir['foto3_film'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome_film'];?>">
				    <img src="imgs/filmes/<?php echo $exibir['foto3_film']; ?>" class="img_detalhes"></a>
    		</div>
            <?php } ?>
 	</section>
	<section id="section_descricao">
		<div id="descricao_enredo">
		  	<fieldset class="fieldset_anime_detalhes">
			  	<legend><h2 class="h2_titulo">Descrição do Filme e Enredo: <?php echo $exibir['nome_film'];?></h2></legend>
				<p><?php echo nl2br($exibir['descricao_film']); ?></p>
			</fieldset>
        </div>
    </section>
    <section id="elenco_nota">
        <?php if ($exibir['elenco_film']!="") { ?>
        <div class="divs_detals">
		    <fieldset class="fieldset_anime_detalhes">
				<legend><h2 class="h2_titulo">Persomagens do Filme Animação:</h2></legend>
				  	<p><?php echo nl2br($exibir['elenco_film']); ?></p>
			</fieldset>
        </div>
        <?php } ?>
        <?php if ($exibir['nota_film']!="") { ?>
		<div class="divs_detals">
		    <fieldset class="fieldset_anime_detalhes">
				<legend><h2 class="h2_titulo">Nota:</h2></legend>
				 	 <p> De 0 a 10 o que EU achei!<br><?php echo nl2br($exibir['nota_film']); ?></p>
			</fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="direcao_gostei">
        <?php if ($exibir['direcao_film']!="") { ?>
        <div class="divs_detals">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Direção e distribuição:</h2></legend>
				    <p><?php echo nl2br($exibir['direcao_film']); ?></p>
            </fieldset>
    	</div>
        <?php } ?>
        <div class="divs_detals">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Gostei Desse</h2></legend>
					<p>Colocar este na lista dos Anime que gostei</p>
					  <a href="finalizar_selec.php">
						<button class="meu_btn">Selecionar este Anime</button></a>
            </fieldset>
        </div>
	</section>	
<a href="filme_alterar.php?id=<?php echo $exibir['id']; ?>">Alterar</a>
<!--</main>-->
	<?php include 'rodape.php'; ?>
</div>
</body>
</html>