function hideStep1() {
	document.getElementById('loginStep1').classList.add('hidden');
	document.getElementById('loginStep2').classList.remove('hidden');
}
function hideStep2() {
	document.getElementById('loginStep1').classList.remove('hidden');
	document.getElementById('loginStep2').classList.add('hidden');
}