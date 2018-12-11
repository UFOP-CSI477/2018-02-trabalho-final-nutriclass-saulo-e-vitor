function validarCampo(campo) {

  console.log("validarCampo: " + campo);

  // Validar campo
  var valor = parseFloat($(campo).val());

  // Valor 1 -- inválido
  if ( isNaN(valor) ) {
    // Exibe o alerta
    $(alerta).slideDown();
    // Adiciona CSS de erro - input
    $(campo).addClass("is-invalid");
    // No label
    // Limpar o campo
    $(campo).val("");
    // Definir o foco para o input
    // Abandonar a execução
    return false;
  }

  // Valor - correto

  // Oculta o alerta
  // Remover as classes de erro
  $(campo).removeClass("is-invalid");
  // Adicionar classe de validade
  $(campo).addClass("is-valid");
  return true;

}

function dadosClassific(campo,valor) {

  if(valor < 18.5){
    $(campo).val("Subnutrição");
  }
  if(valor >= 18.5 && valor <= 24.9){
    $(campo).val("Peso Saudável");
  }
  if(valor >= 25.0 && valor <= 29.9){
    $(campo).val("Sobrepeso");
  }
  if(valor >= 30.0 && valor <= 34.9){
    $(campo).val("Obesidade grau 1");
  }
  if(valor >= 35.0 && valor <= 39.9){
    $(campo).val("Obesidade grau 2");
  }
  if(valor > 40.0){
    $(campo).val("Obesidade grau 3");
  }

}

function pesoIdeal(altura) {

  var minimo = $(altura).val() * $(altura).val() * 18.5;
  var maximo = $(altura).val() * $(altura).val() * 24.9;
  var arredMin = parseFloat(minimo.toFixed(2));
  var arredMax = parseFloat(maximo.toFixed(2));
  var newRow = $("<tr>");
  var cols = "";
  cols += '<td>' + $(altura).val() + ' m</td>';
  cols += '<td>' + arredMin + ' Kg</td>';
  cols += '<td>' + arredMax + ' Kg</td>';
  cols += '</td>';

  newRow.append(cols);
  $("#pesoideal-table").append(newRow);

}


$(document).ready(function(){

  // Vincular ação ao botão de cálculo
  // $("#btnCalcular").click(function(){
  //
  // });

  $('#peso').mask("000.0", {reverse: true});
  $('#altura').mask('0.00');
  $('#imc').mask("000.0", {reverse: true});
  $("#telefone").mask("(00) 00000-0000");
  $("#altura").change(function(){

    if ( validarCampo("input[name='peso']") &&
         validarCampo("input[name='altura']")) {

           var n1 = parseFloat( $("input[name='peso']").val() );
           var n2 = parseFloat( $("input[name='altura']").val() );

           var res = n1 / (n2*n2);
           var arred = parseFloat(res.toFixed(1));

           // Apresentar o resultado
           $("input[name='imc']").val(arred);

           dadosClassific("#classificacao",arred);

           if ( !validarCampo("input[name='peso']", "#alertaPeso", "#labelPeso") &&
                !validarCampo("input[name='altura']", "#alertaAltura", "#labelAltura")) {
             window.alert("Entre com os dados primeiro!");
           }


    } else {
      $("input[name='valor']").val("");
    }


  });


  $("#btnReiniciar").click(function(){
    location.reload();
  });

  $("#btnLimpar").click(function(){
    $("#alertaPeso").hide();
    $("#alertaAltura").hide();
    $("#idPeso").removeClass("is-invalid");
    $("#idPeso").removeClass("is-valid");
    $("#idAltura").removeClass("is-invalid");
    $("#idAltura").removeClass("is-valid");
    $("#labelPeso").removeClass("text-danger");
    $("#labelAltura").removeClass("text-danger");
    $("#idPeso").val("");
    $("#idAltura").val("");
  });

  $("input[name='peso']").focusout(function(){
    validarCampo("input[name='peso']", "#alertaPeso", "#labelPeso");
  });

  $("input[name='altura']").focusout(function(){
    validarCampo("input[name='altura']", "#alertaAltura", "#labelAltura");
  });



});
