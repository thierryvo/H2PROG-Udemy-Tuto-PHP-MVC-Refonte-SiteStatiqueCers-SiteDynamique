<?php 

function styleTitreNiveau3($titre, $couleur){
    // Fonction qui va gérer le titre de niveau 2 : h2
    $txt = '';
    $txt .= '<h3 class="text-center mt-3 ' . $couleur . ' perso_policeTitre_Fredoka perso_texte_ombrage_shadow perso_size26">';
    $txt .= $titre;
    $txt .= '</h3>';
    return $txt;
}
function styleTitreNiveau2($titre, $couleur){
    // Fonction qui va gérer le titre de niveau 2 : h2
    $txt = '';
    $txt .= '<h2 class="text-center mt-3 ' . $couleur . ' perso_policeTitre_Fredoka perso_texte_ombrage_shadow">';
    $txt .= $titre;
    $txt .= '</h2>';
    return $txt;
}
function styleTitreNiveau1($titre, $couleur){
    // Fonction qui va gérer le titre de niveau 1 : h1
    $txt = '';
    $txt .= '<h1 class="text-center mt-3 ' . $couleur . ' perso_policeTitre_Fredoka perso_texte_ombrage_shadow">';
    $txt .= $titre;
    $txt .= '</h1>';
    return $txt;
}

// styleTitrePost : Titre h2 avec: un petit trait en-dessous ------------------------------------------------
function styleTitrePost($text){
    $txt = "<h2 class='my-3 perso_policeTitre_Fredoka perso_texte_ombrage_shadow border-bottom border-dark'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}