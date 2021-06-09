<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- Type the code to swap 2 variables with maximum 3 lines of codes.</p>
		<h3>Initialization :</h3>
  		<?php
  			$var1 = 'Variable 1';
  			$var2 = 'Variable 2';
  		?>
  		<p>$var1 is <?=$var1?></p>
  		<p>$var2 is <?=$var2?></p>
  		<h3>Result :</h3>
  		<?php
  			//here is the logic code for the challenge
  			$var3 = $var1;
  			$var1 = $var2;
  			$var2 = $var3;
  			//end of the logic code for the challenge
  		?>
  		<p>$var1 is <?=$var1?></p>
  		<p>$var2 is <?=$var2?></p>
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

