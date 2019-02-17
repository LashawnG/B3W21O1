<?php
//Zet de tijd om naar de juiste tijdzone
	date_default_timezone_set('CET');
	$time = date("H:i");

	//Ochtend
	if ($time >= 6 && $time <12) {
		$Txt = "Morgen!";
		$bg = "B3W21O1_images/morning.png";
		
	}
	//Middag
	if ($time >=12 && $time <18) {
		$Txt = "Middag!";
		$bg = "B3W21O1_images/afternoon.png";
	}
	//Avond
	if ($time >=18) {
		$Txt = "Avond!";
		$bg = "B3W21O1_images/evening.png";
	}
	//Nacht
	if ($time <6) {
		$Txt = "Nacht!";
		$bg = "B3W21O1_images/night.png";
	}

		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="B3W21O1.css">
</head>
<body>
	<img src="<?=$bg?>">
	<h1 class='title'>Goede <?=$Txt?></h1>
	<h1 class='title'>Het is nu <?=$time?></h1>
	
</body>
</html>