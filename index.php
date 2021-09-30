<?php include_once(__DIR__.'/conf.inc.php') ?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- title / desc / keywords-->
	<title>Logomachie</title>
	<meta name="description" content="Générateur de phrases bien vides de sens, mais permettant de briller en réunion" />
	<meta name="keywords" content="logomachie generateur phrases inutiles" />

	<!-- robots -->
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />

	<!-- affichage -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->

	<!-- preconnect -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<!-- style -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link href="style.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
			<a class="navbar-brand" href="#"><h1>logomachie</h1></a>
			</div>
		</nav>
	</header>
	<section>
		<div class="container">
			<div class="card">
				<div class="card-body">
					<p>
						Voici quelques phrases bien vides de sens, mais vous permettant de briller en réunion :
					</p>
					<ul>
						<?php foreach ($listPhrases as $phrase): ?>
							<li><?php echo $phrase ?></li>
						<?php endforeach ?>
					</ul>
					<p>
						<strong>logomachie</strong> : Assemblage de mots creux dans un discours, dans un raisonnement. (Dictionnaire Larousse)
					</p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		var locale = 'fr-FR';
		var timeZone = 'Europe/Paris';
		var currency = 'EUR';
	</script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>