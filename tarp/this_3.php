<html>
  <head>
    <style>
.button {
    background-color: f12222; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center	;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {border-radius: 50%;}
</style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['State', 'Total count'],
         ['Andhra Pradesh' ,106631],
['Arunachal Pradesh' ,9873],
['Assam' ,54435],
['Bihar' ,77344],
['Chhattisgarh' ,48687],
['Goa' ,5921],
['Gujarat' ,74096],
['Haryana' ,41995],
['Himachal Pradesh' ,15000],
['Jammu & Kashmir' ,75185],
['Jharkhand' ,56415],
['Karnataka' ,76877],
['Kerala' ,46507],
['Madhya Pradesh' ,84018],
['Maharashtra' ,197978],
['Manipur' ,25674],
['Meghalaya' ,11197],
['Mizoram' ,9326],
['Nagaland' ,10003],
['Odisha' ,51396],
['Punjab' ,76099],
['Rajasthan' ,81013],
['Sikkim' ,4279],
['Tamil Nadu' ,101254],
['Tripura' ,23619],
['Uttar Pradesh' ,162783],
['Uttarakhand' ,21259],
['West Bengal' ,92848],
['A&N Islands' ,4257],
['Chandigarh' ,6037],
['D&N Haveli' ,287],
['Daman & Diu' ,370],
['Delhi UT' ,75704],
['Lakshadweep' ,384],
['Puducherry' ,2786]
        ]);

        var options = {
          title: '',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Police Count Of Each State',},
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 1000px; height: 500px;"></div>
	 <meta name="viewport" content="width=device-width, initial-scale=1"><button class="button button5" onclick="window.open('main.php','_self')">Go Back</button>
  </body>
</html>

