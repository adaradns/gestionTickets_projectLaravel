$(document).ready(function(){
	$("#irAEleccion").attr("href", "cliente/index-cliente.html");
		$("#selTipoUsuario").change(function(){
			var eleccion = $("#selTipoUsuario").val();
			if(eleccion == "Cliente"){
				$("#irAEleccion").attr("href", "cliente/index-cliente.html");
			}
			else if(eleccion == "Empleado 1° linea"){
				$("#irAEleccion").attr("href", "empleado linea 1/index-empleado1.html");
			}
			else if(eleccion == "Empleado 2° linea"){
				$("#irAEleccion").attr("href", "empleado linea 2/index-empleado2.html");
			}
			else if(eleccion == "Administrador"){
				$("#irAEleccion").attr("href", "admin/users/index-administrador.blade.php");
			}
			else {
				$("#irAEleccion").attr("href", "analista/index-analista.html");
			}
		});
});