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
$pwd = $_POST['opass'];
$opass = md5($pwd);
$npwd=$_POST['pass'];
$npass=md5($npwd);


$sql = "UPDATE `main_data` SET `password` = '$npass' WHERE `main_data`.`email` = '$email' AND `password` = '$opass'";
$result = mysqli_query($conn , $sql);
if($result === TRUE)
{
    header("Location: change_pass.php");
}
else
{
    echo "Invalid password";
}
?>
