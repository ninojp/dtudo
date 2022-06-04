<div class="container-fluid">
	<div class="row text-center" style="margin-top: 15px;">
		<h1>Dtudo - Animes - Votar</h1>
	</div>
	<?php
	session_start();
	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();
	}
	$total = null;
    foreach ($_SESSION['carrinho'] as $id => $qnt)  {
    $consulta = $conexao->query("SELECT * FROM animes WHERE id='$id'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	$nome = $exibe['nome'];
    $nota = number_format(($exibe['nota']),2,',','.');
    $total += $exibe['nota'] * $qnt;
	
	?>
	<div>
		<div class="form-group">
			<img src="animes/<?php echo $exibe['fotomini']; ?>">
		</div>
		<div class="form-group">
			<h4><?php echo $nome; ?></h4>
		</div>	
		<div class="form-group">
			<h4>Nota atual <?php echo $nota; ?></h4>
		</div>		
		<div class="form-group">
			<h4><?php echo $qnt; ?> </h4>
		</div>
		<div class="form-group">
		<a href="removeCarrinho.php?id=<?php echo $id;?>">	
		<button class="meu_btn">remover carrinho</button></a>
		</div> 
	</div>	
	<?php } ?>