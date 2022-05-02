<?php 
include('../BD/Connexion.php');

session_start();
if (isset($_GET["ph"])) {
    $ph = $_GET["ph"];
}

if (isset($_GET["pw"])) {
    $pw = $_GET["pw"];
}

if (isset($_GET["pl"])) {
    $pl = $_GET["pl"];
}
if (isset($_GET["sl"])) {
    $sl = $_GET["sl"];
}
if (isset($_GET["ai"])) {
    $ai= $_GET["ai"];
}

$_SESSION['phc']=$ph;
$_SESSION['pwc']=$pw;
$_SESSION['plc']=$pl;
$_SESSION['slc']=$sl;
$_SESSION['aic']=$ai;


$phc=$_SESSION['phc'];
$pwc=$_SESSION['pwc'];
$plc=$_SESSION['plc'];
$slc=$_SESSION['slc'];
$aic=$_SESSION['aic'];

echo '<style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }
                  
                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }
                  
                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
                </style>
                <table>

                <thead>
            
                  <tr>
                    <th scope="col">Patient Height</th>
                    <th scope="col">Patient Weight</th>
                    <th scope="col">Pressure Level</th>
                    <th scope="col">Sugar Level</th>
                    <th scope="col">Appointment Id</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                <th scope="row">' . $phc . '</th>
                <td>' . $pwc . '</td>
                <td>' . $plc . '</td>
                <td>' . $slc . '</td>
                <td>' . $aic . '</td>
                </tr>
            
                </tbody>
              </table>';
