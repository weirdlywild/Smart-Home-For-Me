<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>verified!!!</title>
  <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
  <link rel="stylesheet" href="css/activate_style.css">
</head>
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
    echo "<br/><span class='hello'>Your email is verified,
     Thank You!!!.
    You can login Now.</span>";
    echo "<br/><a href='login.php'><button class='bnt'>Go to login</button></a>";
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
    echo "<br/><span class='hello'>Unable to update verification code.</span>";
    //print_r($stmt->errorInfo());
  }
}
else
{
	// tell the user he should not be in this page
	echo "<br/><span class='hello'>We can't find your verification code.</span>";
}
?>
</html>
