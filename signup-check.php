<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

session_start();
include('includes/include-bdd.php');
include('includes/include-functions.php');

if(isset($_POST)){
    $firstname = htmlspecialchars($_POST['firstnameinput']);
    $lastname = htmlspecialchars($_POST['lastnameinput']);
    $dayb = htmlspecialchars($_POST['dayinput']);
    $monthb = htmlspecialchars($_POST['monthinput']);
    $yearb = htmlspecialchars($_POST['yearinput']);
    $mail1 = htmlspecialchars($_POST['mail1input']);
    $mail2 = htmlspecialchars($_POST['mail2input']);
    $phone = htmlspecialchars($_POST['phoneinput']);
    $type = htmlspecialchars($_POST['typeinput']);
    $pwd1 = htmlspecialchars($_POST['pwd1input']);
    $pwd2 = htmlspecialchars($_POST['pwd2input']);

    if(strlen($firstname) <= 20 && strlen($firstname) >= 1 ){
        if(strlen($lastname) <= 20 && strlen($lastname) >= 1 ){
            if($monthb >= 1 && $monthb <= 12){
                if($yearb > 1900 && $yearb < date("Y")){
                    $number_of_day = days_in_month($monthb, $yearb);
                    if($dayb > 0 && $dayb <= 31){
                        if($mail1 === $mail2){
                            if(filter_var($mail1, FILTER_VALIDATE_EMAIL)){
                                $reqmail = $bdd->prepare("SELECT mail FROM OMT_USER WHERE mail = ?");
                                $reqmail->execute(array($mail1));
                                $mailexist = $reqmail->rowCount();
                                if($mailexist == 0){



                                    $add_user = $bdd->prepare("INSERT INTO OMT_USER(firstname,surname,mail,password,phone_number,date_of_birth) VALUES (:firstname,:surname,:mail,:password,:phone_number,:date_of_birth)");
                                    $add_user->execute(
                                    ['firstname' => $firstname,
                                    'surname' => $lastname,
                                    'mail' => $mail1,
                                    'password' => pwd_hash($pwd1),
                                    'date_of_birth' => "$dayb/$monthb/$yearb",
                                    'phone_number' => $phone]);
                                    header('Location: index.php');

                                }
                                else{
                                    echo "mail deja utilisé";
                                    header('Location: register.php');
                                }
                                
                            }
                            else{
                                echo "mauivais format de mail";
                                header('Location: register.php');
                            }

                        }
                        else{
                            echo "Mail différent";
                            header('Location: register.php');
                        }
                    }
                    else{
                        echo "Date inccorect";
                        header('Location: register.php');
                    }
                }
                else{
                    echo "Date incorrect";
                    header('Location: register.php');
                }
                
            }
            else{
                echo "mauvais mois";
                header('Location: register.php');
            }
            
        }
        else{
            echo "Taille incorect nom famille";
            header('Location: register.php');
        }
    }
    else{
        echo "Prenom entre 1 et 20 caractères";
        header('Location: register.php');
    }
}


?>