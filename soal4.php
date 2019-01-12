<?php
	function ganti_kata($kata, $start, $final){
		$array = str_split($kata, 1);
		$posisi = strpos($kata, $start);
		$array[$posisi] = $final;

		$string = '';
		for($i = 0; $i < count($array); $i++){
			$string .= $array[$i];
		}
		
		return print $string . '<br>';
	}

	ganti_kata('Imam', 'a', 'e');
	ganti_kata('Baehaqi', 'e', 'i');
	ganti_kata('Maiyos', 'i', 'a');