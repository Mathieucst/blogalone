<?php

$user = 'mathieuc';
$pass = 'U9YDV9eNf5';

try {
  $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");
 } catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
 }

catch(PDOException $e) {
    echo $e->getMessage();
}

//Et on récupère les données
    $form = $_POST;
    $id_membre = '';
    $nom = '';
    $prenom = $form[ 'prenom' ];
    $login = $form[ 'login' ];
    $m_passe = $form[ 'm_p' ];
    $mail = $form[ 'mail' ];

//On les insère dans le tableau
    $register = "INSERT INTO mbs (id_membre, nom, login, m_passe, mail) VALUES (:id_membre, :nom, :login, :m_passe, :mail)";

//On les prépare
    $query = $dbh->prepare( $mbs );
// On les exécute
    $query->execute( array( ':id_membre'=>$id_membre, ':nom'=>$nom, ':login'=>$login, ':m_p'=>$m_p, ':mail'=>$mail ) );


    header('Location: ../index.php');
    exit();?>
