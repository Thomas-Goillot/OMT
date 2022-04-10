<?php 
/*
 * Created on Wed Apr 06 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');

$actual_page = "user_information_file";

include('../includes/include-session-check.php');

include('../includes/include-functions.php');

$id_user = $_GET['id_user'];//id_user_request

$req_user_permissions = $bdd->prepare('SELECT permissions_level FROM OMT_USER WHERE id_user = ?');
$req_user_permissions->execute(array($_SESSION['id_user']));
$user_info = $req_user_permissions->fetch(); 

if($user_info['permissions_level'] == 1 || $id_user == $_SESSION['id_user']){

    
    $file_content = "";

    $file_content .="-----------------------------------------\n";
    $file_content .="         Information Personnelle         \n";
    $file_content .="-----------------------------------------\n";

    $get_users_info = $bdd->prepare('SELECT * FROM OMT_USER WHERE id_user = ?');
    $get_users_info->execute(array($id_user));
    $donnees = $get_users_info->fetch();

    $file_content .= "\n- Identifiant: ".$donnees['id_user']."";
    $file_content .= "\n- Prènom: ".$donnees['firstname']."";
    $file_content .= "\n- Nom: ".$donnees['surname']."";
    $file_content .= "\n- Adresse Mail: ".$donnees['mail']."";
    $file_content .= "\n- Numéro de Téléphone: ".$donnees['phone_number']."";
    $file_content .= "\n- Date de Naissance: ".$donnees['date_of_birth']."";
    $file_content .= "\n- Genre: ".$donnees['gender']."";
    $file_content .= "\n- Taille: ".$donnees['height']."";
    $file_content .= "\n- Poids: ".$donnees['weight']."";
    $file_content .= "\n- Description: ".$donnees['description']."";

    $file_content .="\n\n-----------------------------------------\n";
    $file_content .="           Training Personnel            \n";
    $file_content .="-----------------------------------------\n";

    $get_users_training = $bdd->prepare('SELECT * FROM TRAINING WHERE id_user = ?');
    $get_users_training->execute(array($id_user));

    while ($donnees2 = $get_users_training->fetch()) {
        $file_content .= "\n- Nom: ".$donnees2['name_training']."";
        $file_content .= "\n- Date Création: ".$donnees2['creation_date']."";
        $file_content .= "\n";
    }

    $file_content .="\n\n-----------------------------------------\n";
    $file_content .="          Historique Training            \n";
    $file_content .="-----------------------------------------\n";

    $get_users_training_historical = $bdd->prepare('SELECT training_duration,training_date,name_training FROM TRAINING_HISTORICAL,TRAINING WHERE TRAINING_HISTORICAL.id_user = ? AND TRAINING_HISTORICAL.id_training = TRAINING.id_training');
    $get_users_training_historical->execute(array($id_user));

    while ($donnees2 = $get_users_training_historical->fetch()) {
        $file_content .= "\n- Nom: ".$donnees2['name_training']."";
        $file_content .= "\n- Date Réalisation: ".$donnees2['training_date']."";
        $file_content .= "\n- Durée: ".$donnees2['training_duration']."";
        $file_content .= "\n";
    }

    $file_content .="\n\n-----------------------------------------\n";
    $file_content .="                Objective                \n";
    $file_content .="-----------------------------------------\n";

    $get_users_objective = $bdd->prepare('SELECT * FROM OBJECTIVE WHERE id_user = ?');
    $get_users_objective->execute(array($id_user));

    while ($donnees2 = $get_users_objective->fetch()) {
        $file_content .= "\n- Nom: ".$donnees2['name']."";
        $file_content .= "\n- Description: ".$donnees2['description']."";
        $file_content .= "\n";
    }

    $file_content .="\n\n-----------------------------------------\n";
    $file_content .="               Commentaire               \n";
    $file_content .="-----------------------------------------\n";

    $get_users_comment = $bdd->prepare('SELECT stars,comment,date_of_add,name_training FROM APPRECIATION,TRAINING WHERE APPRECIATION.id_user = ? AND APPRECIATION.id_training = TRAINING.id_training');
    $get_users_comment->execute(array($id_user));

    while ($donnees2 = $get_users_comment->fetch()) {
        $file_content .= "\n- Nom: ".$donnees2['name_training']."";
        $file_content .= "\n- Etoiles: ".$donnees2['stars']."";
        $file_content .= "\n- Date ajout: ".$donnees2['date_of_add']."";
        $file_content .= "\n- Commentaire: ".$donnees2['comment']."";
        $file_content .= "\n";
    }

    $file_content .="\n\n-----------------------------------------\n";
    $file_content .="     (c) Your Data One More Training     \n";
    $file_content .="-----------------------------------------\n";


    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-disposition: attachment; filename='.$donnees['firstname'].'-'.$donnees['surname'].'.txt');
    header('Content-Length: '.strlen($file_content));
    echo $file_content;
}
else{
    header('location: /index.php');
}
?>