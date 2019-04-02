<?php
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
$email = $_SESSION['email'];
$gpio = $_POST['gpio'];
$data = $_POST['data'];

$ddsql = "DELETE FROM $data WHERE gpio='$gpio' LIMIT 1";
$result = mysqli_query($conn_device , $ddsql);
if($result === TRUE){
    header("Location: dashbord_mng_dvi.php");
} else {
    echo "Error deleting record: " .$ddsql;
}