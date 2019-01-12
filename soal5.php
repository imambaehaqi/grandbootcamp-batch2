<?php
	function count_handshake($n){
		$x = 0;
		for($i = ($n - 1); $i > 0; $i--){
			$x += $i;
		}

		return $x;
	}

	print count_handshake(3);
	echo '<br>';
	print count_handshake(6);