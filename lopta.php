<!DOCTYPE html>
<html>
<head>
	<title>Lopta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		function povrsina($x) {
			$povrsina = 4*pi()*pow($x, 2);
			echo "<script>alert($povrsina);</script>";
		}
		function zapremina($x) {
			$zapremina = (4/3) * pow($x, 3) * pi();
			echo "<script>alert($zapremina);</script>";
		}

		if(isset($_POST['povrsina'])) {
			povrsina($_POST['r']);
		}
		if(isset($_POST['zapremina'])) {
			zapremina($_POST['r']);
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
			<h1 class="text-center">Lopta</h1>
			<img src="img/lopta.jpg">
			<p><b>Lopta</b> je geometrijsko telo koje je ograničeno sferom. Može se definisati kao skup tačaka koje se od zadate tačke <i>O</i> nalaze na udaljenosti manjoj ili jednakoj od zadate dužine <i>r</i>. Pritom se tačka <i>O</i> naziva centrom a <i>r</i> poluprečnikom lopte.</p>
			<h3>Formule</h3>
			<hr>
			<p><b>Površina</b> lopte je <i>P = 4&pi;r<sup>2</sup></i> </p>
			<p><b>Zapremina</b> lopte je <i>V = 4/3 r<sup>3</sup>&pi;</i></p>
			<br>
			<h3>Izračunaj</h3>
			<hr>
			<form class="form-horizontal" method="POST">
				<label>Poluprečnik: </label>
				<input class="form-control" type="text" name="r">
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