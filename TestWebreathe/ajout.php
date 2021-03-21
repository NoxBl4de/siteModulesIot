<!DOCTYPE HTML>
<!-- ajout.php -->
<html>
	<head>
		<title>Création module</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<?php include('simulation.php'); ?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Page d'accueil</a></li>
							<li><a href="ajout.php">Formulaire d'ajout</a></li>
							<li><a href="ordinateurs.php">Ordinateurs</a></li>
							<li><a href="telephones.php">Téléphones</a></li>
							<li><a href="tablettes.php">Tablettes</a></li>
							<li><a href="voitures.php">Voitures</a></li>
							<li><a href="enceintes.php">Enceintes</a></li>
							<li><a href="domotique.php">Domotique</a></li>
							<li><a href="etatModules.php">Etat des modules</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div id="main">
					<div class="inner">
						<h2>Formulaire d'ajout de module</h2>
						<form method="post" action="form.php">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="nom" id="nom" value="" placeholder="Nom du module" />
								</div>
								<div class="col-6 col-12-xsmall">
									<select name="type" id="type">
										<option disabled>- Type de module -</option>
										<option value="Ordinateur" selected>Ordinateur</option>
										<option value="Téléphone">Téléphone</option>
										<option value="Tablette">Tablette</option>
										<option value="Voiture">Voiture</option>
										<option value="Enceinte">Enceinte</option>
										<option value="Domotique">Domotique</option>
									</select>
								</div>
								<div class="col-12">
									<textarea name="desc" id="desc" placeholder="Description du module" rows="6"></textarea>
								</div>
								<div class="col-6 col-12-xsmall">
									<select name="temp" id="temp">
										<option disabled>- Température (en °C) -</option>
										<option value="0" selected>0</option>
										<option value="2">2</option>
										<option value="4">4</option>
										<option value="8">8</option>
										<option value="10">10</option>
										<option value="12">12</option>
										<option value="14">14</option>
										<option value="16">16</option>
										<option value="18">18</option>
										<option value="20">20</option>
										<option value="22">22</option>
										<option value="25">25</option>
									</select>
								</div>
								<div class="col-6 col-12-xsmall">
									<select name="fonct" id="fonct">
										<option disabled>- Durée de fonctionnement (en années) -</option>
										<option value="1" selected>1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10+</option>
									</select>
								</div>
								<div class="col-6 col-12-xsmall">
									<select name="nbDonnees" id="nbDonnees">
										<option disabled>- Nombre de données envoyées -</option>
										<option value="0" selected>0</option>
										<option value="50">50</option>
										<option value="500">500</option>
										<option value="1000">1 000</option>
										<option value="5000">5 000</option>
										<option value="10000">10 000</option>
										<option value="100000">100 000</option>
										<option value="250000">250 000</option>
										<option value="500000">500 000</option>
										<option value="1000000">1 000 000+</option>
									</select>
								</div>
								<div class="col-6 col-12-xsmall">
									<select name="etat" id="etat">
										<option disabled>- Etat de marche -</option>
										<option value="1" selected>Fonctionnel</option>
										<option value="0">Non Fonctionnel</option>
									</select>
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Ajouter" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Footer -->
					<footer id="footer">
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>