@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h2>Turma: {{$turma[0]->nome}} - Estado Nutricional (%)</h2>
</div>

<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.

    var tipos = new Array();
    var subnutricao = 0;
    var saudavel = 0;
    var sobrepeso = 0;
    var obesidade1 = 0;
    var obesidade2 = 0;
    var obesidade3 = 0;
    tipos = <?=json_encode($total)?>;

    for (var i in tipos) {
      if((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) < 18.5){
        subnutricao++;
      }else if ((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) >= 18.5
                && (tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) <=24.9 ) {
        saudavel++;
      }else if ((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) >= 25.0
                && (tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) <=29.9 ) {
        sobrepeso++;
      }else if ((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) >= 30.0
                && (tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) <=34.9 ) {
        obesidade1++;
      }else if ((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) >= 35.0
                && (tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) <=39.9 ) {
        obesidade2++;
      }else if ((tipos[i]['peso']/(tipos[i]['altura']*tipos[i]['altura'])) > 40.0 ) {
        obesidade3++;
      }

    }

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['Subnutrição', subnutricao],
      ['Peso Saudável', saudavel],
      ['Sobrepeso', sobrepeso],
      ['Obesidade Grau 1', obesidade1],
      ['Obesidade Grau 2', obesidade2],
      ['Obesidade Grau 3', obesidade3]
    ]);

    // Set chart options
    var options = {'title':'Estado Nutricional',
                   'width':800,
                   'height':600};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div id="chart_div" class="border"></div>
    </div>
  </div>
  <div class="row">&nbsp;</div>
  <a href="/show3" class="btn btn-secondary">Voltar</a>
</div>
@endsection
