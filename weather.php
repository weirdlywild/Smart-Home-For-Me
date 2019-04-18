<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" />

<style>
body {
	background: black;
	font-size: 18px;
}

h1, h2, h3, h4, h5 {
	font-weight: normal;
	margin: 0;
	padding: 0;
}


.widget {
	height: 250px;
	width: 300px;
	position: absolute;
  left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
<!--  border: 6px solid #171A16; -->
  border-radius: 20px;

}

.weatherIcon{
	background-color: black;
	height: 70%;
	width: 100%;
	position: absolute;
    left: 0;
	top: 0;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}

.weatherIcon:before{
	display: block;
	content:"\f002";
	color: #4caf50;
	font-family: weathericons;
	font-size: 95px;
	position: absolute;
	left: 50%;
	top: 58%;
	transform: translate(-50%, -50%);
}

.weatherData {
	background-color: #181818;
	height: 30%;
	width: 100%;
	position: absolute;
    left: 0;
	bottom: 0;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}

h1 {
	color: #c5cdcf;
	font-family: 'Open Sans';
  font-weight: 200;
	font-size: 30px;
	line-height: 2.9375em;
	position: absolute;
	left: 6%;
	top: 50%;
	transform: translate(0, -50%);
}

h2 {
	color: #8f9b9d;
	font-family: 'Open Sans';
  font-weight: 200;
	font-size: 1.1875em;
	line-height: 1.1875em;
	position: absolute;
	top: 24%;
	left: 27%;
}

h3 {
	color: #c5cdcf;
	font-family: 'Open Sans';
  font-weight: 400;
	font-size: 0.8125em;
	line-height: 0.8125em;
	position: absolute;
	bottom: 25%;
	left: 27%;
}

h4 {
	color: #fff;
	font-family: 'Open Sans';
  font-weight: 700;
	text-transform: uppercase;
	font-size: 1em;
	line-height: 1em;
	position: absolute;
	top: 30%;
	left: 50%;
	transform: translate(-50%, 0);
}

h5 {
	color: #fff;
	font-family: 'Open Sans';
  font-weight: 500;
	font-size: 1em;
	line-height: 1em;
	position: absolute;
	bottom: 24%;
	left: 50%;
	transform: translate(-50%, 0);
}

.date {
	background-color: #4caf50;;
	height: 30%;
	width: 22%;
	position: absolute;
    right: 0;
	bottom: 0;
  opacity: 50%;
	border-bottom-right-radius: 10px;
}
</style>
</head>
<body>
  <article class="widget">
  <div class="weatherIcon"></div>
  <div class="weatherData">
    <h1 class="temperature">25&deg;</h1>
    <h2 class="description">Partly Cloudy</h2>
    <h3 class="city">Tirana, Albania</h3>
  </div>
  <div class="date">
    <h4 class="month" id="month"></h4>
    <h5 class="day" id="day"></h5>
  </div>
</article>
<script>
var d = new Date();
			document.getElementById("day").innerHTML = d.getDate();

			var month = new Array();
			month[0] = "January";
			month[1] = "February";
			month[2] = "March";
			month[3] = "April";
			month[4] = "May";
			month[5] = "June";
			month[6] = "July";
			month[7] = "August";
			month[8] = "September";
			month[9] = "October";
			month[10] = "November";
			month[11] = "December";
			document.getElementById("month").innerHTML = month[d.getMonth()];
</script>
</body>
</html
