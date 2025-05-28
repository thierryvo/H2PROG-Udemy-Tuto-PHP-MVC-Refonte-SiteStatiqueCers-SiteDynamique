<?php include("../communs/header.php") ?>

<!-- Fonction qui gère le Titer h2 -->
<?php echo styleTitreNiveau2("Association Nos Amis - Nos Animaux (N.A.N.A) <br/> Clermont (Ariège 09)", "perso_ColorMenuRose") ?>
<?php 
//    echo styleTitreNiveau2("Association Nos Amis - Nos Animaux (N.A.N.A) <br/> Clermont (Ariège 09)", "perso_ColorMenuRose") 
//    echo styleTitreNiveau2("Association Nos Amis - Nos Animaux (N.A.N.A) <br/> Clermont (Ariège 09)", COLOR_TITRE_NIVEAU_2)
?>

<section class="section-du-haut-description-association">
<!-- Une ligne row: avec 2 colonnes image + texte -->
<div class="row align-items-center mt-5">
    <div class="col-12 col-lg-3 text-center colonne-de-l-image">
        <!-- image: LOGO de l'association -->
        <img src="../../sources/images/Autres/logoNANA2.jpg" alt="LOGO Association NANA" class="img-fluid" />
    </div>
    <div class="col-12 col-lg-9 colonne-du-texte-a-droite-image">
        <!-- texte à droite  -->
        <p>C'est l'histoire de 5 nanas, 5 amies unies dans un même combat : 
            <span class="badge badge-warning">Aimer</span>, 
            <span class="badge badge-warning">Protéger </span> et 
            <span class="badge badge-warning">Secourir</span> les Animaux.
        </p>
        <p>
            Après plusieurs années de bénévolat en électrons libres, le pas est sauté : 
            l'Association "NOS AMIS NOS ANIMAUX" (N.A.N.A) est née !!!
        </p>
        <p>
            Nous mettons un point d'honneur à ne jamais déroger à nos valeurs en matière de Protection Animale : 
            privilégier la qualité des prises en charge plutôt que la quantité avec pour objectifs le 
            <span class="badge badge-warning">RESPECT</span>
            et le <span class="badge badge-warning">BIEN-ETRE</span> des animaux.
        </p>
        <p>
            Nous remercions chaleureusement tous ceux qui nous ont déjà soutenues dans nos actions : nos familles, 
            nos amis ainsi que des particuliers, 
            associations de protection animale et cabinets vétérinaires qui nous font confiance et nous 
            accompagnent au quotidien.
            Nous souhaitons plus que jamais que ces collaborations déjà existantes, mais aussi celles à venir, 
            nous fassent encore et toujours écrire de <span class="badge badge-warning">BELLES HISTOIRES</span>.
        </p>
        <p>
            <!-- BOUTON BLEU: Rejoingnez nous   -->
            <a href="contact.php"><button type="button" class="btn btn-primary">Rejoignez nous ! &raquo;</button></a>
            pour suivre nos actions et partager avec nous cette nouvelle aventure !!!!!
        </p>
    </div>
</div>
</section>

<section class="section-du-bas-les-equipes">
<!-- Le hr fait un trait de séparation entre les sections: techniquement il est dans la 2ième section -->
<hr />
<h2 class="text-center mt-3
           perso_ColorMenuRose 
           perso_policeTitre_Fredoka 
           perso_texte_ombrage_shadow">
    L'équipe
</h2>
<!-- Une ligne row: avec 2 colonnes image + texte -->
<div class="row align-items-center">
    <div class="col-12 col-lg-3 text-center">
        <!-- image: LOGO de l'association -->
        <img src="../../sources/images/Animaux/Chats/Odin/Odin.jpg" alt="Chat Odin" class="img-fluid" style='height:250px;' />  
    </div>
    <div class="col-12 col-lg-9">
        <!-- Texte à droite avec: span 5 personnes & un chat -->
        <span class="badge badge-primary">Julie</span> : présidente<br />
        <span class="badge badge-success">Karine</span> : trésorière  <br />
        <span class="badge badge-warning">Marie</span> : secrétaire <br />
        <span class="badge badge-danger">Emmy</span> : secrétaire adjointe <br />
        <span class="badge badge-info">Floriane</span> : éducatrice canin  <br /><br />

        <span class="badge badge-danger">Odin</span> : La mascotte (en photo!)         
    </div>
</div>
</section>

<?php include("../communs/footer.php") ?>