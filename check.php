<?php
$cnct = mysqli_connect("localhost", "root","");
mysqli_select_db($cnct,"tunilance");

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($cnct, $_POST['username']);
	$noSpaces = str_replace(' ', '', $username);
	$check = mysqli_query($cnct,"SELECT username FROM usr WHERE username='$noSpaces'");
	$checkNumRows = mysqli_num_rows($check);
	if ($checkNumRows != 0) {
		echo "Username is taken! Please pick another one.";
	}
	else if (strlen($noSpaces) <= 3) {
		echo "Username is too short.";
	}
}

?>