<!DOCTYPE html>
<html>
<head>
	<title>Kocka</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function povrsina($x) {
		$povrsina = 6 * pow($x, 2);
		echo "<script>alert($povrsina);</script>";
	}
	function zapremina($x) {
		$zapremina = pow($x, 3);
		echo "<script>alert($zapremina);</script>";
	}
	function malaDijagonala($x) {
		$malaDijagonala = $x * sqrt(2);
		echo "<script>alert($malaDijagonala);</script>";
	}
	function velikaDijagonala($x) {
		$velikaDijagonala = $x * sqrt(3);
		echo "<script>alert($velikaDijagonala);</script>";
	}

	if(isset($_POST['povrsina'])) {
		povrsina($_POST['a']);
	}
	if(isset($_POST['zapremina'])) {
		zapremina($_POST['a']);
	}
	if(isset($_POST['malaDijagonala'])) {
		malaDijagonala($_POST['a']);
	}
	if(isset($_POST['velikaDijagonala'])) {
		velikaDijagonala($_POST['a']);
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
			<h1 class="text-center">Kocka</h1>
			<img src="img/kocka.png">
			<p><b>Kocka</b> je jedan od pet pravilnih poliedara. Omeđena je sa šest kvadratnih površi spojenih tako da obrazuju telo sa dvanaest duži i osam temena. Kocka je specijalan slučaj kvadra kome su sve stranice jednake.</p>
			<br>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> kocke je <i>P = 6a<sup>2</sup></i></p>
			<p><b>Zapremina</b> kocke je <i>V = a<sup>3</sup></i></p>
			<p><b>Mala dijagonala</b> kocke je <i>d<sub>1</sub> = a&#8730;2</i></p>
			<p><b>Velika dijagonala</b> kocke je <i>D = a&#8730;3</i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Stranica a:</label>
				<input class="form-control" type="text" name="a">
				<br>
				<button class="btn" type="submit" name="povrsina">Povrsina</button>
				<button class="btn" type="submit" name="zapremina">Zapremina</button>
				<button class="btn" type="submit" name="malaDijagonala">Mala dijagonala</button>
				<button class="btn" type="submit" name="velikaDijagonala">Velika dijagonala</button>	
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