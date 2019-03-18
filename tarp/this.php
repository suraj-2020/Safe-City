<body >
<html>
  <head bgcolor="black";>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);
	
    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Life Expectancy', 'Fertility Rate', 'Region',],
        ['CAN',    80.66,              1.67,      'North America',  ],
        ['DEU',    79.84,              1.36,      'Europe',       ],
        ['DNK',    78.6,               1.84,      'Europe',         ],
        ['EGY',    72.73,              2.78,      'Middle East',    ],
        ['GBR',    80.05,              2,         'Europe',         ],
        ['IRN',    72.49,              1.7,       'Middle East',    ],
        ['IRQ',    68.09,              4.77,      'Middle East',    ],
        ['ISR',    81.55,              2.96,      'Middle East',    ],
        ['RUS',    68.6,               1.54,      'Europe',         ],
        ['USA',    78.09,              2.05,      'North America',  ]
      ]);

      var options = {
        title: 'Correlation between life expectancy, fertility rate ' +
               'and population of some world countries (2010)',
        hAxis: {title: 'Life Expectancy'},
        vAxis: {title: 'Fertility Rate'},
        bubble: {textStyle: {fontSize: 11}},
		 explorer: { actions: ['dragToZoom', 'rightClickToReset'] }
      };

      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <body>
    <div id="series_chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
</body>