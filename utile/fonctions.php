<?php

// ================================================================================================================
//                                                    FONCTIONS
// ================================================================================================================

// formaterUneDate ------------------------------------------------------
function formaterUneDate($date, $formatIn, $formatOut){
    $retour = null;
    //
    // ENTREE : date du format date MYSQL
    if($formatIn == "MYSQL"){

        // Choix format de sortie
        switch ($formatOut){
            case "JJmoisAAAA":
                //
                // AAAAMMJJ vers JJ Mois AAAA
                date_default_timezone_set( 'Europe/Paris' );

                $dateTimeObj = new DateTime($date, new DateTimeZone('Europe/Paris'));
                $dateFormatted = 
                IntlDateFormatter::formatObject( 
                $dateTimeObj, 
                'd MMMM y', 
                'fr' 
                );
                $retour = $dateFormatted;
                break;

            case "JJ/MM/AAAA":
                //
                // AAAAMMJJ vers JJ/MM/AAAA
                date_default_timezone_set( 'Europe/Paris' );

                $dateTimeObj = new DateTime($date, new DateTimeZone('Europe/Paris'));
                $dateFormatted = 
                IntlDateFormatter::formatObject( 
                $dateTimeObj, 
                'd/MM/y', 
                'fr' 
                );
                $retour = $dateFormatted;                
                break;
            default:
                $retour=null;
                break;
        }
    }//FINSI Format MYSQL
    //
    // Retour date
    return $retour;
}