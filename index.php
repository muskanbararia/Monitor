<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 10 second!";
    ?>
    </body>
</html>
<?php
	require "./config.php";
	
	
		$id='111';
		$value=rand(0, 9999);
		if ($second2<=59){
		    $insert_package="insert into minute (id, value,second) VALUE ('$id','$value','$second2')";  
		                       if($dbcon->query($insert_package))  
		                       {  
		                           echo json_encode(['response'=>'Success']);
		                       } 
		}
		else{
			$view_users_query="SELECT AVG(value) from minute";//select query for viewing users.  
			$run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
			$second=mysqli_fetch_array($run);
			echo $second[0];
			$avg=$second[0];
			$view_users_query="SELECT minute from hour order by minute desc limit 1";//select query for viewing users.  
	$run=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
	$minute2=0; 
	$minute=mysqli_fetch_array($run);
	echo $minute[0];

	$minute=$minute[0]+1;



		}

		                       ?>		
