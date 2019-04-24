<!DOCTYPE html>
<html lang="en" {IF CLASSES}class="classes"{/IF}>

<head>

  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <title>Pi Is Offline</title>

 <HEAD>

  <link rel="stylesheet" href="{CSS RESET CHOICE}">
  <style>
	body{
  background-color: #282828;
  color: white;
  font-family: Sans-Serif;
  padding: 2%;
}

.center-text{
  text-align: center;
}

#heading{
  font-family: 'Creepster', cursive;
}
.box{
margin-left:10%;
margin-right:10%;
}

.eyes{
  width: 10em;
  height: 10em;
  border-radius: 50%;
  background-color: white;
  margin: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  animation: blinking 3s ease-out 2 5s;

}

#eye-container{
  display: flex;
  justify-content: center;
  margin-bottom: 5%;
}

.pupils{
  width: 2.5em;
  height: 2.5em;
  border-radius: 50%;
  position: absolute;
  background-color: black;
  animation: moving-pups 2.5s cubic-bezier(.43,-0.45,.45,1.42) infinite;
}

@keyframes moving-pups{
  0% {left: 14%;}
  50%{left: 70%; }
  100% {left: 14%;}
}

.just{
   text-align: justify;
  text-justify: inter-word;
}
.monkey{
margin-left:10%;
}
.under{
border-bottom: 6px solid #4caf50;
}
@keyframes blinking{
  0%{transform: rotateX(0deg);}
  20%{transform: rotateX(90deg);}
  60%{transform: rotateX(45deg);}
  70%{transform: rotateX(30deg);}
  80%{transform: rotateX(0deg);}
  100%{transform: rotateX(0deg);}
}
@media screen and (min-width: 601px) {
  #heading{
    font-size: 60px;
  }

}
@media screen and (max-width: 600px) {
  #heading{
    font-size: 30px;
  }

}

  </style>

</head>

<body>

<div id="heading-container">
  <h1 id="heading" class="center-text"><span class="under">Sorry Pi is Offline</span></h1>
</div>
<div id="eye-container">
  <div class="eyes" id="left-eye">
    <div class="pupils" id="left-pupil"></div>
  </div>
  <div class="eyes" id="right-eye">
    <div class="pupils" id="right-pupil"></div>
  </div>
</div>
</body>



</html>
