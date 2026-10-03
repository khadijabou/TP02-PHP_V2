<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 6 — Mois avec switch</title></head>
<body>
<h1>Exercice 6 — Mois avec switch</h1>
<?php
// Étape de test : remplacer la ligne suivante par $numeroMois = 3;
// Tester également 1, 12 et 15, puis rétablir le mois courant.
$numeroMois = (int) date("m");
switch ($numeroMois) {
    case 1: $mois = "Janvier"; break;
    case 2: $mois = "Février"; break;
    case 3: $mois = "Mars"; break;
    case 4: $mois = "Avril"; break;
    case 5: $mois = "Mai"; break;
    case 6: $mois = "Juin"; break;
    case 7: $mois = "Juillet"; break;
    case 8: $mois = "Août"; break;
    case 9: $mois = "Septembre"; break;
    case 10: $mois = "Octobre"; break;
    case 11: $mois = "Novembre"; break;
    case 12: $mois = "Décembre"; break;
    default: $mois = "Numéro de mois invalide";
}
echo "<p>Mois $numeroMois : $mois</p>";
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
