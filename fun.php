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
?>