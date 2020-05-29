
$(document).ready(function () {
    $("#buscar_datos").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#cuerpo_tabla tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
