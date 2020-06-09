<?php

	// Entrada
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$operacao = $_POST['operacao'];

	// Processamento
	switch($operacao) {
		
		case '+': $resultado = $valor1 + $valor2;
				  echo "Resultado: $resultado";
				  break;
		
		case '-': $resultado = $valor1 - $valor2;
				  echo "Resultado: $resultado";
				  break;
		
		case '*': $resultado = $valor1 * $valor2;
				 echo "Resultado: $resultado";
				 break;
	}

?>