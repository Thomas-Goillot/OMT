<?php
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

    include('includes/include-info.php');

    include('includes/include-head.php');
?>

<body>

    <main>
        <section class="sign-in-page">
            <div class="container">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-md-6 col-sm-12 col-lg-12 align-self-center">
                        <div class="sign-user_card ">
                            <div class="d-flex justify-content-center">
                            </div>
                            <div class="sign-in-page-data">
                                <div class="sign-in-from w-100 pt-5 m-auto">

                                    <form id="regForm" method="POST" action="../signup-check.php">
                                        <div class="container">

                                            <!-- STEP 1 -->
                                            <div class="tab">
                                                <h1 class="text-center mb-3">Inscrivez-vous et commencez à vous
                                                    entrainer!</h1>

                                                <div class="row align-items-center">
                                                    <div class="col-lg-7">

                                                        <div class="row mb-3">
                                                            <div class="form-text mb-2">
                                                                Informations personnelles (Obligatoire)
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="firstnameinput" placeholder="Prénom"
                                                                        name="firstnameinput">
                                                                    <label for="floatingInput">Prénom</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="lastnameinput" placeholder="Nom"
                                                                        name="lastnameinput">
                                                                    <label for="floatingInput">Nom</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="form-text mb-2">
                                                                Votre date de naissance (Obligatoire)
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control"
                                                                        id="dayinput" placeholder="Jour"
                                                                        name="dayinput">
                                                                    <label for="dayinput">Jour</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control"
                                                                        id="monthinput" placeholder="01"
                                                                        name="monthinput">
                                                                    <label for="monthinput">Mois</label>
                                                                </div>
                                                                <!-- 
                                                <label for="exampleDataList" class="form-label">Datalist example</label>
                                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="datalistOptions">
                                                    <option value="San Francisco">
                                                    <option value="New York">
                                                    <option value="Seattle">
                                                    <option value="Los Angeles">
                                                    <option value="Chicago">
                                                </datalist> -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control"
                                                                        id="yearinput" placeholder="Année"
                                                                        name="yearinput">
                                                                    <label for="yearinput">Année</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="form-text mb-2">
                                                                Votre adresse mail (Obligatoire)
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-lg-9">
                                                                    <div class="form-floating">
                                                                        <input type="mail" class="form-control"
                                                                            id="mailinput" placeholder="Adresse mail"
                                                                            name="mail1input">
                                                                        <label for="mailinput">Adresse Mail</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-lg-9">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="mail" class="form-control"
                                                                            id="mail2input"
                                                                            placeholder="Confirmez votre adresse mail"
                                                                            name="mail2input">
                                                                        <label for="mailinput">Confirmation adresse
                                                                            mail</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-none d-lg-block ">
                                                        <img src="/assets/img/logo_black.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 2 -->
                                            <div class="tab">
                                                <h1 class="text-center mb-5">Contact</h1>

                                                <div class="row align-items-center">
                                                    <div class="col-lg-7">

                                                        <div class="row mb-3">
                                                            <div class="form-text mb-2">
                                                                Numéro de téléphone (Facultatif)
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="phoneinput"
                                                                        placeholder="Numéro de téléphone"
                                                                        name="phoneinput">
                                                                    <label for="phoneinput">Numéro de téléphone</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="form-text mb-2">
                                                                Séléctionnez votre genre (Obligatoire)
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="type1input" value="Homme" name="typeinput">
                                                                    <label class="form-check-label"
                                                                        for="type1input">Homme</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="type2input" value="Femme" name="typeinput">
                                                                    <label class="form-check-label"
                                                                        for="type2input">Femme</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="type3input" value="autres" name="typeinput">
                                                                    <label class="form-check-label" for="type3input">
                                                                        Non Renseigné</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="form-text mb-2">
                                                                Mot de passe (Obligatoire)
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col">
                                                                    <div class="form-floating">
                                                                        <input type="password" class="form-control"
                                                                            id="pwdinput" placeholder="Mot de passe"
                                                                            name="pwd1input">
                                                                        <label for="pwdinput">Mot de passe </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="password" class="form-control"
                                                                            id="pwd2input"
                                                                            placeholder="Confirmez votre mot de passe"
                                                                            name="pwd2input">
                                                                        <label for="pwd2input">Confirmation mot de
                                                                            passe</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-5 d-none d-lg-block ">
                                                        <img src="/assets/img/logo_black.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 3 -->
                                            <div class="tab">
                                                <h1 class="text-center mb-5">Profil</h1>

                                                <div class="row align-items-center mb-5">
                                                    <div class="col-4 d-none d-lg-block">
                                                        <img src="/assets/img/user/user.png" width="60%"
                                                            class="img-fluid rounded-pill mx-auto d-block"
                                                            alt="user avatar">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-text mb-4">
                                                            <h5>De quelle façon aimeriez-vous etre représenter ?</h5>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-5">
                                                                <div>
                                                                    <input class="form-control form-control-lg"
                                                                        id="formFileLg" type="file" name="imginput">
                                                                    <div class="form-text mb-2">
                                                                        Importez votre propre image
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <h5 class="text-center mt-2">OU</h5>
                                                            </div>
                                                            <div class="col-5 d-grid">
                                                                <button type="button" class="btn btn-lg btn-light">Créer
                                                                    un
                                                                    avatar</button>
                                                                <div class="form-text mb-2">
                                                                    Ouvrir le créateur d\'avatar
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-text mb-2">
                                                            Décrivez-vous en quelques lignes pour permettre à d\'autres
                                                            utilisateurs de
                                                            vous
                                                            connaître davantage.
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <textarea class="form-control"
                                                                placeholder="Description de profil"
                                                                id="descriptioninput" style="height: 100px"
                                                                name="descriptioninput"></textarea>
                                                            <label for="descriptioninput">Description de profil</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 4 -->
                                            <div class="tab mb-5">
                                                <h1 class="text-center mb-5">Morphologie</h1>

                                                <div class="row align-items-center">
                                                    <div class="col-lg-7">
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="form-text mb-2">
                                                                    Entrer votre taille (Facultatif)
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control"
                                                                        id="sizeinput" placeholder="Taille"
                                                                        name="sizeinput">
                                                                    <label for="sizeinput">Taille</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-text mb-2">
                                                                    Entrer votre poids (Facultatif)
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control"
                                                                        id="weightinput" placeholder="Poids"
                                                                        name="weightinput">
                                                                    <label for="weightinput">Poids</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1 ">
                                                            <div class="form-text mb-3">
                                                                Combien de fois par semaine envisagez-vous de vous
                                                                entraîner.
                                                            </div>
                                                            <div class="col-6 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option1"
                                                                    autocomplete="off" name="trainingaweek">
                                                                <label class="btn btn-secondary" for="option1">1 à 2
                                                                    fois</label>

                                                                <input type="radio" class="btn-check" id="option2"
                                                                    autocomplete="off" name="trainingaweek">
                                                                <label class="btn btn-secondary" for="option2">4 à 5
                                                                    fois</label>
                                                            </div>
                                                            <div class="col-6 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option3"
                                                                    autocomplete="off" name="trainingaweek">
                                                                <label class="btn btn-secondary" for="option3">2 à 3
                                                                    fois</label>

                                                                <input type="radio" class="btn-check" id="option4"
                                                                    autocomplete="off" name="trainingaweek">
                                                                <label class="btn btn-secondary" for="option4">5 fois ou
                                                                    +</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-none d-lg-block ">
                                                        <img src="/assets/img/logo_black.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 5 -->
                                            <div class="tab mb-5">
                                                <h1 class="text-center mb-5">Sports</h1>

                                                <div class="row align-items-center">
                                                    <div class="col-lg">
                                                        <div class="row mb-1 ">
                                                            <div class="form-text mb-4">
                                                                <h5>Quel sports vous intéressent ?</h5>
                                                            </div>
                                                            <div class="col-3 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option1"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option1">Natation</label>

                                                                <input type="radio" class="btn-check" id="option2"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option2">handball</label>

                                                                <input type="radio" class="btn-check" id="option3"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option3">Sport</label>

                                                                <input type="radio" class="btn-check" id="option4"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option4">Sport</label>

                                                                <input type="radio" class="btn-check" id="option5"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option5">Sport</label>
                                                            </div>
                                                            <div class="col-3 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option6"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option6">Sport</label>

                                                                <input type="radio" class="btn-check" id="option7"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option7">Sport</label>

                                                                <input type="radio" class="btn-check" id="option8"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option8">Sport</label>

                                                                <input type="radio" class="btn-check" id="option9"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option9">Sport</label>

                                                                <input type="radio" class="btn-check" id="option10"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option10">Sport</label>
                                                            </div>
                                                            <div class="col-3 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option11"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option11">Sport</label>

                                                                <input type="radio" class="btn-check" id="option12"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option12">Sport</label>

                                                                <input type="radio" class="btn-check" id="option13"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option13">Sport</label>

                                                                <input type="radio" class="btn-check" id="option14"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option14">Sport</label>

                                                                <input type="radio" class="btn-check" id="option15"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option15">Sport</label>
                                                            </div>
                                                            <div class="col-3 d-grid gap-2">
                                                                <input type="radio" class="btn-check" id="option16"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option16">Sport</label>

                                                                <input type="radio" class="btn-check" id="option17"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option17">Sport</label>

                                                                <input type="radio" class="btn-check" id="option18"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option18">Sport</label>

                                                                <input type="radio" class="btn-check" id="option19"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option19">Sport</label>

                                                                <input type="radio" class="btn-check" id="option20"
                                                                    autocomplete="off" name="sport">
                                                                <label class="btn btn-secondary"
                                                                    for="option20">Sport</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 6 -->
                                            <div class="tab">
                                                <h1 class="text-center mb-5">Votre compte est prêt!</h1>
                                                <div class="container text-center align-items-center mb-5">
                                                    <div class="card text-dark mb-3">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Bravo !</h5>
                                                            <p class="card-text">Votre profil est enfin completé! Vous
                                                                pouvez maintenant
                                                                acceder à nos programmes, ajouter des amis et bien
                                                                d\'autres fonctionnalités!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <div class="mx-auto d-block">
                                                <span class="step bg-secondary"></span>
                                                <span class="step bg-secondary"></span>
                                                <span class="step bg-secondary"></span>
                                                <span class="step bg-secondary"></span>
                                                <span class="step bg-secondary"></span>
                                                <span class="step bg-secondary"></span>
                                            </div>
                                            <div class="sign-info">
                                                <button type="button" class="btn btn-secondary mb-3" id="prevBtn"
                                                    onclick="nextPrev(-1)">Retour</button>
                                                <button type="button" class="btn btn-primary" id="nextBtn"
                                                    name="sign_up_form" onclick="nextPrev(1)">Suivant</button>
                                                <!--                                             <button type="button" class="btn btn-primary" id="nextBtn"
                                                name="sign_up_form">Finaliser l'inscription plus tard</button> -->
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <div class="d-flex justify-content-center links">
                                                Déjà un compte?&nbsp;
                                                <a href="login.php" class="ml-2">Se connecter</a>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/assets/js/multiplestep.js"></script>
    <?php 
        include('includes/include-script.php');
    ?>
</body>

</html>