<!DOCTYPE html>
<html>
	<head>
		<title>Ex 2 - Letra a</title>
	</head>
	<body>
		<?php
		
			$array = array(1, 3, 7);
			$i = 0;
			
			function fatorial ($numero){
				$fatorial = 1 ;
		  
		  		while($numero >= 1){
		    			$fatorial = $fatorial * $numero;
					$numero--;
		  		}
		  	
		        return $fatorial;
		        
		    	}
		    
			$novo_array = array();
		    
			foreach ($array as &$value) {
				array_push($novo_array, fatorial($value));
			}
		    
			echo "Array com valores do fatorial: <br>";
			
			while($i < count($novo_array)){
				echo "$novo_array[$i] <br>";
		        $i++;
			}
		?>
	</body>
</html>
