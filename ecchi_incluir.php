<?php
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
include 'conexao.php';
$recebe_nome = $_POST['nome'];
$recebe_genero = $_POST['genero'];
$recebe_descricao = $_POST['descricao'];
$recebe_temporadas = $_POST['temporadas'];
$recebe_ovas = $_POST['ovas'];
$recebe_elenco = $_POST['elenco'];
$recebe_direcao = $_POST['direcao'];
$recebe_nota = $_POST['nota'];
$recebe_nome_completo_ecchi = $_POST['nome_completo_ecchi'];
$recebe_fotomini = $_FILES['fotomini'];
$recebe_foto1 = $_FILES['foto1'];
$recebe_foto2 = $_FILES['foto2'];
$recebe_foto3 = $_FILES['foto3'];
$recebe_foto4 = $_FILES['foto4'];
$recebe_foto5 = $_FILES['foto5'];

$destino = "imgs/ecchis/";
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_fotomini['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao2);
$img_nome2 = md5(uniqid(time())).".".$extencao2[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao3);
$img_nome3 = md5(uniqid(time())).".".$extencao3[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao4);
$img_nome4 = md5(uniqid(time())).".".$extencao4[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto4['name'],$extencao5);
$img_nome5 = md5(uniqid(time())).".".$extencao5[1];
preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto5['name'],$extencao6);
$img_nome6 = md5(uniqid(time())).".".$extencao6[1];

try {
	$inserir=$conexao->query("INSERT INTO ecchi (nome, genero, descricao, temporadas, ovas, elenco, direcao, nota, nome_completo_ecchi, fotomini, foto1, foto2, foto3, foto4, foto5) VALUES ('$recebe_nome', '$recebe_genero', '$recebe_descricao', '$recebe_temporadas', '$recebe_ovas', '$recebe_elenco', '$recebe_direcao', '$recebe_nota', '$recebe_nome_completo_ecchi', '$img_nome1', '$img_nome2', '$img_nome3', '$img_nome4', '$img_nome5', '$img_nome6')");
	move_uploaded_file($recebe_fotomini['tmp_name'], $destino.$img_nome1);             
	move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome2); 
	move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome3); 
	move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome4); 
	move_uploaded_file($recebe_foto4['tmp_name'], $destino.$img_nome5); 
	move_uploaded_file($recebe_foto5['tmp_name'], $destino.$img_nome6);
	header('location:adm.php');
} catch(PDOException $e) {
	echo $e->getMessage();
} ?>