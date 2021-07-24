<?php
	$conn = mysqli_connect("remotemysql.com", "Y3FuHQFueo", "R0eqWIVwlH", "Y3FuHQFueo");
	if(!$conn){
		die("Can't establish connection to the MySQL DB due to :  ".mysqli_connect_error());
	}
?>