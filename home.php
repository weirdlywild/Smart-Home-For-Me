<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 15-03-2019
 * Time: 11:22 AM
 */
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
$email = $_SESSION['email'];
$sql = "SELECT * FROM main_data WHERE email= '$email'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['name'];
    }
}
?>
