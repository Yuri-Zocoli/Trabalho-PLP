<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta charset="utf-8" />
	    <title>Video Aula</title>
	    <link rel="stylesheet" type="text/css" href="estilo.css" />
	</head>
	<body>
		<div id ="wrap">
			<header>
				<div id = "Titulo">
					<h1> Basicos da Vida </h1> 
				</div>
				<div id = "sideNav">
					<nav>
						<ul>
							<li><a href="Home Page.html">Home</a></li>
							<li><a href="Introdução.html">Introdução</a></li>
							<li><a href="Video Aula.html">Video Aula</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</body>
		<section>
			<div id="quest">
				<?php
					$questao1 = $_POST['questao1'];
					$questao2 = $_POST['questao2'];
					$questao3 = $_POST['questao3'];
						
						 
					$resposta1 = "b";
					$resposta2 = "a";
					$resposta3 = "c";
						 
						 
					$acertou = 0;
					$errou = 0;

					if (!isset($questao1) or !isset($questao2) or !isset($questao3)){
						echo "<br>Você não respondeu todo o questionario, por favor volte a pagina da video aula e o refaça<br><br><br>";
					}
					else{
						if ($questao1 == $resposta1){
							echo "Questao 1 correta<br><br>";
							$acertou++;
						}
						else{
							echo "Questao 1 errada<br><br>";
						}
						 
						if ($questao2 == $resposta2){
							echo "Questao 2 correta<br><br>";
							$acertou++;
						}
						else{
							echo "Questao 2 errada<br><br>";
						}
						 
						if ($questao3 == $resposta3){
							echo "Questao 3 correta<br><br>";
							$acertou++;
						}
						else{
							echo "Questao 3 errada<br><br>";
						}
						echo "Você acertou $acertou das 3 questões <br><br>";
						if($acertou == 3){
							echo " Parabens agora você podera beber sua água sem nenhuma preocupação, caso queira vejá o video a baixo para reforçar a materia.<br><br>";
						}else if($acertou == 2){
							echo " Você foi bem mas, cuidado, algo ainda pode dar errado, recomendamos que vejá o video abaixo para sanar algumas de suas duvidas.<br><br>";
						}else if($acertou == 1){
							echo " Você pode até tentar mas a chanse de algo dar errado é grande, vejá o video abaixo para sanar algumas de suas possiveis duvidas.<br><br>";
						}else{
							echo " Se você presa por sua vida não beba agua por enquanto,é recomendado que vejá a aula novamente e vejá o video abaixo.<br><br>";
						}
					}
				?>
				<div id = "videoAux">
					<div id ="video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/V3_dH4NrAiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
				</div>
				<footer>
					<br><a href="Home Page.html">Voltar ao inicio</a>
				</footer>
			</div>
		</section>
	</div>
</html>