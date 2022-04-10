<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');

$id_training = $_GET['id_training'];

try {
    $del_training = $bdd->prepare('DELETE FROM TRAINING_ORDER WHERE id_training = ?');
    $del_training->execute(array($id_training));
    echo "val: Tout les exercices du training ont été supprimé!";

    $del_training = $bdd->prepare('DELETE FROM TRAINING WHERE id_training = ?');
    $del_training->execute(array($id_training));
    echo "<br>Le training a été supprimé avec succés";

} catch (\Exception $e) {
    echo "err:$e";
}


?>