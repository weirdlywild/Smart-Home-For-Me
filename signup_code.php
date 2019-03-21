<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
require_once ('dbconn.php');
$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$mobile = $_POST['txtmobile'];
$pwd = $_POST['pass'];
$pass = md5($pwd);

$sql = "INSERT INTO main_data ( name, email, phone, password) VALUES ('$name','$email','$mobile','$pass')";

$result = mysqli_query($conn , $sql);
if($result)
{
    header("Location: index.php");
}
else
{
    echo "Error :".$sql;
}
?>