<!DOCTYPE html>
<html>
<head>
	<title>Tunilance | The first and the best freelance website in Tunisia</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/signup.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css?<?php echo rand(); ?>">
	<script type="text/javascript" src="assets/scripts/app.js?<?php echo rand(); ?>"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet"> 
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<div class="logo"><a href="index.php"></a></div>
			<div class="headnav">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
			<h1 style="color: #FFFFFF; padding-top: 20px; padding-left: 10px;">PRE ALPHA 0.5</h1>
		</div>
	</div>
	<div class="logsign">
		<div class="wrapper">
			<center>
				<div class="logwrapper">
					<h1>Sign up</h1>
					<div class="loginp" id="loginStep1">
						<form>
							<input type="text" name="" placeholder="Username"><br><br>
							<input type="password" name="" placeholder="Password"><br><br>
							<input type="password" name="" placeholder="Re-type password"><br><br>
							<p style="display: inline; margin-right: 10px;font-size: 18px; color: #fcfaf9;">Birthdate:</p>
							<input type="text" id="bday" name="" placeholder="dd" maxlength="2" style="width: 20px;" min="01" max="31">
							<input type="text" id="bday" name="" placeholder="mm" maxlength="2" style="width: 35px;" min="01" max="12">
							<input type="text" id="bday" name="" placeholder="yyyy" maxlength="4" style="width: 45px;" min="1900" max="2017"><br><br>
							<div class="loginpbtn" onclick="hideStep1();"><p>Next</p></div>
						</form>
					</div>
					<div class="loginp hidden" id="loginStep2">
						<form action="k.php">
							<input type="text" name="" placeholder="Full name"><br><br>
							<input type="email" name="" placeholder="Email"><br><br>
							<input type="checkbox" name="" id="remme" style="width: 20px !important; height: 10px;">
							<label for="remme" style="color: #fcfaf9;">I agree to the terms n shit.</label><br><br>
							<button class="loginpbtn" type="submit">Submit</button>
						</form>
					</div>
					<h2>Existing user? <a href="login.php">Click here to login</a></h2>
				</div>
			</center>
		</div>
	</div>
	<div class="footlogin">
		<div class="wrapper">
			<center>
				<p style="font-size: 14px; color: #fcfaf9; margin-top: 6px;">Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> - Tunilance project</p>
			</center>
		</div>
	</div>
</body>
</html>