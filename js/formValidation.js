

$(document).ready(function(){

//En caso de que el submit clickeado sea el de publicacion.php para registrar mensaje a enviar
$('#bpublicar').click(function(){
	validation = validar_Mensaje();

	if (validation == 1) {

		$.post("send.php", $("#mycontactform").serialize(),  function(response) {   
			alert(response);
		});
	}
	return false;
});

// En caso de que el submit clickeado sea el de registro.php para registrar usuario
$('#regUsuario').click(function(){
	val = validar_Registro();

	if (val == 1) {
		document.getElementById("regUsuario").submit();
	}
	return false;
});

// En caso de que el submit clickeado sea el de nueva.php para registrar nueva publicacion
$('#regPublicacion').click(function(){
	val = validar_Publicacion();

	if (val == 1) {
		document.getElementById("regPublicacion").submit();
	}
	return false;
});
});



function vLength(id, min, max, errMes, borrar) {
	var campo = document.getElementById(id);
	var valido = true;

	if (campo.value.length<=0) {
		document.getElementById(errMes).innerHTML =
		"Por favor llene este campo";
		valido = false;
	} else { 
		if (campo.value.length<min||campo.value.length>max) {
			if (min==0) {
				document.getElementById(errMes).innerHTML = "Debe un maximo de "+max+" letras.";
			}else{
				document.getElementById(errMes).innerHTML = "Debe contener entre "+min+" y "+max+" letras.";
			}
			
			valido = false;
		}else{
			document.getElementById(errMes).innerHTML =
			"";
			valido = true;
		}
	}
	//verificamos si es valido o no y regresamos el valor indicado
	if (valido) {return 1;} else {
		if (arguments.length<5||arguments[4]==true) {campo.value=""};
		return 0;
	};

};


function vEmail(campo_email, errMes){

	var x = document.getElementById(campo_email).value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		document.getElementById(errMes).innerHTML =
		"Por favor ingrese un correo válido";
		return 0;
	}else { 
		document.getElementById("errMesEmail").innerHTML =
		"";
		return 1;
	}
};

function validar_extensionFile(file, errMes, limitMB, extensiones){
	var file = document.getElementById(file);

	if (!file.value) {
		document.getElementById(errMes).innerHTML = "No selecciono ninguna imagen";
		return 0;
	}else{
		extension_file = (file.value.substring(file.value.lastIndexOf("."))).toLowerCase();
		valido = false;
		if (file.files[0].size>(limitMB*1024*1024)) {
			document.getElementById(errMes).innerHTML = "No se permiten imagenes mayores a "+limitMB+"Mb";
			return 0;
		};
		for (var i =  0; i < extensiones.length; i++) {
			if (extensiones[i]==extension_file) { 
				valido = true;
				break;
			};
		};
		if (!valido) {
			document.getElementById(errMes).innerHTML = "Solo se permite formato .jpg, .jpeg, .png y .gif";
			return 0;
		}else{
			document.getElementById(errMes).innerHTML = "";
			return 1;
		}
	}
}
	function validar_PasswordSim(pass, repPass, errMes){
		pass_Uno = document.getElementById(pass);
		pass_Dos = document.getElementById(repPass);
		if (pass_Uno.value!=pass_Dos.value) {
			document.getElementById(errMes).innerHTML = "Ambos password deben ser iguales";
			pass_Dos.value = "";
			return 0;
		}else{
			document.getElementById(errMes).innerHTML = "";
			return 1;
		}
	}

	function validar_Mensaje(){

		value = vLength("name", 0, 25, "errMesName");
		value *= vEmail("email","errMesEmail");	
		value *= vLength("message", 100, 10000, "errMesMessage", false);

		if (value == 1) {
			return 1;
		} else{ return 0};
	};

	function validar_Registro(){
		value = vLength("nombre", 0, 25, "errMesNombre");
		value *= vLength("apellido", 4, 35, "errMesApellido");
		value *= vLength("domicilio", 4, 50, "errMesDomicilio");
		value *= vLength("telefono", 4, 10, "errMesTelefono");
		value *= vLength("celular", 4, 10, "errMesCelular");
		value *= vLength("usuario", 4, 30, "errMesUsuario");
		value *= vLength("password", 4, 15, "errMesPassword");
		value *= validar_PasswordSim("password","repPassword","errMesRepPassword");
		value *= vEmail("email","errMesEmail");

		if (value == 1) {
			return 1;
		} else{ return 0};
	}
	function validar_Publicacion(){
		value = vLength("titulo", 0,50,"errMesTitulo", false);
		value *= vLength("precio",0,50,"errMesPrecio");
		value *= vLength("descripcion",20,65535,"errMesDescripcion", false);
		value *= validar_extensionFile("file","errMesFile",3,new Array(".jpg",".png",".jpeg",".gif"));

		if (value == 1) {return 1;}else{return 0;};
	}
