<!--
--------------------------------------------------------
OMT © 2022
Thomas GOILLOT
-------------------------------------------------------- 
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?></title>
    <link rel="shortcut icon" href="/assets/img/logo_white.png" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php 
    if(explode('/',$_SERVER['REQUEST_URI'])[1] == 'dashboard'){
        echo '<link rel="stylesheet" href="/dashboard/assets/css/style.css">';
    }
    else{
        echo '<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">';
    }
    ?>
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="assets/img/logo_black.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">
    
</head>