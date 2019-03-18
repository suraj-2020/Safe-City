<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Flat UI Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
  
      <link rel="stylesheet" href="css/login.css">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
</head>
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
label[for=range] {
position: absolute;
top: 50%;
left: 50%;
margin-left: -175px;
margin-top: -32px;
height: 49px;
padding-top: 6px;
width: 350px;
padding-left: 13px;
-webkit-transform: skew(-62deg);
overflow: hidden;
padding-bottom: 10px;
}
label[for=range]:after {
content: "";
box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 0.51);
-webkit-transform: skew(62deg);
}
input[type=range] {
-webkit-appearance: none;
background-color: transparent;
width: 300px;
height: 38px;
  padding-top:10px;
  overflow:hidden;
transform-style: preserve-3d;
perspective: 300;
transform-origin: 50% 50% 300px;
perspective-origin: 50% -121%;
transform: skew(62deg);
}
input[type=range]:focus{
  outline:none;
}
input[type="range"]::-webkit-slider-thumb {
  position:relative;
     -webkit-appearance: none;
    cursor:pointer;
    background-color: transparent;
    width: 30px;
    height: 18px;
    box-shadow: 1px 5px 10px -1px rgba(0, 0, 0,0.2),
    -25px 0 0 10px rgba(90, 184, 6, 0.5),
    -75px 0 0 10px rgba(90, 184, 6, 0.5),
    -125px 0 0 10px rgba(90, 184, 6, 0.5),
    -175px 0 0 10px rgba(90, 184, 6, 0.5),
    -225px 0 0 10px rgba(90, 184, 6, 0.5),
    -275px 0 0 10px rgba(90, 184, 6, 0.5),
    -325px 0 0 10px rgba(90, 184, 6, 0.5);
  z-index:2;
}
input[type="range"]::-webkit-slider-thumb:after {
content: "";
position: absolute;
z-index: 1;
width: 300px;
height: 140px;
background: #9FE472;
transform: rotateX(90deg);
transform-origin: 0 0px 0;
transform: rotateX(90deg) translateY(-140px) translateZ(-18px);
}
input[type="range"]::-webkit-slider-thumb:before {
content: "< >";
font-family: 'Concert One', cursive;
position: absolute;
background: #eaebe5;
background: -moz-linear-gradient(top, #eaebe5 0%, #dcdedd 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#eaebe5), color-stop(100%,#dcdedd));
background: -webkit-linear-gradient(top, #eaebe5 0%,#dcdedd 100%);
background: -o-linear-gradient(top, #eaebe5 0%,#dcdedd 100%);
background: -ms-linear-gradient(top, #eaebe5 0%,#dcdedd 100%);
background: linear-gradient(to bottom, #eaebe5 0%,#dcdedd 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eaebe5', endColorstr='#dcdedd',GradientType=0 );
top: -2px;
left: 0px;
border-radius: 2px;
color: #5a5a5a;
text-shadow: 0 1px 0 white;
height: 22px;
width: 32px;
border-top: 1px solid white;
border-left: 1px solid white;
box-sizing: border-box;
text-align: center;
line-height: 19px;
font-size: 17px;
}
input[type="range"]::-webkit-slider-runnable-track:before {
content: "";
position: absolute;
height: 38px;
width: 283px;
background: #e8e8e8;
background: -moz-linear-gradient(top, #dfdfdf 0%, #d8d8d8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#dfdfdf), color-stop(100%,#d8d8d8));
background: -webkit-linear-gradient(top, #dfdfdf 0%,#d8d8d8 100%);
background: -o-linear-gradient(top, #dfdfdf 0%,#d8d8d8 100%);
background: -ms-linear-gradient(top, #dfdfdf 0%,#d8d8d8 100%);
background: linear-gradient(to bottom, #dfdfdf 0%,#d8d8d8 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dfdfdf', endColorstr='#d8d8d8',GradientType=0 );
bottom: 0;
left: 0;
}
input[type="range"]::-webkit-slider-runnable-track:after {
content: "";
position: absolute;
height: 10px;
width: 270px;
background: rgb(247, 247, 247);
top: 0;
right: 26px;
transform: skew(62deg);
}
input[type=range]:before {
content: "";
position: absolute;
background: rgb(190, 190, 190);
box-shadow:0 1px 0 rgb(235, 235, 235);
width: 283px;
left: 0;
height: 1px;
top: 29px;
z-index: 1;
}
input[type=range]:after {
content: "";
position: absolute;
background: rgb(190, 190, 190);
width: 7px;
left: 3px;
border-radius: 50%;
height: 6px;
top: 26px;
z-index: 1;
box-shadow:30px 0 0 rgb(190, 190, 190),
60px 0 0 rgb(190, 190, 190),
90px 0 0 rgb(190, 190, 190),
120px 0 0 rgb(190, 190, 190),
150px 0 0 rgb(190, 190, 190),
180px 0 0 rgb(190, 190, 190),
210px 0 0 rgb(190, 190, 190),
240px 0 0 rgb(190, 190, 190),
270px 0 0 rgb(190, 190, 190),
60px 1px 0 rgb(235, 235, 235),
90px 1px 0 rgb(235, 235, 235),
120px 1px 0 rgb(255, 255, 255),
150px 1px 0 rgb(235, 235, 235),
180px 1px 0 rgb(235, 235, 235),
210px 1px 0 rgb(235, 235, 235),
240px 1px 0 rgb(235, 235, 235),
270px 1px 0 rgb(235, 235, 235);
}


.output {
position: absolute;
left: 0;
margin-bottom: -100px;
text-align: center;
width: 100%;
font-size: 2em;
font-family: 'Advent Pro', sans-serif;
color: rgba(132, 206, 66, 1);
}
    </style>


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

    
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <form method="post" action="login.php"> 
             <label name="email">Email</label>
             <input type="email" name="mx"/>
             <label name="password">Password</label>
             <input type="password" name="password"/>
             <input type="submit" value="Login">
              </form>
           </fieldset>
        </div>
      </div>
    </div>
	<output for="range" class="output"></output>
      <label for="range">
      <input type="range" name="range" id="range" min="2020" max="2050" step="10" value="175"/>
</label>
 
    <div class="reg" style="display: none">
     <div class="arrow-up2"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <form method="post" action="signup.php">
             <label name="name">Name</label>
             <input type="text" name="name" />
             <label name="email">Email</label>
             <input type="text" name="email"/>
             <label name="aadhar">Aadhar Number</label>
             <input type="text" name="aadhar"/>
             <label name="passwd">Password</label>
             <input type="password" name="passwd"/>
             <input type="submit" value="Signup" />
              </form>
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



 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
	$('#range').on("change", function() {
    $('.output').val(this.value);
    }).trigger("change");
	$('#range').on("change", function() {
    asia(this.value);
    })
	</script>
	<script type="text/javascript">
function asia(year){
	if(year==2050)
	{
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          ['India', 1704859000],
          ['Indonesia',324857000],
          ['PK',314437000],
          ['China',1342848000],
          ['Bangladesh',216467000],
          ['Japan',142039000],
          ['Philippines',132436000],
          ['Viet Nam',132540800],
          ['Iran',92424000],
          ['Turkey',95256000],
          ['Thailand',91581000],
          ['Myanmar',68370609],
          ['South Korea',61982212],
          ['Iraq',5774618],
          ['Afganistan',51530081],
          ['Saudi Arabia',48938213],
          ['Afganistan',51010641],
          ['Uzbekistan',48530081],
          ['Malaysia',4624264],
          ['Nepal',53304998],
          ['Yemen',51250420],
          ['North Korea',44490965],
          ['Taiwan',41626456],
          ['Sri Lanka',39876917],
          ['Syria',35269868],
          ['Kazakhstan',31204499],
          ['Cambodia',25345373],
          ['Azerbaijan',21827589],
          ['Jordan',9909353],
          ['United Arab Emirates',9800145],
          ['Tajikistan',9421343],
          ['Israel',9781570],
          ['Hong Kong',8864883],
          ['Laos',7158160],
          ['Lebanon',6882357],
          ['Kyrgyzstan',6995117],
          ['Turkmenistan',4988075],
          ['Singapore',9808844],
          ['State of Palestine',4230724],
          ['Oman',4736262],
          ['Kuwait',4236528],
          ['Georgia',3912061],
          ['Mongolia',3975647],
          ['Armenia',4130450],
          ['Qatar',2939211],
          ['Bahrain',3292584],
          ['Timor-Leste',2226311],
          ['Cyprus',2189551],
          ['Bhutan',997610],
          ['Macao',792567],
          ['Maldives',616330],
          ['Brunei',689697],
          ['Russia',122300000],
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
	if(year==2040)
	{
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          ['India', 1648859000],
          ['Indonesia',294857000],
          ['PK',254437000],
          ['China',1392848000],
          ['Bangladesh',196467000],
          ['Japan',135039000],
          ['Philippines',124436000],
          ['Viet Nam',102540800],
          ['Iran',98424000],
          ['Turkey',99256000],
          ['Thailand',88581000],
          ['Myanmar',64370609],
          ['South Korea',63982212],
          ['Iraq',5374618],
          ['Afganistan',49530081],
          ['Saudi Arabia',42938213],
          ['Afganistan',49010641],
          ['Uzbekistan',42530081],
          ['Malaysia',4424264],
          ['Nepal',51304998],
          ['Yemen',48250420],
          ['North Korea',41490965],
          ['Taiwan',39626456],
          ['Sri Lanka',38876917],
          ['Syria',32269868],
          ['Kazakhstan',29204499],
          ['Cambodia',24005373],
          ['Azerbaijan',19827589],
          ['Jordan',9109353],
          ['United Arab Emirates',9800145],
          ['Tajikistan',9221343],
          ['Israel',9221570],
          ['Hong Kong',8364883],
          ['Laos',6958160],
          ['Lebanon',6882357],
          ['Kyrgyzstan',6995117],
          ['Turkmenistan',4988075],
          ['Singapore',9808844],
          ['State of Palestine',4230724],
          ['Oman',4736262],
          ['Kuwait',4236528],
          ['Georgia',3912061],
          ['Mongolia',3975647],
          ['Armenia',4130450],
          ['Qatar',2939211],
          ['Bahrain',3192584],
          ['Timor-Leste',2196311],
          ['Cyprus',1989551],
          ['Bhutan',927610],
          ['Macao',712567],
          ['Maldives',536330],
          ['Brunei',629697],
          ['Russia',128300000],
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
	
	if(year==2030)
	{
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          ['India', 1588859000],
          ['Indonesia',274857000],
          ['PK',248437000],
          ['China',1412848000],
          ['Bangladesh',186467000],
          ['Japan',125039000],
          ['Philippines',118436000],
          ['Viet Nam',99540800],
          ['Iran',93424000],
          ['Turkey',89256000],
          ['Thailand',78581000],
          ['Myanmar',58370609],
          ['South Korea',57982212],
          ['Iraq',4274618],
          ['Afganistan',43530081],
          ['Saudi Arabia',39938213],
          ['Afganistan',46910641],
          ['Uzbekistan',39530081],
          ['Malaysia',42624264],
          ['Nepal',47304998],
          ['Yemen',43250420],
          ['North Korea',34490965],
          ['Taiwan',37626456],
          ['Sri Lanka',34876917],
          ['Syria',29269868],
          ['Kazakhstan',29204499],
          ['Cambodia',24005373],
          ['Azerbaijan',19827589],
          ['Jordan',9109353],
          ['United Arab Emirates',9800145],
          ['Tajikistan',9221343],
          ['Israel',9221570],
          ['Hong Kong',8364883],
          ['Laos',6958160],
          ['Lebanon',6882357],
          ['Kyrgyzstan',6545117],
          ['Turkmenistan',4758075],
          ['Singapore',9708844],
          ['State of Palestine',4120724],
          ['Oman',4636262],
          ['Kuwait',4136528],
          ['Georgia',3412061],
          ['Mongolia',3675647],
          ['Armenia',3430450],
          ['Qatar',2439211],
          ['Bahrain',2992584],
          ['Timor-Leste',1496311],
          ['Cyprus',1289551],
          ['Bhutan',887610],
          ['Macao',692567],
          ['Maldives',486330],
          ['Brunei',508697],
          ['Russia',134300000],
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
	if(year==2020)
	{
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          ['India', 1388859000],
          ['Indonesia',271857000],
          ['PK',208437000],
          ['China',1402848000],
          ['Bangladesh',170467000],
          ['Japan',125039000],
          ['Philippines',108436000],
          ['Viet Nam',95540800],
          ['Iran',83424000],
          ['Turkey',82256000],
          ['Thailand',68581000],
          ['Myanmar',54370609],
          ['South Korea',51982212],
          ['Iraq',34274618],
          ['Afganistan',33530081],
          ['Saudi Arabia',36938213],
          ['Afganistan',36910641],
          ['Uzbekistan',34530081],
          ['Malaysia',32624264],
          ['Nepal',39304998],
          ['Yemen',38250420],
          ['North Korea',27490965],
          ['Taiwan',24626456],
          ['Sri Lanka',28876917],
          ['Syria',20269868],
          ['Kazakhstan',22204499],
          ['Cambodia',19005373],
          ['Azerbaijan',10827589],
          ['Jordan',9902353],
          ['United Arab Emirates',9800145],
          ['Tajikistan',9221343],
          ['Israel',8921570],
          ['Hong Kong',7964883],
          ['Laos',6158160],
          ['Lebanon',6382357],
          ['Kyrgyzstan',6545117],
          ['Turkmenistan',3758075],
          ['Singapore',9708844],
          ['State of Palestine',4120724],
          ['Oman',4336262],
          ['Kuwait',4116528],
          ['Georgia',3312061],
          ['Mongolia',3575647],
          ['Armenia',2430450],
          ['Qatar',2939211],
          ['Bahrain',1992584],
          ['Timor-Leste',1396311],
          ['Cyprus',1279551],
          ['Bhutan',847610],
          ['Macao',652567],
          ['Maldives',446330],
          ['Brunei',488697],
          ['Russia',154300000],
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
	if(year==2016)
	{
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyA1YgGMYSmzMO2tsxL_86X0L1tiMh-VC84'
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
    }
    </script>
</html>
