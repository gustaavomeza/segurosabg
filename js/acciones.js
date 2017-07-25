
function number_format(amount, decimals) {

    amount += ''; // por si pasan un numero en vez de un string
    amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

    decimals = decimals || 0; // por si la variable no fue fue pasada

    // si no es un numero o es igual a cero retorno el mismo cero
    if (isNaN(amount) || amount === 0) 
        return parseFloat(0).toFixed(decimals);

    // si es mayor o menor que cero retorno el valor formateado como numero
    amount = '' + amount.toFixed(decimals);

    var amount_parts = amount.split('.'),
        regexp = /(\d+)(\d{3})/;

    while (regexp.test(amount_parts[0]))
        amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');

    return amount_parts.join('.');
}










////////////////////////////////////////INICIA JQUERY
$(document).ready(function(){







  $("#ex6").slider();
  $("#ex6").on("slide", function(slideEvt) {
    $("#ex6SliderVal").text(number_format(slideEvt.value, 2));
  });
  $("#ex6").change(function(){
      $("#ex6SliderVal").text(number_format($(this).val(), 2));
  }); 


 







  $('#datetimepicker1').datetimepicker({
      viewMode: 'years',
      format: 'DD/MM/YYYY',
      daysOfWeekDisabled: []
  });

  $("#cal1").click(function(){  
    $( "#datetimepicker1" ).focus();
  }); 


  $('#datetimepicker2').datetimepicker({
      viewMode: 'years',
      format: 'DD/MM/YYYY',
      daysOfWeekDisabled: []

  });

  $("#cal2").click(function(){  
    $( "#datetimepicker2" ).focus();
  }); 






  $(".myMENU").click(function(){  


    $( ".NAVmobileINFO").toggle();
    ventanaW = $(window).height();
    nuenoTAMinfoNAVmobile = ventanaW-87.5;
    if (838 > ventanaW) {
      $(".NAVmobileINFO").css("overflow-y", "scroll");

      $(".NAVmobileINFO").css("height", nuenoTAMinfoNAVmobile+"px");
    } else {
       $(".NAVmobileINFO").css("overflow", "hidden");
       $(".NAVmobileINFO").css("height", "auto");
    }


  }); 




  $("#masDS").click(function(){  
  	$( "#masCONTENT" ).toggle('bounce');
  }); 




  $(".BG1-info").hover(function(){
  	$(".BG1").toggleClass("hoverBG1");
   });

 
  $(".BG2-info").hover(function(){
  	$(".BG2").toggleClass("hoverBG2");
   });


  $(".BG6-info").hover(function(){
  	$(".BG6").toggleClass("hoverBG6");
   });



  $(".BG4-info").hover(function(){
  	$(".BG4").toggleClass("hoverBG4");
   });






});