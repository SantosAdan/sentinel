// Umidade Chart Script
function drawChartUmidade(channelId) {
  var arrayUmidade = [];

  $.ajax({
    url: "https://api.thingspeak.com/channels/"+channelId+"/fields/3.json?results=8",
    type: "GET",
  })
  .done(function(data) {
      for (var i = 0; i < data.feeds.length; i++) {
        var date = data.feeds[i].created_at.split('T');
        date = date[0].split('-');
        var day = date[2];
        var month = date[1];
        var year = date[0];
        var year2digits = year.split('20')[1];
        var array = [];
        array.push(day + '/' + month + '/' + year2digits);
        array.push(parseFloat(data.feeds[i].field3));

        arrayUmidade[i] = array;
      }

      drawUmidadeChart(arrayUmidade); 
  });
}

function drawUmidadeChart(arrayUmidade) {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Data');
  data.addColumn('number', 'Umidade');

  for (var i = 0; i < arrayUmidade.length; i++) {
    data.addRow(arrayUmidade[i]);
  }

  var options = {
    title: "",
    hAxis: {
      title: 'Data'
    },
    vAxis: {
      title: 'Umidade do Ar (%)'
    },
    colors: ['#00897b'],
    crosshair: {
      color: '#000',
      trigger: 'focus'
    },
    lineWidth: 5,
    legend: { position: 'top' },
    width: '90%',
    height: 300,
  };
  var chart = new google.visualization.LineChart(document.getElementById("umidadeChart"));
  chart.draw(data, options);
}
// End of Umidade Chart Script