$(document).ready(function () {
    var id, opcion;
    opcion = 4;

    tablaRegistros = $('#tablaRegistros').DataTable({
        "ajax": {
            "url": " ", //direccion de archivo
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "fecha" },
            { "data": "nombre" },
            { "data": "paterno" },
            { "data": "materno" },
            { "data": "area" },
            { "data": "tipo_peticion" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formUsuarios').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        fecha = $.trim($('#fecha').val());
        nombre = $.trim($('#nombre').val());
        paterno = $.trim($('#paterno').val());
        materno = $.trim($('#materno').val());
        area = $.trim($('#area').val());
        tipo_peticion = $.trim($('#tipo_peticion').val());
        $.ajax({
            url: "",
            type: "POST",
            datatype: "json",
            data: { id: id, fecha: fecha, nombre: nombre, paterno: paterno, materno: materno, area: area, tipo_peticion: tipo_peticion, opcion: opcion },
            success: function (data) {
                tablaRegistros.ajax.reload(null, false);
            }
        });
        $('#modalCRUD').modal('hide');
    });



    //para limpiar los campos antes de una nueva petición
    $("#btnNuevo").click(function () {
        opcion = 1; //alta           
        id = null;
        $("#formUsuarios").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nueva Petición");
        $('#modalCRUD').modal('show');
    });

    //Editar        
    $(document).on("click", ".btnEditar", function () {
        opcion = 2;//editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        fecha = fila.find('td:eq(1)').text();
        nombre = fila.find('td:eq(2)').text();
        paterno = fila.find('td:eq(3)').text();
        materno = fila.find('td:eq(4)').text();
        area = fila.find('td:eq(5)').text();
        tipo_peticion = fila.find('td:eq(6)').text();
        $("#fecha").val(nombre);
        $("#nombre").val(paterno);
        $("#paterno").val(materno);
        $("#materno").val(gender);
        $("#area").val(password);
        $("#tipo_peticion").val(status);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Registro");
        $('#modalCRUD').modal('show');
    });

    //Borrar
    $(document).on("click", ".btnBorrar", function () {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro " + id + "?");
        if (respuesta) {
            $.ajax({
                url: " ", //direccion de archivo
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function () {
                    tablaRegistros.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });

});    