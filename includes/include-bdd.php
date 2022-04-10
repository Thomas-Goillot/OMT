<?php 
/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

// Localisation de la BDD
define('HOST', '217.182.70.248');

// Nom d'utilisateur
define('USER', 'projet');

// Mot de passe
define('PASSWD', 'projetannuel2022');

// Nom de la base de donnée
define('DBNAME', 'OMT');

try {
	$bdd = new PDO("mysql:host=". HOST .";dbname=". DBNAME, USER, PASSWD, [
		// Gestion des erreurs PHP/SQL
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
		// Gestion du jeu de caractères
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		// Choix du retours des résultats
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	]);

	//echo 'Base de données connectée';
}
catch (Exception $error) {
	// Attrape une exception
	echo 'Erreur lors de la connexion à la base de données : '. $error->getMessage();
}
?>