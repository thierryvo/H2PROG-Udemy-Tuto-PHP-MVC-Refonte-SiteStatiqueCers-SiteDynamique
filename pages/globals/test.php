<?php  include("../communs/header.php"); ?>

<?php
// Lesture des animaux
require_once "_pdo.php";
$sql ="SELECT id_animal, nom_animal FROM animal";

$bdd = connexionPDO();
$stmt = $bdd->prepare($sql);
$stmt->execute();
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

echo "<br/>resultat : <br/>";
var_dump($animaux);
?>

<section class="section-de-test-de-connexion">
    <?= styleTitreNiveau1("Ils cherchent une famille", COLOR_PENSIONNAIRE) ?>
</section>


<?php include("../communs/footer.php"); ?>