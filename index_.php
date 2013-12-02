<!DOCTYPE HTML>
<!--
	Author     Vinay Chandra Dommeti
	Website    http://home.iitb.ac.in/~vinaychandra/
	Copyright  2013. VINAY CHANDRA DOMMETI
-->

<head>
	<title>Vinay Chandra</title>

	<link rel="icon" type="image/png" href="images/icon.png" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />

	<script src="js/rainyday.min2.js"></script>
	<script>
		function run() {
			var engine = new RainyDay({
				element: 'background',  // ID of image element
				                        // This value is required
				parentElement: parent, // Element to be used as a parent for the canvas
				                        // If not provided assuming the 'body' element
				// crop: [ 0, 0, 50, 60],  // Coordinates if only a part of the image should be used
				                        // If not provided entire image will be used
				blur: 10,               // Defines blur due to rain effect
				                        // Assuming 10 if not provided
				                        // Use 0 value to disable the blur
				opacity: 1,             // Opacity of rain drops
				                        // Assuming 1 if not provided
				fps: 30                 // Frame rate per second
				                        // This value is required
			});
			engine.rain([
				[1, 0, 20],             // add 20 drops of size 1...
				[3, 3, 1] ],            // ... and 1 drop of size from 3 - 6 ...
				100);  
		}
	</script>

</head>


<body onload="run()">
	<div id="parent">
		<img id="background" src="images/pre/1.jpg">
	</div>

	<script src="js/jquery-2.0.3.min.js"></script>
	<script src="js/index.js"></script>
</body>