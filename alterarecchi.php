<?php
include 'conexao.php';
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
/*include 'resize-class.php';*/
$id_ecchi = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM ecchi WHERE id='$id_ecchi'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

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

if (!empty($recebe_fotomini['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_fotomini['name'],$extencao1);
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1];
	$upload_fotomini=1;
} else {
	$img_nome1=$exibe['fotomini'];
	$upload_fotomini=0;
}
if (!empty($recebe_foto1['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao2);
	$img_nome2 = md5(uniqid(time())).".".$extencao2[1];
	$upload_foto1=1;
} else {
	$img_nome2=$exibe['foto1'];
	$upload_foto1=0;
}
if (!empty($recebe_foto2['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao3);
	$img_nome3 = md5(uniqid(time())).".".$extencao3[1];
	$upload_foto2=1;
} else {
	$img_nome3=$exibe['foto2'];
	$upload_foto2=0;
}
if (!empty($recebe_foto3['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao4);
	$img_nome4 = md5(uniqid(time())).".".$extencao4[1];
	$upload_foto3=1;
} else {
	$img_nome4=$exibe['foto3'];
	$upload_foto3=0;
}
if (!empty($recebe_foto4['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto4['name'],$extencao5);
	$img_nome5 = md5(uniqid(time())).".".$extencao5[1];
	$upload_foto4=1;
} else {
	$img_nome5=$exibe['foto4'];
	$upload_foto4=0;
}
if (!empty($recebe_foto5['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto5['name'],$extencao6);
	$img_nome6 = md5(uniqid(time())).".".$extencao6[1];
	$upload_foto5=1;
} else {
	$img_nome6=$exibe['foto5'];
	$upload_foto5=0;
}
try {
	$alterar = $conexao->query("UPDATE ecchi SET
	nome = '$recebe_nome',
	genero = '$recebe_genero',
	descricao = '$recebe_descricao',
	temporadas = '$recebe_temporadas',
	ovas = '$recebe_ovas',
	elenco = '$recebe_elenco',
	direcao = '$recebe_direcao',
	nota = '$recebe_nota',
	nome_completo_ecchi = '$recebe_nome_completo_ecchi',
	fotomini = '$img_nome1',
	foto1 = '$img_nome2',
	foto2 = '$img_nome3',
	foto3 = '$img_nome4',
	foto4 = '$img_nome5',
	foto5 = '$img_nome6'	
	WHERE id = '$id_ecchi'
	");
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
	
	if ($upload_foto4==1) {
		move_uploaded_file($recebe_foto4['tmp_name'], $destino.$img_nome5);             
	}
	
	if ($upload_foto5==1) {
		move_uploaded_file($recebe_foto5['tmp_name'], $destino.$img_nome6);             
	}
	header('location:ecchis_listar.php');
} catch(PDOException $e) {
	echo $e->getMessage();
}
?>