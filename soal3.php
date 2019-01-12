<?php
	function output($a){
		$x = ($a / $a) - 1;
		$y = floor($a / 2);
		$z = $a - 1;

		$str = '';

		for($i = 0; $i < $a; $i++){
			for($j = 0; $j < $a; $j++){
				if($i == $x || $i == $y || $i == $z){
					$str .= '*';
				}else{
					if($j == $x || $j == $y || $j == $z){
						$str .= '*';
					}else{
						$str .= '&nbsp;&nbsp;';
					}
				}
			}
			$str .= '<br>';
		}
		return $str;
	}

	echo output(1);
	echo output(3);
	echo output(5);
	echo output(7);
	echo output(9);