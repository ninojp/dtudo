<?php
include 'conexao.php';
session_start();
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		header('location:index.php');
	}
$id_film = $_GET['id'];
$pasta = "imgs/filmes/";
$consulta = $conexao->query("SELECT * FROM filmes WHERE id='$id_film'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$excluir = $conexao->query("DELETE FROM filmes WHERE id='$id_film'");
$fotomini=$exibe['fotomini_film'];
$foto1=$exibe['foto1_film'];
$foto2=$exibe['foto2_film'];
$foto3=$exibe['foto3_film'];

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

header('location:filmes_listar.php')
?>