<?php 
require_once("../../utile/formatage.php"); 
require_once("../../utile/config.php"); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap 4.3 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- MON CSS: pour toutes les PAGES -->
    <link href="../../css/monstyle.css" rel="stylesheet" type="text/css" />
    <!--  ATTENTION: monstyle css c'est par rapport à la position de la PAGE où se trouve le head-->

    <!-- fredoka police -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <!-- copse police -->    
    <link href="https://fonts.googleapis.com/css2?family=Copse&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    
    <!-- TITRE de l' Onglet -->
    <title>Tuto H2PROG UDEMY</title>
    
</head>
<body>
    <!-- CONTENU ici -->
    <div class="container p-0 mt-2 rounded perso_shadow">

        <!-- header = UN MENU NOIRE  avec texte colorisé -->
        <header class="bg-dark text-white rounded-top perso_policeTitre_Fredoka perso_ombrage_shadow">
            <!-- 3 parties: LOGO,  MENU,  infos assos -- -- -- -- -- -- -- -- -- -- -- -->

            <!-- LIGNE row & dedans 3 colonnes -->
            <div class="row align-items-center m-0">
                <!-- colonne de 2 : L'image (LOGO) -->
                <div class="col-2 p-2 text-center">
                    <a href="../../index.php">
                        <img src="../../sources/images/Autres/logoNANA2.jpg" alt="LOGO-INDEX" 
                             class="perso_logoSize rounded-circle img-fluid" />
                    </a>
                </div>
                <!-- colonne de 6 ou     8 si large : MENU Colorisé ----------------- -->
                <div class="col-6 col-lg-8 m-0 p-0">
                    <?php include("../communs/menuColoriser.php") ?>
                </div>
        
                <!-- INFOS sur l'Association à droite -->
                <!-- colonne de 4 ou     2 si large : MENU Colorisé ------------------ -->
                <div class="col-4 col-lg-2 text-right pt-1 pr-4">
                    N.A.N.A <br/> Clermont (09)
                </div>
            </div>
        </header>


        <!-- CONTENU DE LA PAGE -->
        <div class="boredr p-1 perso_min_CorpSize contenu-de-la-page px-5">