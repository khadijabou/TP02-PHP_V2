<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 1 — Première page PHP</title></head>
<body>
<h1>Exercice 1 — Première page PHP</h1>
<?php
// Affichage du message de bienvenue.
echo "<p>Bienvenue dans mon TP PHP</p>";
/* Les informations suivantes sont fictives.
   Chaque paragraphe apparaît sur une nouvelle ligne. */
echo "<p>Nom : Nom</p>";
echo "<p>Prénom : Khadija</p>";
echo "<p>Groupe : G1</p>";
?>
<p><?= "Je découvre le langage PHP." ?></p>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
