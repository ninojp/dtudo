<?php
include 'conexao.php';
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
$id_ecchi=$_GET['id'];
$pasta = "imgs/ecchis/";
$consulta = $conexao->query("SELECT * FROM ecchi WHERE id='$id_ecchi'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$excluir = $conexao->query("DELETE FROM ecchi WHERE id='$id_ecchi'");
$fotomini=$exibe['fotomini'];
$foto1=$exibe['foto1'];
$foto2=$exibe['foto2'];
$foto3=$exibe['foto3'];
$foto4=$exibe['foto4'];
$foto5=$exibe['foto5'];
if ($fotomini!="") {
	unlink($pasta.$fotomini);
}
if ($foto1!="") {
	unlink($pasta.$foto1);
}
if ($foto2!="") {
	unlink($pasta.$foto2);
}
if ($foto3!="") {
	unlink($pasta.$foto3);
}
if ($foto4!="") {
	unlink($pasta.$foto4);
}
if ($foto5!="") {
	unlink($pasta.$foto5);
}
header('location:ecchis_listar.php')
?>