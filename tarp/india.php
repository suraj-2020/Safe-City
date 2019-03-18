
<html>
  <head>
  <style>
.button {
    background-color: f12222; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {border-radius: 50%;}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1"><button class="button button5" onclick="window.open('this_3.php','_self')">ANALYSE POLICE EMBURSEMENTS</button>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['State', 'Crimes'],
         ['Andhra Pradesh' ,2783],
['Arunachal Pradesh' ,83],
['Assam' ,1356],
['Bihar' ,3643],
['Chhattisgarh' ,1657],
['Goa' ,37],
['Gujarat' ,1280],
['Haryana' ,818],
['Himachal Pradesh' ,122],
['Jammu & Kashmir' ,1412],
['Jharkhand' ,1507],
['Karnataka' ,1678],
['Kerala' ,489],
['Madhya Pradesh' ,2425],
['Maharashtra' ,2950],
['Manipur' ,233],
['Meghalaya' ,169],
['Mizoram' ,31],
['Nagaland' ,109],
['Odisha' ,1005],
['Punjab' ,787],
['Rajasthan' ,1275],
['Sikkim' ,19],
['Tamil Nadu' ,1662],
['Tripura' ,240],
['Uttarakhand' ,381],
['Uttar Pradesh' ,8180],
['West Bengal' ,1673],
['A&N Islands' ,13],
['Chandigarh' ,15],
['D&N Haveli' ,3],
['Delhi UT' ,574],
['Lakshadweep' ,2],
['Puducherry' ,25],
        ]);

        var options = {
          title: 'Crimes In INDIA',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 1400px; height: 500px;";></div>
	
  </body>
</html>