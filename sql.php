<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- User tables have an attribute name, gender and age. </p>
    <p>- What kind of query that you need to create to find: </p>
    <p><b>How many users that were having a Male gender and age >35 ? </b></p>
  		<h3>Answere :</h3>
  		<?php
        $horses_spd = [];
        for($a=0; $a<25; $a++){
          $horses_spd[] = rand(0, 100);
        }
        ?>
        <pre><?php print_r($horses_spd);?></pre>
        <?php
        $new_array = [];
        for($a=0; $a<count($horses_spd); $a++){
          if(count($new_array) == 0){
            $new_array[] = [$horses_spd[$a]];
          }else{
            if(count($new_array[count($new_array) - 1]) < 5){
              $new_array[count($new_array) - 1][] = $horses_spd[$a];
            }else{
              $new_array[] = [$horses_spd[$a]];
            }
          }
        }

      ?>
      <pre><?php print_r($new_array);?></pre>
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

