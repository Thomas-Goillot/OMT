<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');

    $id_group = htmlspecialchars($_GET['id_group']);
    $column = htmlspecialchars($_GET['column_name']);
    $new_value = htmlspecialchars($_GET['val']);
    
switch ($column) {
    case 'group_name':
        $modify_group = $bdd->prepare("UPDATE GROUP_INFO SET group_name = ? WHERE id_group = ?");
        break;
    case 'group_description':
        $modify_group = $bdd->prepare("UPDATE GROUP_INFO SET group_description = ? WHERE id_group = ?");
        break;

    default:
        echo "erreur dans le nom de la colonne";
        break;
}

    if($modify_group->execute(array($new_value,$id_group))){
    };


?>