$(".btnClientes").click(function () {
    var id_cliente = $(this).attr("id_cliente");
    
    //console.log("prueba", id_cliente);
    var data = new FormData();
    data.append("id_cliente", id_cliente);
    data.append("operacion", "Editar");
    $.ajax({
        url: "ajax/ajaxClientes.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){
            console.log("Json", respuesta);
        }
    });
});