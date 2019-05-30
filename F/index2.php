<?php
	include 'db.php';
	if(isset($_POST['submit'])){
			$a=$_POST['name'];
			$b=$_POST['email'];
			$c=$_POST['pass1'];
		
	$que="insert into f(name,email,password) values('$a','$b','$c')";
	$result=mysql_query($que) or die("mysql_error($con)");
	
	if($result){
		echo "<script> alert('data inserted successfully');	</script>";
		echo "<script>location.href='index.html';</script>";
	}
	else{
		echo "<script> alert('error in data insertation') </script>";
	}
}

?>
