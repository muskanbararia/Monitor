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
function get_avg_minute(){
	require('config.php');
	$query="SELECT AVG(value) from hour";//select query for viewing users.  
	$run=mysqli_query($dbcon,$query);//here run the sql query.  
	$second=mysqli_fetch_array($run);
	$avg=$second[0];
	return $avg;
}
function clear_minute($id){
	require('config.php');
	$delete="DELETE FROM hour WHERE id=$id";  
	if($dbcon->query($delete))  
	{  
		echo ('Cleared minute table');
	}
}
function check_hour(){
	require('config.php');
	$query="SELECT hour from day order by hour desc limit 1";  
	$run=mysqli_query($dbcon,$query); 
	$hour2=0; 
	$hour=mysqli_fetch_array($run);
	$hour2=$hour[0]+1;
	return $hour2;
}
function insert_hour($id,$value,$hour){
	require('config.php');
	$insert="insert into day (id, value,hour) VALUE ('$id','$value','$hour')";  
	if($dbcon->query($insert))  
	{  
		echo ('inserted hour value');
	}
}
function clear_hour($id){
	require('config.php');
	$delete="DELETE FROM day WHERE id=$id";  
	if($dbcon->query($delete))  
	{  
		echo ('Cleared hour table');
	}
}
function check_day(){
	require('config.php');
	$query="SELECT day from week order by day desc limit 1";  
	$run=mysqli_query($dbcon,$query); 
	$hour2=0; 
	$hour=mysqli_fetch_array($run);
	$hour2=$hour[0]+1;
	return $hour2;
}
function insert_day($id,$value,$day){
	require('config.php');
	$insert="insert into week (id, value,day) VALUE ('$id','$value','$day')";  
	if($dbcon->query($insert))  
	{  
		echo ('inserted day value');
	}
}
function get_avg_hour(){
	require('config.php');
	$query="SELECT AVG(value) from day";//select query for viewing users.  
	$run=mysqli_query($dbcon,$query);//here run the sql query.  
	$second=mysqli_fetch_array($run);
	$avg=$second[0];
	return $avg;
}
function get_avg_day(){
	require('config.php');
	$query="SELECT AVG(value) from week";//select query for viewing users.  
	$run=mysqli_query($dbcon,$query);//here run the sql query.  
	$second=mysqli_fetch_array($run);
	$avg=$second[0];
	return $avg;
}
function clear_day($id){
	require('config.php');
	$delete="DELETE FROM week WHERE id=$id";  
	if($dbcon->query($delete))  
	{  
		echo ('Cleared day table');
	}
}
function update_aqi($id,$avg){
	require('config.php');
	$insert="UPDATE aqi SET aqi = $avg WHERE id=$id";
	if($dbcon->query($insert))  
	{  
		echo ('inserted aqi value');
	}
}


?>