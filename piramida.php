<!DOCTYPE html>
<html>
<head>
	<title>Piramida</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function povTrostrana($x, $y) {
		$povTrostrana = ((pow($x, 2)*sqrt(3))/4)+(3*(($x*$y)/2));
		echo "<script>alert($povTrostrana);</script>";
	}
	function zapTrostrana($x, $y) {
		$zapTrostrana = ((pow($x, 2)*sqrt(3))/4)*(3*(($x*$y)/2))/3;
		echo "<script>alert($zapTrostrana);</script>";
	}
	function povCetvorostrana($x, $y) {
		$povCetvorostrana = (pow($x, 2))+4*(($x*$y)/2);
		echo "<script>alert($povCetvorostrana);</script>";
	}
	function zapCetvorostrana($x, $y) {
		$zapCetvorostrana = (pow($x, 2)*$y)/3;
		echo "<script>alert($zapCetvorostrana);</script>";
	}
	function povSestostrana($x, $y) {
		$povSestostrana = 6*(($x*$y)/2);
		echo "<script>alert($povSestostrana);</script>";
	}
	function zapSestostrana($x, $y) {
		$zapSestostrana = (pow($x, 2)*sqrt(3)*$y)/2;
		echo "<script>alert($zapSestostrana);</script>";
	}

	if(isset($_POST['povTrostrana'])) {
		povTrostrana($_POST['a'], $_POST['h']);
	}
	if(isset($_POST['zapTrostrana'])) {
		zapTrostrana($_POST['a'], $_POST['h']);
	}
	if(isset($_POST['povCetvorostrana'])) {
		povCetvorostrana($_POST['a'], $_POST['h']);
	}
	if(isset($_POST['zapCetvorostrana'])) {
		zapCetvorostrana($_POST['a'], $_POST['h']);
	}
	if(isset($_POST['povSestostrana'])) {
		povSestostrana($_POST['a'], $_POST['h']);
	}
	if(isset($_POST['zapSestostrana'])) {
		zapSestostrana($_POST['a'], $_POST['h']);
	}
	?>
	<div>
		<?php
			include('includes/header.php');
		?>
	</div>
	<div class="container-fluid">
		<div class="col-sm-3">
			<?php
				include('includes/menu.php');
			?>
		</div>
		<div class="col-sm-9">
			<h1 class="text-center">Piramida</h1>
			<img src="img/piramida.gif">
			<p>Poliedar čija je jedna strana (osnova) mnogougao a sve ostale (bočne) strane trouglovi, čije je jedno teme zajedničko naziva se <b>piramida</b>.</p>
			<p><b>Pravilna piramida</b> je piramida čija je osnova pravilan mnogougao i ako je ortogonalna projekcija tačke S vrha piramide na ravan osnove centar tog mnogougla.</p>
			<br>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> <i>trostrane piramide</i> iznosi <i>P = B+M </i>.</p>
			<p><i>* B = (a<sup>2</sup>&#8730;3)/4</i></p>
			<p><i>* M = 3 * ((a*h)/2)</i></p>
			<p><b>Zapremina</b> <i>trostrane piramide</i> iznosi <i>V = (B*H)/3</i></p>
			<br>
			<p><b>Površina</b> <i>četvorostrane piramide</i> iznosi <i>P = B+M = a<sup>2</sup> + 4*((a*h)/2)</i></p>
			<p><b>Zapremina</b> <i>četvorostrane piramide</i> iznosi <i>V = (B*H)/3 = (a<sup>2</sup>*H)/3</i></p>
			<br>
			<p><b>Površina</b> <i>šestostrane piramide</i> iznosi <i>P = B+M = 6*((a*h)/2)</i></p>
			<p><b>Zapremina</b> <i>šestostrane piramide</i> iznosi <i>V = (B*H)/3 = (a<sup>2</sup>*&#8730;3*H)/2</i></p>
			<h3>Izračunaj</h3>
			<hr>
			<form method="POST" class="form-horizontal">
				<label>Stranica a: </label>
				<input class="form-control" type="text" name="a">
				<label>Visina: </label>
				<input class="form-control" type="text" name="h">
				<br>
				<button class="btn" type="submit" name="povTrostrana">Površina trostrane piramide</button>
				<button class="btn" type="submit" name="zapTrostrana">Zapremina trostrane piramide</button>
				<button class="btn" type="submit" name="povCetvorostrana">Površina četvorostrane piramide</button>
				<button class="btn" type="submit" name="zapCetvorostrana">Zapremina četvorostrane piramide</button>
				<button class="btn" type="submit" name="povSestostrana">Površina šestostrane piramide</button>
				<button class="btn" type="submit" name="zapSestostrana">Zapremina šestostrane piramide</button>
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
