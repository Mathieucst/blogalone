<?php
$user = 'mathieuc';
$pass = 'U9YDV9eNf5';

$dbh = new PDO('mysql:host=localhost;dbname=mathieuc', $user, $pass);
//$dbh =query 'SET NAMES utf8'
?>

<!DOCTYPE html>
<html>
<head>
    <title>article</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h2>Commentaire</h2>

<form action="beephp_commentaires.php" method="POST" enctype="multipart/form-data">
    <p>Login: <input id="login_comm" type="text" name="login_comm" /></p>
    <p>Votre Commentaire: <br /><textarea name="commentaire" rows="10" cols="50"></textarea></p>
    <br />
    <input type="submit" name="envoie_comm" value="Envoyer">


</form>
</body>
</html>
