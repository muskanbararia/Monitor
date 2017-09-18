<?php
	require('refresh.php');
	require('config.php');
	require ('fun.php');
	$second=check_second();
	$id='111';
	$value=rand(0, 9999);
	if ($second<=59){
		insert_second($id,$value,$second);
	}
	else{
		$avg=get_avg();
		echo "average is $avg";
		clear_second($id);
		$minute=check_minute();
		if ($minute<=59){
			insert_minute($id,$avg,$minute);
		}

	}
?>