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
        swal("Campo requerido", "What's your name?", "error");
		return false;
	} else if (email == "" || !validacion_email.test(email)) {
        $("#emailSender").focus();
        swal("Campo requerido", "Enter a valid email address (myemailaddress@domain.com)", "error");
		return false;
    } else if (telefono == "") {
        $("#telefonoSender").focus();
        swal("Campo requerido", "Enter a Phone Number", "error");
		return false;
    } else if (pais == "") {
        $("#countrySender").focus();
        swal("Campo requerido", "Select a country from the list", "error");
		return false;
    } else if (empresa == "") {
        $("#companySender").focus();
        swal("Campo requerido", "What's the company name?", "error");
		return false;
    } else if (puesto == "") {
        $("#positionSender").focus();
        swal("Campo requerido", "What is your position within the company?", "error");
		return false;
    } else if (mensaje == "") {
        $("#mensajeSender").focus();
        swal("Campo requerido", "What's your message?", "error");
		return false;
	} else {

		$('#blockUiMax').removeClass('hide-sending');
        $('body').addClass('no-scrolling');

        console.log("Consultando...");

		$.ajax({
			type: "POST",
            url: "../sendmail/proceso-en.php",
            data: "nombre=" + nombre + "&email=" + email + "&empresa=" + empresa + "&puesto=" + puesto + "&telefono=" + telefono + "&pais=" + pais + "&mensaje=" + mensaje,
            dataType: 'json',
			// data: $('#envio-mensaje').serialize(),
			success: function (response) {

				// console.log(response);

				if (response.type == 'error') { //load json data from server and output message     

                    $('#blockUiMax').addClass('hide-sending');
                    $('body').removeClass('no-scrolling');

					swal({
						title: "¡We're sorry!",
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
						title: "¡We're sorry!",
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
						title: "¡Success!",
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
						title: "¡Ooops We're sorry!",
						text: "An unexpected error has occurred, try again.",
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
});