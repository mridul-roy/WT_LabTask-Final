function validate(pForm) {
	let flag = "";

	if (pForm.username.value === "") {
		document.getElementById("userErrMsg").innerHTML = "Please enter correct username";
		flag = "Empty";
	}

	if (pForm.password.value === "") {
		document.getElementById("passErrMsg").innerHTML = "Please enter correct password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}