<?php

include "calculadora.php";

$num1 = $_POST['num1'];

$num2 = $_POST['num2'];

$operacao = $_POST['operacao'];

	if($operacao == 'soma'){
		
		$resultado = $num1 + $num2;


	} else if($operacao == 'subtracao') {

		$resultado = $num1 - $num2;


	} else if($operacao == 'multiplicacao'){

		$resultado = $num1 * $num2;


	} else if($operacao == 'divisao'){

		$resultado = $num1 / $num2;

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

	<div id="faixa">
		<h4>Resposta: <?php echo $resultado; ?></h4>

		<p>O resultado da <strong><?php echo $operacao; ?></strong> entre <strong><?php echo $num1; ?></strong> e <strong><?php echo $num2; ?></strong> é <strong><?php echo $resultado; ?></strong>. </p>
	</div>
	</body>
</html>
