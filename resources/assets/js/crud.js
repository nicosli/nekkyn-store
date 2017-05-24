$(document).ready(function(){
    $('#modalGuardar').on('shown.bs.modal', function (e) {
        $("#ean").EAN13("9002236311036");
    })
});