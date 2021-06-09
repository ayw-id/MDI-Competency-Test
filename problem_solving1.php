<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- Create a function to search a number in a sorted array.</p>
		<p>- Return the index of searched number or return -1, if it doesn't match any searched item. Example function search([0,2,5,6,8,11,19], 8) -> return 4</p>
		<p>- What is the complexity of your code? can mention the method that you do.</p>
  		<?php
  			function search($var_array, $var_int){
				$index = -1;
				foreach($var_array as $key => $value){
					if($value == $var_int){
						$index = $key;
					}
				}
				return $index;
			}
			
  		?>
  		<h3>Result :</h3>
  		<p>Index : <?=search([1,2,3,4,5], 4)?></p>
  		<p>Simple search that will pass the index of the array ($var_array) if the value is matched with the given number in the second variable ($var_int).
But before the search process run, the $index variable should be initialized with -1. So even if there is no matching index, the function will still return a default value, which is -1</p>
  		
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

