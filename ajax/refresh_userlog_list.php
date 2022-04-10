<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('../includes/include-bdd.php');

    $get_users = $bdd->prepare('SELECT id_user,firstname,surname,permissions_level,mail,phone_number FROM OMT_USER');
    $get_users->execute();

    while($donnees = $get_users->fetch()){
    echo '<tr class="text-center align-middle">';
    echo '<td>'.$donnees['id_user'].'</td>';
    echo '<td>'.$donnees['firstname'].'</td>';
    echo '<td>'.$donnees['surname'].'</td>';
    echo '<td>'.$donnees['mail'].'</td>';
    echo '<td>'.$donnees['phone_number'].'</td>';
    echo '<td>'.$donnees['permissions_level'].'</td>';
    echo '<td><a class="btn btn-link text-info" href="/ajax/get_user_information_file.php?id_user='.$donnees['id_user'].'"><i class="fa-solid fa-download"></i></a></td>';
    echo '<tr>';  
    }
?>