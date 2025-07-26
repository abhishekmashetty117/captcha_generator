<?php
	session_start();
	error_reporting(0);

?>

<html>
<head>
	<title>Captcha Gen-Match</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

	<style type="text/css">
		#attach_back{
			background-color: grey;
			background-image: radial-gradient(white,grey);
			background-repeat: no-repeat;
		}

	</style>
</head>
<body id="attach_back">
	<div class="w3-container w3-row w3-center w3-large">
		<div class="w3-col m4">
			<h1>
			</h1>
		</div>
		
		<form id="captcha_check" method="POST" action="captcha_2.php" class="w3-container w3-col m4 w3-card-4 w3-metro-darken w3-text-white" style="margin-top: 7%;padding-top:10px; ">
			<div class="w3-center">
				Captcha Matcher
			</div>

			

			<div class="w3-row w3-section">
				<div class="w3-col" style="width:73%;margin-right:5% ">
					<input type="text" name="vname" class="w3-input w3-border-0" maxlength="5" placeholder="Enter Captcha Here">
				</div>
				<div class="w3-rest">
					<img src="captcha.php">
				</div>
			</div>

			<div class="w3-row w3-section">
				<div class="w3-rest">
					<input type="submit" name="submit" class="w3-input w3-border-0 w3-hover-blue-gray">
				</div>
			</div>
		</form>

		<div class="w3-col m4">
			<h1>
			</h1>
		</div>
	</div>

</body>
</html>