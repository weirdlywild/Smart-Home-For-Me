<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
$email = $_SESSION['email'];

$name = $_POST['txtname'];
$mobile = $_POST['txtmobile'];
$pwd = $_POST['pass'];
$pass = md5($pwd);


$sql = "UPDATE `main_data` SET `name` = '$name',`phone`='$mobile' WHERE `main_data`.`email` = '$email' AND `password` = '$pass'";

$result = mysqli_query($conn , $sql);
if($result === TRUE)
{
    header("Location: dashbord_profile.php");
}
else
{
    echo "Invalid password";
}
?>