$(document).ready(function(){
    // Evento antes de mostrar el modal
    $('#modalGuardar').on('show.bs.modal', function (e) {
        // Clean inputs
        $("#formAgregarProducto")[0].reset();
        // Validamos el formulario
        $("#formAgregarProducto").validator('update');
        // Creamos el barcode 13 dígitos de longitud
        var code = Math.floor(Math.random() * 10000000000000);
        $(".barcode").val(code);
    });

    // Ajax para guardar
    $("#formAgregarProducto").validator().on('submit', function (e) {
        if(e.isDefaultPrevented() == false){
            datos = $(this).serialize();
            $.ajax({
                type:"POST",
                url:"Productos/agregar",
                data: datos,
                success: function(result){
                    $('#modalGuardar').modal('hide');
                    var obj = jQuery.parseJSON(result);
                    if(obj.exito == 1)
                        $(".alert-exito").show();
                    else
                        $(".alert-error").show();
                }
            });
        }        
        return false;
    });

    // Btn para mostrar
    $('#modalMostrar').on('show.bs.modal', function (event) {
        $(".resultModalMostrar").html("cargando...");
        var button = $(event.relatedTarget);
        var producto_id = button.data('productoid');
        
        $.ajax({
            type:"GET",
            url:"/Productos/get/"+producto_id,
            success: function(result){
                var obj = jQuery.parseJSON(result);
                $(".resultModalMostrar").html("");
                $("#ean").EAN13(String(obj.barcode));
            }
        });
    })
    
});