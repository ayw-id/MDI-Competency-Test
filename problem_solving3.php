<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>- There are 25 horses with different speed, you are only able to see the horses speed by  joining the competition (only 5 horses allowed in 1 race). </p>
		<p>- You don’t have a time counter. </p>
		<h3>Question :</h3>
		<p>How many races that you need to hold to find out the 3 fastest horses? and please  explain your answer. </p>
		
  		<?php
  			function init(){
			    $horses_spd = [];
			    for($a=0; $a<25; $a++){
			      	$horses_spd[] = rand(0, 100);
			    }
			    // echo '<pre>'; print_r($horses_spd); echo '</pre>';
			    
			    $count_race = 0;
			    for(; count($horses_spd) > 3; ){
					$horses_spd = split_array($horses_spd);
					$winners = [];
					for($a=0; $a<count($horses_spd); $a++){
						$count_race++;
						$winners_ = do_race($horses_spd[$a]);
						for($b=0; $b<count($winners_); $b++){
							$winners[] = $winners_[$b];
						}
					}
					$horses_spd = $winners;
			    }
			    // echo '<pre>'; print_r($horses_spd); echo '</pre>';
			    return $count_race;
			}

			function split_array($horses_spd){
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
			    return $new_array;
			}

			function do_race($horses_spd){
			    sort($horses_spd);
			    return array_slice($horses_spd, 0, 3);
			}
			
  		?>
  		<h3>Result :</h3>
  		<p>It took <?=init()?> races to see the fastest three</p>
  		
  		<p><a href="/mediatics"><b><- Back</b></a></p>
	</body>
</html>

