<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/geralStyle.css">
    <link rel="Stylesheet" type="text/css" href="css/bitStyle.css">
    <link rel="icon" sizes="128x128" href="imgs/favicon.ico">
    <title>Dtudo - Bitcoin</title>
</head>
<body>
<?php session_start(); include('conexao.php'); 
                       include('navbarra.php'); ?>
<nav id="nav_menu_fixo">
    <ul>
        <li><a href="#sect_bitcoin">Bitcoin o ouro digital</a></li>
        <li><a href="#sect_criptoa">Mineração de Cripto Ativos</a></li>
        <li><a href="#sect_altcoins">AltCoins</a></li>
    </ul>
</nav>
<main id="main_bit">
    <section id="sect_bitcoin">
        <header id="header_moedas_btc">
                <div class="tradingview-widget-container"><!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Tape de Cotações</span></a> por TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                "symbols": [ {
                "proName": "BITSTAMP:BTCUSD",
                "title": "BTC/USD"
                }, {
                "description": "BTC/USD Binance",
                "proName": "BINANCE:BTCUSD"
                }, {
                "description": "BTC/BRL  Binance",
                "proName": " BINANCE:BTCBRL"
                } ],
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "isTransparent": true,
                "displayMode": "adaptive",
                "locale": "br" }
            </script>
        </div>  <!-- TradingView Widget END -->
        </header>
        <article id="imgs_moedas">
            <h1 data_anima="cima_baixo">Bitcoin o ouro digital</h1>
            <img src="imgs/bitcoin_logo.png" data_anima="esq_dir">      
            <img src="imgs/bitcoin_moeda2.png" data_anima="baixo_cima">
            <img src="imgs/bitcoin_2moedas.png" data_anima="dir_esq">
        </article>
        <article id="video_bitcoin" data_anima="esq_dir">
		   <h2>Por que o bitcoin é tão revolucionário</h2>
	       <video controls="controls" poster="imgs/Poster-bitcoin-relolucionario_420.jpg">
		   <source src="media/bitcoin revolucionario_240p.mp4" type="video/mp4"> 
    <!--   <source src="media/bitcoin revolucionario_480p.mp4" type="video/mp4"> -->
            Seu navegador não pode exibir este video!<br>
			<code>:(</code>
	       </video>
        </article>
        <article id="article_text_btc" data_anima="dir_esq">
            <h2>Bitcoin:<br> Um Sistema de Dinheiro Eletrônico Peer-to-Peer</h2>
            <p>Satoshi Nakamoto<br>www.bitcoin.org<br></p>
            <p>Resumo. Uma versão puramente peer-to-peer de dinheiro eletrônico permitiria que
            pagamentos on-line fossem enviados diretamente de uma parte para outra, sem
            passar por uma instituição financeira. As assinaturas digitais fornecem parte da
            solução, mas os principais benefícios são perdidos se um terceiro confiável ainda é
            necessário para evitar o gasto duplo. Nós propomos uma solução para o problema de
            gasto duplo usando uma rede peer-to-peer. A rede insere data e hora nas transações
            através de um hash em uma cadeia contínua de prova-de-trabalho à base de hash,
            formando um registro que não pode ser alterado sem refazer a prova-de-trabalho. A
            cadeia mais longa não só serve como prova da seqüência de eventos testemunhados,
            mas prova de que ela veio do maior pool de CPUs. Enquanto a maioria do poder das
            CPUs é controlado por nós que não estão cooperando para atacar a rede, eles irão
            gerar a cadeia mais longa e superar os atacantes. A própria rede requer estrutura
            mínima. As mensagens são espalhadas em regime de melhor esforço, e nós podem
            sair e regressar a rede à vontade, aceitando a cadeia mais longa de prova-detrabalho,
            como prova do que aconteceu enquanto eles estavam fora.</p>
            <p>Traduzido por, Rodrigo Silva Pinto - http://linkedin.com/in/rodrigosilvap</p>
        </article>
    </section>
    <section id="sect_criptoa">
        <div id="div_slaveMoney" data_anima="esq_dir">
            <h1>Mineração de Cripto Ativos, Econômia Conpartilhada</h1>
            <img src="imgs/SlaveMoney.png">
        </div>
        <div id="div_graf_preco" data_anima="dir_esq">
            <iframe src="https://br.widgets.investing.com/top-cryptocurrencies?theme=darkTheme&cols=symbol,priceUsd,marketCap,priceBtc,chg24" width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Desenvolvido por <a href="https://br.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
        </div>
    </section>
    <section id="sect_altcoins">
      <div id="div_camada">
        <h1 id="h1_altcoins" data_anima="baixo_cima">AltCoins e todo seu Eco-Sistema</h1>
        <div id="div_ul_altcoins" data_anima="dir_esq">
            <ul id="ul_altcoins"><li>BitCoin</li>
                <li>Ethereum</li>
                <li>Cardano</li>
                <li>Biance Coin</li>
                <li>Tether</li>
                <li>XRP</li>
                <li>HEX</li>
                <li>DogeCoin</li>
                <li>LiteCoin</li>
                <li>BitCoin Cash</li>
            </ul>
        </div>
        <div id="div_grafic" data_anima="esq_dir">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Mercados de Criptomoedas</span></a> por TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                    "width": "100%",
                    "height": "100%",
                    "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                    "displayCurrency": "USD",
                    "colorTheme": "dark",
                    "locale": "br",
                    "isTransparent": true
                }
                </script>
            </div><!-- TradingView Widget END -->
        </div>
        <div id="div_thumbs">
            <div id="div_top5"> 
                <img class="logo_altcoins" src="imgs/ethereum.png" onclick="cliqueModal(this)" alt="Ethereum<br> Criado em 20013">
                <img class="logo_altcoins" src="imgs/Cardano-RGB_Logo-Stack-Blue.png" onclick="cliqueModal(this)" alt="<h1>Cardano</h1><br> Criado em 2013 <br>Maior Preco: <USD1>$4.000,00</USD1>">
                <img class="logo_altcoins" src="imgs/Binance_coin.png" onclick="cliqueModal(this)" alt="<h1>Binance</h1><br> Criado em 2013 <br>Maior Preco: <USD1>$4.000,00</USD1>">
                <img class="logo_altcoins" src="imgs/tether_.png" onclick="cliqueModal(this)" alt="<h1>Tether</h1><br> Criado em 2013 <br>Maior Preco: <USD1>$4.000,00</USD1>">
                <img class="logo_altcoins" src="imgs/Dash_coin.jpg" onclick="cliqueModal(this)" alt="<h1>Dash</h1><br> Criado em 2013 <br>Maior Preco: <USD1>$4.000,00</USD1>">
                <img class="logo_altcoins" src="imgs/XRP_coin.jpg" onclick="cliqueModal(this)" alt="<h1>XRP</h1><br> Criado em 2013 <br>Maior Preco: <USD1>$4.000,00</USD1>">
            </div>
        </div>
      </div>
    </section>

</main>
<?php include('rodape.php'); ?>
<div id="janelaModal" class="janelaModal escondeJanelaModal">
    <span id="btn_fechar" class="fechar_modal">X</span>
    <img id="img_modal" class="img_modal">
    <div id="txt_modal" class="txt_modal"></div>
</div>
<script type="text/javascript" src="js/bitcoinScript.js"></script>
</body>
</html>