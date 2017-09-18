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
		else{
			$avg=get_avg_minute();
			echo "average is $avg";
			clear_minute($id);
			$hour=check_hour();
			if ($hour<=23){
				insert_hour($id,$avg,$hour);
			}
			else{
				$avg=get_avg_hour();
				
				clear_hour();
				//yahan se aage ke function likhne hain
				$day=check_day();
				if ($day<=6){
					insert_day($id,$avg,$day);
				}
				else{
					$avg=get_avg_day();
					clear_day();
					update_aqi($id,$avg);
				}
			}
		}

	}
?>