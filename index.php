<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>
			<?php
				const PI = 3.14;

				$myName = 'Hanh';
				$myAge = 20;
				$myMine = true;

				$myHeight = 1.66;
				$myRelax = [ 'relax1'=>'footbal','relax2'=> 'run','relax3'=> 'game'];
				
				$result = strrev($myName);

				foreach ($myRelax as $key => $value){
					echo $key . 'has value'. $value .'<br />';
				}

/**
 * lay thong tin ca nhan cua toi 
 * 
 * string $name:ten
 * int $age :tuoi
 * array $relax :so thich 
 */
function getMyProfile( $name, $age, $relax) {
	$description = 'My name is' .$name;
	$description .= '' .$age . ' yeat old';

	$description .= '. I Like';
	foreach ($relax as $value){
		$description .=$value .'.';
	}
	$description = substr($description, 0,-2);
	return $description;
	}
	echo getMyfrofile($myName, $myAge, $myRelax);
			 ?>
		</h1>
</body>
</html>