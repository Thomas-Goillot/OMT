<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('includes/include-bdd.php');

    $actual_page = "main.php";    

    include('includes/include-session-check.php');

    include('includes/include-functions.php');

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
    <?php 
        include('includes/include-header.php');
    ?>
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