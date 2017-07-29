<?php
	$cnct = mysqli_connect("localhost", "root","");
	mysqli_select_db($cnct,"tunilance");

	if (isset($_POST['usr']) && isset($_POST['pwd']) && (isset($_POST['fullname']) && !empty($_POST['fullname'])) && (isset($_POST['email']) && !empty($_POST['email']))) {
		$user = $_POST['usr'];
		$pawd = md5($_POST['pwd']);
		$fullnm = $_POST['fullname'];
		$emailaddr = $_POST['email'];
		$bdate = $_POST['bday'].'-'.$_POST['bmonth'].'-'.$_POST['byear'];
		$sql = "INSERT INTO usr (username, password, mail, fname, bdate) VALUES ('$user', '$pawd', '$emailaddr', '$fullnm', '$bdate')";
		mysqli_query($cnct, $sql);
		header('Location:signup.php?complete=true'); //to be added: a signup successful page.
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Tunilance | The first and the best freelance website in Tunisia</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/signup.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css?<?php echo rand(); ?>">
	<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<script type="text/javascript" src="assets/scripts/app.js?<?php echo rand(); ?>"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
					<form name="form" action="signup.php" method="POST">
						<div class="loginp" id="loginStep1">
							<input type="text" name="usr" placeholder="Username" id="usrname_input"><br>
							<span id="checkusr"></span><br>
							<input class="" type="password" name="pwd" placeholder="Password" id="pwd"><br>
							<span class="pwdremind hidden" id="spanpwd">Please enter a valid password.</span><br>
							<input class="" type="password" name="repwd" placeholder="Re-type password" id="repwd"><br>
							<span class="pwdremind hidden" id="spanrepwd"></span><br>
							<p style="display: inline; margin-right: 10px;font-size: 18px; color: #fcfaf9;">Birthdate:</p>
							<input type="number" id="bday" class="bday" name="bday" placeholder="dd" maxlength="2" style="width: 40px;" min="1" max="31" value="1">
							<input type="number" id="bmonth" class="bday" name="bmonth" placeholder="mm" maxlength="2" style="width: 55px;" min="1" max="12" value="1">
							<input type="number" id="byear" class="bday" name="byear" placeholder="yyyy" maxlength="4" style="width: 65px;" min="1900" max="2017" value="1900"><br><br>
							<div class="loginpbtn" onclick="hideStep1();"><p>Next</p></div>
						</div>
						<div class="loginp hidden" id="loginStep2">
							<input type="text" name="fullname" placeholder="Full name"><br><br>
							<input type="email" name="email" placeholder="Email"><br><br>
							<input onchange="document.getElementById('lgnbtn').disabled = !this.checked;" type="checkbox" name="" id="remme" style="width: 20px !important; height: 10px;">
							<label for="remme" style="color: #fcfaf9;">I agree to the terms.</label><br><br>
							<div class="g-recaptcha" data-sitekey="6LeZJCoUAAAAACfdw_Qj5Sel1fTHPtl9_rXtw-8R"></div><br>
							<span onclick="hideStep2();" style="margin-right: 20px; color:#fcfaf9; cursor: pointer;">< Back</span><button id="lgnbtn" class="loginpbtn" type="submit">Submit</button>
						</div>
					</form>
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