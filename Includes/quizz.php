<?php
declare(strict_types=1);
if (empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7']) || empty($_POST['q8']) || empty($_POST['q9']) || empty($_POST['q10'])) {
    echo "Veuillez remplir correctement tous les champs.<br>";
} else {
    $reponse1=$_POST['q1'];
    $reponse2=$_POST['q2'];
    $reponse3=$_POST['q3'];
    $reponse4=$_POST['q4'];
    $reponse5=$_POST['q5'];
    $reponse6=htmlspecialchars($_POST['q6']);
    $reponse7=filter_var($_POST['q7'],FILTER_SANITIZE_NUMBER_INT);
    $reponse8=htmlspecialchars($_POST['q8']);
    $reponse9=htmlspecialchars($_POST['q9']);
    $reponse10=htmlspecialchars($_POST['q10']);

    $compteur=0;
    //$compteur=+Question($bonne_reponse,$compteur);

    echo "Formulaire correctement envoyé<br>",$reponse1,"<br>",$reponse2,"<br>",$reponse3,"<br>",$reponse4,"<br>",$reponse5,"<br>",$reponse6,"<br>",$reponse7,"<br>",$reponse8,"<br>",$reponse9,"<br>",$reponse10," ";
}

function QuizzVerifyAnswers(string $_userAnswer, string $_correctAnswer) : int
{
    if ($_userAnswer==$_correctAnswer)
    {
        $compteur++;
    }
    return $compteur;
}

$userScore = QuizzVerifyAnswers($reponse1)


// function Question(string $_bon, int $_compteur): int
// {
//     $_reponse=trim(fgets(STDIN));
//     $_reponse=strtolower($_reponse);
//     if ($_reponse==$_bon)
//     {
//         $_compteur++;
//     }
//     return $_compteur;
// }
?>