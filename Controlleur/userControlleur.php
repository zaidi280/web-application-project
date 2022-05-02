
<?php
include("../BD/Connexion.php");
include('../Modele/user.php');
session_start();
$username = $_GET['username'];
$psw = $_GET['psw'];
$userid = $_GET['userid'];

$_SESSION['nom'] = $username;

if (isset($_GET['valider'])) {
	$saif = new User($userid, $username, $psw);
	$s = $saif->connect($username, $psw, $userid);
	if ($userid == 1) {
		header('location:http://localhost/GestionDeCabinet/Vue/appointment.php');
	} else if ($userid == 0) {
		header('location:http://localhost/GestionDeCabinet/Vue/doctor.php');
	}
}


?>




