window.onload = function () {
	login = document.getElementById("login");
	login.addEventListener("submit", function (e) {
		
		nombre = document.getElementById("usuario");
		password = document.getElementById("password");
		empty_name = document.getElementById("usuario").value == "";
		empty_pass = document.getElementById("password").value == "";

		if (empty_name && empty_pass) {
			show_error("Ambos campos estan vacios, porfavor ingresa tus datos");
			nombre.focus();
			return false;

		}else if(empty_pass){
			password.focus();
			show_error("No ingresaste tu contraseña, porfavor ingresala");
			return false;
		}else if(empty_name){
			nombre.focus();
			show_error("No ingresaste tu usuario, porfavor ingresalo");
			return false;			
		};

		var res = nombre.value.split(".");

		if (res.length == 2) {
		}else{
			nombre.focus();
			show_error("Tu nombre de usuario debe contener un punto cuando menos.");
			return false;			
		};
	});

}

var show_error = function (msg) {
	document.getElementById("errores").innerHTML= msg;
}
