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
			<h1 class="text-center">Piramida</h1>
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
			<p><b>Površina</b></p>
		</div>
	</div>
	<div>
		<?php
			include('includes/bottom.php');
		?>
	</div>
</body>
</html>