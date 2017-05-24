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
                $(".modalMostrarDes").html(obj.descripcion);
                $(".modalMostrarNombre").html(obj.nombre);
            }
        });
    })

    // Btn para editar
    $('#modalEditar').on('show.bs.modal', function (event) {
        $(".resultModalEditar").html("cargando...");
        $(".modalEditarDivForm").hide();
        var button = $(event.relatedTarget);
        var producto_id = button.data('productoid');
        
        $.ajax({
            type:"GET",
            url:"/Productos/get/"+producto_id,
            success: function(result){
                $(".modalEditarDivForm").show();
                var obj = jQuery.parseJSON(result);
                $(".resultModalEditar").html("");
                $("#formEditarProducto input[name='producto_id']").val(producto_id);
                $("#formEditarProducto input[name='nombre']").val(obj.nombre);
                $("#formEditarProducto select[name='categoria_id']").val(obj.categoria_id);
                $("#formEditarProducto select[name='color_id']").val(obj.color_id);
                $("#formEditarProducto select[name='proveedor_id']").val(obj.proveedor_id);
                $("#formEditarProducto select[name='talla_id']").val(obj.talla_id);
                $("#formEditarProducto input[name='costo']").val(obj.costo);
                $("#formEditarProducto input[name='precio_publico']").val(obj.precio_publico);
                $("#formEditarProducto input[name='existencia']").val(obj.existencia);
                $("#formEditarProducto input[name='barcode']").val(obj.barcode);
                $("#formEditarProducto textarea[name='descripcion']").val(obj.descripcion);
                $("#formEditarProducto").validator('update');
            }
        });
    })

    // Ajax para Actualizar
    $("#formEditarProducto").validator().on('submit', function (e) {
        if(e.isDefaultPrevented() == false){
            datos = $(this).serialize();
            $.ajax({
                type:"POST",
                url:"Productos/actualizar",
                data: datos,
                success: function(result){
                    $('#modalEditar').modal('hide');
                    var obj = jQuery.parseJSON(result);
                    if(obj.exito == 1){
                        page = ($("input[name='page']").val() == "")? "?success=1" : "?page="+$("input[name='page']").val()+"&success=1";
                        window.location.replace($("input[name='location']").val()+page);
                    }
                    else
                        $(".alert-error").show();
                }
            });
        }        
        return false;
    });
    
});