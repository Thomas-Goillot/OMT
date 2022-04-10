<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');
include('../includes/include-functions.php');

$get_training = $bdd->prepare('SELECT id_training,name_training,privacy_training,creation_date,firstname,surname,TRAINING.id_user FROM TRAINING,OMT_USER WHERE TRAINING.id_user = OMT_USER.id_user ORDER BY creation_date DESC');
$get_training->execute();

while($donnees = $get_training->fetch()){
echo '<tr class="text-center align-middle">';
echo '<td>'.$donnees['id_training'].'</td>';
echo '<td class="name_training" value="'.$donnees['id_training'].'">'.$donnees['name_training'].'</td>';
echo '<td>'.get_training_privacy($donnees['privacy_training']).'</td>';
echo '<td>'.$donnees['firstname'].'<small class="text-muted"> #</small><small class="text-muted" name="id_user">'.$donnees['id_user'].'</small></td>';
echo '<td>'.$donnees['creation_date'].'</td>';
echo '<td>
<a href="edit_training.php?id='.$donnees['id_training'].'" class="btn btn-link text-dark" onclick="get_training_detail(\''.$donnees['id_training'].'\',\''.$donnees['name_training'].'\')"><i class="fa-solid fa-pen-to-square"></i></a>

<button class="btn btn-link text-danger" onclick="delete_training('.$donnees['id_training'].')"><i class="fa-solid fa-trash-can"></i></button></td>';
echo '</tr>';

} 
?>