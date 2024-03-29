<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Votre quizz -Burger Quizz </title>
    <link rel="stylesheet" href="../Style/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">

</head>
<body class="bg-warning text-success">
<?php
include "../Includes/header.php";
?>

    <main id="maincontent" role="main" tabindex="-1">
        <div class="container">
        <h1 class="text-center"> The Burger Quizz </h1>

            <form action="" method="post">
                <h2 aria-describedby="explicationqcm">Questions : choisissez la bonne réponse</h2>

            <fieldset>
                <legend>Question 1: Quel mangaka a écrit 'Astro Boy'? </legend>
                <p>
                    <input type="radio" name="q1r1" id="q1r1" value="Osamu Tezuka"> <label for="q1r1">Osamu Tezuka</label>
                <input type="radio" name="q1r2" id="q1r2"  value="Akira Toriyama"><label for="q1r2"> Akira Toriyama</label>
                    <input type="radio" name="q1r3" id="q1r3" value="Go Nagai"> <label for="q1r3"> Go Nagai</label>
                </p>
            </fieldset>

                <fieldset>
                    <legend> Question 2: Que porte Monkey D. Luffy sur sa tête?</legend>
                    <p>
                        <input type="radio" name="q2r1" id="q2r1" value="chapeaudepirate"> <label for="q2r1">Un chapeau de pirate</label>
                        <input type="radio" name="q2r2" id="q2r2" value="chapeaudepaille"> <label for="q2r2">Un chapeau de paille</label>
                        <input type="radio" name="q2r3" id="q2r3" value="chapeaudecowboy"> <label for="q2r3"> Un chapeau de cowboy</label>
                    </p>
                </fieldset>

                <fieldset>
                    <legend> Question 3: Quel studio a adapté en anime 'Chainsaw Man'?</legend>
                    <p>
                        <input type="radio" name="q3r1" id="q3r1" value="toeianimation"> <label for="q3r1">Toei Animation</label>
                        <input type="radio" name="q3r2" id="q3r2" value="studiopierrot"> <label for="q3r2">Studio Pierrot</label>
                        <input type="radio" name="q3r3" id="q3r3" value="mappa"> <label for="q3r3">Mappa</label>
                    </p>
                </fieldset>
                <fieldset>
                    <legend> Question 4: Lequel de ces mangas n'est pas paru dans le 'Weekly Shonen Jump'?</legend>
                    <p>
                        <input type="radio" name="q4r1" id="q4r1" value="bleach"> <label for="q4r1">Bleach</label>
                        <input type="radio" name="q4r2" id="q4r2" value="lattaquedestitans"> <label for="q4r2">L'attaque des Titans</label>
                        <input type="radio" name="q4r3" id="q4r3" value="deathnote"> <label for="q4r3">Death Note</label>
                    </p>
                </fieldset>
                <fieldset>
                    <legend> Question 5: En quoi se transforme Ranma en touchant de l'eau froide?</legend>
                    <p>
                        <input type="radio" name="q5r1" id="q5r1" value="enfille"> <label for="q5r1"> En fille</label>
                        <input type="radio" name="q5r2" id="q5r2" value="enpanda"> <label for="q5r2"> En panda</label>
                            <input type="radio" name="q5r3" id="q5r3" value="enecrevisse"> <label for="q5r3">En écrevisse</label>
                    </p>
                </fieldset>

                <h2> Maintenant, à vous de taper la bonne réponse!</h2>
<!--
 <fieldset>
                    <legend>
                        <label for=""> </label>
                        </legend>
                <input type="text" id="" name="" required>
                </fieldset> -->

                <fieldset>
                    <legend>
                        <label for="q6"> Question 6: Quel est le prénom de l'héroïne de 'La rose de Versailles'?</label>
                        </legend>
                <input type="text" id="q6" name="q6" required>
                </fieldset>
                <fieldset>
                    <legend>
                        <label for="q7"> Question 7: En quelle année s'est terminé le manga 'Dragon Ball'( en chiffres)?</label>
                    </legend>
                    <input type="text" id="q7" name=q7"" required>
                </fieldset>
                <fieldset>
                <legend>
                    <label for="q8"> Question 8: Quel est le nom de famille de Naruto?</label>
                </legend>
                <input type="text" id="q8" name="q8" required>
                </fieldset>

                <fieldset>
                    <legend>
                        <label for="q9"> Question 9: Quel est le collectif derrière 'Sakura chasseuse de cartes'? </label>
                    </legend>
                    <input type="text" id="q9" name="q9" required>
                </fieldset>

                <fieldset>
                    <legend>
                        <label for="q10"> Question 10: Quel est le métier des frères Elric?</label>
                    </legend>
                    <input type="text" id="q10" name="q10" required>
                </fieldset>

                <input type="submit" value="Soumettre mes réponses!">

            </form>
        </div>
    </main>






</body>
<?php
include "../Includes/footer.php";
?>
</html>
