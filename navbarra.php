<head>
    <link rel="stylesheet" type="text/css" href="css/navStyle.css">
</head>
<nav id="nav_barra">
    <section id="section_logo_login">
        <a href="https://localhost/dtudo/index.php" target="_new" title="Index ATUAL">
            <img class="img_logo_peq" src="imgs/Logo-Dtudo_30px.png">
        </a>
        <ol id="ol_login">
            <?php  if (empty($_SESSION['id'])) { ?> 
                <li class="li_logins"><a href="login.php" alt="Link Log" title="Link Log">Fazer Login</a></li>
            <?php } else {
			    if($_SESSION['adm']==0) {
			    $consulta_user=$conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
			    $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
	        ?>
                <li class="li_logins"><a href="areaUser.php"><?php echo $exibe_user['nome']; ?></a></li>
	            <li class="li_logins"><a href="sair.php"> Logout</a></li>
	        <?php } else { ?>
		  		    <li class="li_logins"><a href="adm.php"> NinoJP</a></li>
		  	 	    <li class="li_logins"><a href="sair.php"> Logout</a></li>
	        <?php }
	        }?>
        </ol>
    </section>
    <section id="section_menu">
            <ol id="ol_menu">
            <a class="meu_btn" href="https://localhost/dtudo/bitcoin.php" target="_new" title="Pagina sobre Bitcoin">
                <li>BitCoin$</li></a>
            <a class="meu_btn" href="https://localhost/dtudo/t_i.php" target="_new" title="Informção sobre T.I">
                <li>T.I</li></a>
            <a class="meu_btn" href="https://localhost/dtudo/animes.php" target="_new" title="Pagina sobre Animes em Geral">
                <li>Animes</li></a>
            <a class="meu_btn" href="https://localhost/dtudo/musica.php" target="_new" title="Hip Hop - Reggae - Rock">
                <li>Musica</li></a>
            </ol>
    </section>
    <section id="section_busca">
            <form method="get" action="form_busca.php" name="form_busca" id="form_busca" role="search">
                <input id="input_busca" type="text" name="input_busca" placeholder="Buscar no site">
                <button id="button_submit" type="submit" name="input_submit" class="meu_btn">Pesquisar</button>
            </form>
    </section>
</nav>