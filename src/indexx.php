<!DOCTYPE>
<html>
<head>

	<title>user login page</title>
	<link rel="stylesheet" href="styles/style.css">
	<meta name="loginpage" content="width=device-width, initial-scale=1">
</head>	

<body>
	<!--- Section 1 - Background cover --->
		<div class="banner">
			<div class="navbar">
			<a href="first.php"><img src="images/logo2.PNG" class="logo">
				<ul>
					<li><a href="Homee.php">HOME</a></li>
					<li><a href="#">REGISTER</a></li>
					<li><a href="#">LAB REPORTS</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">PAYMENT PORTAL</a></li>
					<li><a href="#">FEEDBACK</a></li>
					<li><a href="#">CONTACT US</a></li>
					<li><a href="#">ABOUT US</a></li>
				</ul>
			</div>		
		</div>
	
	<!--- Section 2 - Form --->
	<div class="text">
		<h1>Sign In</h1>
		
		<div class="view-form">
			<form id="view-form" method="post" action="login.php">
			
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
			
				<input name="uname" type="text" class="form-c" placeholder="User Name" required>
				<br>
				<input name="password" type="password" class="form-c" placeholder="Password" required>
				<br>
				
				
				
				<button type="submit">Log In</button>
				<!---
				<div class="fp_link">
				<a href="#" style="color:white">Forgot Password?</a>
				</div>
				--->
				
				<div class="signup_link">
				New User? <a href="signup.php" style="color:white">Sign up</a>
				</div>	
				
				
			</form>
		</div>
		
	</div>
	
	<!--- Section 3 - Footer --->
	<div class="footer">
		<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
		<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
	</div>


</body>
</html>
