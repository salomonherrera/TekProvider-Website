$.ajax({
    type: "POST",
    url: "/sendmail/proceso.php",
    data: {
        nombre: nombreS,
        email: emailS,
        telefono: telefonoS,
        pais: $("#countrySender").val(),
        empresa: $("#companySender").val(),
        puesto: $("#positionSender").val(),
        mensaje: mensajeS
    },
    dataType: 'json',
    success: function (response) {
		console.log("testing")
			console.log(response)
        $('#blockUiMax').fadeOut('slow');
        $('#main-body').removeClass('no-scrolling');

        if (response[0].type === 'error' || response[0].type === 'prevented') {
            swal({
                title: "¡Ooops lo siento!",
                text: "" + response[0].text,
                showConfirmButton: false,
                type: "warning",
                timer: 4000
            });
        } else if (response[0].type === 'success') {
            swal({
                title: "¡Éxito!",
                text: "" + response[0].text,
                showConfirmButton: false,
                type: "success",
                timer: 4000
            });
        } else {
            swal({
                title: "¡Ooops lo siento!",
                text: "Ha ocurrido un error inesperado, intente nuevamente.",
                showConfirmButton: false,
                type: "error",
                timer: 4000
            });
        }

        clearForm();
        $("#nombreSender").focus();
    },
    error: function (xhr, status, error) {
        console.error("Error en AJAX:", status, error);
        swal({
            title: "¡Error!",
            text: "Error interno del servidor: " + error,
            type: "error",
            timer: 5000
        });
    }
});
