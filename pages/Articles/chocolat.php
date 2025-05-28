<?php include("../communs/header.php"); ?>

<section class="section-conseil-chocolat">
<div class="p-2 text-center" >
    <!-- Titre -->
    <?PHP 
    // Fonction qui gère le Titre h1             en rouge -->
    $txt = 'Attention le chocolat est extrémement <span class="badge badge-danger">dangereux</span> pour les chients et chats !';
    echo styleTitreNiveau1($txt, COLOR_CONSEILS) 
    //
    ?>
    <!-- Image en dessous du titre -->
    <img class="img-fluid img-thumbnail" src="../../sources/images/Autres/Articles/Chocolat.jpg" alt='chocolat'/>
</div>
</section>

<?php include("../communs/footer.php"); ?>
            
      