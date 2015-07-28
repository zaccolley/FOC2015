<html>
<head>
	<title>Draw.it</title>
	<link rel="stylesheet" media="(max-width: 600px)" href="Styles/mobileAppCSS.css" />
	<link rel="stylesheet" media="(min-width: 600px)" href="Styles/desktopAppCSS.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
</head>
<body onload="init()">
	<div class="header">
		<a href="../index.html" class="block">Draw.It</a></div>
	</div>
	<div class="buttons">
		<input type="button" id="save" name="save" onclick="save()">
		<label for="save">
			<img src="Assets/Images/Save%20Button.png">
		</label>
		<input type="button" id="clear" name="clear" onclick="erase()">
		<label for="clear">
			<img src="Assets/Images/Close%20Button.png">
		</label>
	</div>
	<div class="canvas">
		<canvas id="can" height=300px width=300px></canvas>
		<div class="grid">
			<div class="top left"> Top Left</div>
			<div class="top center">Top Center</div>
			<div class="top right">Top Right</div>
			<div class="middle left">Middle Left</div>
			
			<div class="middle right">Middle Right</div>
			<div class="bottom left">Bottom Left</div>
			<div class="bottom center">Bottom Center</div>
			<div class="bottom right">Bottom Right</div>
		
		</div>
	</div>
	
	<div class="colourPicker">
		<div style="height: 20px"> Choose Colour</div>
		<div id="green" onclick="color(this)"></div>
		<div id="blue" onclick="color(this)"></div>
		<div id="red" onclick="color(this)"></div>
		<div id="yellow" onclick="color(this)"></div>
		<div id="orange" onclick="color(this)"></div>
		<div id="black" onclick="color(this)"></div>
		<div id="white" onclick="color(this)">
			<span style="position: absolute; left: 50%; transform: translate(-50%, 0)">Eraser</span>
		</div>
	</div>
<script src="Script/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" />
	
</body>
</html>