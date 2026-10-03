<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 3 — Constantes et facture</title></head>
<body>
<h1>Exercice 3 — Constantes et facture</h1>
<?php
const TAUX_TVA = 20;
define("DEVISE", "MAD");
$prixUnitaireHT = 60;
$quantite = 3;
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$montantFinal = $totalTTC;
$montantFinal += 15;
echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
echo "<p>TVA : $montantTVA " . DEVISE . "</p>";
echo "<p>Total TTC : $totalTTC " . DEVISE . "</p>";
echo "<p>Livraison : 15 " . DEVISE . "</p>";
echo "<p>Montant final : $montantFinal " . DEVISE . "</p>";
if (defined("TAUX_TVA")) {
    echo "<p>La constante TAUX_TVA est définie.</p>";
}
?>
<p><a href="index.php">Accueil</a></p>
</body>
</html>
