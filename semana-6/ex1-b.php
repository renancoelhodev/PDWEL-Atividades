<!DOCTYPE html>
<html>
	<head>
		<title>Ex 1 - Letra b</title>
	</head>
	<body>
		<?php
		    
		    function ehPrimo($numero)
				{
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
		        
		        if ($primo){
		        	echo "O número $numero é primo! </n>";
		        }
		        else{
		        	echo "O número $numero não é primo! </n>";
		        }
		    }
		    
		    ehPrimo(6);
		    ehPrimo(2);
		    ehPrimo(23);
		   
		?>
	</body>
</html>
