<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules ordinateurs
  $sql = "SELECT * FROM `module` WHERE `type`='Ordinateur';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $ordi = $pdo->query($sql);
   
   if($ordi === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules telephoniques
  $sql = "SELECT * FROM `module` WHERE `type`='Téléphone';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $tel = $pdo->query($sql);
   
   if($tel === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules tablettes
  $sql = "SELECT * FROM `module` WHERE `type`='Tablette';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $tab = $pdo->query($sql);
   
   if($tab === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules voitures
  $sql = "SELECT * FROM `module` WHERE `type`='Voiture';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $voit = $pdo->query($sql);
   
   if($voit === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules d'enceintes
  $sql = "SELECT * FROM `module` WHERE `type`='Enceinte';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $enc = $pdo->query($sql);
   
   if($enc === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules de domotique
  $sql = "SELECT * FROM `module` WHERE `type`='Domotique';";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $domo = $pdo->query($sql);
   
   if($domo === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<!-- RECUPERER L'ETAT DE TOUS LES MODULES -->
<?php
  $host = 'localhost';
  $dbname = 'testwebreathe';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les modules
  $sql = "SELECT * FROM `module`;";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $allMod = $pdo->query($sql);
   
   if($allMod === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>