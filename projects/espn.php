<?php
	$dir = '../';
	$h1 = 'The Power of IX Mosaic';
	$h2 = 'Microsite for espnW';
	$himg = ['../img/espn/showcase.png', 'espnw: The Power of IX Banner'];
	$prev = 'guitar.php';
	$next = 'nbc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maria Szubski • Front End Developer &amp; UX Designer • Design Portfolio</title>
		<link rel="stylesheet" href="../css/build/typestyles.css">
		<link rel="stylesheet" href="../css/build/fotorama.css">
		<link rel="stylesheet" href="../css/build/master.css">
		<link rel="stylesheet" href="../css/build/workSample.css">
		<?php include '../template/tracker.inc.php' ?>
	</head>
	<body>

		<?php include '../template/proj_header.inc.php' ?>

		<section class="details">
			<h1>About This Project</h1>
			<div>
				<p>
					In celebration the 40th anniversary of Title IX, espnW created the largest mosaic of female athletes in history. Female athletes can upload Facebook photos, search for friends, or search by sport.
				</p>
			</div>
		</section>

		<section class="slides endSummary final">
			<h1>Final Design</h1>
			<div 	class="fotorama"
					data-width="100%"
					data-fit="contain"
					data-allowfullscreen="true"
					data-transition="dissolve"
					data-loop="true"
					data-keyboard="true"
					data-arrows="true"
					data-click="true"
					data-swipe="true">
				<a href="../img/espn/design_01.png"></a>
				<a href="../img/espn/design_02.png"></a>
			</div>
			<div class="desc">
				<p>
					The final design was built and launched by espnW. The design of the mosaic had to be simple enough to be readable when constructed from photos while being powerful enough to be the main design element on the page.
				</p>
			</div>
		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
