<?php

	$url = 'https://app.hellodialog.com/api/fields/.$argv[2]/?token='.$argv[1];

	$data = file_get_contents($url);

	$data = json_decode($data, true);

	array_map(function($e) {
		echo $e['name']."\n";
	}, $data);