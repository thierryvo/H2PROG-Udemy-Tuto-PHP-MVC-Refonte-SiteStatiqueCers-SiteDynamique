<?php 
require_once "_pdo.php";
require_once "../../utile/fonctions.php";
include("../communs/header.php");
?>

<?php
// ------------------------------------------------------------------------------------------------------------------------------------ BACK
// GET : on récupère l'ID sur l'url donc c'est en get ---------------------------------------------------------------------------------- GET
if(isset($_GET['id_animal']) && !empty($_GET['id_animal'])){ 
    // data
    $id_animal = (int)$_GET['id_animal'];

    // Un seull Animal avec une sélection sur le id_animal
    // avec bindValue + contrôle ceinture bretelle du type de l'ID 
    $bdd = connexionPDO();
    $sql ="SELECT * FROM animal WHERE id_animal = :id_animal";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_animal",$id_animal,PDO::PARAM_INT);
    $stmt->execute();
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    $titrePage = $animal["nom_animal"];
    $sexe = $animal['sexe'];
    $date_naissance_animal = $animal['date_naissance_animal'];
    $dateNaissanceAnimal = formaterUneDate($date_naissance_animal,"MYSQL","JJ/MM/AAAA");

    // images -------------------------------------------------------------------- 1
    // images pour le carrousel -------------------------------------------------- 2
    // Récupérer l'image(s) d'un Animal (en passant par la liaison Animal_image) ---
    $sql ="
        SELECT ai.id_animal, i.libelle_image, i.url_image
        FROM   animal_image as ai, image as i
        WHERE             
               ai.id_image = i.id_image
        AND    ai.id_animal = :id_animal
    ";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_animal",$id_animal,PDO::PARAM_INT);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    // 1ière image
    if(!empty($images) && is_array($images)){
        $imagelien = "../../" . $images[0]["url_image"];
        $altlien = $animal["nom_animal"];
    }else{
        $imagelien = "../../sources/images/autres/icones/vide.png";
        $altlien = "Pas d'image";
    }
    //
    // Les 3 icones (Imagettes)
    $iconeChien = "";            
    if($animal['ami_chien'] == "oui") $iconeChien = "chienOk";
    else if($animal['ami_chien'] == "non") $iconeChien = "chienBar";
    else if($animal['ami_chien'] == "N/A") $iconeChien = "chienQuest";
    $iconeChat = "";
    if($animal['ami_chat'] == "oui") $iconeChat = "chatOk";
    else if($animal['ami_chat'] == "non") $iconeChat = "chatBar";
    else if($animal['ami_chat'] == "N/A") $iconeChat = "chatQuest";
    $iconeEnfant = "";
    if($animal['ami_enfant'] == "oui") $iconeEnfant = "enfantOk";
    else if($animal['ami_enfant'] == "non") $iconeEnfant = "enfantBar";
    else if($animal['ami_enfant'] == "N/A") $iconeEnfant = "enfantQuest";
    //
    // Les traits de caractères (limité à 3)
    // Récupérer les caracteres d'un Animal (en passant par la liaison Animal_caractere) ---
    $sql ="
        SELECT ac.id_animal, c.libelle_caractere, c.libelle_caractere_f
        FROM   animal_caractere as ac, caractere as c
        WHERE                    
                ac.id_caractere = c.id_caractere
        AND    ac.id_animal = :id_animal
        LIMIT 3
    ";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        "id_animal" => $id_animal
    ]);
    $caracteres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}//FINSI isset --------------------------------------------------------------------------------------------------------------------------------- isset


// FRONT --------------------------------------------------------------------------------------------------------------------------------------- FRONT
?>

<!-- Fonction qui gère le Titer h1                       Orange -->
<?php echo styleTitreNiveau1($titrePage, COLOR_PENSIONNAIRE) ?>

