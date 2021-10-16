<!DOCTYPE html>
<html>
	<head>
		<title>Ex 1 - Letra a</title>
	</head>
	<body>
		<?php

			function fatorial ($numero)
			{
				$fatorial = 1 ;

				while($numero >= 1){
					$fatorial = $fatorial * $numero;
					$numero--;
				}
		  	
		    		echo "O fatorial é <b> $fatorial </n>" ;
		    	}
		    
		   	fatorial(4)
		  	
		?>
	    
	</body>
</html>
