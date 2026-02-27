$("#formulario").hide();
$("#etapa1").hide();
$("#etapa2").hide();
$("#etapa2_no").hide();
$("#etapa3").hide();
$("#etapa4").hide();


var codigo = Math.floor(100000 + Math.random() * 900000).toString();

$(".boton").on("click",function(){
    var modelo = $(this).data("modelo");
    $("#select_modelo").val(modelo);
    $("#formulario").fadeIn("slow");
    $("#etapa1").fadeIn();
    $("html, body").animate({
        scrollTop: $("#formulario").offset().top
    }, 600);
});

$("#resp_no").on("click",function(){
    $("#etapa2_no").fadeIn();
    $("#etapa2").fadeOut();
    $("html, body").animate({
        scrollTop: $("#etapa2_no").offset().top
    }, 600);
});

$("#resp_si").on("click",function(){
    $("#etapa2_no").fadeOut();
    $("#etapa2").fadeIn();
    $("html, body").animate({
        scrollTop: $("#etapa2").offset().top
    }, 600);
});

$("#enviar_codigo").on("click",function(){
    var valor = $("#telefono").val();
    if(valor.length == 10) {
        $("#tel").val(valor);
        $.ajax({
            url : "php/credito_codigo.php",
            type : "post",
            data : {"codigo" : codigo, "telefono" : valor},
            dataType : "json",
            success : function(data){
                var status = data[0].status;
                if(status=="ok"){
                    $("#etapa2").fadeOut();
                    $("#etapa3").fadeIn("slow");
                    $("html, body").animate({
                        scrollTop: $("#etapa3").offset().top
                    }, 600);
                }
                if(status=="error"){
                    alert("Ocurrió un error, intenta nuevamente");
                }
            },
            error : function(data){
                alert("Revisa tu conexión a internet e intenta nuevamente");
            }
        });
    } 
    else 
    {
        alert("El número telefónico deber tener al menos 10 dígitos");
    }
    return false;
});

$("#validar_codigo").on("click",function(){
    var valor = $("#codigo").val();
    if(valor==codigo){
        $("#etapa3").fadeOut();
        $("#etapa4").fadeIn("slow");
        $("html, body").animate({
            scrollTop: $("#etapa3").offset().top
        }, 600);
    }
    else
    {
        alert("El código que ingresaste no es correcto");
    }
});

$("#form_credito").on("submit",function(e){
    e.preventDefault();

    var formD = new FormData(this);

    $.ajax({
        url : "php/credito.php",
        type : "post",
        data : formD,
        cache : false,
        processData: false,  
        contentType: false, 
        dataType : "json",

        success : function(data){
            // data = {status:"ok" | "error", msg:"..."}
            
            if(data.status === "ok"){
                // <<< abrir modal aquí
                $("#modal_credito").modal("show");
            } else {
                // mostrar mensaje de error si quieres
                alert("Hubo un problema: " + data.msg);
            }
        },

        error : function(xhr, status, error){
            alert(
                "ERROR AJAX\n" +
                "status: " + status + "\n" +
                "http: " + xhr.status + "\n\n" +
                "respuesta:\n" + xhr.responseText
            );
        }
    });
});