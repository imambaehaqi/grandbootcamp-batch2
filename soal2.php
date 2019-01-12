<?php
	function user_valid($user){
		$hsluser = '';
		if(strlen($user) == 8){
			if(preg_match('/[a-z]/', $user)){
				if(preg_match('/[A-Z]/', $user)){
					if(preg_match('/_/', $user)){
						$hsluser .= 'username valid.<br>';
					}else{
						$hsluser .= 'username tidak valid.<br>';
						$hsluser .= 'username harus mengandung karakter garis bawah (_).<br>';
					}
				}else{
					$hsluser .= 'username tidak valid.<br>';
					$hsluser .= 'username harus mengandung huruf kapital.<br>';
				}
			}else{
				$hsluser .= 'username tidak valid.<br>';
				$hsluser .= 'username harus mengandung huruf kecil.<br>';
			}
		}else{
			$hsluser .= 'username tidak valid.<br>';
			$hsluser .= 'Panjang username harus 8 karakter.<br>';
		}
		return print $hsluser;
	}

	function pass_valid($pass){
		$hslpass = '';
		if(strlen($pass) == 8){
			if(preg_match('/[a-z]/', $pass)){
				if(preg_match('/[A-Z]/', $pass)){
					if(preg_match('/[0-9]/', $pass)){
						if(preg_match('/[_|&|@]{1}/', $pass)){
							$hslpass .= 'password valid.<br>';
						}else{
							$hslpass .= 'password tidak valid.<br>';
							$hslpass .= 'Panjang password harus mengandung karakter (_ & .).<br>';
						}
					}else{
						$hslpass .= 'password tidak valid.<br>';
						$hslpass .= 'Panjang password harus mengandung angka.<br>';
					}
				}else{
					$hslpass .= 'password tidak valid.<br>';
					$hslpass .= 'Panjang password harus mengandung huruf kapital.<br>';
				}
			}else{
				$hslpass .= 'password tidak valid.<br>';
				$hslpass .= 'Panjang password harus mengandung huruf kecil.<br>';
			}
		}else{
			$hslpass .= 'password tidak valid.<br>';
			$hslpass .= 'Panjang password harus 8 karakter.<br>';
		}
		return print $hslpass;
	}

	user_valid('Imam_Bae');
	pass_valid('3@Y0$.id');