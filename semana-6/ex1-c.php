<!DOCTYPE html>
<html>
	<head>
		<title>Ex 1 - Letra c</title>
	</head>
	<body>
		<?php
		
			function numPerfeito ($numero)
			{
				$i = $numero - 1;
		  		$_soma = 0;
		       	$perfeito = False;
		       	
		  		while($i >= 1){
			        	if ($numero % $i == 0){
				            	$soma = $soma + $i;
					}
					$i--;
			        }
	        
				if ($soma == $numero){
					echo "O número $numero é perfeito! </n>";
				}
				
				else{
					echo "O número $numero não é perfeito! </n>";
				}
			}

			numPerfeito(5);
			numPerfeito(6);
		  	
		?>
	</body>
</html>
