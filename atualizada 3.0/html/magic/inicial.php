<html>	
	<head>
		<title> Magic The Apping </title>

		<script type="text/javascript" src="../mobile.js"></script>
		<link href="../logo.css" type="text/css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="cardo.css" type="text/css" rel="stylesheet" media="all" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
		
	<body>
		<div id="topo">
			<div id="logo">
				<a href="../index.html">
					<img src="../img/NDL10.jpg" alt="Logo do Site" title="NDL" width="80" height="80" />
				</a>
			</div> 
			<h1 ALIGN="center">Bem vindo ao Magic The Apping! </h1>
		</div>

		<div id="menu">

			<h3 ALIGN="center">Nossos Apps </h3>

				<ul>
					<li> <a href="/magic/inicial.php">Magic The Apping </a> </li>
					<li> <a href="/skull/skull.html">Skull Invaders</a></li>
					<li> Link pro video </li>
				</ul>

			<h3 ALIGN="center">APP por IMG </h3>

				 <ul>
                                        <li1> <a href="/magic/inicial.php"> <img src="http://i.imgur.com/ZIMl4W5.png" height='50' width='50' . title="Magic the Apping"/></a></li1>
                                        <li1> <a href="/skull/skull.html"> <img src="http://i.imgur.com/xMbgTmA.png" height='50' width='50' . title="Skull Invaders"/> </a> </li1>
                                </ul>


		</div>

		<div id="centro" align="center" >
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
		 		<li1><a href="regras_card.php"> <img src="http://i.imgur.com/YPIkECH.png" height='100' width='100' . title="Regra dos efeitos "/></a></li1>

        		</ul>

		</div>

	</body>

<html>
