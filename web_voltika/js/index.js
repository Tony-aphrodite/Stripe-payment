$(document).ready(function () {
  $(".card-voltika").on("click", function () {
    $(".card-voltika").removeClass("selected");
    $(this).addClass("selected");
    var mod = $(this).data("modelo");
    if(mod=="m03"){
      modelo_n = "M03";
      $("#s_m031").fadeIn();
      $("#s_m032").fadeIn();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("$39,900");
    }
    else if(mod=="m05"){
      modelo_n = "M05";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").fadeIn();
      $("#s_m052").fadeIn();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("$48,260");
    }
    else if(mod=="mino"){
      modelo_n = "Mino-B";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").fadeIn();
      $("#s_mino2").fadeIn();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("$41,820");
    }
    else if(mod=="pesgo"){
      modelo_n = "Pesgo Plus";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").fadeIn();
      $("#s_pesgo2").fadeIn();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("$36,600");
    }
    else if(mod=="mc10"){
      modelo_n = "MC10 StreetX";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").fadeIn();
      $("#s_mc102").fadeIn();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("$109,900");
    }
    else if(mod=="mc10l"){
      modelo_n = "MC0 Lite";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").fadeIn();
      $("#s_mc10l2").fadeIn();
      $("#s_ukko1").hide();
      $("#s_ukko2").hide();
      $("._precio").html("(Próximamente)");
    }
    else if(mod=="ukko"){
      modelo_n = "Ukko S";
      $("#s_m031").hide();
      $("#s_m032").hide();
      $("#s_m051").hide();
      $("#s_m052").hide();
      $("#s_mino1").hide();
      $("#s_mino2").hide();
      $("#s_pesgo1").hide();
      $("#s_pesgo2").hide();
      $("#s_mc101").hide();
      $("#s_mc102").hide();
      $("#s_mc10l1").hide();
      $("#s_mc10l2").hide();
      $("#s_ukko1").fadeIn();
      $("#s_ukko2").fadeIn();
      $("._precio").html("(Próximamente)");
    }
    modelo = mod;
    calc_sim();
  });

  $("#km-slider").on("input change", function () {
    calc_sim();
  });

  var modelo = "m05";
  var modelo_n = "M05";
  var km_dia = $("#km-slider").val();
  var autonomia = 90;
  var costo_modelo = 0.044;
  var costo_modelo_gas = 1.12;

  var duracion_carga = Math.ceil(autonomia/km_dia);
  var duracion_carga_r = autonomia/km_dia;
  var cargas_mes = Math.ceil(30/duracion_carga);
  var cargas_mes_r = 30/duracion_carga_r.toFixed(1);
  var costo_electrico = Math.ceil((costo_modelo*km_dia)*30);
  var costo_gasolina = Math.ceil((costo_modelo_gas*km_dia)*30);
  var ahorro = costo_gasolina - costo_electrico;

  $("._modelo").html(modelo_n);
  $("._cargas_mes").html(cargas_mes);
  $("._duracion_carga").html(duracion_carga);
  $("._costo_electrico").html(costo_electrico);
  $("._costo_gasolina").html(costo_gasolina.toLocaleString());
  $("._ahorro").html(ahorro.toLocaleString());
  $("._km_dia").html(km_dia);
  $("._precio").html("$48,260");

  $("#s_m031").hide();
  $("#s_m032").hide();
  $("#s_mino1").hide();
  $("#s_mino2").hide();
  $("#s_pesgo1").hide();
  $("#s_pesgo2").hide();
  $("#s_mc101").hide();
  $("#s_mc102").hide();
  $("#s_mc10l1").hide();
  $("#s_mc10l2").hide();
  $("#s_ukko1").hide();
  $("#s_ukko2").hide();
  
  function calc_sim(){
    if(modelo=="pesgo"||modelo=="ukko"){
      autonomia = 80;
      costo_modelo = 0.031;
      costo_modelo_gas = 0.984;
    }
    else if(modelo=="m03"){
      autonomia = 90;
      costo_modelo = 0.028;
      costo_modelo_gas = 0.984;
    }
    else if(modelo=="m05"){
      autonomia = 90;
      costo_modelo = 0.044;
      costo_modelo_gas = 1.12;
    }
    else if(modelo=="mino"){
      autonomia = 90;
      costo_modelo = 0.036;
      costo_modelo_gas = 0.984;
    }
    else if(modelo=="mc10"){
      autonomia = 130;
      costo_modelo = 0.055;
      costo_modelo_gas = 1.14;
    }
    else if(modelo=="mc10l"){
      autonomia = 100;
      costo_modelo = 0.036;
      costo_modelo_gas = 1.12;
    }
    km_dia = $("#km-slider").val();
    duracion_carga = Math.ceil(autonomia/km_dia);
    duracion_carga_r = autonomia/km_dia;
    cargas_mes = Math.ceil(30/duracion_carga);
    cargas_mes_r = 30/duracion_carga_r.toFixed(1);
    costo_electrico = Math.ceil((costo_modelo*km_dia)*30);
    costo_gasolina = Math.ceil((costo_modelo_gas*km_dia)*30);
    ahorro = costo_gasolina - costo_electrico;
    $("._modelo").html(modelo_n);
    $("._cargas_mes").html(cargas_mes);
    $("._duracion_carga").html(duracion_carga);
    $("._costo_electrico").html(costo_electrico);
    $("._costo_gasolina").html(costo_gasolina.toLocaleString());
    $("._ahorro").html(ahorro.toLocaleString());
    $("._km_dia").html(km_dia);
  }
});