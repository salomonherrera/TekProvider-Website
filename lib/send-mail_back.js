//formulario
//swal("¡No tan Rápido!", "¿No diras nada?", "error");
function clearForm() {
    $("#nombreSender").val('');
    $("#emailSender").val('');
    $("#telefonoSender").val('');
    $("#countrySender").val('');
    $("#companySender").val('');
    $("#positionSender").val('');
    $("#mensajeSender").val('');
}

$("#btnSendMail").click(function() {

	var nombreS = $("#nombreSender").val();
	var emailS = $("#emailSender").val();
	var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	var telefonoS = $("#telefonoSender").val();
	var mensajeS = $("#mensajeSender").val();
    

    if (nombreS == "") {
        $("#nombreSender").focus();
        swal("Espera un momento", "Hola, Soy Edwin Márquez, como te llamas?", "error");
		return false;
	} else if (emailS == "" || !validacion_email.test(emailS)) {
        $("#emailSender").focus();
        swal("Espera un momento", "Introduce un correo electrónico correcto", "error");
		return false;
	} else if (mensajeS == "") {
        $("#mensajeSender").focus();
        swal("Espera un momento", "Disculpa ¿No olvidas tu mensaje?", "error");
		return false;
	} else {

		$('#blockUiMax').removeClass('hide-sending');
		$('#main-body').addClass('no-scrolling');

		$.ajax({
			type: "POST",
			url: "/sendmail/proceso.php",
			data: "nombreSender=" + nombreS + "&emailSender=" + emailS + "&telefonoSender=" + telefonoS + "&mensajeSender=" + mensajeS + "&captcha=" + reCaptcha,
			dataType: 'json',
			// data: $('#envio-mensaje').serialize(),
			success: function (response) {

				// console.log(response);

				if (response[0].type == 'error') { //load json data from server and output message     

					$('#blockUiMax').fadeOut('slow');
					$('#main-body').removeClass('no-scrolling');

					swal({
						title: "¡Ooops lo siento!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "warning",
						timer: 4000
					});
					clearForm();
					$("#nombreSender").focus();

				} else if (response[0].type == 'prevented') {

					$('#blockUiMax').fadeOut('slow');
					$('#main-body').removeClass('no-scrolling');

					swal({
						title: "¡Ooops lo siento!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "warning",
						timer: 4000
					});
					clearForm();
					$("#nombreSender").focus();

				} else if (response[0].type == 'success') {

					$('#blockUiMax').fadeOut('slow');
					$('#main-body').removeClass('no-scrolling');

					swal({
						title: "¡Exito!",
						text: "" + response[0].text + "",
						showConfirmButton: false,
						type: "success",
						timer: 4000
					});
					clearForm();

				} else {

					$('#blockUiMax').fadeOut('slow');
					$('#main-body').removeClass('no-scrolling');

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
            }
		});

        return false;
    }
});
