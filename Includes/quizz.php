<?php
declare(strict_types=1);
$compteur=0;
        $compteur=+Question("Question 1: Quel mangaka a écrit 'Astro Boy'?\nA 'Osamu Tezuka', B 'Akira Toriyama' ou C 'Go Nagai'.\n","a",$compteur);
        $compteur=+Question("Question 2: Que porte Monkey D. Luffy sur sa tête?\nA 'un chapeau de pirate', B 'un chapeau de paille' ou C 'un chapeau de cowboy'.\n","b",$compteur);
        $compteur=+Question("Question 3: Quel studio a adapté en anime 'Chainsaw Man'?\nA 'Toei Animation', B 'Studio Pierrot' ou C 'MAPPA'.\n","c",$compteur);
        $compteur=+Question("Question 4: Lequel de ces mangas n'est pas paru dans le 'Weekly Shonen Jump'?\nA 'Bleach', B 'L'attaque des Titans' ou C 'Death Note'.\n","b",$compteur);
        $compteur=+Question("Question 5: En quoi se transforme Ranma en touchant de l'eau froide?\nA 'en fille', B 'en panda' ou C 'en écrevisse'.\n","a",$compteur);
        echo "Maintenant vous devrez directement tapez la bonne réponse.\n";
        $compteur=+Question("Question 6: Quel est le prénom de l'héroïne de 'La rose de Versailles'?\n","oscar",$compteur);
        $compteur=+Question("Question 7: En quelle année s'est terminé le manga 'Dragon Ball' en chiffres?\n","1995",$compteur);
$compteur=+Question("Question 8: Quel est le nom de famille de Naruto?\n","uzumaki",$compteur);
$compteur=+Question("Question 9: Quel est le collectif derrière 'Sakura chasseuse de cartes'?\n","clamp",$compteur);
$compteur=+Question("Question 10: Quel est le métier des frères Elric?\n","alchimiste",$compteur);
echo "Vous avez trouvé ",$compteur," bonne réponses. Bravo!\n";

function Question(string $_question, string $_bon, int $_compteur): int
{
    echo $_question;
    $_reponse=trim(fgets(STDIN));
    $_reponse=strtolower($_reponse);
    if ($_reponse==$_bon)
    {
        $_compteur++;
    }
    return $_compteur;
}
?>