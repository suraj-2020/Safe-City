<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Flat UI Login</title>
  
  
  
      <link rel="stylesheet" href="css/login.css">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style>
.button {
    background-color: #BC2121;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(35,99,31,0.5),0 17px 50px 0 rgba(35,99,31,0.5);
}
</style>
</head>

<body onload="asia()">

<!-- <button onclick="asia()">asia</button> 
<button onclick="america()">america</button>
 -->
 <header>
  <div id="container">
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
    <h2><a href="#" id="loginform">Login</a> | <a href="#" id="register">Register</a>
    <p style="align-self:right; float: right; font-family: sans-serif; font-size: 20px; font-weight: normal;">
        
    </h2>


</head>
<button class="button button2">Ferility VS Infant Mortality</button>
</html>

      
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="email">Email</label>
             <input type="email" />
             <label name="password">Password</label>
             <input type="password" />
             <input type="submit" value="Login" />
 
           </fieldset>
        </div>
      </div>
    </div>

    <div class="reg" style="display: none">
     <div class="arrow-up2"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="name">Name</label>
             <input type="text" />
             <label name="email">Email</label>
             <input type="text" />
             <label name="dob">Date of Birth</label>
             <input type="text" />
             <label name="phone">Phone Number</label>
             <input type="text" />
             <label name="passwd">Password</label>
             <input type="text" />
             <input type="submit" value="Signup" />
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

</div>
</header>
<div id="regions_div" style="margin-top: -1%; margin-left:35%; max-width: 58%; min-height: 80%;"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84&libraries=visualization&callback=initMap">
</script>
 -->
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84&callback=initMap">
</script> -->

<script type="text/javascript">

function asia(){
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyCEpuYkGYEJENGI2AFKzn26WCPz0JX7zU0'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          ['India', 1339180127],
          ['Indonesia',263991379],
          ['PK',197015955],
          ['China',1409517397],
          ['Bangladesh',164669751],
          ['Japan',127484450],
          ['Philippines',104918090],
          ['Viet Nam',95540800],
          ['Iran',81162788],
          ['Turkey',80745020],
          ['Thailand',69037513],
          ['Myanmar',53370609],
          ['South Korea',50982212],
          ['Iraq',38274618],
          ['Afganistan',35530081],
          ['Saudi Arabia',32938213],
          ['Afganistan',31910641],
          ['Uzbekistan',35530081],
          ['Malaysia',31624264],
          ['Nepal',29304998],
          ['Yemen',28250420],
          ['North Korea',25490965],
          ['Taiwan',23626456],
          ['Sri Lanka',20876917],
          ['Syria',18269868],
          ['Kazakhstan',18204499],
          ['Cambodia',16005373],
          ['Azerbaijan',9827589],
          ['Jordan',9702353],
          ['United Arab Emirates',9400145],
          ['Tajikistan',8921343],
          ['Israel',8321570],
          ['Hong Kong',7364883],
          ['Laos',6858160],
          ['Lebanon',6082357],
          ['Kyrgyzstan',6045117],
          ['Turkmenistan',5758075],
          ['Singapore',5708844],
          ['State of Palestine',4920724],
          ['Oman',4636262],
          ['Kuwait',4136528],
          ['Georgia',3912061],
          ['Mongolia',3075647],
          ['Armenia',2930450],
          ['Qatar',2639211],
          ['Bahrain',1492584],
          ['Timor-Leste',1296311],
          ['Cyprus',1179551],
          ['Bhutan',807610],
          ['Macao',622567],
          ['Maldives',436330],
          ['Brunei',428697],
          ['Russia',144300000],
          ['Max',1410000000],
          ['Min',0]
        ]);
        var options = {
          region: '142',
          backgroundColor: '#81d4fa',
          datalessRegionColor: '#f8bbd0',
          defaultColor: '#f5f5f5',
          colorAxis: {colors: ['rgb(0, 255, 0)',
          'rgb(0, 240, 0)',
          'rgb(0, 210, 0)',
          'rgb(0, 190, 0)',
          'rgb(0, 160, 0)',
          'rgb(0, 130, 0)',
          'rgb(0, 100, 0)',
          ]}
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    }
    </script>







</html>
