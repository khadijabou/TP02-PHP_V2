<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 5 — Conditions et mentions</title></head>
<body>
<h1>Exercice 5 — Conditions et mentions</h1>
<?php
// Modifier cette valeur pour tester les différentes limites.
$moyenne = 14;
if ($moyenne < 0 || $moyenne > 20) {
    $message = "Note invalide";
} elseif ($moyenne < 10) {
    $message = "Non validé";
} elseif ($moyenne < 12) {
    $message = "Passable";
} elseif ($moyenne < 14) {
    $message = "Assez bien";
} elseif ($moyenne < 16) {
    $message = "Bien";
} else {
    $message = "Très bien";
}
echo "<p>Moyenne : $moyenne — $message</p>";
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
