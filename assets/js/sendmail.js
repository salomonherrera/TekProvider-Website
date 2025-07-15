//Form submit
function clearForm() {
    $("#nombreSender").val('');
    $("#emailSender").val('');
    $("#telefonoSender").val('');
    $("#countrySender").val('');
    $("#companySender").val('');
    $("#positionSender").val('');
    $("#mensajeSender").val('');
}

$("#contact-form").submit(function(event) {
    event.preventDefault();

    var nombre = $("#nombreSender").val();
    var email = $("#emailSender").val();
    var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var telefono = $("#telefonoSender").val();
    var pais = $("#countrySender").val();
    var empresa = $("#companySender").val();
    var puesto = $("#positionSender").val();
    var mensaje = $("#mensajeSender").val();


    if (nombre == "") {
        $("#nombreSender").focus();
        swal("Campo requerido", "¿Cuál es su nombre?", "error");
		return false;
	} else if (email == "" || !validacion_email.test(email)) {
        $("#emailSender").focus();
        swal("Campo requerido", "Introduce un correo electrónico valido (micorreo@dominio.com)", "error");
		return false;
    } else if (telefono == "") {
        $("#telefonoSender").focus();
        swal("Campo requerido", "Introduce un número de Teléfono", "error");
		return false;
    } else if (pais == "") {
        $("#countrySender").focus();
        swal("Campo requerido", "Seleccione un país de la lista", "error");
		return false;
    } else if (empresa == "") {
        $("#companySender").focus();
        swal("Campo requerido", "¿Cuál es el nombre de la empresa?", "error");
		return false;
    } else if (puesto == "") {
        $("#positionSender").focus();
        swal("Campo requerido", "¿Cuál es su puesto dentro de la empresa?", "error");
		return false;
    } else if (mensaje == "") {
        $("#mensajeSender").focus();
        swal("Campo requerido", "¿Cuál es su mensaje?", "error");
		return false;
	} else {

		$('#blockUiMax').removeClass('hide-sending');
        $('body').addClass('no-scrolling');

        console.log("Consultando...");

		$.ajax({
			type: "POST",
            url: "../sendmail/proceso.php",
            data: "nombre=" + nombre + "&email=" + email + "&empresa=" + empresa + "&puesto=" + puesto + "&telefono=" + telefono + "&pais=" + pais + "&mensaje=" + mensaje,
            dataType: 'json',
			// data: $('#envio-mensaje').serialize(),
			success: function (response) {

				if (response.type == 'error') { //load json data from server and output message     

                    $('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡Ooops lo siento!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "warning",
						timer: 4000
					});
					clearForm();
					$("#nombreSender").focus();

				} else if (response.type == 'prevented') {

					$('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡Ooops lo siento!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "warning",
						timer: 4000
					});
					clearForm();
					$("#nombreSender").focus();

				} else if (response.type == 'success') {
					

					$('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡Exito!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "success",
						timer: 4000
					});
					clearForm();

				} else {

					$('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡Ooops lo siento!",
						text: "Ha ocurrido un error inesperado, intente nuevamente.",
						showConfirmButton: false,
						type: "error",
						timer: 4000
					});
					clearForm();
					$("#nombreSender").focus();

				}
            },
  complete: function() {
    $('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡Exito!",
						text: "Mensaje enviado",
						showConfirmButton: false,
						type: "success",
						timer: 4000
					});
					clearForm();
  }
		});

        return false;
    }

    // $.ajax({
    //     type: "POST",
    //     url: "sendmail/proceso.php",
    //     data: "nombre=" + nombre + "&email=" + email + "&empresa=" + empresa + "&puesto=" + puesto + "&telefono=" + telefono + "&pais=" + pais + "&producto=" + producto,
    //     dataType: 'json',
    //     // data: $('#envio-mensaje').serialize(),
    //     success: function (response) {

    //         // console.log("DATA RECEIVED: ", response);
    //         // alert("return");


    //         if (response[0].type == 'error') { //load json data from server and output message     

    //             // $('#blockUiMax').fadeOut('slow');
    //             // $('#main-body').removeClass('no-scrolling');

    //             // swal({
    //             // 	title: "¡Ooops lo siento!",
    //             // 	text: "" + response[0].text + "",
    //             // 	showConfirmButton: false,
    //             // 	type: "warning",
    //             // 	timer: 4000
    //             // });

    //             $("#contacto").removeClass("sendingmail");
    //             $("#msj-form-err").removeClass("hide");

    //         } else if (response[0].type == 'prevented') {

    //             // $('#blockUiMax').fadeOut('slow');
    //             // $('#main-body').removeClass('no-scrolling');

    //             $("#contacto").removeClass("sendingmail");
    //             $("#msj-form-err").removeClass("hide");
    //             // swal({
    //             // 	title: "¡Ooops lo siento!",
    //             // 	text: "" + response[0].text + "",
    //             // 	showConfirmButton: false,
    //             // 	type: "warning",
    //             // 	timer: 4000
    //             // });

    //         } else if (response[0].type == 'success') {

    //             // $('#blockUiMax').fadeOut('slow');
    //             // $('#main-body').removeClass('no-scrolling');

    //             // swal({
    //             // 	title: "¡Exito!",
    //             // 	text: "" + response[0].text + "",
    //             // 	showConfirmButton: false,
    //             // 	type: "success",
    //             // 	timer: 4000
    //             // });

    //             $("#contacto").removeClass("sendingmail");
    //             setTimeout(() => {
    //                 $(".button-submit").addClass("sended");
    //                 $("#msj-form-success").removeClass("hide");
    //             }, 700);

    //             setTimeout(() => {
    //                 location.href = "index.html"; 
    //             }, 5500);


    //         } else {

    //             // $('#blockUiMax').fadeOut('slow');
    //             // $('#main-body').removeClass('no-scrolling');

    //             // swal({
    //             // 	title: "¡Ooops lo siento!",
    //             // 	text: "Ha ocurrido un error inesperado, intente nuevamente.",
    //             // 	showConfirmButton: false,
    //             // 	type: "error",
    //             // 	timer: 4000
    //             // });
    //             $("#contacto").removeClass("sendingmail");
    //             $("#msj-form-err").removeClass("hide");

    //         }

    //         $("#nombre").val("");
    //         $("#apellido").val("");
    //         $("#correo").val("");
    //         $("#empresa").val("");
    //         $("#puesto").val("");
    //         $("#telefono").val("");
    //         $("#pais").val("");
    //         $("#producto").val("");
    //     }
    // });

    // return false;

});