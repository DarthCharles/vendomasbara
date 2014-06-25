

$(document).ready(function(){

	$('#bpublicar').click(function(){
		validation = validate();

		if (validation == 1) {

			$.post("send.php", $("#mycontactform").serialize(),  function(response) {   
				alert(response);
			});
			clearForm();
		}
		return false;


	});

});



function vName() {

	if (document.getElementById("name").value == "") {
		document.getElementById("errMes").innerHTML =
		"This field is required";
		return 0;
	} else { 
		document.getElementById("errMes").innerHTML =
		"";
		return 1;}

	};


		function vEmail(){

			var x = document.getElementById("email").value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				document.getElementById("errMes2").innerHTML =
				"Please enter a valid email adress";
				return 0;
			}else { 
				document.getElementById("errMes2").innerHTML =
				"";
				return 1;
			}
		};

		function vMessage(){


			if (document.getElementById("message").value == "") {
				document.getElementById("errMes3").innerHTML =
				"This field is required";
				return 0;
			}else { 
				document.getElementById("errMes3").innerHTML =
				"";
				return 1;}
			};

			function clearForm(){
				document.getElementById("name").value = "";
				document.getElementById("email").value = "";
				document.getElementById("message").value ="";
			}
			function validate(){

				name = vName();
				email = vEmail();	
				message = vMessage();

				val = name + email + message;
				

				if (val == 111) {
					return 1;
				} else{ return 0};
			};

