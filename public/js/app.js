$(document).ready(function(){
	$("#link-historial").click(function(){
		$(".historial").toggle();
	});

	$("#link-encuesta").click(function(){
		$("#modal-encuesta").modal();
	});//cliente
	$(".radio-inline").click(function(){
		$("#btnEnviar").show();
	});
	//empleado de primera y segunda linea finalizar ticket descripcion.html
	$("#finalizarTicket").click(function(){
		$("#modal-finalizarTicket").modal();
	});
	//empleado de primera y segunda linea autoasignar descripcion.html
	$("#auto-asignar").click(function(){
		$("#modal-ticketAsignado").modal();
	});
	//redirigir ticket empleado de 1° y 2° linea descripcion.html
	$("#redirigirTicket").click(function(){
		$("#modal-redirigirTicket").modal();
	});
	//redirigir ticket a un empleado especifico descripcion.html
	$("#empleadoEspecifico").click(function(){
		$("#modal-listaDeEmpleados").modal();
	});

	//redirigir ticket a una badeja de entrada descripcion.html
	$("#bandejaDeEntrada").click(function(){
		$("#modal-bandejaDeEntrada").modal();
	});
		//cerrar modal
	$("#okBandejaDeEntrada").click(function(){
		$("#modal-bandejaDeEntrada").modal().hide();
	});
	//empleado 1°, 2° ver encuesta de sastifaccion
	$("#encuestaDeSastifaccion").click(function(){
		$("#modal-resultadoEncuesta").modal();
	});
	//empleado 2°: modal ticket seguido descipcion-ticketNoPropio-empleado2.html
	$("#seguirTicket").click(function(){
		$("#modal-seguirTicket").modal();
	});
	//empleado 2°: modal ticket no seguido descipcion-ticketSeguido.html
	$("#noSeguirTicket").click(function(){
		$("#modal-noSeguirTicket").modal();
	});

	/*Administrador*/
	//Ver informacion detallada de usuario
	$(".btnVerMas").click(function(){
		var nombre = $(this).closest("tr").data("nombre");
		var apellido = $(this).closest("tr").data("apellido");
		var email = $(this).closest("tr").data("email");
		var nombreUsuario = $(this).closest("tr").data("nombreusuario");
		var tipoUsuario = $(this).closest("tr").data("tipousaurio");
		
		$("#gridSystemModalLabel").html("Informacion detallada del usuario: " + nombre);
		$("#infoUser").empty();
		$("#infoUser").append("<span> Nombre: " + nombre + "</span><br />");	
		$("#infoUser").append("<span> Apellido: " + apellido + "</span><br />");
		$("#infoUser").append("<span> Email: " + email + "</span><br />");
		$("#infoUser").append("<span> Nombre usuario: " + nombreUsuario + "</span><br />");

		$(".typeUserSpan").hide();

		switch(tipoUsuario){
			case 1:
				$("#typeAdmin").show();
				break;
			case 2:
				$("#typeCliente").show();
				break;
			case 3:
				$("#typeEmpleado").show();
				break;
			case 4:
				$("#typeAnalista").show();
				break;
		}

		$("#modal-users").modal();
	});

});