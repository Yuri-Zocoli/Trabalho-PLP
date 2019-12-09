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
			<div id="videoAux">
				<div id="video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/bCkCWnmAD-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<section>
				<div id="quest">
					<form id="questionario" name="questionario" method="post" action="Resultado.php">
						<p>
							1° assinale a alternativa correta:
							<br><label>
								<input type="radio" name="questao1" value="a">A - Copo
							</label>
							<br><label>
								<input type="radio" name="questao1" value="b">B - Agua
							</label>
							<br><label>
								<input type="radio" name="questao1" value="c">C - Torneira
							</label>
							<br><label>
								<input type="radio" name="questao1" value="d">D - Beber
							</label>
							<br>
							<br>2° assinale a alternativa correta:
							<br><label>
								<input type="radio" name="questao2" value="a">A - Copo
							</label>
							<br><label>
								<input type="radio" name="questao2" value="b">B - Agua
							</label>
							<br><label>
								<input type="radio" name="questao2" value="c">C - Torneira
							</label>
							<br><label>
								<input type="radio" name="questao2" value="d">D - Beber
							</label>
							<br>
							<br>3° assinale a alternativa correta:
							<br><label>
								<input type="radio" name="questao3" value="a">A - Copo
							</label>
							<br><label>
								<input type="radio" name="questao3" value="b">B - Agua
							</label>
							<br><label>
								<input type="radio" name="questao3" value="c">C - Torneira
							</label>
							<br><label>
								<input type="radio" name="questao3" value="d">D - Beber
							</label>
							<br>
							<br><input type="submit" name="enviar" value="enviar"/>
						</p>
					</form>
					<?php
						
						$questao1 = $_POST['questao1'];
						$questao2 = $_POST['questao2'];
						$questao3 = $_POST['questao3'];
						 
						$resposta1 = "a";
						$resposta2 = "a";
						$resposta3 = "a";
						 
						 
						$acertou = 0;
						$errou = 0;
						 
						if ($questao1 == $resposta1){
							echo "Questao 1 correta<br>";
							$acertou++;
						}
						else{
							echo "Questao 1 errada<br>";
							$errou++;
						}
						 
						if ($questao2 == $resposta2){
							echo "Questao 2 correta<br>";
							$acertou++;
						}
						else{
							echo "Questao 2 errada<br>";
							$errou++;
						}
						 
						if ($questao3 == $resposta3){
							echo "Questao 3 correta<br>";
							$acertou++;
						}
						else{
							echo "Questao 3 errada<br>";
							$errou++;
						}
						
						echo "Você acertou $acertou das 3 questões <br>";
						if($acertou == 3){
							echo " Parabens agora você podera beber sua agua sem nenhuma preocupação :3";
						}else if($acertou == 2){
							echo " Você foi bem mas cuidado, você ainda pode se engasgar";
						}else if($acertou == 1){
							echo " Você pode até tentar mas a chanse de se engasgar é grande";
						}else{
							echo " Se voce presa por sua vida não beba agua por enquanto,é recomendado que vejá a aula novamente";
						}
					?>
				</div>
			</section>
		</section>
	</div>
</html>