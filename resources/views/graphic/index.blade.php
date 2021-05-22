@extends('template.main.index')
@section('css')
 <link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Departamento', 'habitantes'],
          @php
          foreach($departamentos as $departamentos){
              echo "['".$departamentos->nombre."',".$departamentos->habitantes."],";
              
          }
        
          @endphp
        ]);

        var options = {
          title: 'Estadisticas de Habitantes',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 @endSection
@section('title','Estadisticas de habitantes 2021')
@section('icon','fas fa-chart-area')
@section('content')

<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  
@endSection