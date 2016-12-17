var creado = 0;
var asignado = 0;
var finalizado = 0;

for (var i = 0; i < tickets.length; i ++) {
  if (tickets[i].id_estado == 1) {creado = creado + 1;}
  else if(tickets[i].id_estado == 2) {asignado = asignado + 1;}
  else {finalizado = finalizado + 1;}
}
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tipo de ticket', '%'],
          ['Creado',     creado],
          ['Asignado',      asignado],
          ['Finalizado',  finalizado]
        ]);

        var data1 = google.visualization.arrayToDataTable([
          ['Tipo de ticket', '%'],
          ['Finalizado',     finalizado],
          ['No finalizado',      creado + asignado]
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