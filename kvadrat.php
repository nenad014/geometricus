<!DOCTYPE html>
<html>
<head>
	<title>Kvadrat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		function obim($x) {
			$obim = 4 * $x;
			echo "<script>alert($obim);</script>";
		}
		function povrsina($x) {
			$povrsina = pow($x, 2);
			echo "<script>alert($povrsina);</script>";
		}
		function dijagonala($x) {
			$dijagonala = $x * sqrt(2);
			echo "<script>alert($dijagonala);</script>";
		}

		if(isset($_POST['obim'])) {
			obim($_POST['a']);
		}
		if(isset($_POST['povrsina'])) {
			povrsina($_POST['a']);
		}
		if(isset($_POST['dijagonala'])) {
			dijagonala($_POST['a']);
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
			<h1 class="text-center">Kvadrat</h1>
			<img src="img/kvadrat.png">
			<p><b>Kvadrat</b> je figura u ravni sastavljena od jednake četiri stranice i ugla. On je pravilan četvorougao, paralelogram.</p>
			<p>Osobine kvadrata su: </p>
			<ul>
				<li>sve stranice su jednake</li>
				<li>svi uglovi su pravilni</li>
				<li>dijagonale su jednake, polove se i seku pod pravim uglom</li>
			</ul>
			<br>
			<h3>Formule</h3>
			<hr>
			<p><b>Obim</b> kvadrata je <i>O = 4a</i></p>
			<p><b>Površina</b> kvadrata je <i>P = a<sup>2</sup></i></p>
			<p><b>Dijagonala</b> kvadrata je <i>d = a&#8730;2</i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Stranica a: </label>
				<input class="form-control" type="text" name="a">
				<br>
				<button class="btn" type="submit" name="obim">Obim</button>
				<button class="btn" type="submit" name="povrsina">Povrsina</button>
				<button class="btn" type="submit" name="dijagonala">Dijagonala</button>
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