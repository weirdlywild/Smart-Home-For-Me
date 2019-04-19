<?php
require_once ('dbconn.php');
$vcode=$_GET['code'];
echo $vcode;
// check first if record exists
$sql = "SELECT * FROM `main_data` WHERE verification_code='$vcode' AND verified = '0'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  // update the 'verified' field, from 0 to 1 (unverified to verified)
  $sql = "UPDATE `main_data` SET verified = '1' WHERE verification_code ='$vcode'";
  $result = mysqli_query($conn , $sql);

  if($result == TRUE){
    // tell the user
    echo "<div>Your email is valid, thanks!. You may now login.</div>";
    echo "<a href='login.php'>Go to login</a>";
  }else{
    echo "<div>Unable to update verification code.</div>";
    //print_r($stmt->errorInfo());
  }
}
else
{
	// tell the user he should not be in this page
	echo "<div>We can't find your verification code.</div>";
}
?>
