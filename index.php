<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    session_start();
    if(isset($_SESSION)){
        if(@$_SESSION['last_activity'] > time()- @$_SESSION['expire_time'] ) { // EXPIRATION ? //
            header('Location: /main.php');
            exit;
        }
    }

    $actual_page = "index.php"; 

    include('includes/include-bdd.php');

    $add_user_log = $bdd->prepare('INSERT INTO USER_LOG (activity,id_user) VALUES (?,?)');
    $add_user_log->execute(array($actual_page,-1)); 

    include('includes/include-info.php');

    include('includes/include-head.php');
?>

<script>
//scroll detection
window.onscroll = function() {
    scrolldetection()
};
</script>

<body>
<header>
    <div class="container-fluid">
        <nav
            class="navbar p-3 navbar-color navbar-expand-lg fixed-top d-flex flex-wrap align-items-center justify-content-lg-center">
            <a href="/"
                class="d-flex align-items-center justify-content-lg-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="assets/img/logo_black.png" width="80" height="50" role="img" class="logo-img bi me-2">
            </a>
            <span class="vertical bd-light d-none d-lg-block"></span>

            <button class="navbar-toggler navbar-light border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark">Accueil</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Entrainements</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Boutique</a></li>
                </ul>

                <a href="login.php" class="nav-link px-2 link-dark">Connexion</a>
                <a href="register.php" class="nav-link px-2 link-dark">Inscription</a>

            </div>
        </nav>
    </div>
</header>
    <main>

        <section class="banner">
            <div class="inner">
                <div class="content">
                    <h1 class="text-center">One More Training</h1>
                    <h3 class="text-center">Commencez à vous entrainer dès maintenant</h3>
                </div>
            </div>
        </section>
        <div class="container">
            <hr class="mt-5 mb-5">
        </div>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h2 class="">Trop bien <span class="text-muted">C'est vraiment trop bien</span></h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius modi, vitae
                            similique distinctio cumque molestias nihil officia delectus! Iusto aliquid magni commodi
                            libero repellat veritatis rerum error quas laboriosam consequatur?</p>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid mx-auto rounded" data-src="/assets/img/tropbien.jpg"
                            alt="image of a two sportifs" src="assets/img/tropbien.jpg" data-holder-rendered="true">
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <hr class="mt-5 mb-5">
        </div>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img class="img-fluid mx-auto rounded" data-src="/assets/img/tropbien.jpg"
                            alt="image of a two sportifs" src="assets/img/tropbien.jpg" data-holder-rendered="true">
                    </div>
                    <div class="col-md-7">
                        <h2 class="">Trop bien <span class="text-muted">C'est vraiment trop bien</span></h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius modi, vitae
                            similique distinctio cumque molestias nihil officia delectus! Iusto aliquid magni commodi
                            libero repellat veritatis rerum error quas laboriosam consequatur?</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <hr class="mt-5 mb-5">
        </div>
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-4 d-flex align-items-stretch">
                        <div class="card mb-4 shadow-sm bg-light">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal text-center">OMT Gratuit</h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">0€ <small class="text-muted">/
                                        mois</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-5">
                                    <li><i class="bi bi-check2 text-success"></i>4 personnes MAX par groupe</li>
                                    <li><i class="bi bi-check2 text-success"></i>3 groupes maximum</li>
                                    <li><i class="bi bi-check2 text-success"></i>Accés aux séances de la communauté
                                        gratuitement</li>
                                </ul>
                                <div class="text-center mt-auto">
                                    <button type="button"
                                        class="btn btn-lg btn-block btn-outline-primary mt-auto align-self-start">J'en
                                        profite</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex align-items-stretch">
                        <div class="card mb-4 shadow-sm bg-light ">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal text-center">OMT Premium</h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">15.99€ <small class="text-muted">/
                                        mois</small></h1>
                                <ul class="list-unstyled mt-3 mb-5">
                                    <li><small class="text-muted"><i class="bi bi-check2 text-success"></i>Inclus OMT
                                            Gratuit</small></li>
                                    <li><i class="bi bi-check2 text-success"></i>Nombre illimité de groupe</li>
                                    <li><i class="bi bi-check2 text-success"></i>15 membres par Groupe maximum</li>
                                    <li><i class="bi bi-check2 text-success"></i>Accés aux séances exclusive de One More
                                        Training</li>
                                    <li><i class="bi bi-check2 text-success"></i>Création d'event personnalisé en
                                        groupes</li>
                                </ul>
                                <div class="text-center">
                                    <button type="button"
                                        class="btn btn-lg btn-block btn-outline-primary mt-auto align-self-start">J'en
                                        profite</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex align-items-stretch">
                        <div class="card mb-4 shadow-sm bg-light">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal text-center">OMT pour écoles</h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h1 class="card-title pricing-card-title text-center">25.99€ <small class="text-muted">/
                                        mois</small></h1>
                                <ul class="list-unstyled mt-3 mb-5">
                                    <li><small class="text-muted"><i class="bi bi-check2 text-success"></i>Inclus OMT
                                            Premium</small></li>
                                    <li><i class="bi bi-check2 text-success"></i>Nombre illimité de groupe</li>
                                    <li><i class="bi bi-check2 text-success"></i>Nombre illimité de membres par groupe
                                    </li>
                                    <li><i class="bi bi-check2 text-success"></i>Accés aux séances exclusive de One More
                                        Training</li>
                                    <li><i class="bi bi-check2 text-success"></i>Création d'event personnalisé en
                                        groupes</li>
                                </ul>
                                <div class="text-center">
                                    <button type="button"
                                        class="btn btn-lg btn-block btn-outline-primary mt-auto align-self-start">J'en
                                        profite</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <?php 
        include('includes/include-footer.php');
    ?>
    <?php 
        include('includes/include-script.php');
    ?>
</body>

</html>