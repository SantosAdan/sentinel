// Temperature Chart Script
function drawChartPressure(channelId) {
  var arrayPressure = [];

  $.ajax({
    url: "https://api.thingspeak.com/channels/"+channelId+"/fields/1.json?results=8",
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
      array.push(parseFloat(data.feeds[i].field1));

      arrayPressure[i] = array;
    }

    drawPressureChart(arrayPressure); 
  });
}

function drawPressureChart(arrayPressure) {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Data');
  data.addColumn('number', 'Pressão');

  for (var i = 0; i < arrayPressure.length; i++) {
    data.addRow(arrayPressure[i]);
  }

  var options = {
    title: "",
    hAxis: {
      title: 'Data'
    },
    vAxis: {
      title: 'Pressão (ATM)'
    },
    colors: ['#fb8c00'],
    crosshair: {
      color: '#000',
      trigger: 'focus'
    },
    lineWidth: 5,
    legend: { position: 'top' },
    width: '90%',
    height: 300,
  };
  var chart = new google.visualization.LineChart(document.getElementById("pressureChart"));
  chart.draw(data, options);
}
// End of Temperature Chart Script