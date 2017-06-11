// Temperature Chart Script
function drawChartTemp(channelId) {
  var arrayTemperature = [];

  $.ajax({
    url: "https://api.thingspeak.com/channels/"+channelId+"/fields/2.json?results=8",
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
      array.push(parseFloat(data.feeds[i].field2));

      arrayTemperature[i] = array;
    }

    drawTemperatureChart(arrayTemperature); 
  });
}

function drawTemperatureChart(arrayTemperature) {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Data');
  data.addColumn('number', 'Temperatura');

  for (var i = 0; i < arrayTemperature.length; i++) {
    data.addRow(arrayTemperature[i]);
  }

  var options = {
    title: "",
    hAxis: {
      title: 'Data'
    },
    vAxis: {
      title: 'Temperatura (ºC)'
    },
    colors: ['#ff0000'],
    crosshair: {
      color: '#000',
      trigger: 'focus'
    },
    lineWidth: 5,
    legend: { position: 'top' },
    width: '90%',
    height: 300,
  };
  var chart = new google.visualization.LineChart(document.getElementById("temperatureChart"));
  chart.draw(data, options);
}
// End of Temperature Chart Script