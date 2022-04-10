<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('../../includes/include-bdd.php');
    
    $actual_page = "userlogs.php";

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
                    <div class="row" id="userlog_header">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5>Nombre de visite total des utilisateurs aujourd'hui:</h5>
                                    <?php 
                                        $req_users = $bdd->prepare("SELECT COUNT(date_connection) FROM USER_VISIT WHERE DATE(date_connection) = ?");
                                        $req_users->execute(array(date('Y-m-d')));
                                        $visit_today = $req_users->fetchAll();
                                        echo "<h1 class='text-align'>".$visit_today[0]['COUNT(date_connection)']." <i class='fa-solid fa-eye'></i></h1>";
                                    ?>
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Voir en détails</a>
                                    <div class="small text-white"><i class="bi bi-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5>Nombre de visite utilisateurs inscrit aujourd'hui:</h5>
                                    <?php 
                                        $req_users = $bdd->prepare("SELECT COUNT(date_connection) FROM USER_VISIT WHERE DATE(date_connection) = ? AND id_user > 0");
                                        $req_users->execute(array(date('Y-m-d')));
                                        $visit_today = $req_users->fetchAll();
                                        echo "<h1 class='text-align'>".$visit_today[0]['COUNT(date_connection)']." <i class='fa-solid fa-eye'></i></h1>";
                                    ?>
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Voir en détails</a>
                                    <div class="small text-white"><i class="bi bi-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5>Nombre de visite utilisateurs non inscrit aujourd'hui:</h5>
                                    <?php 
                                        $req_users = $bdd->prepare("SELECT COUNT(date_of_activity) FROM USER_LOG WHERE DATE(date_of_activity) = ? AND id_user = -1");
                                        $req_users->execute(array(date('Y-m-d')));
                                        $visit_today = $req_users->fetchAll();
                                        echo "<h1 class='text-align'>".$visit_today[0]['COUNT(date_of_activity)']." <i class='fa-solid fa-eye'></i></h1>";
                                    ?>
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Voir en détails</a>
                                    <div class="small text-white"><i class="bi bi-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5>Nombre de visite utilisateurs ce mois-ci:</h5>

                                    <?php 
                                        $req_users = $bdd->prepare("SELECT date_connection FROM USER_VISIT WHERE MONTH(date_connection) = ?");
                                        $req_users->execute(array(date('m')));
                                        $visit_this_month = $req_users->rowCount();
                                        echo "<h1 class='text-align'>$visit_this_month  <i class='fa-solid fa-eye'></i></h1>";
                                    ?>
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Voir en détails</a>
                                    <div class="small text-white"><i class="bi bi-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Utilisateurs</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="bi bi-table"></i>
                            Listes Utilisateurs
                            
                            <input type="text" class="form-control float-end" id="search-user" onkeyup="search_user()" placeholder="Chercher un utilisateur" style="width: 40%">
                        </div>
                        <div class="card-body">
                            <div id="userlog_list_msg_box">

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr class="text-center align-middle">
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Prènom</th>
                                            <th>Mail</th>
                                            <th>N°Téléphone</th>
                                            <th>Permissions</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userlog_list">
                                    <?php 

                                    $get_users = $bdd->prepare('SELECT id_user,firstname,surname,permissions_level,mail,phone_number FROM OMT_USER LIMIT 15');
                                    $get_users->execute();
                                    while($donnees = $get_users->fetch()){
                                    echo '<tr class="text-center align-middle">';
                                    echo '<td>'.$donnees['id_user'].'</td>';
                                    echo '<td>'.$donnees['firstname'].'</td>';
                                    echo '<td>'.$donnees['surname'].'</td>';
                                    echo '<td>'.$donnees['mail'].'</td>';
                                    echo '<td>'.$donnees['phone_number'].'</td>';
                                    echo '<td>'.$donnees['permissions_level'].'</td>';
                                    echo '<td><a class="btn btn-link text-info" href="/ajax/get_user_information_file.php?id_user='.$donnees['id_user'].'"><i class="fa-solid fa-download"></i></a></td>';
                                    echo '<tr>';
                                    
                                    
                                    }                                    
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php 
                include('../../includes/include-footer.php');
            ?>
            <?php 
                include('../../includes/include-script.php');
            ?>
            <script src="/dashboard/assets/js/dashboard_script.js"></script>
            <script src="js/userlogs.js"></script>
        </div>
    </div>
</body>

</html>