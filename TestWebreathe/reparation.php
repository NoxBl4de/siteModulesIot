<!-- REPARER LES MODULES DEFECTUEUX -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Réparation de module</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
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
                        <li><a href="index.html">Page d'accueil</a></li>
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


                <?php

                    $host = 'localhost';
                    $dbname = 'testwebreathe';
                    $username = 'root';
                    $password = '';
                    
                    $dsn = "mysql:host=$host;dbname=$dbname"; 

                    // On modifie l'état de marche du module
                    $newsql = "UPDATE `module` SET `etatDeMarche`= 1 WHERE `etatDeMarche`= 0;";

                    try{
                    $pdo = new PDO($dsn, $username, $password);
                    $req = $pdo->query($newsql);

                    if($req === false){
                        die("Erreur");
                    }

                    }catch (PDOException $e){
                        echo $e->getMessage();
                    }

                ?>

				<!-- Main -->
				<div id="main">
					<div class="inner">
						<h2>Votre réparation s'est effectuée sans encombres !</h2>
                        <ul class="actions">
							<li><a href="index.php" class="button primary">Retour à l'accueil</a></li>
						</ul>
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