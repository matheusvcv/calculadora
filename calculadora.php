<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="faixa">
			<h1>Calculadora</h1>
		</div>
		<div id="container">
			<form method="post" action="back.php">
				<p>Digite o primeiro número: <input type="number" name="num1"></p>
				
				<p>Escolha uma operação matemática:
				<select name="operacao">
					<option value="soma">Soma</option>
					<option value="subtracao">Subtracao</option>
					<option value="multiplicacao">Multiplicacao</option>
					<option value="divisao">Divisao</option>
				</select></p>
			
				<p>Digite o segundo número: <input type="number" name="num2"></p>
				<br>
				<br><input type="submit" value="calcular">
			</form>
		</div>
	</body>
</html>