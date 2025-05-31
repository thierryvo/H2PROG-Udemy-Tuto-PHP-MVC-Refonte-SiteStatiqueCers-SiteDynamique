<?php include("../communs/header.php");?>

<?php
// ------------------------------------------------------------------------------------------------------------------------------------ BACK
// GET : on récupère l'ID sur l'url donc c'est en get ---------------------------------------------------------------------------------- GET
if(isset($_GET['id_animal']) && !empty($_GET['id_animal'])){ 
    // data
    $id_animal = (int)$_GET['id_animal'];

    // Un seull Animal avec une sélection sur le id_animal
    // avec bindValue + contrôle ceinture bretelle du type de l'ID    
    $sql ="SELECT * FROM animal WHERE id_animal = :id_animal";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_animal",$id_animal,PDO::PARAM_INT);
    $stmt->execute();
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();    
}
?>

<!-- Fonction qui gère le Titer h1                   Orange -->
<?php echo styleTitreNiveau1("Odin", COLOR_PENSIONNAIRE) ?>

<section class="section-du-haut-vignette-animal">
<!-- TOUJOURS une div.row qui englobe: 1 ou plusieurs div.col       : quatre colonnes pour cette vignette -->
<!-- LIGNE en div.row  border dark arrondi                           Fond: Vert -->
<div class='row border border-dark rounded-lg m-2 align-items-center perso_bgGreen'>
    <!-- Il y a 4 colonne à mettre en place: image, Imagettes, Identification, et le texte descriptif -->
    <!-- colonne        : image -->    
    <div class="col p-2 text-center">
        <img src='../../sources/images/Animaux/chats/Odin/Odin.jpg' class="img-thumbnail" style="max-height:180px;" alt="Framboise" />
    </div>
    <!-- colonne de 2  ou md-1  : Imagettes (3 icones)        bordure Noir Gauche & Droite  -->
    <div class="col-2 col-md-1 border-left border-right border-dark text-center">
        <img src='../../sources/images/Autres/icones/ChienOk.png' class="img-fluid m-1" style="width:50px;" alt="chienOk" title="OK Chien" />
        <img src='../../sources/images/Autres/icones/ChatOk.png' class="img-fluid m-1" style="width:50px;" alt="chatOk" title="OK Chat" />
        <img src='../../sources/images/Autres/icones/BabyOk.png' class="img-fluid m-1" style="width:50px;" alt="bayOk" title="OK Bébé" />
    </div>
    <!-- colonne de 6  ou md-4  : Identification de l'Animal -->
    <div class="col-6 col-md-4 text-center">
        <div class="mb-2">Puce : XXXXXXXXXXX</div>
        <div class="mb-2">Né : XX/XX/XXXX</div>
        <div class="my-3">
            <span class="badge badge-warning m-1 p-2"> douce </span>
            <span class="badge badge-warning m-1 p-2"> calme </span>
            <span class="badge badge-warning m-1 p-2"> joueuse </span>
        </div>
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
            <!-- les 3 indicateurs  -- -- -- -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-primary"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-primary"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-primary"></li>
            </ol>
            <div class="carousel-inner text-center">
                <!-- 3 images dans le carrousel ------------------------------------------------------ image -->
                <div class="carousel-item active">
                    <img src="../../sources/images/Animaux/chats/Odin/Odin7.jpg" alt="Odin" class="img-thumbnail" style="height:500px" />
                </div>
                <div class="carousel-item">
                    <img src="../../sources/images/Animaux/chats/Odin/Odin5.jpg" alt="Odin" class="img-thumbnail" style="height:500px" />
                </div>
                <div class="carousel-item">
                    <img src="../../sources/images/Animaux/chats/Odin/Odin4.jpg" alt="Odin" class="img-thumbnail" style="height:500px" />
                </div>
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
            ODIN est un chaton de 4 semaines,310 gr atteint d'un herpès, notre vétérinaire a dû lui faire une micro-anesthésie pour le soigner 
            tellement il avait mal... Nous allons tenter le tout pour le tout pour le sauver mais voilà il part de loin et gardera sans doute 
            des séquelles s'il s en sort. Il a des soins lourds et douloureux minimum 6 fois par jour. Il a vraiment besoin de vos ondes positives.
            <br/><br/>
            Vous pouvez suivre son "parcours" dans la section des actualités
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/IconeAdopt.png" alt="" width="50" height="50" class="d-block mx-auto">
            Odin est la mascotte de l'association et est désormais dans sa famille pour la vie ! <br/><br/>
            Donc après discussion avec les membres fondateurs de l association, et surtout avec la proposition d Emmy 
            (notre secrétaire) de le prendre en famille d accueil longue durée MERCI à toi
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/oeil.jpg" alt="" width="50" height="50" class="d-block mx-auto">
            AGATE se trouve sur le secteur de Saint Girons 09. Pas de co-voiturage possible.
        </div>

        <hr />
        <div>
            <img src="../../sources/images/Autres/icones/iconeContrat.png" alt="" width="50" height="50" class="d-block mx-auto">
            Nous vous demandons de bien réfléchir aux engagements que vous allez devoir prendre envers ce petit coeur : il devra vous accompagner dans 
            vos changements de vie pendant les 15 ans minimum à venir 🙂.<br/> 
            Il faudra également pouvoir subvenir à ses besoins ( nourriture, soins vétérinaire etc ) Un animal n est pas un jouet.
        </div>
    </div>
</div>    
</section>

<?php include("../communs/footer.php"); ?>
            
            