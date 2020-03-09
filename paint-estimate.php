<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	// your code here
    
    include('inc-order-object.php');
    
	$height = $_POST['height'];
    $length = $_POST['length'];
    $width = $_POST['width'];
	
    $longWall = new Rectangle();
    $shortWall = new Rectangle();
    
    $longWall->setX($height);
    $longWall->setY($length);
    
    $shortWall->setX($height);
    $shortWall->setY($length);
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>