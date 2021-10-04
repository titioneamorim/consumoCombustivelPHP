<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<main>
		<div class="painel">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no valor do combustivel, tipo dele e 
					no consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis que serão demonstrados aqui são:</p>
				<ul>
					<li><b>Álcool</b> </li>
					<li><b>Díesel</b> </li>
					<li><b>Gasolina</b> </li>
				</ul>
			</div>
		</div>
		
		<div class="painel">
			<h2>Cálculo do valor em R$ do consumo do seu veículo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">
					<select name=combustivel>
						<option>Selecione o combustível</option>
						<option value="g">Gasolina</option>
						<option value="a">Alcool</option>
						<option value="d">Diesel</option>
					</select>
					<br>
					<br>
					<label for="valor">Valor do combustivel</label>
					<input type="number" class="campoTexto"  name="valor" step="any" required/>

					<label for="distancia">Distância em Km a ser percorrida</label>
					<input type="number" class="campoTexto"  name="distancia" required/>

					<label for="autonomia">Consumo de combustível do veículo em Km/l</label>
					<input type="number" class="campoTexto" name="autonomia" required/>

					<button class="botao" type="submit">Calcular</button>
				</form>				
			</div>
		</div>		
				
	</main>	
</body>
</html>