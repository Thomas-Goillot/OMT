<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');

$id_training = $_GET['id_training'];
$id_exercise = $_GET['id_exercise'];
$id_training_order = $_GET['id_training_order'];

$req_training = $bdd->prepare("DELETE FROM TRAINING_ORDER WHERE id_training_order = ? AND id_exercise = ?");
$req_training->execute(array($id_training_order,$id_exercise));

$req_training_exercise = $bdd->prepare("SET @i := 0; UPDATE TRAINING_ORDER SET exercise_order  = (@i := @i + 1) WHERE id_training = ?");
$req_training_exercise->execute(array($id_training));

?>