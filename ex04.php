<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 4 — Types et conversions</title></head>
<body>
<h1>Exercice 4 — Types et conversions</h1>
<?php
$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;
echo "<h2>Types initiaux</h2><pre>";
var_dump($entier, $chaine, $decimal, $vrai, $faux, $vide);
echo "</pre>";
echo "<h2>Conversions</h2><pre>";
var_dump((int) $chaine, (int) $decimal, (string) $entier);
echo "</pre>";
echo "<h2>Affichage des booléens</h2>";
echo "<p>echo true : [";
echo $vrai;
echo "]</p><p>echo false : [";
echo $faux;
echo "]</p><pre>";
var_dump($vrai, $faux);
echo "</pre>";
echo "<h2>Conversions en booléens : 0, chaîne 0, PHP, tableau vide</h2><pre>";
var_dump((bool) 0, (bool) "0", (bool) "PHP", (bool) []);
echo "</pre>";
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
