$(document).ready(function () {
	$("#buscar").on("click", function (e) {
		let idCliente = $("#clientes")[0].value;
		$("#loader").addClass("d-flex");
		if (idCliente !== "Selecciona un cliente") {
			req.get("proyectos/" + idCliente).then(function (response) {
				// handle success
				$("#loader").removeClass("d-flex");
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

	function renderData(data) {
		$("#table-body").empty();
		var dataRender = "";
		$.each(data, function (i, item) {
			dataRender += `
                    <tr>
                        <td class="text-center">${item.id}</td>
                        <td>${item.nombre}</td>
                        <td>${item.clave}</td>
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
	}
});
