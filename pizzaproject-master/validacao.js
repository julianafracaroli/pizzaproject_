$(document).ready(function(){

$("#formulario").submit(function(event){

  $(".obrigatorio").each(function(){

    //armazena o valor do campo
    var valor = $(this).val();

    if(valor ==""){

      $(this).next("span").text("Campo obrigatório");

      //pára o envio do formulario

      event.preventDefault();
      
    }





}); //fim do each


}); //fim do submit


}); //fim do ready
