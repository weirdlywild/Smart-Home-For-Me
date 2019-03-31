<?php
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
$email = $_SESSION['email'];
$name = $_POST['txtdname'];
$dis = $_POST['txtddis'];
$cat = $_POST['selcat'];
$gpio =$_POST['txtdpin'];
$dpwd = $_POST['dpass'];
$dpass = md5($dpwd);
$sql = "SELECT * FROM main_data WHERE email= '$email'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $lpass = $row['password'];
    }
}
if ($dpass!=$lpass){
    header("Location: device.php");
}else{
    $dsql ="INSERT INTO $cat (`email`, `name`, `dis`, `gpio`) VALUES ('$email', '$name', '$dis', '$gpio')";
    $dresult = mysqli_query($conn_device , $dsql);
    if($dresult)
    {
        header("Location: home.php");
    }
    else
    {
        echo "Error :".$sql;
    }
}