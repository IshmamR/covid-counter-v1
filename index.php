<?php include('scraping.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="COVID-19 patients counter">
	<meta name="author" content="Ishmam">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>COVID Counter</title>
	<link rel="stylesheet" href="frameworks/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="corona-app.css">
</head>
<body class="grey lighten-5 center-align">
	<h1 class="head h1 text-center">
		<i class="fas fa-biohazard"></i>COVID COUNTER
	</h1>
	<div class="container row center-align">
		<div class="card col s12 m6 l4 yellow darken-1 white-text">
			<h4><i class="fas fa-briefcase-medical"></i> Cases</h4>
			<h4><i class="fas fa-caret-right"></i><?php echo " ".$cases; ?></h4>
			<div class="progress white">
				<div class="indeterminate yellow lighten-1"></div>
			</div>
		</div>
		<div class="card col s12 m6 l4 red darken-1 white-text">
			<h4><i class="fas fa-skull-crossbones"></i> Deaths</h4>
			<h4><i class="fas fa-caret-right"></i><?php echo " ".$deaths; ?></h4>
			<div class="progress white">
				<div class="indeterminate red lighten-1"></div>
			</div>
		</div>
		<div class="card col s12 m12 l4 green white-text">
			<h4><i class="fas fa-heartbeat"></i> Recovered</h4>
			<h4><i class="fas fa-caret-right"></i><?php echo " ".$recovs; ?></h4>
			<div class="progress white">
				<div class="indeterminate green lighten-1"></div>
			</div>
		</div>
	</div>

	<div class="text-center">
		<button class="btn waves-effect waves-light ref"><i class="fas fa-sync-alt"></i> Refresh</button>
	</div>

	<div class="time-div text-light text-right">
		<p>Refreshed on: <span class="time"></span></p>
	</div>

	<footer>
		<div class="footer text-center">
			Developed by Ishmam
			<!-- <br> -->
			<!-- love<i class="far fa-heart"></i>... Atia -->
		</div>
	</footer>

	<script type="text/javascript">
		
		var time = new Date();
		document.querySelector(".time").innerHTML = time;


		var refresh = document.querySelector(".ref");
		refresh.addEventListener("click", function() {
			window.location.reload();
			document.querySelector(".time").innerHTML = time;
		});

	</script>
	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous"></script>
</body>
</html>