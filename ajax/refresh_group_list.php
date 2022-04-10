<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

include('../includes/include-bdd.php');
$get_group = $bdd->prepare('SELECT * FROM GROUP_INFO');
$get_group->execute();
while($data = $get_group->fetch()){
echo '<tr class="text-center align-middle">';
echo '<td>'.$data['id_group'].'</td>';
echo '<td value="'.$data['id_group'].'" name="group_name">'.$data['group_name'].'</td>';
echo '<td value="'.$data['id_group'].'" name="group_description">'.$data['group_description'].'</td>';
echo '<td>
<button class="btn btn-link text-warning" onclick="get_group_detail('.$data['id_group'].')" data-bs-toggle="modal" data-bs-target="#see_group_detail"><i class="fa-solid fa-pen-to-square"></i></button>
<button class="btn btn-link text-danger" onclick="delete_group('.$data['id_group'].')"><i class="fa-solid fa-trash-can"></i></button></td>';
echo '</tr>';
}                                    

?>