<main id="main_princ"><!--GRID ITEM -->
<?php
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
	<section id="sect_conteiner_form">
		<fieldset>
			<legend><h1>Animes - Votar</h1></legend>
				<div class="form-group">
					<img src="animes/<?php echo $exibe['fotomini']; ?>" class="img-responsive">
				</div>
				<div class="form-group">
					<h4 style="padding-top:20px"><?php echo $nome; ?></h4>
				</div>	
				<div class="form-group">
					<h4 style="padding-top:20px">Nota atual <?php echo $nota; ?></h4>
				</div>		
				<div class="form-group">
					<h4><?php echo $qnt; ?> </h4>
				</div>
				<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
					<a href="removeCarrinho.php?id=<?php echo $id;?>">	
						<button class="meu_btn">	</button></a>
				</div> 
		</fieldset>
	</section>
<?php } ?>
</main>	