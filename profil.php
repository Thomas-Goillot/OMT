<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('includes/include-bdd.php');

    $actual_page = "profil.php";

    include('includes/include-session-check.php');      

    include('includes/include-info.php');

    include('includes/include-head.php');
?>

<body>
    <?php 
        include('includes/include-header.php');
    ?>
    <main>
        <section>
            <div class="container">

                <div class="row mb-4">
                    <div class="col-4">
                        <div class="card rounded">
                            <div class="card-body">
                                <img src="/assets/img/user/user.png" width="60%"
                                    class="img-fluid rounded-pill mx-auto d-block" alt="user avatar">
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card rounded">
                            <div class="card-body">
                                <h1 class="card-title">Elon musk<small class="text-muted"> #5789</small></h1>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum doloribus
                                    corporis
                                    sequi iusto sint aspernatur magni? Consequatur corporis quas iste suscipit
                                    porro
                                    iure. Eligendi voluptatem doloremque voluptatibus tempora necessitatibus
                                    sit?
                                </p>
                                <p class="card-text text-muted">
                                    Inscrit le <date>18/03/2022</date>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title">Information</h5>
                                    <h6 class="muted-text d-flex align-items-center">Homme</h6>
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="info">
                                        <p class="mb-0"><b>Taille: </b>180 cm</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Poids: </b>80 Kg</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>IMC: </b>24.7</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title">Vos Badges</h5>
                                    <a href="#">
                                        <h6 class="muted-text d-flex align-items-center">Tout voir</h6>
                                    </a>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-dark"><i class="bi bi-star-fill"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-star-fill"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-star-fill"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-star"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-star"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title">Information</h5>
                                    <h6 class="muted-text d-flex align-items-center">Homme</h6>
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="info">
                                        <p class="mb-0"><b>Taille: </b>180 cm</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Poids: </b>80 Kg</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>IMC: </b>24.7</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title">Historique des séances</h5>
                                    <a href="#">
                                        <h6 class="muted-text d-flex align-items-center">Tout voir</h6>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="info">
                                        <p class="mb-0"><b>Nom de séance 1</b><small class="muted-text">Le<date>
                                                    22/02/2022 à 22558</date></small></p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Nom de séance 2</b><small class="muted-text">Le<date>
                                                    22/02/2022 à 22558</date></small></p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Nom de séance 3</b><small class="muted-text">Le<date>
                                                    22/02/2022 à 22558</date></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="card-title">Mes Groupes</h5>
                                    <a href="#">
                                        <h6 class="muted-text d-flex align-items-center">Tout voir</h6>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="info">
                                        <p class="mb-0"><b>Nom du groupe 1</b><small class="muted-text">75 membres</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Nom du groupe 2</b><small class="muted-text">75 membres</p>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><b>Nom du groupe 3</b><small class="muted-text">75 membres</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
    </main>
    <?php 
        include('includes/include-script.php');
    ?>
</body>

</html>