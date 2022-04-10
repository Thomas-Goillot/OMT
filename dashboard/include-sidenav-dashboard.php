<?php 
    /*
    * Created on Mon Apr 04 2022
    *
    * Copyright (c) 2022 Thomas GOILLOT
    */
    echo '
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">';

                    switch ($user_info['permissions_level']) {
                        case 1:
                            echo '

                        <div class="sb-sidenav-menu-heading"><i class="fa-solid fa-lock"></i> Administrateur</div>
                        <a class="nav-link" href="/dashboard/admin/index.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="/dashboard/admin/userlogs.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Logs utilisateurs
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#boutiquedropdown" aria-expanded="false" aria-controls="boutiquedropdown">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            Gestion Boutique
                            <div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-arrow-down"></i></div>
                        </a>
                        <div class="collapse" id="boutiquedropdown" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/dashboard/admin/products.php">Gestion Produits</a>
                                <a class="nav-link" href="/dashboard/admin/sales.php">Gestion Ventes</a>
                            </nav>
                        </div>
                        
                        <a class="nav-link" href="/dashboard/admin/badge.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-certificate"></i></div>
                            Gestion badge
                        </a>

                        <a class="nav-link" href="/dashboard/admin/training.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-weight-hanging"></i></div>
                            Gestion Programme
                        </a>

                        <a class="nav-link" href="/dashboard/admin/group.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Gestion Groupe
                        </a>

                        <a class="nav-link" href="/dashboard/admin/event.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                            Gestion Evénement 
                        </a>

                        <a class="nav-link" href="/dashboard/admin/captcha.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-check"></i></div>
                            Gestion Captcha 
                        </a>
                        ';
                        case 2:
                            echo '
                            <div class="sb-sidenav-menu-heading"><i class="fa-solid fa-graduation-cap"></i> OMT Ecole</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Groupes
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                                Evénements
                            </a>';
                        case 3:
                            echo '
                            <div class="sb-sidenav-menu-heading">OMT Premium</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Groupes
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                                Evénements
                            </a>';
                    }                   
                    ?>

                </div>
            </div>
        <div class="sb-sidenav-footer">
            <div class="small">Connecté en tant que:</div>
            <?= $user_info['firstname'] .' '. $user_info['surname'] .' <small class="text-muted">#'.$user_info['id_user'].'</small>' ?>
        </div>
    </nav>
</div>