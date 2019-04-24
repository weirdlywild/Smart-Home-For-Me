<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/vendor/autoload.php';
require_once ('dbconn.php');
$vcode=$_GET['code'];
echo $vcode;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'tls://smtp.gmail.com:587';
$mail->isHTML();
$mail->Username = "solankiraj10897@gmail.com";
$mail->Password = "740524374910897";
$mail->setFrom('no-reply@smarthomefor.me');

// check first if record exists
$sql = "SELECT * FROM `main_data` WHERE verification_code='$vcode' AND verified = '0'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $name=$row["name"];
    $email = $row["email"];
  }
  // update the 'verified' field, from 0 to 1 (unverified to verified)
  $sql = "UPDATE `main_data` SET verified = '1' WHERE verification_code ='$vcode'";
  $result = mysqli_query($conn , $sql);

  if($result == TRUE){
    // tell the user
    echo "<div>Your email is valid, thanks!. You may now login.</div>";
    echo "<a href='login.php'>Go to login</a>";
    $formcontent="
                    Hello $name,
                    <br><br>
                    <h4>Welcome to Smart Home For Me</h4>I'm so excited to have you join us.
                    We're feeling pretty lucky that you chose us, and I just wanna say thank you on behalf of our whole company.
                    <br><br>
                    If you're interested in learning more about your product, feel free to contact me or anyone else on our support team at any time.
                    We're always here to help you in any way we can.
                    <br><br><br><br>
                    Cheers,<br>
                    <h4>Smart Home For Me Team</h4>
                    ";
    $mail->Subject = 'Welcome Mail';
    $mail->Body = $formcontent;
    $mail->addAddress($email, $name);
    if (!$mail->send()){
      echo "Mailer Error: " . $mail->ErrorInfo;
      die("Sending failed.");
    }
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
