<!DOCTYPE html>
<html>
	<head>
		<title>Ex 2 - Letra b</title>
	</head>
	<body>
        <?php
        
		$array = array(1, 2, 5, 7, 11, 2, 6, 4);    
		$numeros_primos = array();
            
		function ehPrimo($numero){
		    	$primo = True;
		        $i = $numero - 1;
                
		        if($numero != 1){
				do{
					if($numero % $i == 0 and $i != 1){
						$primo = False;
						break;
					}
					$i--;
				} while($i > 1);
	                }
                
			return $primo;
		}
            
            
		foreach ($array as &$value) {

			if (ehPrimo($value) == 1 and $value != 1){
				array_push($numeros_primos, $value);

			}
		}
           
		$i = 0;
		echo "Array de primos: </n>";

		while($i <= count($numeros_primos)){
			echo "$numeros_primos[$i] <br>";
		$i++;
		}      
        ?>
	</body>
</html>