<section class="section-du-haut-vignette-animal">
<!-- TOUJOURS une div.row qui englobe: 1 ou plusieurs div.col       : quatre colonnes pour cette vignette -->
<!-- LIGNE en div.row  border dark arrondi                                            Fond: Vert              Rose -->
<div class='row border border-dark rounded-lg m-2 align-items-center <?= ($sexe) ? "perso_bgGreen" : "perso_bgRose" ?>'>
    <!-- Il y a 4 colonne à mettre en place: image, Imagettes, Identification, et le texte descriptif -->
    <!-- colonne        : image -->    
    <div class="col p-2 text-center">
        <img src='<?= $imagelien ?>' class="img-thumbnail" style="max-height:180px;" alt="<?= $altlien ?>" />
    </div>
    <!-- colonne de 2  ou md-1  : Imagettes (3 icones)        bordure Noir Gauche & Droite  -->
    <div class="col-2 col-md-1 border-left border-right border-dark text-center">
        <img src='../../sources/images/autres/icones/<?= $iconeChien ?>.png' alt="<?= $iconeChien ?>" class="img-fluid m-1" style="width:50px;" />
        <img src='../../sources/images/autres/icones/<?= $iconeChat ?>.png' alt="<?= $iconeChat ?>" class="img-fluid m-1" style="width:50px;" />
        <img src='../../sources/images/autres/icones/<?= $iconeEnfant ?>.png' alt="<?= $iconeEnfant ?>" class="img-fluid m-1" style="width:50px;" />
    </div>
    <!-- colonne de 6  ou md-4  : Identification de l'Animal -->
    <div class="col-6 col-md-4 text-center">
        <div class="mb-2">Puce : <?= $animal['puce'] ?></div>
        <div class="mb-2">Né : <?= $dateNaissanceAnimal ?></div>
        <!-- Traits de Caractère  :  Trois badge (span) jaune -->
        <?php
        if(!empty($caracteres) && is_array($caracteres)){ ?>
            <div class="my-3">
                <?php                  
                foreach ($caracteres as $caractere) { 
                    $libelleCaractere = "";
                    if($sexe) $libelleCaractere = $caractere["libelle_caractere"];
                    else $libelleCaractere = $caractere["libelle_caractere_f"]; // Féminin
                    ?>
                    <span class="badge badge-warning m-1 p-2"><?= $libelleCaractere ?></span>                                    
                <?php
                } ?>
            </div>
        <?php
        }//FINSI caracteres est alimenté
        ?> 
    </div>
    <!-- colonne de 12  ou md-4 : Texte tout à droite, les Informations -->
    <div class="col-12 col-md-4">
        Frais d'adoption : 60€<br />
        Vaccins : 35€ (à la demande de l'adoptant)<br />
        Stérilisation : caution de 200 € vous sera demandée (rendue après réception du certificat)
    </div>
</div>
</section>


<section class="section-du-bas-presentation-image-et-teste-a-droite">
<!-- TOUJOURS une div.row qui englobe: 1 ou plusieurs div.col       : deux colonnes -->
<!-- LIGNE en div.row  sans marge -->    
<div class="row no-gutters align-items-center">
    <!-- Il y a 2 colonne à mettre en place: image, et le texte descriptif à droite -->
    <!-- colonne de 12  ou md-6       : images(carrousel) -->    
    <div class="col-12 col-lg-6">
        <!-- image = images constitué d un carrousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- les n indicateurs  -- -- -- -->            
            <ol class="carousel-indicators">        
                <!-- boucle pour gérer le n indicateurs -->
                <?php
                if(!empty($images) && is_array($images)){ ?>
                    <?php
                    foreach ($images as $key => $itemImage) { ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= ($key === 0) ? "active" : "" ?> bg-primary"></li>
                    <?php
                    } ?>
                <?php
                }else{ ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-primary"></li>
                    <?php
                }//FINSI images alimenté
                ?>
            </ol>
            <div class="carousel-inner text-center">
                <!-- n images dans le carrousel ------------------------------------------------------ image -->
                <!-- boucle pour gérer le n images -->
                <?php
                if(!empty($images) && is_array($images)){ ?>
                    <?php
                    foreach ($images as $key => $itemImage) { ?>
                        <div class="carousel-item <?=($key === 0) ? "active" : "" ?>">
                            <img src="../../<?= $itemImage['url_image']?>"
                                 alt="<?= $itemImage['libelle_image']?>"
                                 class="img-thumbnail" style="height:500px" />
                        </div>
                    <?php
                    } ?>
                <?php
                }else{ ?>
                    <div class="carousel-item active">
                        <img src="../../sources/images/autres/vide.jpg" alt="Pas d'image" class="img-thumbnail" style="height:500px" />
                    </div>
                    <?php
                }//FINSI images est alimenté
                ?>
            </div>
            <!-- les DEUX BOUTONS : GAUCHE & DROITE -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- colonne de 12  ou md-6       : texte à roite -->
    <div class="col-12 col-lg-6">
        <div>
            <!-- Fonction qui gère le Titer h2                     Orange -->
            <?php echo styleTitreNiveau2("Qui suis-je ?", COLOR_PENSIONNAIRE) ?>
            <?= $animal["description_animal"] ?>
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/IconeAdopt.png" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal['adoption_description_animal']?>
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/oeil.jpg" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal['localisation_description_animal']?>
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/iconeContrat.png" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal['engagement_description_animal']?>
        </div>
    </div>
</div>    
</section>

<?php include("../communs/footer.php"); ?>
            
            