google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tipo de ticket', '%'],
          ['Creado',     11],
          ['Asignado',      2],
          ['Finalizado',  2]
        ]);

        var data1 = google.visualization.arrayToDataTable([
          ['Tipo de ticket', '%'],
          ['Finalizado',     13],
          ['No finalizado',      12]
        ]);

        var data2 = google.visualization.arrayToDataTable([
          ['Tipo de ticket', '%'],
          ['Escalado',     9],
          ['No escalado',      2]
        ]);

        var options = {
          title: 'Estados de tickets'
        };

        var options1 = {
          title: 'Tickets finalizados/No finalizados'
        };

        var options2 = {
          title: 'Tickets Escalados/No Escalados'
        };

        var chart = new google.visualization.PieChart(document.getElementById('estados'));
        var chart1 = new google.visualization.PieChart(document.getElementById('finalizados-noFinalizados'));
        var chart2 = new google.visualization.PieChart(document.getElementById('escalados-noEscalados'));

        chart.draw(data , options);
        chart1.draw(data1, options1);
        chart2.draw(data2, options2);



      }