<!DOCTYPE HTML>
<html lang="en">
<?php
	session_start();

	$_SESSION['username1'] = $_POST['username1'];
	$_SESSION['username2'] = $_POST['username2'];

?>
<html>
	<head>
		<title>Testing | page</title>
		<link rel="stylesheet" type="text/css" href="style/main.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/main.js"></script>

		<script>
		$(document).ready(function(){
			$(".ssquer").hover(function(){
				$(".test-squer").animate({
					opacity: 'toggle'
				}, "slow", function() {
						alert("Function animate is commplete.")
				});
			});
		});

		$(document).ready(function(){
			$(".ssquer").hover(function(){
				$(".test-squer").animate({
					opacity: 0.25
				}, 1000, function(){
					// Animation commplete.
					opacity: 1
				});
			});
		});

		$(document).ready(function(){
			$(".ssquer").hover(function(){
				$(".squer").css({
					"border": "2px solid black"
				});
			});
		});

		$(document).ready(function(){
			$(".ssquer").mouseout(function(){
				$(".squer").css({
					"border": "2px solid white"
				});
			});
		});
		</script>

	</head>
	<body>

		<h1>Testovacia stranka</h1>

		<div class="squer">
			Hello this is testing squer.
		</div>

		<div class="test-squer" style="width: 100px; height: 100px; border: 2px solid black; margin: 10px;"></div>

		<form action="index.php" method="POST" name="form">
			<input type="text" name="username1" value=""></br>
			<input type="text" name="username2" value=""></br>
			<input type="submit" name="submit" value="Odoslat">
		</form>

		<a href="testing.php">Testing</a>
	</body>
</html>