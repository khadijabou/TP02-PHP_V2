<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 2 — Variables et concaténation</title></head>
<body>
<h1>Exercice 2 — Variables et concaténation</h1>
<?php
$nom = "El ";
$prenom = "Khadija";
$age = 26;
$formation = "Licence Informatique";
$presentation = "Je m'appelle " . $prenom . " " . $nom .
    ", j'ai " . $age . " ans et je suis en " . $formation . ".";
$presentation .= " J'apprends PHP.";
echo "<p>" . $presentation . "</p>";
$note = 12;
$Note = 16;
echo "<p>Valeur de \$note : " . $note . "</p>";
echo "<p>Valeur de \$Note : " . $Note . "</p>";
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
