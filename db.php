<?php
$link = mysqli_connect('localhost', 'root', '', 'monitor');

		/* check connection */
		if (!$link) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		?>