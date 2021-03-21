<?php
$host = 'localhost';
$dbname = 'testwebreathe';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname"; 
// récupérer tous les modules voitures
$sql = "SELECT `id` FROM `module` WHERE `etatDeMarche`=1;";

try {
    $pdo = new PDO($dsn, $username, $password);
    $req = $pdo->query($sql);

    if($req === false){
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

//   On récupère tous les id des objets fonctionnels
$tab = $req->fetchAll(PDO::FETCH_ASSOC);

//   On créer une variable qui va aléatoirement simuler une panne pour un affichage visuel
$aleaPanne = rand(0,3);

//   On prend un indice aléatoire du tableau puis on change son état de marche s'il y a panne
//   On ajoute également cette panne dans l'historique de fonctionnement
//   Sinon on ne fait rien et il n'y a pas d'alerte
$aleaTab = rand(0, count($tab)-1);

if ($aleaPanne == 1):

    $idPanne = $tab[$aleaTab]['id'];

    echo "<script>alert('Une panne vient de se produire avec le module n°$idPanne ! Allez dans Etat des modules pour effectuer une réparation !');</script>";

    // On insère la panne dans la table de l'historique de fonctionnement
    try {
        // Conexion à la bdd
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Insertion de données
        $insert = $pdo->prepare("INSERT INTO `historique`(`datePanne`,`dateReparation`,`naturePanne`,`idMod`)
            VALUES(:datP, :datRep, :nat, :idMod);");

        // On considère que dans cette simulation les réparations sont faites instantanément
        // D'où la similitude des dates de panne et de réparation
        $dateP = date("Y-m-d");
        $dateR = date("Y-m-d");
        $naturePanne = 'Dysfonctionnement dans la connexion aux autres appareils';

        $insert->bindParam(':datP',$dateP);
        $insert->bindParam(':datRep',$dateR);
        $insert->bindParam(':nat',$naturePanne);
        $insert->bindParam(':idMod',$idPanne);
        $insert->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // On modifie l'état de marche du module
    $newsql = "UPDATE `module` SET `etatDeMarche`= 0 WHERE `id`= $idPanne;";

    try{
    $pdo = new PDO($dsn, $username, $password);
    $req = $pdo->query($newsql);

    if($req === false){
        die("Erreur");
    }

    }catch (PDOException $e){
        echo $e->getMessage();
    }

else :

endif;
    
?>