<!DOCTYPE html>


 <?php
      
  include_once ("pdo.php");

    ?>

<html>

<head>

    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/FontAwesome.otf">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/register-style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <meta charset='utf-8'/>

</head>

<body>

                                       <!--  TOP-BAR-->

<header>

<header>

    <div id="top-bar">

        <div class="container">

            <div class="row">

                <img class="col-md-2" style="height: 12%" src="images/mc.png">

                <div class="col-md-6 col-md-offset-1">

                    <h1 style="margin: 0" class="text-uppercase text-center">Title</h1>

                    <div class="center-block row">

                        <div class="row">

                          <div class="col-md-4 col-md-offset-4" style="height: 2px; margin-top: 3px; background-color: #fce374; box-shadow: inset 0 1px 0 #fff6ce, inset 0 -1px 0 #e3c852, inset 0 0 0 1px #fce88d, 0 2px 4px rgba(0, 0, 0, 0.2)" >

                          </div>


                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center" href="index.php">Acceuil</a>

                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center" href="index.php?categorie_page">Catégories</a>

                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center" href="index.php">A propos</a>

                        </div>

                        <div class="row">

                            <div style="height: 2px; width: 100%; background-color: #fce374; box-shadow: inset 0 1px 0 #fff6ce, inset 0 -1px 0 #e3c852, inset 0 0 0 1px #fce88d, 0 2px 4px rgba(0, 0, 0, 0.2)" class="col-md-12">


                            </div>

                    </div>


                </div>

            </div>

                 <!--   LOGIN/ SIGN IN -->

                  <div class="col-md-2 col-md-offset-1 dropdown">

                      <span class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Connexion
                        <span class="caret"></span>
                      </span>
                                    <!--         SIGN IN-->

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                          <div class="row">

                            <div class="col-md-12">

                                <p class="text-center">Se connecter via</p>
                                <div class="social-buttons center-block">
                                    <a href="#" style="padding: 6px"class="btn btn-fb"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="#" class="right btn btn-tw"><i class="fa fa-twitter"></i>Google</a>
                                </div>
                                <span style="display: block" class="text-center">ou</span>
                                 <form class="form" role="form" method="post" action="php/beephp_register.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Adresse email</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                        </div>
                                 </form>
                            </div>

                                    <!--                        SIGN UP-->

                            <div class="bottom text-center">
                                <a id="signUp" href="#"><b>S'enregistrer</b></a>
                            </div>

                        </div>

                     </ul>

                </div>

            </div>

        </div>

    </div>

</header>

</header>

                                        <!--  TOP BAR-->




    <div id="separator" class="col-md-12"></div>


<!--                                                SECTION-->

    <div class="container">

    <div class="row">

    <section class="col-md-7">



    </section>

    </div>

    </div>

<!--                                       register WINDOW-->

    <div id="windowLogin">
        <div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Inscrivez-vous pour créer, modifier des article et des commentaires.</h5>
					<form class="" method="post" action="php/beephp_register.php">

						<div class="form-group">
							<label for="prenom" class="cols-sm-2 control-label">Votre nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="mail" class="cols-sm-2 control-label">Votre email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mail" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="login" class="cols-sm-2 control-label">Pseudo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="login" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="m_passe" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="m_passe" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
                            <button type="submit" id="button" class="btn btn-success btn-lg btn-block login-button">S'inscrire</button>
						</div>
						<div class="form-group ">
							<a target="_blank" type="button" id="closeLogin" class="btn btn-danger btn-lg btn-block login-button">Fermer</a>
						</div>

					</form>
				</div>
			</div>
		</div>
     </div>

    <div id="page">

	</div>

		<div class="container">
		<?php
		$dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);

			if (empty($_GET)) {
				include "php/beephp-accueil.php";
			}
			else if (isset($_GET["categorie_page"])) {

				include "php/categories.php";
			}
			else if (isset($_GET["categorie"])) {

				include "php/categorie_generation.php";
			}
		?>
		<form action='php/article.php' method="post">
			<a type='button' id='new_article' href='php/article.php'>Nouvel Article</a>
		</form>
		
		</div>

                <!--                           LOGIN WINDOW-->
	    <footer>

		<div class="container">


        <p><a href="http://www.freepik.com/free-vector/infinite-logo_798107.htm">Designed by Freepik</a></p>

		</div>

		</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>

</html>
