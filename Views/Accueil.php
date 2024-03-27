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
    <h1 class="text-center"> Bienvenue dans le super Burger Quizz </h1>
    <!-- image-->



    <!-- nom: name
     prenom firstname
     emaail : email
     dnaissance: birth
     nom utilisateur: username
     mot de passe : password-->
    <div class="row">
        <div class="col-12 text-center">
            <img src="../images/imageaccueil.jpg" alt="" class="img-fluid rounded" >
        </div>
    </div>

    <div class="alignementformulaires">


        <div class="formconnection">
            <h2> Connectez-vous </h2>
            <form method="post" action="">

                <p>
                    <label for="nuserconnection"> Nom d'utilisateur: </label>
                    <input type="text" name="username"  id="nuserconnection" required>
                </p>
                <p>
                    <label for="mpasse">Mot de passe: </label>
                    <input type="password" name="password"  id="mpasse" required>
                </p>
                <input type="submit"  value="Connexion">
            </form>
            </div>


<div class="formregister"> <h2> Inscrivez-vous</h2>
    <form method="post" action="">



        <p>
            <label for="nom">Nom: </label>
            <input type="text" name="name"  id="nom" required>
        </p>
        <p>
            <label for="pnom">Prénom: </label>
            <input type="text" name="firstname"  id="pnom" required>
        </p>


        <p>
            <label for="mail">E-mail: </label>
            <input type="email" name="email"  id="mail" required>
        </p>
        <p>
            <label for="nuserregister"> Nom d'utilisateur: </label>
            <input type="text" name="username"  id="nuserregister" required>
        </p>
        <p>
            <label for="mpasseregister">Mot de passe: </label>
            <input type="password" name="password"  id="mpasseregister" required>
        </p>
        <p>
            <label for="mpasserepeat">Confirmez votre mot de passe: </label>
            <input type="password" name="password"  id="mpasserepeat" required>
        </p>
        <input type="submit"  value="S'inscrire">
    </form>
</div>



</div>




</body>
<?php
include "../Includes/footer.php";
?>
</html>
