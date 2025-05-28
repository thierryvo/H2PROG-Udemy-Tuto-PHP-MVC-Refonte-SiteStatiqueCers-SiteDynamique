<?php include("../communs/header.php") ?>

<!-- Fonction qui gère le Titer h2 -->
<?php echo styleTitreNiveau2("Ils ont besoin de vous !", "perso_ColorMenuRose") ?>

<section class="section-du-haut-le-carrousel">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Les indicateurs en HAUT du carroussel: en gris-noir -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
    </ol>
    <!-- CI-DESSOUS: chaqu'un des item du carroussel -->
    <div class="carousel-inner">

        <!-- DEBUT d'1 ITEM ------------------------ -->
        <div class="carousel-item active">
            <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <!-- Image: Animal                  -->
                    <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" alt="Photo de Framboise" style="height:250px;" />
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- description de l image -->
                    <h3 class="perso_ColorMenuRose perso_policeTitre_Fredoka perso_texte_ombrage_shadow">Framboise</h3>
                    <div class="text-muted mb-1">02/2019</div>
                    <p class="mb-auto">Description de Framboise</p>
                    <!-- BOUTON d accès à l Animal: -->
                    <a href="#" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
        <!-- FIN d'1 ITEM -------------------------- -->

        <!-- DEBUT d'1 ITEM ------------------------ -->
        <div class="carousel-item">
            <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <!-- Image: Animal                  -->
                    <img src="../../sources/images/Animaux/Chats/Samdie/Samdie.jpg" alt="Photo de Samdie" style="height:250px;" />
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- description de l image -->
                    <h3 class="perso_ColorMenuRose perso_policeTitre_Fredoka perso_texte_ombrage_shadow">Samdie</h3>
                    <div class="text-muted mb-1">03/2020</div>
                    <p class="mb-auto">Description de Samdie</p>
                    <!-- BOUTON d accès à l Animal: -->
                    <a href="#" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
        <!-- FIN d'1 ITEM -------------------------- -->
         
        <!-- DEBUT d'1 ITEM ------------------------ -->
        <div class="carousel-item">
            <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bgRose">
                <div class="col-12 col-md-auto text-center">
                    <!-- Image: Animal                  -->
                    <img src="../../sources/images/Animaux/Chats/Odin/Odin.jpg" alt="Photo de Odin" style="height:250px;" />
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- description de l image -->
                    <h3 class="perso_ColorMenuRose perso_policeTitre_Fredoka perso_texte_ombrage_shadow">Odin</h3>
                    <div class="text-muted mb-1">04/2021</div>
                    <p class="mb-auto">Description de Odin</p>
                    <!-- BOUTON d accès à l Animal: -->
                    <a href="#" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
        <!-- FIN d'1 ITEM -------------------------- --> 
    </div>

    <!-- Les flêches MOI: je les garde -->
    <!-- Je les enlèves on peut cliquer sur les indicateurs -->

    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>
</section>

<section class="section-du-bas-Nouvelle-Evenement">
<!-- DEUX colonnes sur une row: les titres -->
<div class="row">
    <div class="col-6 mt-3">
        <h2 class="text-center mt-3
                   perso_ColorMenuVert 
                   perso_policeTitre_Fredoka 
                   perso_texte_ombrage_shadow">
            <img src="../../sources/images/Autres/icones/journal.png" alt="logo News" />
            Nouvelles des adoptés
        </h2>
    </div>
    <div class="col-6 mt-3">
        <h2 class="text-center mt-3
                   perso_ColorMenuOrange 
                   perso_policeTitre_Fredoka 
                   perso_texte_ombrage_shadow">
            <img src="../../sources/images/Autres/icones/action.png" alt="logo News" />
            Evénements et actions
        </h2>
    </div>    
</div>
<!-- DEUX colonnes sur une row: col-6 + col-6 -->
<div class="row">
    <div class="col-6">
        <!-- A NOUVEAU DEUX colonnes sure une row: Image + textes  -->
        <div class="row no-gutters border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <!-- Image caché par défaut & affichée si: d-lg-block = PAGE large         -->
                <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" alt="Photo de Framboise" style="height:150px;" />                
            </div>
            <div class="col p-3 d-flew flex-column position-static perso_bgGreen">
                <!-- textes -->
                <h3 class="mb-0">Doyenne Chipie</h3>
                <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée. 
                   La miss a une programme journalier surchargé... </p>
                <!-- BOUTON d accès à l Animal: -->
                <a href="#" class="btn btn-primary">Visiter ma page</a>
            </div>
        </div>
    </div>

    <div class="col-6">
        <!-- A NOUVEAU DEUX colonnes sure une row: Image + textes  -->
        <div class="row no-gutters border rounded mb-4">
            <div class="col-auto d-none d-lg-block">
                <!-- Image caché par défaut & affichée si: d-lg-block = PAGE large         -->
                <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" alt="Photo de Framboise" style="height:150px;" /> 
            </div>
            <div class="col p-3 d-flew flex-column position-static perso_bgOrange">
                <!-- textes -->
                <h3 class="mb-0">Doyenne Chipie</h3>
                <p class="perso_size12 mt-2">Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée. 
                   La miss a une programme journalier surchargé... </p>
                <!-- BOUTON d accès à l Animal: -->
                <a href="#" class="btn btn-primary">Visiter ma page</a>
            </div>
        </div>
    </div>
</div>
</section>


<?php include("../communs/footer.php") ?>