<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-Burger Quizz </title>
    <link rel="stylesheet" href="../Style/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">

</head>
<body class="bg-warning text-success">
<?php
include "../Includes/header.php";
?>
<div class="container">
    <main id="maincontent" role="main" tabindex="-1">
        <h1 class="text-center"> Bienvenue dans le super Burger Quizz </h1>
        <!-- image-->



        <!-- nom: name
         prenom firstname
         emaail : email
         dnaissance: birth
         nom utilisateur: username
         mot de passe : password-->
        <div class="row img-accueil">
            <div class="col-12 text-center">
                <img src="../images/imageaccueil.jpg" alt="" class="img-fluid rounded" >
            </div>
        </div>
        <p class="text-center fs-1"> Serez-vous le gagant de l'année? :D </p>
        <p class="text-center fs-1">N'attendez plus...Jouez! </p>
        <div class="alignementformulaires">


            <div class="formconnection">
                <h2> Connectez-vous </h2>
                <p> Les champs marqués par un "*" sont obligatiores.</p>
                <form method="post" action="">

                    <p>
                        <label for="nuserconnection" class="form-label"> Nom d'utilisateur <span aria-hidden="true">* </span> : </label>
                        <input type="text" name="username"  id="nuserconnection" class="form-control" required>
                    </p>
                    <p>
                        <label for="mpasse" class="form-label">Mot de passe <span aria-hidden="true">* </span>: </label>
                        <input type="password" name="password"  class="form-control" id="mpasse" required>
                    </p>
                    <input type="submit"  value="Connexion">
                </form>
            </div>


            <div class="formregister"> <h2> Inscrivez-vous</h2>
                <p> Les champs marqués par un "*" sont obligatiores.</p>
                <form method="post" action="">



                    <p>
                        <label for="nom" class="form-label">Nom<span aria-hidden="true">* </span>: </label>
                        <input type="text" name="name"  class="form-control" id="nom" required>
                    </p>
                    <p>
                        <label for="pnom" class="form-label">Prénom<span aria-hidden="true">* </span>: </label>
                        <input type="text" name="firstname"  class="form-control" id="pnom" required>
                    </p>


                    <p>
                        <label for="mail" class="form-label">E-mail <span aria-hidden="true">* </span>: </label>
                        <input type="email" name="email"  class="form-control" id="mail" required>
                    </p>
                    <p>
                        <label for="nuserregister"> Nom d'utilisateur <span aria-hidden="true">* </span>: </label>
                        <input type="text" name="username" class="form-control"  id="nuserregister" required>
                    </p>
                    <p>
                        <label for="mpasseregister" class="form-label" >Mot de passe <span aria-hidden="true">* </span>: </label>
                        <input type="password" name="password"  class="form-control" id="mpasseregister" required>
                    </p>
                    <p>
                        <label for="mpasserepeat" class="form-label">Confirmez votre mot de passe <span aria-hidden="true">* </span>: </label>
                        <input type="password" name="password"  class="form-control" id="mpasserepeat" required>
                    </p>
                    <input type="submit"  value="S'inscrire">
                </form>
            </div>



        </div>


    </main>




</body>
<?php
include "../Includes/footer.php";
?>
</html>
