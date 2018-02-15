<?php

$length = 11;
$values = [3, -2, 2, 0, 3, 4, -6, 3, 5, -4, 8];

$first = $mid = 0;
$mid = (int)($length/2);

$sum_lower = $sum_upper = 0;

while($first <= $length){

	for($i=0; $i <= $mid ; $i++){

		$sum_lower = $sum_lower + ($values[$i]);  
		$sum_upper = $sum_upper + ($values[$i+($mid)]);

		if($sum_lower == $sum_upper){
			echo "Position is-".$mid;
			break;
		}else if($sum_lower > $sum_upper){
			$first = $mid+1;
		}else{
			$length = $mid-1;
		}
		
	}

}

?>