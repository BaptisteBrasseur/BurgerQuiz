<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Réservez votre table chez Aux saveurs de chez Thom">
	<title>back-inscription</title>
</head>
<body>
	
<h1>Vous êtes sur resevBack.php</h1>

</body>
</html>

<?php
// Établir une connexion à la base de données (utilisant MySQLi)
$servername = "localhost";
$username = "root";
$password = "Tangodata!";
$database = "database";

$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Valider et échapper les données (pour la sécurité)
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Hasher le mot de passe (pour la sécurité)
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Insertion sql
$sql = "INSERT INTO Utilisateurs(username,password) VALUES ('$username','$password_hashed')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement effectué avec succès.";
} 
else {
    echo "Erreur lors de l'enregistrement des données: " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>