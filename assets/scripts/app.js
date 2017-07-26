$(document).ready(function() {
	usrcheck();
	
	$('#checkusr').load('check.php').show();
	$('#usrname_input').keyup(function () {
		$.post('check.php', {username: form.usr.value},
			function(result){
				$('#checkusr').html(result).show();
				if (result == 'Username is taken! Please pick another one.'){
					check = 0;
				}
			});
	});

	bdaycheck();
	$('#pwd, #repwd').keyup(equacheck);	
	$('#pwd, #repwd').keyup(lengthcheck);	
	$('#usrname_input').keyup(usrcheck);	
	$('#bday, #bmonth, #byear').bind('keyup mouseup',bdaycheck);
});
var lencheck = 0;
var eqcheck = 0;
var check = 0;
var bcheck = 0;


function hideStep1() {
	console.log(lencheck);
	console.log(eqcheck);
	console.log(check);
	console.log(bcheck);
	if (lencheck == 1 && eqcheck == 1 && check == 1 && bcheck == 1){
		document.getElementById('loginStep1').classList.add('hidden');
		document.getElementById('loginStep2').classList.remove('hidden');
	}
}
function bdaycheck() {
	var bday = document.getElementById('bday').value;
	var bmonth = document.getElementById('bmonth').value;
	var byear = document.getElementById('byear').value;
	if ((bday >= 1 && bday <= 31) && (bmonth >= 1 && bmonth <= 12) && (byear >= 1900 && byear <= 2017)) {
		bcheck = 1;
		document.getElementById('bday').classList.remove('invalid_input');
		document.getElementById('bmonth').classList.remove('invalid_input');
		document.getElementById('byear').classList.remove('invalid_input');
	}
	else{
		
		bcheck = 0;
		document.getElementById('bday').classList.add('invalid_input');
		document.getElementById('bmonth').classList.add('invalid_input');
		document.getElementById('byear').classList.add('invalid_input');
	}
	return bcheck;
}
function equacheck() {
	var pwd = document.getElementById('pwd').value;
	var repwd = document.getElementById('repwd').value;
	if (pwd != "" && repwd != "") {
		if (pwd == repwd) {
			eqcheck = 1;
			document.getElementById('spanrepwd').classList.add('hidden');
			document.getElementById('pwd').classList.remove('invalid_input');
			document.getElementById('repwd').classList.remove('invalid_input');
		}
		else{
			eqcheck = 0;
			document.getElementById('spanrepwd').classList.remove('hidden');
			document.getElementById('spanrepwd').innerHTML = "Passwords dont match.";
			document.getElementById('pwd').classList.add('invalid_input');
			document.getElementById('repwd').classList.add('invalid_input');
		}
	}
	return eqcheck;
}
function usrcheck() {
	var usr = document.getElementById('usrname_input').value;
	if (usr != ""){
		check = 1;
		document.getElementById('usrname_input').classList.remove('invalid_input');
		document.getElementById('checkusr').innerHTML = "";
	}
	else{
		check = 0;
		document.getElementById('usrname_input').classList.add('invalid_input');
		document.getElementById('checkusr').innerHTML = "Enter a valid username.";
	}
	return check;
}
function lengthcheck() {
	var pwd = document.getElementById('pwd').value;
	var repwd = document.getElementById('repwd').value;
	if (pwd.length < 6 && repwd.length < 6 && pwd != "") {
		lencheck = 0;
		document.getElementById('spanpwd').classList.remove('hidden');
		document.getElementById('spanpwd').innerHTML = "Password is too short.";
		document.getElementById('pwd').classList.add('invalid_input');
	}
	else{
		lencheck = 1;
		document.getElementById('spanpwd').classList.add('hidden');
		document.getElementById('spanpwd').innerHTML = "";
		document.getElementById('pwd').classList.remove('invalid_input');
	}
	return lencheck;
}

function hideStep2() {
	document.getElementById('loginStep1').classList.remove('hidden');
	document.getElementById('loginStep2').classList.add('hidden');
}