<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('../../includes/include-bdd.php');

    $actual_page = "dashboard/admin/index.php";

    include('../../includes/include-session-check.php');    
    
    include('../../includes/include-functions.php');

    $req_user_permissions = $bdd->prepare('SELECT id_user,firstname,surname,permissions_level FROM OMT_USER WHERE id_user = ?');
    $req_user_permissions->execute(array($_SESSION['id_user']));
    $user_info = $req_user_permissions->fetch(); 

    if($user_info['permissions_level'] != 1){
        header('Location: ../../index.php');
    }


    include('../../includes/include-info.php');

    include('../../includes/include-head.php');

?>

<body class="sb-nav-fixed">
    <?php 
        include('../include-nav-dashboard.php');
    ?>


    <div id="layoutSidenav">
        <?php 
        include('../include-sidenav-dashboard.php');
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard OMT</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Informations principales</li>
                    </ol>
            </main>
            <?php 
                include('../../includes/include-footer.php');
            ?>
            <?php 
                include('../../includes/include-script.php');
            ?>
            <script src="../assets/js/dashboard_script.js"></script>
        </div>
    </div>
</body>

</html>