<?php
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
