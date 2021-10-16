<!DOCTYPE html>
<html>
	<head>
		<title>Ex 2 - Letra c</title>
	</head>
	<body>
        <?php
        
		$array = array(2, 4, 6, 10, 14, 18, 20, 24, 28);    

		$numeros_perfeitos = array();
		function numCompostos ($numero)
		{
			$i = $numero - 1;
  			$soma = 0;
		        $perfeito = False;
		        
  			while($i >= 1){
		        	if ($numero % $i == 0){
            				$soma = $soma + $i;
				}
				$i--;
			}
        
			if ($soma == $numero){
				$perfeito = True;
			}
  	
			return $perfeito;
		}

 
			            
		foreach ($array as &$value) {
			if (numCompostos($value)){
				array_push($numeros_perfeitos, $value);
			}
		}

		$i = 0;
		
		echo "Números perfeitos encontrados: <br>";
		
		while($i <= count($numeros_perfeitos)){
			echo "$numeros_perfeitos[$i] <br>";
			$i++;
		}
        ?>
    
</body>
</html>
