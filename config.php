<?php

	//$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

	$conn = new mysqli('localhost','root','','bank');
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>