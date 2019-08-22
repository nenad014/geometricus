<!DOCTYPE html>
<html>
<head>
	<title>Pravougaonik</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function obim($x, $y) {
		$obim = (2*$x) + (2*$y);
		echo "<script>alert($obim);</script>";
	}
	function povrsina($x, $y) {
		$povrsina = $x * $y;
		echo "<script>alert($povrsina);</script>";
	}
	function dijagonala($x, $y) {
		$dijagonala = sqrt(pow($x, 2) + pow($y, 2));
		echo "<script>alert($dijagonala);</script>";
	}

	if(isset($_POST['obim'])) {
		obim($_POST['a'], $_POST['b']);
	}

	if(isset($_POST['povrsina'])) {
		povrsina($_POST['a'], $_POST['b']);
	}

	if(isset($_POST['dijagonala'])) {
		dijagonala($_POST['a'], $_POST['b']);
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
			<h1 class="text-center">Pravougaonik</h1>
			<img src="img/pravougaonik.png">
			<p><b>Pravougaonik</b> je četvorougaona geometrijska figura u ravni. Spada u klasu paralelograma, a sledeća dva pravila važe za svaki pravougaonik:
				<ul>
					<li>Naspramne stranice su po dužini jednake i paralelne</li>
					<li>Susedne stranice su normalne jedna na drugu (zaklapaju ugao od 90 stepeni)</li>
				</ul>
				<br>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> pravougaonika je <i>P = ab</i></p>
			<p><b>Obim</b> pravougaonika je <i>O = 2(a+b)</i></p>
			<p><b>Dijagonala</b> pravougaonika je <i>d=&#8730;a<sup>2</sup>+b<sup>2</sup></i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Stranica a:</label>
				<input class="form-control" type="text" name="a">
				<label>Stranica b:</label>
				<input class="form-control" type="text" name="b">
				<button class="btn" type="submit" name="obim">Obim</button>
				<button class="btn" type="submit" name="povrsina">Povrsina</button>
				<button class="btn" type="submit" name="dijagonala">Dijagonala</button>
			</form>
		</div>
	</div>
	<div>
		<?php
		include('includes/bottom.php');
		?>
	</div>
</body>
</html