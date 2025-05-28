<?php include("../communs/header.php"); ?>

<section class="section-conseil-educateur-canin">
<!-- TOUJOURS une div.row qui englobe: 1 ou plusieurs div.col -->
<!-- LIGNE en div.row   sans marge -->
<div class="row align-items-center no-gutters">
    <!-- colonne de l image à gauche :  col-md-5 -->
    <div class="col-12 col-md-5 p-2" >
        <img class="img-fluid img-thumbnail" src="../../sources/images/Autres/Articles/imageEduc.jpg" alt='educateur'/>
    </div>
    <!-- colonne du texte à droite :  col-md-7 -->
    <div class="col-12 col-md-7 p-2" >
        <!-- Fonction qui gère le Titre h1                        en rouge -->
        <?= styleTitreNiveau1("Education canine", COLOR_CONSEILS) ?>
        <div class="mt-5">
            Nous connaissons des éducateurs canin employant l'éducation positive. <br />
            Nous <a href="../global/contact.php"><button type="button" class="btn btn-primary">Contacter ! &raquo;</button></a> via notre formulaire  !
        </div>
    </div>
</div>
</section>

<?php include("../communs/footer.php"); ?>
            
      