<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ! -->
  <title>Commander</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="javascript.js"></script>
  <style>
    #myCanvas {
		border: solid 1px blue;  
		width: 100%;
		text-align: center;
	}
	
	canvas {
        display: inline; 
    }
	
	#mapDiv {
		min-height: 200px;  
		min-width: 300px;
		max-width: 1000px;
	}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Container OVERVIEW -->
  <div class="text-center">
    <h2></h2>
    <h4></h4>
  </div>
  <div class="col-sm-12 col-xs-12">
	<h1>Command Overview</h1>
    <div class="well text-center">
	  <!-- Command Button Group -->
		<button type="button" class="btn btn-primary btn-lg">NAVIGATION</button>
		<button type="button" class="btn btn-primary btn-lg">TACTICAL</button>
		<button type="button" class="btn btn-primary btn-lg">SENSOR CONTROL</button>
		<button type="button" class="btn btn-primary btn-lg">ENGEERING</button>
		<button type="button" class="btn btn-primary btn-lg">DAMAGE CONTROL</button>
		<button type="button" class="btn btn-primary btn-lg">LIFE SUPPORT</button>  
		<button type="button" class="btn btn-primary btn-lg">DAMAGE CONTROL</button>  
	</div>
	<div class="row">
		<div id="canvas-container" class="col-sm-12 col-xs-12">
			<canvas id="myCanvas">
				Your browser does not support the HTML5 canvas tag.
			</canvas>
			<script>Map();</script>
		</div>	
	</div>
	<div class="well text-center">
		<h1>
			<button type="button" onclick="mapRight();" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Left</button>
			<button type="button" onclick="mapDown();" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-up"></span> Up</button>
			<button type="button" onclick="mapLeft();" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> Right</button>
            <button type="button" onclick="mapUp();" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-down"></span> Down</button>
			<button type="button" onclick="mapLeft();" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> </button>
		</h1>
	</div>
	<div class="well text-center">
		<button class="btn btn-primary btn-lg">BUTTON</button>
	</div> 
  </div>
</body>
</html>


