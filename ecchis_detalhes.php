<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo - Detalhes do Anime Ecchi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
	<link rel="stylesheet" type="text/css" href="css/geralStyle.css">
	<link rel="stylesheet" type="text/css" href="css/anime_detalhes.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
	<link href="css/lightbox.css" rel="stylesheet">
	<script src="js/lightbox.js"></script>
</head>
<body>
<?php	session_start();
		include 'conexao.php';	
		include 'navbarra.php';
	if (!empty($_GET['id'])) {
	$id_ecchi = $_GET['id'];
	$consulta = $conexao->query("SELECT * FROM ecchi WHERE id='$id_ecchi'");
	$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
	} else {
		header('location:index.php');
} ?>
<div id="grid-cont_anime-detalhes" style="background-image: url('imgs/ecchis/<?php echo $exibir['foto1'];?>');"><!-- ESTE é o GRID CONTEINER -->

<header id="header_animes_detalhes"><!-- GRID ITEM header -->
	<fieldset class="fieldset_anime_detalhes">	 
		<legend><h1 class="h1_titulo"><?php echo $exibir['nome'];?></h1></legend>
		<p><?php echo nl2br($exibir['nome_completo_ecchi']); ?></p>
	</fieldset>
	<?php if ($exibir['genero']!="") { ?>
      <div id="anime-detalhes_genero">
        <fieldset class="fieldset_anime_detalhes">
	      <legend><h2 class="h2_titulo">Gêneros do Anime Ecchi:</h2></legend>
	         <p><?php echo $exibir['genero'];?></p> 
        </fieldset>
      </div>
    <?php } ?>
</header>
<!-- <main id="main-anime_detalhes"> Agora background imagem -->
    <section id="grid-item_temporadas"><!-- GRID ITEM TEMPORADAS -->
        <?php if ($exibir['temporadas']!="") { ?>
		<div id="anime-detalhes_temporadas">
            <fieldset class="fieldset_anime_detalhes">
			    <legend><h2 class="h2_titulo">Data de lançamento das Temporadas:</h2></legend>
			        <p><?php echo nl2br($exibir['temporadas']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>

    </section>
    <section id="grid-item_ovas"><!-- GRID ITEM OVAs -->
        <?php if ($exibir['ovas']!="") { ?>
        <div id="anime-detalhes_ovas">
    		<fieldset class="fieldset_anime_detalhes">
		    	<legend><h2 class="h2_titulo">Links - Filmes - OVAS - ONAs - Especiais - Extras:</h2></legend>
			    	<p><?php echo nl2br($exibir['ovas']); ?></p>
		    </fieldset>
        </div>
        <?php } ?>
    </section>
    <section id="grid-item_imgs">
		    <?php if ($exibir['foto1']!="") { ?>
		    <div id="div_oculta_foto1">
        		<a href="imgs/ecchis/<?php echo $exibir['foto1'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
		    	    <img src="imgs/ecchis/<?php echo $exibir['foto1'];?>"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto2']!="") { ?>
	    	<div class="div_imgs_detal">
	    	    <a href="imgs/ecchis/<?php echo $exibir['foto2'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
    			    <img src="imgs/ecchis/<?php echo $exibir['foto2'];?>" class="img_detalhes"></a>
	    	</div>
            <?php } ?>
    	 	<?php if ($exibir['foto3']!="") { ?>
    		<div class="div_imgs_detal">
    			<a href="imgs/ecchis/<?php echo $exibir['foto3'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
				    <img src="imgs/ecchis/<?php echo $exibir['foto3']; ?>" class="img_detalhes"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto4']!="") { ?>
	    	<div class="div_imgs_detal">
	    		<a href="imgs/ecchis/<?php echo $exibir['foto4'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome']; ?>">
	    		<img src="imgs/ecchis/<?php echo $exibir['foto4'];?>" class="img_detalhes"></a>
    		</div>
            <?php } ?>
    		<?php if ($exibir['foto5']!="") { ?>
	    	<div class="div_imgs_detal">
	    		<a href="imgs/ecchis/<?php echo $exibir['foto5'];?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome'];?>">
				<img src="imgs/ecchis/<?php echo $exibir['foto5'];?>" class="img_detalhes"></a>
	    	</div>
    		<?php } ?>
 	</section>
		<section id="section_descricao">
		<div id="descricao_enredo">
		  	<fieldset class="fieldset_anime_detalhes">
			  	<legend><h2 class="h2_titulo">Descrição do Anime e Enredo: <?php echo $exibir['nome'];?></h2></legend>
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
				 	 <p> De 0 a 10 o EU que achei!<br><?php echo nl2br($exibir['nota']); ?></p>
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
</section>
<a href="ecchi_alterar.php?id=<?php echo $exibir['id']; ?>">Alterar</a>
</main>
	<?php include 'rodape.php'; ?>
</section>
</body>
</html>