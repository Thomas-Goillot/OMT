<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

session_start();

$actual_page = "login.php";

include('includes/include-functions.php');
include('includes/include-bdd.php');

if(isset($_POST['sign_in_form'])) {

    $mail = htmlspecialchars($_POST['mailinput']);
	$pwd = pwd_hash($_POST['pwdinput']);

    if(!empty($mail) AND !empty($pwd)){

        $req_user = $bdd->prepare("SELECT * FROM OMT_USER WHERE mail = ? AND password = ?");
	    $req_user->execute(array($mail, $pwd));
        $user_exist = $req_user->rowCount();

        if($user_exist == 1){ 

                $req_user_info = $bdd->prepare('SELECT id_user FROM OMT_USER WHERE mail = ?');
                $req_user_info->execute(array($mail));
                $user_info = $req_user_info->fetch(); 
                
                $_SESSION['id_user'] = $user_info['id_user'];
                $_SESSION['logged_in'] = true;
                $_SESSION['last_activity'] = time();
                $_SESSION['expire_time'] = 3*60*60;

                $add_user_log = $bdd->prepare('INSERT INTO USER_LOG (activity,id_user) VALUES (?,?)');
                $add_user_log->execute(array($actual_page,$_SESSION['id_user'])); 
                
                $add_user_visit = $bdd->prepare('INSERT INTO USER_VISIT (id_user) VALUES (?)');
                $add_user_visit->execute(array($user_info['id_user'])); 

                header('Location: index.php');
        } 
        else 
        {
            header('Location: login.php?err=Mot de passe ou mail incorrect !');
        }
    } 
    else 
    {
        header('Location: login.php?err=Tous les champs doivent être complétés !');
    }
}
 
?>