<?php
include_once (../)
?>

<!DOCTYPE html>
<html>
<head>
    <title>article</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h2>Nouvel article</h2>








<form action="article.php" method="POST" enctype="multipart/form-data">

    <p>login <input type="text" id="login" name="login" required> </p>

    <p>pass <input type="password" id="pass" required> </p>

    <?php
    $query = $dbh-> query('select categorie, id_categorie  from categories'); $res = $query->fetchAll();
    ?>

    <select name="categorie" id="categorie">
        <?php
        foreach ($res as $nom_cat)
        {
            echo  '<option value="'.$nom_cat["id_categorie"].'">'.$nom_cat["categorie"]. '</option>';
        }
        ?>
    </select>

    <p>Titre de l'article: <input id="titre" type="text" name="titre_article" required /></p>

    <p>Contenu: <br /><textarea name="contenu" rows="10" cols="50" required></textarea></p>

    <p>URL de l'image <input type="url" name="url_img"></p>

    <br />

    <input type="submit" name="ok" value="Add">

</form>



<?php

$res = $query->fetchAll(); // conversion array en string




    if (isset($_POST['ok'])) {


echo("gdfgdfg");

        $date_a = date("Y-m-d"); // Récupération date

        $id_membre = 1;

        $id_categorie = $_POST['categorie'];

        $login = $_POST['login'];

        $titre = $_POST["titre_article"];

        $url_img = "";

        $contenu = $_POST["contenu"];

        $query = $dbh->query("SELECT id_membre FROM membres WHERE login = '$login'"); // Le login devient l'id_membre

        $res = $query->fetchAll(); // conversion array en string

        // On insère les données dans le tableau
        $add_article = "INSERT INTO article (id_membre, date_a, login, titre_article, id_categorie, url_img, contenu) VALUES (:id_membre, :date_a, :login, :titre_article, :categorie, :url_img, :contenu)";


        // On prépare l'insertion
        $query = $dbh->prepare($add_article);

        // On exécute l'insertion
        $query->execute(array
        (':id_membre' => $id_membre, ':login' => $login, ':categorie' => $id_categorie, ':titre_article' => $titre, ':url_img' => $url_img, ':contenu' => $contenu, ':date_a' => $date_a ));
}
    ?>
	
	<a class="text-uppercase text-center" href="../index.php">Acceuil</a>