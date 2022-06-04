<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
    <title>Dtudo - Hip Hop - Reggae - Rock</title>
</head>
<body> <!--GRID CONTEINER -->
    <?php session_start();
            include 'conexao.php';
            include 'navbarra.php';
            include 'header.php';   ?>
<main id="main_princ"><!--GRID ITEM -->
<section id="sect_conteiner">
	<div style="width: 500px; height: 500px; border: 1px solid #fff;">
        Aqui estará listado todos os meus CDs sobre Hip Hop, Reggae e Rock, nacional e internacional! 
    </div>
</section>
</main>
    <?php include('rodape.php'); ?>
</body>
</html>