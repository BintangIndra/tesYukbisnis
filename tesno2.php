<?php
	$number = 1;

	function generatorSelfnumber($value){
		$selfnumber = [1, 3, 5, 7, 9, 20, 31, 42, 53, 64, 75, 86,97];
		if ($value > 0 AND !in_array($value, $selfnumber)) {
			$data = 0;
			$value1 = strval($value);
			$arre= [];
			for ($i=0; $i < strlen($value1); $i++) { 
				$arre[$i]= intval($value1[$i]);
				$data = $data + intval($value1[$i]);
			}
			
			$data = $data + $value;
			return $data;
		}else{
			return "N ".$value." adalah self number";
		}
	};

	var_dump(generatorSelfnumber($number));
	
?>