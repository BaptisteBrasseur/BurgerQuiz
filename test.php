<?php
$dbName="BurgerQuiz";
$dbUser="root";
$dbPassword="Tangodata!";
$dbHost="Localhost";

try {
    // Connexion à la base de données
    $bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // Préparation de la requête
    $requete = $bdd->prepare("SELECT score FROM Scores");

    // Exécution de la requête
    $requete->execute();

    // Récupération des résultats sous forme de tableau associatif
    $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    foreach ($resultats as $resultat) {
        echo "Bravo, votre dernier score est ".$resultat['score'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
