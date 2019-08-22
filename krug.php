<!DOCTYPE html>
<html>
<head>
	<title>Krug</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

		function povrsina($x) {
			$povrsina = pow($x, 2) * 3.14;
			echo "<script>alert($povrsina);</script>";
		}

		function obim($x) {
			$obim = 2*$x * 3.14;
			echo "<script>alert($obim);</script>";
		}

		if(isset($_POST['obim'])) {
			obim($_POST['r']);
		}

		if(isset($_POST['povrsina'])) {
			povrsina($_POST['r']);
		}
	?>
	<div>
		<?php
			include('includes/header.php');
		?>
	</div>
	<div class="container">
		<div class="col-sm-3">
			<?php
				include('includes/menu.php');
			?>
		</div>
		<div class="col-sm-9">
			<h1 class="text-center">Krug</h1>
			<img src="img/krug.png">
			<p><b>Krug</b> je skup svih tačaka u ravni čija je udaljenost od određene tačke, koju zovemo <i>središte kruga</i>, manja ili jednaka određenom broju, koji zovemo <i>poluprečnik kruga</i>.</p>
			<p>Krug je obeležen <i>kružnicom</i>.</p>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> kruga je <i>P = r<sup>2</sup>&pi;</i></p>
			<p><b>Obim</b> kruga je <i>O = 2r&pi;</i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Poluprečnik: </label>
				<input class="form-control" type="text" name="r">
				<br>
				<button class="btn" type="submit" name="obim">Obim</button>
				<button class="btn" type="submit" name="povrsina">Povrsina</button>
			</form>
			<br>
		</div>
	</div>
	<div>
		<?php
			include('includes/bottom.php');
		?>
	</div>
</body>
</html>