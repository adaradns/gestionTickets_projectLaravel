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

        var options = {
          title: 'Estados de tickets'
        };

        var options1 = {
          title: 'Tickets finalizados/No finalizados'
        };

        

        var chart = new google.visualization.PieChart(document.getElementById('estados'));
        var chart1 = new google.visualization.PieChart(document.getElementById('finalizados-noFinalizados'));
        

        chart.draw(data , options);
        chart1.draw(data1, options1);



      }