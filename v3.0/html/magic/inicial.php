<html>	
	<head>
		<title> Magic The Apping </title>

		<script type="text/javascript" src="../mobile.js"></script>
		<link href="../logo.css" type="text/css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="cardo.css" type="text/css" rel="stylesheet" media="all" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9731344339248002",
			enable_page_level_ads: true
			});
		</script> 
		
	</head>
		
	<body ng-app="">
		<div id="topo">
			<h1 ALIGN="center">Bem vindo ao Magic The Apping! </h1>
		</div>

		<div ng-include="'../menu.php'"> </div>


		<div id="centro">
			<?php
				$txt            = "contador.txt";
				$arquivo        = fopen($txt,"a+");
				$visitas        = fgets($arquivo,1024);
				fclose($arquivo);
				$arquivo        = fopen($txt,"r+");
				$visitas        = $visitas + 1;
				fwrite($arquivo,$visitas);
				fclose($arquivo);
				echo "Visitante Numero: $visitas";
			?>

			<ul>
				<li1><a href="dicas_g.php"><img src="http://i.imgur.com/X4o5pMj.png" height='100' width='100' . title="Dicas para Decks"/></a></li1>
		 		<li1><a href="regras_card.php"><img src="http://i.imgur.com/YPIkECH.png" height='100' width='100' . title="Regra dos efeitos "/></a></li1>

			</ul>

		</div>

		<div ng-include="'../publi_d.html'"> </div>

	</body>

<html>
