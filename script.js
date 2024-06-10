script type="text/javascript"
		
		function validateForm() {

			// start Validating Names field
			var names = document.getElementById("names").value
			if (names == "") {
				document.getElementById("names_err").innerHTML = "Please Enter your full names";

				document.getElementById("names_err").style.color = "red";

				return false;
			}

			else if (names.length < 8) {
				document.getElementById("names_err").innerHTML = "Your name is too short. Enter atleast 8 characters";

				document.getElementById("names_err").style.color = "red";

				return false;
			}
			else{
				document.getElementById("names_err").innerHTML = "";
				
			}
			// end Validating Names field


			// start Validating Email field
			var email = document.getElementById("email").value;
			var atposition=email.indexOf("@");  
			var dotposition=email.lastIndexOf(".");  
			if (email == "") {
				document.getElementById("email_err").innerHTML = "Please Enter your email address";

				document.getElementById("email_err").style.color = "red";

				return false;
			}
			else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
				
				document.getElementById("email_err").innerHTML = "Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition;

				document.getElementById("email_err").style.color = "red";

				return false;
		}  
		else{
				document.getElementById("email_err").innerHTML = "";
				
			}
			// end Validating Email field


			//Start validating gender

			var gender = document.getElementById("gender").value
			if (gender == "") {
				document.getElementById("gender_err").innerHTML = "Please Select your gender";

				document.getElementById("gender_err").style.color = "red";

				return false;
			}
			else{
				document.getElementById("gender_err").innerHTML = "";
				
			}
			// end Validating gender field



	}


