$("#menu1").on("click",function(){
    window.location.href="m03";
});

$("#menu2").on("click",function(){
    window.location.href="m05";
});

$("#menu3").on("click",function(){
    window.location.href="mc10";
});

$("#menu4").on("click",function(){
    window.location.href="mino";
});

$("#menu5").on("click",function(){
    window.location.href="pesgo";
});

$("#menu6").on("click",function(){
    window.location.href="ukko";
});


$("#contacto_form").on("submit",function(){
    var datos = document.getElementById("contacto_form");
    var formD = new FormData(datos);
    $.ajax({
        url : "php/contacto.php",
        type : "post",
        data : formD,
        cache : false,
        processData: false,  
        contentType: false, 
        dataType : "json",
        success : function(data){
            var status = data[0].status;
            if(status=="ok"){
                toastr["success"]("¡Gracias por enviar tu información! Un asesor te contactará a la brevedad");
                $("#nombre").val("");
                $("#email").val("");
                $("#telefono").val("");
                $("#ciudad").val("");
                $("#mensaje").val("");
            }
            if(status=="error"){
                toastr["error"]("Ocurrió un error, intenta nuevamente");
            }
        },
        error : function(data){
            toastr["error"]("No pudimos conectarnos al servidor, intenta nuevamente");
        }

    });
    return false;
});

$("#distribuidor_form").on("submit",function(){
    var datos = document.getElementById("distribuidor_form");
    var formD = new FormData(datos);
    $.ajax({
        url : "php/distribuidor.php",
        type : "post",
        data : formD,
        cache : false,
        processData: false,  
        contentType: false, 
        dataType : "json",
        success : function(data){
            var status = data[0].status;
            if(status=="ok"){
                $("#distribuidor").modal("hide");
                toastr["success"]("¡Gracias por enviar tu información! Un asesor te contactará a la brevedad");
                $("#d_nombre").val("");
                $("#d_email").val("");
                $("#d_telefono").val("");
                $("#d_empresa").val("");
                $("#d_region").val("");
                $("#d_ganancias").val("");
                $("#d_mensaje").val("");
            }
            if(status=="error"){
                toastr["error"]("Ocurrió un error, intenta nuevamente");
            }
        },
        error : function(data){
            toastr["error"]("No pudimos conectarnos al servidor, intenta nuevamente");
        }

    });
    return false;
});

$("#manejo_form").on("submit",function(){
    var datos = document.getElementById("manejo_form");
    var formD = new FormData(datos);
    $.ajax({
        url : "php/manejo.php",
        type : "post",
        data : formD,
        cache : false,
        processData: false,  
        contentType: false, 
        dataType : "json",
        success : function(data){
            var status = data[0].status;
            if(status=="ok"){
                $("#prueba").modal("hide");
                toastr["success"]("¡Gracias por enviar tu información! Un asesor te contactará a la brevedad");
                $("#m_nombre").val("");
                $("#m_email").val("");
                $("#m_telefono").val("");
                $("#m_cp").val("");
                $("#m_modelo").val("");
                $("#m_fecha").val("");
                $("#m_ubicacion").val("");
            }
            if(status=="error"){
                toastr["error"]("Ocurrió un error, intenta nuevamente");
            }
        },
        error : function(data){
            toastr["error"]("No pudimos conectarnos al servidor, intenta nuevamente");
        }

    });
    return false;
});

$(".prueba_modelo").on("click",function(){
    var modelo = $(this).data("modelo");
    $("#m_modelo").val(modelo);
});

var apartado_url;

$(".apartar").on("click",function(){
    
    var mod = $(this).data("modelo");
    if(mod=="m03"){
        apartado_url = "https://pagos.voltika.mx/b/9B68wP5pK9tw5Ekgm61B604";
        $("#apartado_img").attr("src","img/configurador/m03/black_side.png");
    }
    if(mod=="m05"){
        apartado_url = "https://pagos.voltika.mx/b/6oUdR92dyfRU5Ek2vg1B603";
        $("#apartado_img").attr("src","img/configurador/m05/black_side.png");
    }
    if(mod=="mino"){
        apartado_url = "https://pagos.voltika.mx/b/8x2eVdaK4bBE2s8edY1B602";
        $("#apartado_img").attr("src","img/configurador/mino/grey_side.png");
    }
    if(mod=="pesgo"){
        apartado_url = "https://pagos.voltika.mx/b/5kQ9ATf0k6hk6Iofi21B601";
        $("#apartado_img").attr("src","img/configurador/pesgo/grey_side.png");
    }
    if(mod=="mc10"){
        apartado_url = "https://pagos.voltika.mx/b/7sY5kDaK40X09UA8TE1B605";
        $("#apartado_img").attr("src","img/configurador/mc10/grey_side.png");
    }
    $("#apartar").modal("show");
    return false;
});

$("#apartado_form").on("submit",function(){
    window.location.href = apartado_url;
    return false;
});

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 2000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

function getParametroURL(nombre) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}

function accion_url(){
    var accion = getParametroURL('accion');

    if(accion=='manejo'){
        $('#prueba').modal('show');
    }
}

accion_url();


