<?php
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
include 'conexao.php';
$recebe_nome = $_POST['nome_film'];
$recebe_genero = $_POST['genero_film'];
$recebe_descricao = $_POST['descricao_film'];
$recebe_data = $_POST['data_film'];
$recebe_series = $_POST['series_film'];
$recebe_elenco = $_POST['elenco_film'];
$recebe_direcao = $_POST['direcao_film'];
$recebe_nota = $_POST['nota_film'];
$recebe_nome_completo_film = $_POST['nomecompleto_film'];
$recebe_fotomini = $_FILES['fotomini_film'];
$recebe_foto1 = $_FILES['foto1_film'];
$recebe_foto2 = $_FILES['foto2_film'];
$recebe_foto3 = $_FILES['foto3_film'];

$destino = "imgs/filmes/";
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_fotomini['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao2);
$img_nome2 = md5(uniqid(time())).".".$extencao2[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao3);
$img_nome3 = md5(uniqid(time())).".".$extencao3[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao4);
$img_nome4 = md5(uniqid(time())).".".$extencao4[1];

try {
	$inserir = $conexao->query("INSERT INTO filmes 
	(nome_film, 
	genero_film, 
	descricao_film, 
	data_film, 
	series_film, 
	elenco_film, 
	direcao_film, 
	nota_film, 
	nomecompleto_film, 
	fotomini_film, 
	foto1_film, 
	foto2_film, 
	foto3_film) VALUES 
	('$recebe_nome', 
	'$recebe_genero', 
	'$recebe_descricao', 
	'$recebe_data', 
	'$recebe_series', 
	'$recebe_elenco', 
	'$recebe_direcao',
	'$recebe_nota', 
	'$recebe_nome_completo_film', 
	'$img_nome1', 
	'$img_nome2', 
	'$img_nome3', 
	'$img_nome4')");

	move_uploaded_file($recebe_fotomini['tmp_name'], $destino.$img_nome1);             
	move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome2); 
	move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome3); 
	move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome4); 

	header('location:adm.php');
} catch(PDOException $e) {
	echo $e->getMessage();
} ?>