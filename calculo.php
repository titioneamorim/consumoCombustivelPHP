<?php

if($_POST) {

	$distancia = $_POST['distancia'];
	$autonomia = $_POST['autonomia'];
	$comb = $_POST['combustivel'];

	$valorComb = "";
	$mensagem = ""; 

	
		
	} 



	if (($comb != "" && ($comb != "Selecione o combustível"))){
	if (is_numeric($autonomia) && is_numeric($distancia)){
		if (($distancia > 0) && ($autonomia > 0)) {

			if($comb == "g"){
				$valorComb = 5.49;
				$consumoGasolina = ($distancia / $autonomia ) * $valorComb;
				$consumoGasolina = number_format($consumoGasolina,2,',','.');

				$mensagem.= "<div class='sucesso'>";
				$mensagem.= "O valor total gasto será de:";
				$mensagem.= "<ul>";
				$mensagem.= "<li><b>Gasolina:</b> R$ ".$consumoGasolina."</li>";
				$mensagem.= "</ul>";
				$mensagem.= "</div>";

			} 
			if($comb == "a"){
				$valorComb = 5.09;
				$consumoAlcool = ($distancia / $autonomia ) * $valorComb;
				$consumoAlcool = number_format($consumoAlcool,2,',','.');
				
				$mensagem.= "<div class='sucesso'>";
				$mensagem.= "O valor total gasto será de:";
				$mensagem.= "<ul>";
				$mensagem.= "<li><b>Álcool:</b> R$ ".$consumoAlcool."</li>";
				$mensagem.= "</ul>";
				$mensagem.= "</div>";
			}
			if($comb == "d"){
				$valorComb = 4.90;
				$consumoDiesel = ($distancia / $autonomia ) * $valorComb;
				$consumoDiesel = number_format($consumoDiesel,2,',','.');
	
				$mensagem.= "<div class='sucesso'>";
				$mensagem.= "O valor total gasto será de:";
				$mensagem.= "<ul>";
				$mensagem.= "<li><b>Diesel</b>: R$ ".$consumoDiesel."</li>";
				$mensagem.= "</ul>";
				$mensagem.= "</div>";
			}
			
		} else {
			$mensagem.= "<div class='erro'>";
			$mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
			$mensagem.= "</div>";
		}
	} else {
		$mensagem.= "<div class='erro'>";
		$mensagem.= "<b>O valor recebido não é numérico</b>";
		$mensagem.= "</div>";
	}
} else {
	$mensagem.= "<div class='erro'>";
		$mensagem.= "<b>O tipo de combustível deve ser selecionado.</b>";
		$mensagem.= "</div>";
}

?>

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
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel"> 
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>            
		</div>  
	</main>  
</body>
</html>