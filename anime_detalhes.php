<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php	session_start();
		include 'conexao.php';	
		include 'navbarra.php';
	if (!empty($_GET['id'])) {
	$id_prod = $_GET['id'];
	$consulta = $conexao->query("SELECT * FROM animes WHERE id='$id_prod'");
	$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
	} else {
		header('location:index.php');
} ?>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="animação, anime, animação 3d, filmes animação, ecchi">
    <title> <?php echo $exibir['nome'];?> Detalhes</title>
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="stylesheet" type="text/css" href="css/anime_detalhes.css">
    <link href="css/lightbox.css" rel="stylesheet">
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon" sizes="128x128">
</head>
<body>

<div id="grid-cont_anime-detalhes" style="background-image: url('imgs/animes/<?php echo $exibir['foto1'];?>');"><!-- ESTE é o GRID CONTEINER -->

<header id="header_animes_detalhes"><!-- GRID ITEM header -->
	<fieldset class="fieldset_anime_detalhes">	 
		<legend><h1 class="h1_titulo"><?php echo $exibir['nome'];?></h1></legend>
		<p><?php echo nl2br($exibir['nome_completo']); ?></p>
		
	</fieldset>
<?php if ($exibir['genero']!="") { ?>
	<div id="anime-detalhes_genero">
        <fieldset class="fieldset_anime_detalhes">
	      <legend><h2 class="h2_titulo">Gêneros e Temas do Anime:</h2></legend>
	        <p><?php echo $exibir['genero'];?></p> 
       </fieldset>
    </div>
<?php } ?>
</header>
<!-- <main id="main-anime_detalhes"> Agora permanecer para background imagem -->
    <section id="grid-item_temporadas"><!-- GRID ITEM TEMPORADAS -->
        <?php if ($exibir['temporadas']!="") { ?>
		<div id="anime-detalhes_temporadas">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Séries - Filmes - OVAs - ONAs - Especiais</h2></legend>
			        <p><?php echo nl2br($exibir['temporadas']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>
        <?php if ($exibir['ovas']!="") { ?>
        <div id="anime-detalhes_ovas">
    		<fieldset class="fieldset_anime_detalhes">
		    	<legend><h2 class="h2_titulo">OVAS - ONAs - Especiais</h2></legend>
			    	<p><?php echo nl2br($exibir['ovas']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>
        <?php if ($exibir['anime_filmes']!="") { ?>
        <div id="anime-detalhes_filmes">
         	<fieldset class="fieldset_anime_detalhes">	
		    	<legend><h2 class="h2_titulo">Link para os Filmes:</h2></legend>
			        <p><?php echo $exibir['anime_filmes']; ?></p>
		    </fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="grid-item_imgs">
		    <?php if ($exibir['foto1']!="") { ?>
		    <div id="div_oculta_foto1">
        		<a href="imgs/animes/<?php echo $exibir['foto1'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
		    	    <img src="imgs/animes/<?php echo $exibir['foto1'];?>"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto2']!="") { ?>
	    	<div class="div_imgs_detal">
	    	    <a href="imgs/animes/<?php echo $exibir['foto2'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
    			    <img src="imgs/animes/<?php echo $exibir['foto2'];?>" class="img_detalhes"></a>
	    	</div>
            <?php } ?>
    	 	<?php if ($exibir['foto3']!="") { ?>
    		<div class="div_imgs_detal">
    			<a href="imgs/animes/<?php echo $exibir['foto3'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
				    <img src="imgs/animes/<?php echo $exibir['foto3']; ?>" class="img_detalhes"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto4']!="") { ?>
	    	<div class="div_imgs_detal">
	    		<a href="imgs/animes/<?php echo $exibir['foto4'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome']; ?>">
	    		<img src="imgs/animes/<?php echo $exibir['foto4'];?>" class="img_detalhes"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto5']!="") { ?>
	    	<div class="div_imgs_detal">
	    		<a href="imgs/animes/<?php echo $exibir['foto5'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
				<img src="imgs/animes/<?php echo $exibir['foto5'];?>" class="img_detalhes"></a>
	    	</div>
    		<?php } ?>
 	</section>
	<section id="section_descricao">
		<div id="descricao_enredo">
		  	<fieldset class="fieldset_anime_detalhes">
			  	<legend><h2 class="h2_titulo">Descrição e Enredo:  <?php echo $exibir['nome'];?></h2></legend>
				<p><?php echo nl2br($exibir['descricao']); ?></p>
			</fieldset>
        </div>
    </section>
    <section id="elenco_nota">
        <?php if ($exibir['elenco']!="") { ?>
        <div class="divs_detals">
		    <fieldset class="fieldset_anime_detalhes">
				<legend><h2 class="h2_titulo">Persomagens do Anime:</h2></legend>
				  	<p><?php echo nl2br($exibir['elenco']); ?></p>
			</fieldset>
        </div>
        <?php } ?>
        <?php if ($exibir['nota']!="") { ?>
		<div class="divs_detals">
		    <fieldset class="fieldset_anime_detalhes">
				<legend><h2 class="h2_titulo">Nota:</h2></legend>
				 	 <p> (0 a 10) o que achei!<br><?php echo nl2br($exibir['nota']); ?></p>
			</fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="direcao_gostei">
        <?php if ($exibir['direcao']!="") { ?>
        <div class="divs_detals">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Direção e distribuição:</h2></legend>
				    <p><?php echo nl2br($exibir['direcao']); ?></p>
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
<a href="anime_alterar.php?id=<?php echo $exibir['id']; ?>">Alterar</a>
<!--</main>-->
	<?php include 'rodape.php'; ?>
</div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/lightbox.js"></script>
</body>
</html>