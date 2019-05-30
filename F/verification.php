<?php
	include 'db.php';
	if(isset($_POST['submit'])){
	$user=$_REQUEST['name'];

	$pass=$_REQUEST['pass1'];

	$query = "SELECT * FROM f WHERE name = '".$user."' AND password = '".$pass."'";

	$result=mysql_query($query) or die("</br>query was not fatched");
	
	if($result){
		echo " <script> alert('login successful');</script>";
		
	}
	else
		echo "<script> login successful</script>";
}
?>