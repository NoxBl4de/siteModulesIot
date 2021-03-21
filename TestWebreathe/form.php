<!-- REPARATION DES MODULES DEFECTUEUX -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Création de module</title>
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

                <!-- Ajout du nouveau module à la base de données -->
                <?php
                    $host = 'localhost';
                    $dbname = 'testwebreathe';
                    $username = 'root';
                    $password = '';
                        
                    $dsn = "mysql:host=$host;dbname=$dbname";
                    
                    $nom = $_POST["nom"];
                    $type = $_POST["type"];
                    $desc = $_POST["desc"];
                    $temp = $_POST["temp"];
                    $fonc = $_POST["fonct"];
                    $nbDon = $_POST["nbDonnees"];
                    $etat = $_POST["etat"];

                    // Ajouter un nouveau module à la base
                    try{
                        // Conexion à la bdd
                        $pdo = new PDO($dsn, $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        // Insertion de données
                        $insert = $pdo->prepare("INSERT INTO `module`(`nom`,`type`,`description`,`temperature`,`duréeFonctionnement`,`nbDonnéesEnvoyées`,`etatDeMarche`)
                            VALUES(:nom, :typ, :descr, :temp, :fonc, :nbDo, :etat);");

                        $insert->bindParam(':nom',$nom);
                        $insert->bindParam(':typ',$type);
                        $insert->bindParam(':descr',$desc);
                        $insert->bindParam(':temp',$temp);
                        $insert->bindParam(':fonc',$fonc);
                        $insert->bindParam(':nbDo',$nbDon);
                        $insert->bindParam(':etat',$etat);
                        $insert->execute();

                    }catch (PDOException $e){
                        echo $e->getMessage();
                    }
                ?>


				<!-- Main -->
				<div id="main">
					<div class="inner">
						<h2>Votre ajout s'est effectué sans encombre !</h2>
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