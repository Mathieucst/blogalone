<?php 
		$dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
		$query = $dbh->query("SELECT membres.login FROM membres");
		$result = $query->fetchAll();
		$login = $_POST["login"];
		$validation_login = in_array($login , $result);
		
		// validation test
		
		if($validation_login == true){
			echo "<button type='button' id='new_article' href='php/aricle.php>Nouvel Article</button>";
		}
		else{
			echo "<p>Inscription recquise</p>";
		}
?>