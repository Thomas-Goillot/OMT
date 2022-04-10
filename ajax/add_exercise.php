<?php 
/*
 * Created on Wed Apr 06 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');

$id_exercise = htmlspecialchars($_GET['id_exercise']);
$id_training = htmlspecialchars($_GET['id_training']);
$id_training_order = $_GET['id_training_order'];

if($id_training_order == -1){

    $max_exercise = $bdd->prepare('SELECT MAX(exercise_order) AS exercise_order FROM TRAINING_ORDER WHERE id_training = ?');
    $max_exercise->execute(array($id_training));
    $max_exercise_fetch = $max_exercise->fetch();

    if($max_exercise_fetch['exercise_order'] === NULL){
        $max_exercise_fetch['exercise_order'] = 1;
    }
    else{
        $max_exercise_fetch['exercise_order']++;
    }

    $add_exercise = $bdd->prepare('INSERT INTO TRAINING_ORDER(id_training,id_exercise,exercise_order) VALUES (?,?,?)');
    $add_exercise->execute(array($id_training,$id_exercise,$max_exercise_fetch['exercise_order']));
}
else{
    $update_exercise = $bdd->prepare('UPDATE TRAINING_ORDER SET id_exercise = ? WHERE id_training = ? AND id_training_order = ?');
    $update_exercise->execute(array($id_exercise,$id_training,$id_training_order));
}

?>