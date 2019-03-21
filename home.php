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
    header("Location: index.php");
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
echo "This is ssecond page";
?>
<h3>Welcome ,<?php echo $name; ?></h3>
<h5><a href="logout.php">Logout</a></h5>
