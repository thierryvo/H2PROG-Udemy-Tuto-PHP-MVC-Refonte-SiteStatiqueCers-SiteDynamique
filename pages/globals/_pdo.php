<?php
require_once "../../utile/config.php";

function connexionPDO(){
    //
    // data
    $db_host = DB_HOST_NAME; // 127.0.0.1 ou localhost
    $db_name = DB_DATABASE_NAME; // nanasite
    $db_user = DB_USER_NAME;
    $db_password = DB_PASSWORD;
    $db_port= DB_PORT_MARIADB; // 3307 pour MariaDB
    //
    // Options de connexion
    $dboptions = [
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactiver le mode d'émulation pour les "vraies" instructions préparées
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Désactiver les erreurs sous forme d'exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Faire en sorte que la récupération par défaut soit un tableau associatif
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',       // utf8 
    ];
    //
    // connexion sous try catch:
    try {
        // Instancier l'Objet PDO de connexion
        $pdo = new PDO(
            "mysql:host=$db_host;port=$db_port;dbname=$db_name",
            $db_user,
            $db_password,
            $dboptions
        );    
        //
        // RETOUR de la connexion
        return $pdo;
    } catch (Exception $e) {    
        // ARRET exécution par die avec un message
        $msg = "Erreur de connexion mysql, sqlmsg e = " .$e->getMessage();
        die($msg);
    }
}