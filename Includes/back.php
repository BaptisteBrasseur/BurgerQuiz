<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Réservez votre table chez Aux saveurs de chez Thom">
	<title> conenexion BurgerQuizz</title>
</head>
<body>
	
<h1>Vous êtes connecté!</h1>

</body>
</html>

<?php

$dbName="BurgerQuiz";
$dbUser="root";
$dbPassword="Tangodata!";
$dbHost="Localhost";


try {
    $bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie";
}
catch (PDOException $e)
{
    exit("Erreur de connexion : " . $e->getMessage());
}
$userName=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM Utilisateurs WHERE username=:username";
$statement=$bdd->prepare($query);
$statement->bindParam(      ":username",$userName);
$statement->execute();
$userData=$statement->fetch(PDO::FETCH_ASSOC);
if ($userData)
{
    if ($password==$userData['password'])
    {
        echo "Connexion au site web réussie!";
    }
    else
    {
        echo "Le nom d'utilisateur et le mot de passe ne correspondent pas!!";
    }
}
else
{
    echo "Veuillez créer un compte! ";

}

?>






