<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:35 AM
 */

require_once ('dbconn.php');
$email = $pass = $pwd = '';

$email = $_POST['txtemail'];
$pwd = $_POST['pass'];
$pass = md5($pwd);

$sql = "SELECT * FROM main_data WHERE email = '$email' AND password='$pass' AND verified = '1'";

$result = mysqli_query($conn , $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $email = $row["email"];
        session_start();
        $_SESSION['email'] = $email;
    }
    header("Location: dashbord.php");
}
else
{
    echo "Invalid Username or password or Email Verification undone";
}
?>
