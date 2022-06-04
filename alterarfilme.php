<?php
include 'conexao.php';
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
$id_film = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM filmes WHERE id='$id_film'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

$recebe_nome = $_POST['nome_film'];
$recebe_nome_completo = $_POST['nomecompleto_film'];
$recebe_genero = $_POST['genero_film'];
$recebe_descricao = $_POST['descricao_film'];
$recebe_data = $_POST['data_film'];
$recebe_series = $_POST['series_film'];
$recebe_elenco = $_POST['elenco_film'];
$recebe_direcao = $_POST['direcao_film'];
$recebe_nota = $_POST['nota_film'];
$recebe_fotomini = $_FILES['fotomini_film'];
$recebe_foto1 = $_FILES['foto1_film'];
$recebe_foto2 = $_FILES['foto2_film'];
$recebe_foto3 = $_FILES['foto3_film'];

$destino = "imgs/filmes/";

if (!empty($recebe_fotomini['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_fotomini['name'],$extencao1);
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1];
	$upload_fotomini=1;
} else {
	$img_nome1=$exibe['fotomini_film'];
	$upload_fotomini=0;
}
if (!empty($recebe_foto1['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao2);
	$img_nome2 = md5(uniqid(time())).".".$extencao2[1];
	$upload_foto1=1;
} else {
	$img_nome2=$exibe['foto1_film'];
	$upload_foto1=0;
}
if (!empty($recebe_foto2['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao3);
	$img_nome3 = md5(uniqid(time())).".".$extencao3[1];
	$upload_foto2=1;
} else {
	$img_nome3=$exibe['foto2_film'];
	$upload_foto2=0;
}
if (!empty($recebe_foto3['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao4);
	$img_nome4 = md5(uniqid(time())).".".$extencao4[1];
	$upload_foto3=1;
} else {
	$img_nome4=$exibe['foto3_film'];
	$upload_foto3=0;
}
try {
	$alterar = $conexao->query("UPDATE filmes SET
	nome_film = '$recebe_nome',
	nomecompleto_film = '$recebe_nome_completo',
	genero_film = '$recebe_genero',
	descricao_film = '$recebe_descricao',
	data_film = '$recebe_data',
	series_film = '$recebe_series',
	elenco_film = '$recebe_elenco',
	direcao_film = '$recebe_direcao',
	nota_film = '$recebe_nota',
	fotomini_film = '$img_nome1',
	foto1_film = '$img_nome2',
	foto2_film = '$img_nome3',
	foto3_film = '$img_nome4'
	WHERE id = '$id_film'");
	
	if ($upload_fotomini==1) {
		move_uploaded_file($recebe_fotomini['tmp_name'], $destino.$img_nome1);             
	}
	if ($upload_foto1==1) {
		move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome2);             
	}
	if ($upload_foto2==1) {
		move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome3);             
	}
	if ($upload_foto3==1) {
		move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome4);             
	}
	header('location:filmes_listar.php');
} catch(PDOException $e) {
	echo $e->getMessage();
} ?>