<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- Type the code to swap 2 integers without additional variables or create any function.
Maximum 3 lines of codes.</p>
    <h3>Initialization :</h3>
  		<?php
  			$var1 = 10;
  			$var2 = 20;
  		?>
  		<p>$var1 is <?=$var1?></p>
  		<p>$var2 is <?=$var2?></p>
  		<h3>Result :</h3>
  		<?php
  			//here is the logic code for the challenge
  			$var1 += $var2;
  			$var2 = $var1 - $var2;
  			$var1 -= $var2;
        //end of the logic code for the challenge
  		?>
  		<p>$var1 is <?=$var1?></p>
  		<p>$var2 is <?=$var2?></p>
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

