<?php

$user = 'mathieuc';
$pass = 'U9YDV9eNf5';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");
}

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}



?>
