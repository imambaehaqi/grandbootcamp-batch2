<?php
	function bio(){	
		$biodata = [
			'name' => 'Imam Baehaqi', 
			'address' => 'Dsn. Pandean RW 04 RT 12 No. 47 Ds. Ngingas Kec. Waru Kab. Sidoarjo Kd. Pos 61256',
			'hobbies' => ['Membaca', 'Menulis', 'Musik', 'Sepak Bola', 'Programming'],
			'is_married' => false,
			'school' => ['highSchool' => 'Vocational High School 2 Buduran Sidoarjo', 'university' => 'Universitas 17 Agustus 1945 Surabaya'],
			'skills' => ['skills' => ['Programming = 30%', 'Design = 30%', 'Writer = 40%']]
		];
		print_r(json_encode($biodata));
	}
	bio();