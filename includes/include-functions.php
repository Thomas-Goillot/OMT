<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */


function days_in_month($month, $year){
    // calculate number of days in a month
    return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
}

function pwd_hash($pwd){
    $salt = "oneMoretrainingSalt";

    for ($i=0; $i < 10 ; $i++) {
        $pwd = hash('sha512',$salt . $pwd);
    }
    return $pwd;
}

function sm_hash($text){
    return hash('sha512',$text);
}

function add_filigrane($fichier_import,$folder){
    //$fichier_import == name of file
    $image_import = dirname(__DIR__, 1) . "/assets/img/$folder/" . $fichier_import;
    
    $infos_import = getimagesize($image_import);
    
    switch($infos_import["mime"]) {
        case "image/png":
            $image_source = imagecreatefrompng($image_import);
            break;
    
        case "image/jpeg":
            $image_source = imagecreatefromjpeg($image_import);
            break;
        
        default:
            die("Format d'image inccorect");
    
        }
    
    
    $path_logo = dirname(__DIR__, 1) . "/assets/img/filigrane_black.png";
    
    $logo = imagecreatefrompng($path_logo);
    
    $infos_logo = getimagesize($path_logo);
    
    imagecopyresampled(
        $image_source,
        $logo,
        $infos_import[0] - $infos_logo[0] - 10,
        $infos_import[1] - $infos_logo[1] - 10,
        0,
        0,
        $infos_logo[0],
        $infos_logo[1],
        $infos_logo[0],
        $infos_logo[1]
    );
    
    switch($infos_import["mime"]) {
        case 'image/png':
            imagepng($image_source, dirname(__DIR__, 1) . "/assets/img/".$folder."/".$fichier_import);
            break;
        case 'image/jpeg':
            imagejpeg($image_source, dirname(__DIR__, 1) . "/assets/img/".$folder."/".$fichier_import);
            break;
    }
    
    imagedestroy($image_source);
    imagedestroy($logo);
    
    }

    function get_badge($int,$icon_badge){
        $int_array = str_split($int);
        $res = '<button class="btn btn-success mx-1 mb-2 mt-2">'.$icon_badge.' ';
        for ($i=0; $i < count($int_array) ; $i++) { 
            $res = $res.'<i class="fa-solid fa-'.$int_array[$i].'"></i>';
        }
        $res = $res.'</button>';
        return $res;
    }

    function get_admin_badge($val){
        switch ($val) {
            case 0:
                //User is not admin
                return "<button class='btn btn-primary' disabled>User</button>";
                break;
            case 1:
                //User is admin
                return "<button class='btn btn-info px-1' disabled>Admin</button>";
                break;
            
            default:
                return "Not a valid Permission level!";
                break;
        }
    }

    function get_group_status($val){
        switch ($val) {
            case 1:
                //User is in the group
                return "<button class='btn btn-success' disabled>Member</button>";
                break;
            case 2:
                //User confirmation is pending
                return "<button class='btn btn-warning' disabled>Pending</button>";
                break;
            case 3:
                //User is ban from the group
                return "<button class='btn btn-danger' disabled>Banned</button>";
                break;            
            default:
                return "Not a valid status level!";
                break;
        }
    }

    function get_training_privacy($val){
        //cf readme.md
        switch ($val) {
            case 1:
                return "<button class='btn btn-info' disabled>Publique</button>";
                break;
            case 2:
                return "<button class='btn btn-info' disabled>Amis seulement</button>";
                break;
            case 3:
                return "<button class='btn btn-info' disabled>Privé</button>";
                break;            
            default:
                return "Not a valid privacy level!";
                break;
        }
    }
    

    //FOR DEV PURPOSE
    function vardump($var){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }


    
?>
