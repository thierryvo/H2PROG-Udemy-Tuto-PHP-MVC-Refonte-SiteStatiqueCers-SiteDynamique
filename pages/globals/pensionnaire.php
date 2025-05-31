<?php  
require_once "./animal.dao.php";
require_once "../../utile/fonctions.php";
include("../communs/header.php"); 
?>

<?php
// Lecture des animaux ------
if(isset($_GET['id_statut']) && !empty($_GET['id_statut'])){ 
    //
    // Les animaux d'un Statut
    $id_statut = (int)$_GET['id_statut'];
    $animaux = getAnimalFromStatut($id_statut);
    //
    // titre de la PAGE
    switch ($id_statut){
        case ID_STATUT_A_L_ADOPTION:
            $titrePage = "Ils cherchent une famille";
            break;
        case ID_STATUT_FAMILLE_ACCEUIL_LONGUE_DUREE:
            $titrePage = "Famille d'accueil longue Durée (FALD)";
            break;
        case ID_STATUT_ADOPTE:
            $titrePage = "Les anciens";
            break;
        case ID_STATUT_MORT:
            $titrePage = "Les montés au ciel (DCD)";
            break;
        default:
            break;
    }   
}else{
    // TOUS les animaux  
    $animaux = getAnimal();
    $titrePage = "Ils cherchent une famille";
}
?>

<section class="section-de-test-de-connexion">
<!-- Fonction qui gère le Titer h1                Orange -->
<?= styleTitreNiveau1($titrePage, COLOR_PENSIONNAIRE) ?>

<?php
// toujours tester SI ce n'est pas vide & si c'est bien un tableau 
if(!empty($animaux) && is_array($animaux)){
?>
    <!-- TOUJOURS une div.row qui englobe: 1 ou plusieurs div.col -->
    <!-- LIGNE en div.row   sans marge -->
    <div class='row no-gutters'>
        <?php                                                
        // BOUCLE sur la liste des utilisateurs -------------------------------------------------------------------- DO1
        //                    
        foreach ($animaux as $item) :
            // data
            $id_animal = $item['id_animal'];
            $sexe = $item['sexe'];
            $date_naissance_animal = $item['date_naissance_animal'];
            $dateNaissanceAnimal = formaterUneDate($date_naissance_animal,"MYSQL","JJ/MM/AAAA");

            // images
            // Récupérer l'image(s) d'un Animal (en passant par la liaison Animal_image) ---
            $image = getFirstImageAnimal($id_animal);
            //
            // Les 3 icones (Imagettes)
            $iconeChien = "";            
            if($item['ami_chien'] == "oui") $iconeChien = "chienOk";
            else if($item['ami_chien'] == "non") $iconeChien = "chienBar";
            else if($item['ami_chien'] == "N/A") $iconeChien = "chienQuest";
            $iconeChat = "";
            if($item['ami_chat'] == "oui") $iconeChat = "chatOk";
            else if($item['ami_chat'] == "non") $iconeChat = "chatBar";
            else if($item['ami_chat'] == "N/A") $iconeChat = "chatQuest";
            $iconeEnfant = "";
            if($item['ami_enfant'] == "oui") $iconeEnfant = "enfantOk";
            else if($item['ami_enfant'] == "non") $iconeEnfant = "enfantBar";
            else if($item['ami_enfant'] == "N/A") $iconeEnfant = "enfantQuest";
            //
            // Les traits de caractères (limité à 3)
            // Récupérer les caracteres d'un Animal (en passant par la liaison Animal_caractere) ---
            $caracteres = getCaracteresFromAnimal($id_animal,3);
            ?>

            <!-- DEBUT : VIGNETTE Pensionnaire --------------------------------------------------------------------- -->
            <!-- colonne de 6  col-lg-6 -->
            <div class="col-12 col-lg-6">
                <!-- LIGNE en div.row  border dark arrondi                           Fond: Rose:    perso_bgGreen     perso_bgRose -->        
                <div class='row border border-dark rounded-lg m-2 align-items-center <?= ($sexe) ? "perso_bgGreen" : "perso_bgRose" ?>' style="height:200px;">
                    <!-- Il y a 3 colonne à mettre en place: image, Imagettes, et le texte -->
                    <!-- colonne        : image -->
                    <div class="col p-2 text-center">
                        <?php
                        if(!empty($image) && is_array($image)){ ?>
                            <img src='../../<?= $image["url_image"] ?>' 
                                alt="<?= $item['nom_animal'] ?>" title="<?= $item['nom_animal'] ?>"
                                class="img-thumbnail" style="max-height:180px;" />
                        <?php
                        }else{ ?>
                            <img src='../../sources/images/animal/vide.png' alt="Pas d'image" class="img-thumbnail" style="max-height:180px;" />
                        <?php
                        }//FINSI images est alimenté
                        ?>
                    </div>
                    <!-- colonne de 2   : Imagettes (3 icones)        bordure Noir Gauche & Droite  -->
                    <div class="col-2 border-left border-right border-dark text-center">
                        <img src='../../sources/images/autres/icones/<?= $iconeChien ?>.png' alt="<?= $iconeChien ?>" class="img-fluid m-1" style="width:50px;" />
                        <img src='../../sources/images/autres/icones/<?= $iconeChat ?>.png' alt="<?= $iconeChat ?>" class="img-fluid m-1" style="width:50px;" />
                        <img src='../../sources/images/autres/icones/<?= $iconeEnfant ?>.png' alt="<?= $iconeEnfant ?>" class="img-fluid m-1" style="width:50px;" />
                    </div>
                    <!-- colonne de 6   : Texte à droite, les Informations -->
                    <div class="col-6 text-center">
                        <div class="perso_policeTitre_Fredoka perso_size20 mb-3"><?= $item['nom_animal'] ?></div>
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
                                    <span class="badge badge-warning m-1 p-2 d-none d-sm-inline"><?= $libelleCaractere ?></span>                                    
                                <?php
                                } ?>
                            </div>
                        <?php
                        }//FINSI caracteres est alimenté
                        ?>                             
                        
                        <!-- BOUTON BLEU: Visiter ma PAGE -->
                        <a href="animal.php?id_animal=<?= $id_animal ?>" class="btn btn-primary">Visiter ma page </a>
                    </div>
                </div>
            </div>
            <!-- FIN   : VIGNETTE Pensionnaire --------------------------------------------------------------------- -->

            <?php
        endforeach;
        // FIN BOUCLE sur la liste des utilisateurs ------------------------------------------------------------- ENDDO1
        ?>
    </div>    

<?php
// SINON:
}else{
    echo "<h2><b>La liste est vide!</b></h2>";
}
?>   
</section>

<?php include("../communs/footer.php"); ?>