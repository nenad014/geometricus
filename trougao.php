<!DOCTYPE html>
<html>
<head>
	<title>Trougao</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function ojks($x) {
		$obim = 3*$x;
		echo "<script>alert($obim);</script>";
	}
	function pjks($x) {
		$povrsina = (pow($x, 2) * sqrt(3)) / 4;
		echo "<script>alert($povrsina);</script>";
	}
	function vjks($x) {
		$visina = ($x * sqrt(3)) / 2;
		echo "<script>alert($visina);</script>";
	}

	function ojkk($x, $y) {
		$obim = $x + ($y*2);
		echo "<script>alert($obim);</script>";
	}
	function pjkk($x, $z) {
		$povrsina = ($x * $z) / 2;
		echo "<script>alert($povrsina);</script>";
	}

	if(isset($_POST['obimJednakostranicni'])) {
		ojks($_POST['a']);
	}

	if(isset($_POST['povrsinaJednakostranicni'])) {
		pjks($_POST['a']);
	}

	if(isset($_POST['visinaJednakostranicni'])) {
		vjks($_POST['a']);
	}

	if(isset($_POST['obim'])) {
		ojkk($_POST['a1'], $_POST['h']);
	}

	if(isset($_POST['povrsina'])) {
		pjkk($_POST['a1'], $_POST['h']);
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
		<h2>Trougao</h2>
		<img src="img/trougao.png">
		<p><b>Jednakostranični trougao </b> je trougao čije su sve stranice jednake. U jednakostranični trougao je moguće opisati ili upisati krug.</p>
		<br>
		<p><b>Jednakokraki trougao</b> je trougao koji ima dve jednake stranice.</p>
		<br>
		<h3>Formule:</h3>
		<hr>
		<p><b>Obim</b> <i>jednakostraničnog</i> trougla je <i>O = 3a</i></p>
		<p><b>Površina</b> <i>jednakostraničnog</i> trougla je <i>P = a<sup>2</sup>&#8730;3 / 4 = h<sup>2</sup>&#8730;3 / 3</i></p>
		<p><b>Visina</b> <i>jednakostraničnog</i> trougla je <i>h = a&#8730;3 / 2</i></p>
		<br>
		<p><b>Obim</b> <i>jednakokrakog</i> trougla je <i>O = a + 2b</i></p>
		<p><b>Površina</b> <i>jednakokrakog</i> trougla je <i>P = ah<sub>a</sub> / 2 = bh<sub>b</sub> /2 </i></p>
		<br>
		<h3>Izračunaj jednakostranični trougao</h3>
		<hr>
		<form class="form-horizontal" method="POST">
			<label>Stranica a: </label>
			<input class="form-control" type="text" name="a">
			<br>
			<button class="btn" type="submit" name="obimJednakostranicni">Obim</button>
			<button class="btn" type="submit" name="povrsinaJednakostranicni">Povrsina</button>
			<button class="btn" type="submit" name="visinaJednakostranicni">Visina</button>
		</form>
		<br>
		<h3>Izračunaj jednakokraki trougao</h3>
		<hr>
		<form class="form-horizontal" method="POST">
			<label>Stranica a: </label>
			<input class="form-control" type="text" name="a1">
			<label>Stranica b: </label>
			<input class="form-control" type="text" name="b1" placeholder="* Ovo polje nije obavezno kod računanja površine">
			<label>Visina: </label>
			<input class="form-control" type="text" name="h" placeholder="* Visina je obavezna kod računanja površine">
			<br>
			<button class="btn" type="submit" name="obim">Obim</button>
			<button class="btn" type="submit" name="povrsina">Povrsina</button>
			<button class="btn" type="submit" name="visina">Visina</button>
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
</html