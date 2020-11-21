$(document).ready(function () {
	$("#form-selectCliente")
		.find("#buscar")
		.on("click", function (e) {
			let idCliente = $("#clientes")[0].value;
			$("#loader").addClass("d-flex");
			if (idCliente !== "Selecciona un cliente") {
				req.get("proyectos/" + idCliente).then(function (response) {
					// handle success
					$("#loader").removeClass("d-flex");
					MostrarProyectos(response.data);
				});
			} else {
				Swal.fire({
					icon: "error",
					title: "Oops...",
					text: `Debes seleccionar un cliente para poder desplegar los proyectos`,
				});
				$("#loader").removeClass("d-flex");
			}
		});

	$("#form-selectProyectos")
		.find("#buscar")
		.on("click", function (e) {
			let clave = $("#proyectos")[0].value;
			$("#loader").addClass("d-flex");
			if (clave !== "Selecciona un cliente") {
				req.get("lead/all/" + clave).then(function (response) {
					// handle success
					$("#loader").removeClass("d-flex");
					// MostrarProyectos(response.data);
					renderData(response.data);
				});
			} else {
				Swal.fire({
					icon: "error",
					title: "Oops...",
					text: `Debes seleccionar un cliente para poder desplegar los proyectos`,
				});
				$("#loader").removeClass("d-flex");
			}
		});

	function MostrarProyectos(cliente) {
		console.log(cliente);
		$("#proyectos").empty();
		let opciones = "<option>Selecciona un proyecto</option>";
		cliente.forEach((proyecto) => {
			opciones =
				opciones +
				"<option value=" +
				proyecto.clave +
				">" +
				proyecto.nombre +
				"</option>";
		});
		console.log(opciones);
		$("#proyectos").append(opciones);
		$("#form-selectProyectos").show();
	}
	function renderData(data) {
		$("#table-body").empty();
		var dataRender = "";
		$.each(data, function (i, item) {
			dataRender += `
                    <tr>
                        <td>${item.datos.nombre}</td>
                        <td>${item.datos.telefono}</td>
                        <td>${item.datos.correo}</td>
                        <td>${item.created_at}</td>
                        <td class="td-actions text-center">
                            <button type="button" rel="tooltip" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                            title="ver leads">
                            <i class="material-icons">pageview</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-info" data-toggle="tooltip" data-placement="top"
                            title="Detalles">
                            <i class="material-icons">wysiwyg</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                            title="Desactivar">
                            <i class="material-icons">close</i>
                            </button>
                            </td>
                    </tr>
                    `;
		});

		$("#table-body").append(dataRender);
		$("#tabla").show();
	}
});
