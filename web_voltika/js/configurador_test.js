$(window).on("load", function(){

    let current = 0;
    let maxVisited = 0; // controla hasta dónde puede regresar
    let screens = $(".voltika-screen");
    let total = screens.length;

    /* Crear steps automáticamente */
    let stepsHtml = "";

    for(let i=0;i<total;i++){
        stepsHtml += '<div class="voltika-step" data-index="'+i+'">'+(i+1)+'</div>';
    }

    $(".voltika-steps").html(stepsHtml);

    function updateStepper(){

        $(".voltika-step").removeClass("active completed locked");

        $(".voltika-step").each(function(index){

            if(index < current){
                $(this).addClass("completed");
            }

            if(index === current){
                $(this).addClass("active");
            }

            if(index > maxVisited){
                $(this).addClass("locked");
            }

        });

        let percentage = (current)/(total-1)*100;
        $(".voltika-progress-line").css("width", percentage+"%");
    }

    function moveTo(step){

        if(step < 0) return;
        if(step >= total) return;

        current = step;

        if(current > maxVisited){
            maxVisited = current;
        }

        $(".voltika-slider").css(
            "transform",
            "translate3d("+(current * -100)+"%,0,0)"
        );

        updateStepper();
    }

    /* FUNCIÓN GLOBAL PARA AVANZAR POR CÓDIGO */
    window.goToStep = function(stepNumber){
        moveTo(stepNumber);
    };

    updateStepper();

    /* CLICK EN STEPPER: SOLO IR HACIA ATRÁS */
    $(document).on("click",".voltika-step",function(){

        let target = $(this).data("index");

        if(target <= maxVisited){
            moveTo(target);
        }

    });

    /* Swipe: solo retroceso manual */
    let startX = 0;

    $("#voltika-slider-wrapper").on("touchstart", function(e){
        startX = e.originalEvent.touches[0].clientX;
    });

    $("#voltika-slider-wrapper").on("touchend", function(e){

        let endX = e.originalEvent.changedTouches[0].clientX;
        let diff = startX - endX;

        if(Math.abs(diff) > 80){

            // Solo permitir swipe hacia atrás
            if(diff < 0 && current > 0){
                moveTo(current - 1);
            }

        }

    });

});