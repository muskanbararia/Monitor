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

	}
?>