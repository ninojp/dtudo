<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--temporariamente para limpar o cache no HTTP 1.0 -->
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtudo 2021</title>
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css">
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
</head>
<body>
<div class="grid-conteiner_index"><!--GRID CONTEINER -->
<?php session_start();
  	  include('conexao.php');
      include('navbarra.php');/* GRID ITEM, pagina externa navbarra.php */
?>  
<header id="header_cabec"><!-- GRID ITEM cabecalho -->
        <div id="div_text_esq">
            Uma breve descrição do site!
        </div>
        <div id="div_img_logo">
            <img id="img_logo_grand" src="imgs/DTUDO-Logo_2021_303x100.jpg">
        </div>
        <div id="div_text_dir">
            Mais Informações estaram aqui!
        </div>
</header>
<main id="main_princ"><!--GRID ITEM e também um GRID CONTEINER-->
<!--    <img id="img_fundo_main" src="imgs/software_1200px.jpg">-->
        <div class="divs_main" id="div_img_bitcoin" onMouseOver="mudaFoto('imgs/bitcoin_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')" >
            <a href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <img src="imgs/bitcoin_logo_text_300.png" id="img_bitcoin" title="Informação Sobre CriptoAtivos em Geral"></a>
        </div>
        <div class="divs_main" id="div_img_ti" onMouseOver="mudaFoto('imgs/TI_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')">
            <a href="https://localhost/dtudo/t_i.php" target="_new" title="Pagina sobre Tecnologia da Informação">
                <img src="imgs/TI_link.png" id="img_ti" title="Informação sobre Tecnologia da Informação"></a>
        </div>
        <!-- <div class="divs_main" id="div_img_centro" >
           <img src="imgs/terra_250px.png" alt="Terra imagem centro" id="img_centro">
        </div> -->
        <div class="divs_main" id="div_img_animes" onMouseOver="mudaFoto('imgs/animes_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')">
            <a href="https://localhost/dtudo/animes.php" target="_new" title="Pagina sobre Animes em Geral">
                <img src="imgs/animes_personagem_400px.png" id="img_animes" title="Todos os Animes que já assisti"> </a>
        </div>
        <div class="divs_main" id="div_img_musicas" onMouseOver="mudaFoto('imgs/musica_text_centro.png')" onMouseOut="mudaFoto('imgs/terra_250px.png')">
            <a href="https://localhost/dtudo/musica.php" target="_new" title="Pagina sobre Musica">
                <img src="imgs/NotaMusica_200px.png" id="img_musicas"></a>
        </div>
    </main>
    <?php include('rodape.php'); ?>
<script>
//    function mudaFoto (foto) { document.getElementById("img_centro").src=foto; }
</script>
</div>
</body>
</html>