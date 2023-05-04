<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="post">
		<label>Primer número:</label><br>
		<input type="number" name="num1"><br><br>
		<label>Segundo número:</label><br>
		<input type="number" name="num2"><br><br>
		<label>Operación a realizar:</label><br>
		<select name="operation">
			<option value="addition">Suma</option>
			<option value="substraction">Resta</option>
			<option value="multiplication">Multiplicación</option>
			<option value="division">División</option>
		</select>
        <br><br>
		<input type="submit" value="Calcular">
	</form>

	<?php
	if($_POST){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operation = $_POST['operation'];
		switch($operation){
			case "addition":
				echo "El resultado es: " . ($num1 + $num2);
				break;
			case "substraction":
				echo "El resultado es: " . ($num1 - $num2);
				break;
			case "multiplication":
				echo "El resultado es: " . ($num1 * $num2);
				break;
			case "division":
				if($num2 == 0){
					echo "¡Error! No se puede dividir entre cero";
				}else{
					echo "El resultado es: " . ($num1 / $num2);
				}
				break;
			default:
				echo "Operación no válida, por favor intente de nuevo";
				break;
		}
	}
	?>
</body>
</html>
