<?php
function check_second(){
	require('config.php');
	$query="SELECT second from minute order by second desc limit 1";  
	$run=mysqli_query($dbcon,$query); 
	$second2=0; 
	$second=mysqli_fetch_array($run);
	$second2=$second[0]+1;
	return $second2;
}
function insert_second($id,$value,$second2){
	require('config.php');
	$insert="insert into minute (id, value,second) VALUE ('$id','$value','$second2')";  
	if($dbcon->query($insert))  
	{  
		echo ('inserted second value');
	}
}
function clear_second($id){
	require('config.php');
	$delete="DELETE FROM minute WHERE id=$id";  
	if($dbcon->query($delete))  
	{  
		echo ('Cleared second table');
	}
}
function get_avg(){
	require('config.php');
	$query="SELECT AVG(value) from minute";//select query for viewing users.  
	$run=mysqli_query($dbcon,$query);//here run the sql query.  
	$second=mysqli_fetch_array($run);
	$avg=$second[0];
	return $avg;
}
function check_minute(){
	require('config.php');
	$query="SELECT minute from hour order by minute desc limit 1";  
	$run=mysqli_query($dbcon,$query); 
	$minute2=0; 
	$minute=mysqli_fetch_array($run);
	$minute2=$minute[0]+1;
	return $minute2;
}
function insert_minute($id,$value,$minute){
	require('config.php');
	$insert="insert into hour (id, value,minute) VALUE ('$id','$value','$minute')";  
	if($dbcon->query($insert))  
	{  
		echo ('inserted minute value');
	}
}


?>