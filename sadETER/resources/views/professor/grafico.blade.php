@extends('templates.professor')

@section('conteudo')

@if(Auth::user()->tipo != "Professor")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

<h1> Relatório da Avaliação - Gráficos </h1>

<?php $i = 1;
foreach($consulta as $key => $value){
  
  echo '<script type="text/javascript">
          google.load(\'visualization\', \'1\', {packages:[\'corechart\']});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                 [\'Tasks\', \'Hours per Day\'],';

                 foreach ($value as $a) {
                    $resultado = 'resposta'.$i; 
                    echo '['.'\'' .$a->$resultado.'\','.$a->quantidade.'],';
                  } 
                 
                echo '])' .'
                var options = {
                  title: \''.$key.'\',
                  pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById(\'donutchart'.$i.'\'));
                chart.draw(data, options);
              }
        </script>';

  echo '<div id="donutchart'.$i.'" style="width: 900px; height: 500px;"></div>';
  $i++;
}


?>
@endif
@stop