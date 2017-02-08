
<?php

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

try {
  $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");

  //affichage des articles avec la mise en page html
  ?>

  <div class="row">
      <div class="col-md-9 col-sm-12">
	  
	  <div id="myCarousel" class="carousel slide" data-ride="carousel" class="col-md-12">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Coup de coeur</h1>
              <p> <?php echo $dataOne[0] ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Coup de coeur</h1>
              <p><?php echo $dataTwo[0] ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Coup de coeur</h1>
              <p><?php echo $dataThree[0] ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<?php
  articlerecent($dbh);
  articlepluslu($dbh);
  articlemoinslu($dbh);
?>

      </div>

      <aside class="col-md-3 col-sm-12">
          <p>Contenu avec les réseaux sociaux, le footer, etc.</p>
      </aside>

  </div>
<?php
//Les articles tous seuls
  article($dbh);
 }

 catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}

        // gestion affichage des article sous le slider
        function articlerecent($dbh){
            $article_recent = "SELECT titre_article, url_img FROM article WHERE date_a = (SELECT  MAX(date_a) FROM article)"; //Va chercher l'article le plus récent
            foreach ($dbh->query($article_recent) as $row){ ?>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <?php print $row['titre_article']?>
                    <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
                </div>
        <?php }
        }

        function articlepluslu($dbh){
            $article_plus_lu = "SELECT titre_article, url_img FROM article WHERE nombre_lu = (SELECT MAX(nombre_lu) FROM article)"; //Va chercher l'article le plus lu
            foreach ($dbh->query($article_plus_lu) as $row){ ?>
                <div class="col-md-4 col-sm-12">
                    <?php print $row['titre_article'];?>
                    <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
                </div>
        <?php }
        }

        function articlemoinslu($dbh){
            $article_moins_lu = "SELECT titre_article, url_img FROM article WHERE nombre_lu = (SELECT MIN(nombre_lu) FROM article)"; //Va chercher l'article le moins lu
            foreach ($dbh->query($article_moins_lu) as $row){ ?>
                <div class="col-md-4 col-sm-12">
                    <?php print $row['titre_article'];?>
                    <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
                </div>
            </div>
        <?php }
        }

function article($dbh){
    $liste_article = "SELECT titre_article FROM article";
    foreach ($dbh->query($liste_article) as $row){ ?>
    <div class="row">
        <?php print $row['titre_article'];?>
    </div>
<?php }
} ?>

