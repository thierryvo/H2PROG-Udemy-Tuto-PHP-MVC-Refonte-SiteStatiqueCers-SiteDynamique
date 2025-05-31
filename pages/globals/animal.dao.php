<?php
require_once "_pdo.php";

// getAnimalFromStatut -------------------------------------------------------------
function getAnimalFromStatut($id_statut){
    // Lecture des animaux en fonction du statut
    $sql ="SELECT * FROM animal WHERE id_statut = :id_statut";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_statut",$id_statut,PDO::PARAM_INT);
    $stmt->execute();
    $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    // RETOUR:
    return $animaux;
}

// getAnimalFromStatut -------------------------------------------------------------
function getAnimal(){
    // Lecture des animaux (tous)
    $sql ="SELECT * FROM animal";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    // RETOUR:
    return $animaux;
}

// getFirstImageAnimal -------------------------------------------------------------
function getFirstImageAnimal($id_animal){    
    // Récupérer l'image(s) d'un Animal (en passant par la liaison Animal_image) ---
    $sql ="
        SELECT a.nom_animal, i.libelle_image, i.url_image
        FROM   animal as a, animal_image as ai, image as i
        WHERE 
            a.id_animal = ai.id_animal AND
            ai.id_image = i.id_image
        AND  a.id_animal = :id_animal
        LIMIT 1
    ";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_animal",$id_animal,PDO::PARAM_INT);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    // RETOUR:
    return $image;
}

// getCaracteresFromAnimal ---------------------------------------------------------
function getCaracteresFromAnimal($id_animal, $nombre_max){
    // Les traits de caractères (limité à 3)
    // Récupérer les caracteres d'un Animal (en passant par la liaison Animal_caractere) ---
    $sql ="
        SELECT ac.id_animal, c.libelle_caractere, c.libelle_caractere_f
        FROM   animal_caractere as ac, caractere as c
        WHERE                    
                ac.id_caractere = c.id_caractere
        AND    ac.id_animal = :id_animal
        LIMIT :nombre_max
    ";
    $bdd = connexionPDO();
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(":id_animal",$id_animal,PDO::PARAM_INT);
    $stmt->bindValue(":nombre_max",$nombre_max,PDO::PARAM_INT);
    $stmt->execute();
    $caracteres = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    // RETOUR
    return $caracteres; 
}
