<!DOCTYPE HTML>
<!--
	voitures.php
-->
<html>
	<head>
		<title>Voitures</title>
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
							<h1>Modules voitures</h1>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>N°</th>
											<th>Nom</th>
											<th>Type</th>
											<th>Description</th>
											<th>Température</th>
											<th>Durée de fonctionnement</th>
											<th>Données Envoyées</th>
											<th>Etat de marche</th>
										</tr>
									</thead>
									<tbody>
										<?php include('requests.php'); ?>
										<?php while($row = $voit->fetch(PDO::FETCH_ASSOC)) : ?>
										<tr>
										  <td><?php echo htmlspecialchars($row['id']); ?></td>
										  <td><?php echo htmlspecialchars($row['nom']); ?></td>
										  <td><?php echo htmlspecialchars($row['type']); ?></td>
										  <td><?php echo htmlspecialchars($row['description']); ?></td>
										  <td><?php echo htmlspecialchars($row['temperature']); ?> °C</td>
										  <td><?php echo htmlspecialchars($row['duréeFonctionnement']); ?> an(s)</td>
										  <td><?php echo htmlspecialchars($row['nbDonnéesEnvoyées']); ?></td>
										  <?php if ($row['etatDeMarche']==1) : ?>
											<td style="color:green">Fonctionnel</td>
										  <?php else: ?>
											<td style="color:red">Non Fonctionnel</td>
										  <?php endif ?>
										</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							</div>
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