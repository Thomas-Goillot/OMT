<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');
$id = $_GET['id_training'];
$new_value = htmlspecialchars($_GET['val']);

$req_training = $bdd->prepare("UPDATE TRAINING SET name_training = ? WHERE id_training = ?");
$req_training->execute(array($new_value,$id));
?>