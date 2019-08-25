<script>
	function validation(){

		var fname=document.getElementById("firstname").value;
		var lname=document.getElementById("lastname").value;
		var email=document.getElementById("email").value;
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
		if (fname == "") {
			
		document.getElementById('error-firstname').innerHTML = "Please enter your firstname";
		document.getElementById('error-firstname').style.color="red";
		}

		if (lname ==""){
		document.getElementById('error-lastname').innerHTML = "Please enter your lastname";
		document.getElementById('error-lastname').style.color="red";
		}

		if (email == ""){
			document.getElementById('error-email').innerHTML = " Mobile number or email shouldnot be empty";
			document.getElementById('error-email').style.color="red";
		}
		if(reg.test(email) == false){
			alert("Invalid Email address");
			
		} else{
			alert("email address is correct");
		}

		if (lname ==""){
		document.getElementById('error-password').innerHTML = "Please enter your password";
		document.getElementById('error-password').style.color="red";
		}

		if (lname ==""){
		document.getElementById('error-gender').innerHTML = "Please enter your gender";
		document.getElementById('error-gender').style.color="red";
		}

		if (lname ==""){
		document.getElementById('error-date').innerHTML = "Please enter your date";
		document.getElementById('error-date').style.color="red";
		}

	return false;
	}
</script>