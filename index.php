<!DOCTYPE html>
<html lang="en">
<head>
  <title>Armada</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #myCanvas {
		border: solid 1px blue;  
		width: 100%;
	}
  </style>
</head>
<body> 

<div class="container">
  <h1></h1>
  <div class="well">	
	<h2>OVERVIEW</h2>
	
  <div align="center">	
    <canvas id="myCanvas" width="1000" height="400" style="border:1px solid #000000;">
    </canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();

      imageObj.onload = function() {
        context.drawImage(imageObj, -100, -100);
      };
      imageObj.src = 'khmap.png';
    </script>	
  </div>
  
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>STATUS</th>
        <th>COMMAND</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	    <td style="background-color:lavender;"><span class="label label-primary">POPULATION</span></td>
        <td><span class="label label-success col-sm">NOMINAL</span></td>
        <td><button type="button" class="btn">***</button></td>
	  </tr>
    </tbody>
  </table>
  <div class="" align="center">
	  <button type="button" class="btn">Basic</button>
	  <button type="button" class="btn btn-default">EXPLORATION</button>
	  <button type="button" class="btn btn-primary">MANUFACTURING</button>
	  <button type="button" class="btn btn-success">SCIENCE/RESEARCH</button>
	  <button type="button" class="btn btn-info">Info</button>
	  <button type="button" class="btn btn-warning">Warning</button>
	  <button type="button" class="btn btn-danger">TACTICAL</button>
  </div>
  
  </div>
</div>
</body>
</html>