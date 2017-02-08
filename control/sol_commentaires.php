<?php

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

    $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', $user, $pass);
    //$dbh =query 'SET NAMES utf8'


    $form = $_POST;

    $id_commentaire = ''; //id_comm en AI
    $login = $form[ 'login_comm' ]; // Récupération login
    $commentaire = $form[ 'commentaire' ]; // Récupération comm
    $date_c = date("Y-m-d"); // Récupération date
    $id_article = ''; // id_article à voir plus tard
    $query = $dbh->query("SELECT id_membre FROM membres WHERE login = '$login'"); // Le login devient l'id_membre
    $res = $query->fetchAll(); // conversion array en string


if (count($res) > 0) { // Si c'est bien un membre
    foreach($res as $id_member){ // Lance la boucle

        // On insère les données dans le tableau
        $add_comm = "INSERT INTO commentaires (id_commentaire, id_membre, date_c, id_article, commentaire) VALUES (:id_commentaire, :id_membre, :date_c, :id_article, :commentaire)";

        // On prépare l'insertion
        $query = $dbh->prepare( $add_comm );
        // On exécute l'insertion
        $query->execute( array( ':id_commentaire'=>$id_commentaire, ':id_membre'=>$id_member["id_membre"], ':date_c'=>$date_c, 'id_article'=>$id_article, ':commentaire'=>$commentaire ) );
    }
}

?>
