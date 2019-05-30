<!DOCTYPE html>
<html>
<head>
	<title>login page</title>

<link rel="stylesheet" type="text/css" href="2.css">
<body>
	<div class="loginbox">
		<img src="2.png" class="avtar">  
		<h1>Register Here</h1>
		<form action="index2.php" method="POST" >
			<p>Name</p>
			<input type="text" name="name"  placeholder="New Username" required/>
			<p>E-mail ID</p>
			<input type="text" name="email" placeholder="E-mail" required/>
			<p>Enter New Password</p>
			<input type="Password"  name="pass1" placeholder="Create Password" required/>
			<p>Confirm Password</p>
			<input type="Password"  name="pass2" placeholder="Confirm Password" required/>
			<input type="submit" name="submit" value="Signup" onsubmit="return sameornot();"/>
			<script language="javascript" type="text/javascript" >
				
				function sameornot() {
					var a= document.getElementByName("pass1").value;
					var b= document.getElementByName("pass2").value;
					if(a!=b){
						alert('password mismatched');
					}
					return true;
				}
			</script>
			
		</form>

	</div>
</body>
</head>
</html>