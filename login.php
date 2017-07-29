<?php
$cnct = mysqli_connect("localhost", "root","");
mysqli_select_db($cnct,"tunilance");
if (isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['pwd'])) {
	$mail = $_POST['mail'];
	$pwd = md5($_POST['pwd']);

	$mail = stripcslashes($mail);
	$mail = mysqli_real_escape_string($cnct, $mail);
	$pwd = stripcslashes($pwd);
	$pwd = mysqli_real_escape_string($cnct, $pwd);

	$sqlq = "SELECT * FROM usr WHERE mail='$mail' AND password='$pwd'";
	$result = mysqli_query($cnct,$sqlq); 
	$row = mysqli_fetch_array($result);
	if ($row['mail'] == $mail && $row['password'] == $pwd) {
		echo 'LOGIN SUCCESS!!!!!!! WELCOME '.$row['mail'];
	}
	else{
		echo "Failed to login";
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Tunilance | The first and the best freelance website in Tunisia</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?<?php echo rand(); ?>">
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
					<li><a href="signup.php">Sign up</a></li>
				</ul>
			</div>
			<h1 style="color: #FFFFFF; padding-top: 20px; padding-left: 10px;">PRE ALPHA 0.5</h1>
		</div>
	</div>
	<div class="logsign">
		<div class="wrapper">
			<center>
				<div class="logwrapper">
					<h1>Login</h1>
					<div class="loginp">
						<form action="login.php" method="POST">
							<input type="mail" name="mail" placeholder="Email"><br><br>
							<input type="password" name="pwd" placeholder="Password"><br><br>
							<input onchange="document.getElementById('lgnbtn').disabled = !this.checked;" type="checkbox" name="" id="remme" style="width: 20px !important; height: 10px;">
							<label for="remme" style="color: #fcfaf9;">Remember me</label>
							<button id="lgnbtn" class="loginpbtn" type="submit">Submit</button><br>
							<a href="" id="forgotpw">Forgot username or password?</a>
						</form>
					</div>
					<h2>New user? <a href="signup.php">Click here to join!</a></h2>
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