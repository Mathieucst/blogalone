<div class="row">
	<div class="col-sm-3">
		<div class="row">
		<!--connection + SQL request for categories's menu + html generation-->
		<?php 
			$dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
			$query = $dbh->query("SELECT categorie FROM categories");
			$result = $query->fetchAll(); ?>
			
			<p><a href="index.php?categorie_page">Home</a></p>
			
			<?php foreach ($result as $row){ ?>
				<?php $categorie = $_GET["categorie"]; ?>
				<?php if($row[0] == $categorie){ ?>
					<p><a class="categorie_link" id="<?php echo $row['categorie'] ?>" href="index.php?categorie=<?=$row['categorie']?>"> <?php echo $row['categorie'] ?> </a></p>
				<?php } else{ ?>
					<p><a class="categorie_link" id="<?php echo $row['categorie'] ?>" href="index.php?categorie=<?=$row['categorie']?>"> <?php echo $row['categorie'] ?> </a></p>
				<?php } ?>
			<?php } ?>

		</div>
	</div>
<!--connection + SQL request for article's zone + html generation-->
	<?php
	
		$categorie = $_GET["categorie"];
		$query = $dbh->query("SELECT membres.avatar, membres.login, 
			categories.categorie, article.contenu, article.url_img
			FROM membres, article, categories WHERE 
			membres.id_membre = article.id_membre 
			AND article.id_categorie = categories.id_categorie
			AND categories.categorie = '".$categorie."' ORDER BY article.date_a DESC");
		$result = $query->fetchAll(); 
		// print_r($result);
	?>	
	<div class="col-sm-9">
		<?php foreach ($result as $row){?>
		<div class="categorie_container <?php echo $row["categorie"]?>">
			<div class="row">
				<div class="col-sm-1">
					<img src="<?php echo $row["avatar"]?>"/>
					<p><?php echo $row["login"]?></p>
				</div>
				<div class="col-sm-7">
					<div><?php echo $row["url_img"] ?></div>
				</div>
			</div>
			<div class="row">
				<div><?php echo $row["contenu"] ?></div>
			</div>
		</div>
	<?php } ?>
</div>