<?php  include('conexao.php');
$recebe_nome = $_POST['nome'];
$recebe_apelido = $_POST['apelido'];
$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];
$recebe_endereco = $_POST['endereco'];
$recebe_telefone = $_POST['telefone'];

$remover=array('-',' ','(',')');
$recebe_telefone = str_replace($remover, '', $recebe_telefone);
$consulta = $conexao->query("SELECT email from usuarios WHERE email='$recebe_email'");
//$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	if ($consulta->rowCount()==1) {
		header('location:erro1.php');
	} else {
		try {
		$incluir = $conexao->query("INSERT INTO usuarios (nome,apelido,email,senha,endereco,telefone,adm) VALUE (
		'$recebe_nome',
		'$recebe_apelido',
		'$recebe_email',
		'$recebe_senha',
		'$recebe_endereco',
		'$recebe_telefone',
		'0')");
		header('location:ok.php');
			 } catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
?>