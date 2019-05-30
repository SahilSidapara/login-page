<?php
	$con=mysql_connect("localhost","root","");
	if($con)
		echo "connection successful<br>";
	else
		echo "connection failed";

	$cone=mysql_select_db('first_demo');
	if($con)
		echo "selection successful";
	else
		echo "selection failed";

?>