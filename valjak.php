<!DOCTYPE html>
<html>
<head>
	<title>Valjak</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function povrsina($x, $y) {
		$povrsina = (pow($x, 2)*pi()) + (2*$x*pi()*$y);
		echo "<script>alert($povrsina);</script>";
	}

	function zapremina($x, $y) {
		$zapremina = (pow($x, 2)*pi()) * $y;
		echo "<script>alert($zapremina);</script>";
	}

	if(isset($_POST['povrsina'])) {
		povrsina($_POST['r'], $_POST['h']);
	}
	if(isset($_POST['zapremina'])) {
		zapremina($_POST['r'], $_POST['h']);
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
			<h1 class="text-center">Valjak</h1>
			<img src="img/valjak.jpg">
			<p><b>Valjak</b> je oblo geometrijsko telo koje je oivičeno dvema bazama u obliku kruga i omotačem.
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> valjka je <i>P = 2P(B) + P(M)</i></p>
			<p><i>* P(B) predstavlja površinu baze, a P(M) površinu omotača valjka.</i></p>
			<p><b>Površina omotača</b> valjka je <i>P(M) = O(B) * l = 2r&pi; * l</i></p>
			<p><i>* kod pravog valjka važi i h=l.</i></p>
			<p><b>Zapremina</b> valjka je <i>V = B*h</i></p>
			<p><i>* B predstavlja površinu baze, a h predstavlja visinu valjka</i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Poluprečnik: </label>
				<input class="form-control" type="text" name="r">
				<label>Stranica: </label>
				<input class="form-control" type="text" name="h">
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