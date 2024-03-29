
  <body class="bg-warning text-success"  >
                                                      - <?php
                                                         include "../Includes/header.php";
?>

<main id="maincontent" role="main" tabindex="-1">





    <h1>Inscription à BurgerQuizz</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")




        $dbName = "BurgerQuiz";
        $dbUser = "root";
        $dbPassword = "Tangodata!";
        $dbHost = "Localhost";

        try {
            $bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPassword);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion à la base de données réussie";
        } catch (PDOException $e) {
            exit("Erreur de connexion : " . $e->getMessage());
        }
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM Utilisateurs WHERE username = :username";
        $statement = $bdd->prepare($query);
        $statement->bindParam(":username", $userName);
        $statement->execute();
        $existingUser = $statement->fetch(PDO::FETCH_ASSOC);

        if ($existingUser)
        {
            echo "<p>Un utilisateur avec le même nom d'utilisateur existe déjà. Veuillez choisir un autre nom d'utilisateur.</p>";
        } else
        {
            // Insertion des données dans la base de données
            $requete = $bdd->prepare("INSERT INTO Utilisateurs(username, password) VALUES (:username, :password)");
            $requete->bindParam(":username", $userName);
            $requete->bindParam(":password", $password);
            $requete->execute();

            echo "<p>Compte créé! Bienvenue chez Burger Quizz</p>";
        
    }
    ?>
</main>

<?php include "../Includes/footer.php"; ?>
      </body>