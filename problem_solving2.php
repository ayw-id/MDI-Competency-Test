<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- Create a function to combine 2 sorted array become 1 sorted array or a new sorted  array. </p>
		<p>- what kind of result if we input an empty array? </p>
		<p>- Suggest what kind of things that we need to test? </p>
  		<?php
  			function do_sorting_please($var1, $var2){
				//Assuming both variables are already sorted by ascending
				if(count($var1) == 0){
					return $var2;
				}else if(count($var2) == 0){
					return $var1;
				}
				$new_var = [];
				$b = 0;

				for($a=0; $a<count($var1); $a++){
					if($b == count($var2)){
						$new_var[] = $var1[$a];
					}

					for(; $b<count($var2); $b++){
						if($var1[$a] < $var2[$b]){
							$new_var[] = $var1[$a];
							if($b == count($var2)-1){
								$new_var[] = $var2[$b];
							}
							break;
						}else{
							$new_var[] = $var2[$b];
							if($b == count($var2)-1){
								$new_var[] = $var1[$a];
							}
						}
					}

				}

				for(; $b<count($var2); $b++){
					$new_var[] = $var2[$b];
				}

				return $new_var;
			}
			
  		?>
  		<h3>Result :</h3>
  		<pre><?php print_r(do_sorting_please([1,2,3,4,5], [3, 4, 5, 6, 7, 8, 9])); ?></pre>
  		<p>If we input empty array for the first variable, the function will return the second variable. If we input empty array for the second variable, the function will return the first variable</p>
  		
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

