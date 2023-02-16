<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Recette</title>
</head>
<body>
<!-- http://localhost/php-initiation/recette/index-.php -->

<div class="text-center ">

<!-- h1 et la navbar  -->
<header class=" row bg-success mt-2 p-3 ">
<h1 class="text-center">Recette miam</h1>
        <nav class="navbar navbar-expand navbar-dark container">
            
            <ul class="navbar-nav mt-2 p-3 ">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Accueil </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=recette" class="nav-link">La Recette de la saint valentin</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                        <a href="index.php?page=contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=tableau-bord" class="nav-link">Tableau Bord</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=deconnexion" class="nav-link">Déconnexion</a>
                    </li>
               
                    <li class="nav-item">
                        <a href="index.php?page=login" class="nav-link">login</a>
                    </li>
            </ul>
        </nav>
    </header> 
    </div>

      <!-- pour les lien photo
aller sur unsplash=>unspsplash random =>
prendre les lien avec la bonne taille image
POUR NE PAS AVOIR LA MEME IMAGE DONNE UNE FIN DIFFERENTE -->

   
</div>

<section>
        <!-- routage => url => page -->
    <?php if(empty($_GET)) : ?>
        <?php require "vue/public/accueil.php" ?>

        <?php elseif(!empty($_GET ["page"]) && $_GET["page"] === "recette" ) : ?>
            <?php  require "vue/public/recette.php" ?>

            <?php  elseif ( !empty( $_GET ["page"]) && $_GET ["page"] === "contact" ) : ?>
            <?php  require "vue/public/commentaire.php" ?>

            <?php  elseif ( !empty( $_GET ["page"]) && $_GET ["page"] === "tableau-bord" ) : ?>
            <?php  require "vue/privee/tableau-bord.php" ?>

            <?php  elseif ( !empty( $_GET ["page"]) && $_GET ["page"] === "logout" ) : ?>
            <?php  require "vue/public/login.php" ?>

            <?php  elseif ( !empty( $_GET ["page"]) && $_GET ["page"] === "login" ) : ?>
            <?php  require "vue/public/login.php" ?>

        <?php  elseif ( !empty( $_GET ["page"]) && $_GET ["page"] === "mention" ) : ?>
            <?php  require "vue/public/mentions-legales.php" ?>

       

            <?php  endif  ?>
    
  
    </section>

    <div>
    <footer  class="container text-center mt-2 p-3 bg-primary-subtle ">
    <a href="index.php?page=mention" >mentions legales</a>
    </footer>
    </div>
</body>
</html>