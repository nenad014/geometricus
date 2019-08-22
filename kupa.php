<!DOCTYPE html>
<html>
<head>
	<title>Kupa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		function povrsina($x, $y) {
			$povrsina = $x * pi() * ($x + $y);
			echo "<script>alert($povrsina);</script>";
		}
		function zapremina($x) {
			$zapremina = (1/3)*pow($x, 2)*pi();
			echo "<script>alert($zapremina);</script>";
		}

		if(isset($_POST['povrsina'])) {
			povrsina($_POST['r'], $_POST['s']);
		}
		if(isset($_POST['zapremina'])) {
			zapremina($_POST['r']);
		}

	?>
	<?php
		include('includes/header.php');
	?>
	<div class="container">
		<div class="col-sm-3">
			<?php
				include('includes/menu.php');
			?>
		</div>
		<div class="col-sm-9">
			<h1 class="text-center">Kupa</h1>
			<img src="img/kupa.jpg">
			<p><b>Kupa</b> je geometrijsko gtelo ograničeno jednim delom obrtne konusne površi i krugom. Krug je osnova kupe.</p>
			<p><b>Omotač kupe</b> je konusni deo površi, a vrh konusne površi je ujedno i vrh kupe.</p>
			<br>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> kupe je <i>P = r&pi;(r+s)</i>.</p>
			<p><b>Zapremina</b> kupe jednaka je <i>V = 1/3 r<sup>2</sup>&pi;</i>.</p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Poluprečnik: </label>
				<input class="form-control" type="text" name="r">
				<label>Izvodnica: </label>
				<input class="form-control" type="text" name="s">
				<br>
				<button class="btn" type="submit" name="povrsina">Površina</button>
				<button class="btn" type="submit" name="zapremina">Zapremina</button>
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