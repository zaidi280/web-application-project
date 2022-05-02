<?php
include '../Modele/Appointmentc.php';

$appointmentdate = "";
$firstname = "";
$lastname = "";
$birthdate = "";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

if (isset($_GET["appdate"])) {
    $appointmentdate = $_GET["appdate"];
}

if (isset($_GET["fn"])) {
    $firstname = $_GET["fn"];
}
if (isset($_GET["ln"])) {
    $lastname = $_GET["ln"];
}
if (isset($_GET["bd"])) {
    $birthdate = $_GET["bd"];
}
if (isset($_GET["valider"])) {

    $Ap = new Appointmentc($id, $appointmentdate, $firstname, $lastname, $birthdate);
    if ($appointmentdate != null && $firstname != null && $lastname != null && $birthdate != null) {


        $nb = Appointmentc::AddAppointment($Ap);
        if ($nb) {
            header('location:../Vue/appointment.php');
        } else {
            echo 'pas insere';
        }
    }
}
if (isset($_GET['delete'])) {

    $d = Appointmentc::DeleteAppointment($id);
    if ($d) {
        header('Location: ../Vue/appointment.php');
    }
}
if (isset($_GET['update'])) {
    if ($id != null && $id == true) {
        $Ap = new Appointmentc($id, $appointmentdate, $firstname, $lastname, $birthdate);
        Appointmentc::UpdatePatient($Ap);
        header('location: ../Vue/appointment.php');
    }
}



if (isset($_GET["search"])) {
    $firstname = $_GET["search"];
}

if (isset($_GET["cherch"])) {
    $n = Appointmentc::getbyname($firstname);
    echo '<style>
    button,a {
        
        background-color : red;
        margin-top: 4;
        text-decoration: none;
        width: 7%;
        
      }
    </style>
    
    <button><a href="../Vue/appointment.php" >return</a></button>';

}
