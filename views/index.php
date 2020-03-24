<?php
// Lancement de la session
session_start();
// Encodage de la page
header("Content-Type: text/html; charset=utf-8");
// Conf générale
require_once("../conf/generalConf.php");
// Autoloader global
require_once(PATH_MACHINE . "autoLoader/AutoLoad.php");
// Pour afficher les erreurs php
if (MODE_TEST == 1) {
    // echo "Test activé <br>";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

// Sécurisation des vars reçus
$arrayVar = Controllers::secureArray($_REQUEST);

// Test API
$param = "?ctrl=getUsers";
//$param = "?ctrl=processApi";
$resultGetCurl = Controllers::getCurlRest($param);
$resultGetCurl = json_decode($resultGetCurl);
if ($resultGetCurl->status == "failed") {
    die("Une erreur est survenue");
} elseif ($resultGetCurl->status == "success") {
    var_dump($resultGetCurl->result);
} else {
    die("Erreur critique");
}


// Appel Header
require_once("includes/header.php");
// Appel Body
require_once("includes/main.php");
// Appel Footer
require_once("includes/footer.php");
