<?php
declare(strict_types=1);
do {
    $compteur=0;
    echo "Quel est votre nom?";
    $nom=trim(fgets(STDIN));
    echo "Bonjour ",$nom,". Vous allez jouer à un jeu de questions-réponses. Tapez 1 pour choisir les mangas, tapez 2 pour choisir la littérature ou tapez 3 pour quitter.\n";
    $nbr=trim(fgets(STDIN));
    if ($nbr==1)
    {
        $compteur=+Question("Question 1: Lequel de ces mages peut manger du feu?\nTapez a pour 'Natsu Dragneel', tapez b pour 'Lucy Heartfillia' ou tapez c pour 'Erza Scarlet'.\n","a",$compteur);
        $compteur=+Question("Question 2: Que porte Luffy sur sa tête?\nTapez a pour 'un chapeau de pirate', tapez b pour 'un chapeau de paille' ou tapez c pour 'un chapeau de cowboy'.\n","b",$compteur);
        $compteur=+Question("Question 3: Comment s'appelle 'Ken le survivant' en japonais?\nTapez a pour 'Ansatsu Kyoshitsu', tapez b pour 'Rattata to ta' ou tapez c pour 'Hokuto no Ken'.\n","c",$compteur);
        $compteur=+Question("Question 4: Quelle est l'arme d'Ichigo dans 'Bleach''?\nTapez a pour 'une hache', tapez b pour 'une épée' ou tapez c pour 'une lance'.\n","b",$compteur);
        $compteur=+Question("Question 5: En quoi se transforme Ranma en touchant de l'eau froide?\nTapez a pour 'en fille', tapez b pour 'en panda' ou tapez c pour 'en écrevisse'.\n","a",$compteur);
        echo "Maintenant vous devrez directement tapez la bonne réponse.\n";
        $compteur=+Question("Question 6: Quel est le signe du zodiaque de Seiya?\n","sagittaire",$compteur);
        $compteur=+Question("Question 7: Combien y a-t-il de Dragon Balls sur Namek en chiffres?\n","7",$compteur);
        $compteur=+Question("Question 8: Quel est le nom de famille de Naruto?\n","uzumaki",$compteur);
        $compteur=+Question("Question 9: Completer le nom de ce manga: '______ chasseuse de cartes'?\n","sakura",$compteur);
        $compteur=+Question("Question 10: Quel est le métier des frères Elric?\n","alchimiste",$compteur);
        echo "Vous avez trouvé ",$compteur," bonne réponses. Bravo!\n";
        echo "Tapez 'q' pour quitter ou toute autre touche pour recommencer.\n";
        $suite=trim(fgets(STDIN));
        if ($suite=="q")
        {
            break;
        }
    }
    elseif ($nbr==2)
    {
        $compteur=+Question("Question 1: Qui a écrit ''?\nTapez a pour 'San', tapez b pour 'Beau' ou tapez c pour 'Gohan'.\n","a",$compteur);
    }
    elseif ($nbr==3)
    {
        break;
    }
    else
    {
        echo "La commande est erronée, veuillez réessayer.\n";
    }
}while ($nbr!=3);

function Question(string $_question, string $_bon, int $_compteur): int
{
    echo $_question;
    $_reponse=trim(fgets(STDIN));
    $_reponse=strtolower($_reponse);
    if ($_reponse==$_bon)
    {
        echo "Bonne réponse!\n";
        $_compteur++;
    }
    else
    {
        echo "Mauvaise réponse.\n";
    }
    return $_compteur;
}
?>