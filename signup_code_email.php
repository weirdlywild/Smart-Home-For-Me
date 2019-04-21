<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
 use PHPMailer\PHPMailer\PHPMailer;
 require_once ('dbconn.php');
 require 'PHPMailer/vendor/autoload.php';
 $mail = new PHPMailer;
 $mail->isSMTP();
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'tls';
 $mail->Host = 'tls://smtp.gmail.com:587';
 $mail->isHTML();
 $mail->Username = "solankiraj10897@gmail.com";
 $mail->Password = "740524374910897";
 $mail->setFrom('no-reply@smarthomefor.me');

if(isset($_POST['txtname']) && isset($_POST['txtemail']) && isset($_POST['txtmobile']) && isset($_POST['pass'])){
  $name = $_POST['txtname'];
  $email = $_POST['txtemail'];
  $mobile = $_POST['txtmobile'];
  $pwd = $_POST['pass'];
}
$pass = md5($pwd);

/*$sql = "INSERT INTO main_data ( name, email, phone, password) VALUES ('$name','$email','$mobile','$pass')";

$result = mysqli_query($conn , $sql);
if($result)
{
    header("Location: login.php");
}
else
{
    echo "Error :".$sql;
}*/
    $sql = "SELECT * FROM main_data WHERE email = '$email' AND verified = '1'";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) > 0)
    {
      	echo "<div>Your email is already activated.</div>";
    }
    else
    {
      // check first if there's unverified email related
      $sql = "SELECT * FROM main_data WHERE email = '$email' AND verified = '0'";
      $result = mysqli_query($conn , $sql);

      if(mysqli_num_rows($result) > 0)
      {
        // you have to create a resend verification script
        echo "<div>Your email is already in the system but not yet verified.</div>";
      }
      else{

        // now, compose the content of the verification email, it will be sent to the email provided during sign up
        // generate verification code, acts as the "key"
        $verificationCode = md5(uniqid("smarthome", true));

        // send the email verification
        $verificationLink = "http://localhost/Smart-Home-For-Me/activate.php?code=" . $verificationCode;

        $htmlStr = "";
        $htmlStr .= "Hi " . $name . ",<br /><br />";

        $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
        $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";

        $htmlStr .= "Kind regards,<br />";
        $htmlStr .= "<a href='http://localhost/Smart-Home-For-Me/' target='_blank'>SmartHomeForMe</a><br />";


        //$ename = "SmatHomeForMe";
        //$email_sender = "pruthvipatel2807@gmail.com";
        $mail->Subject = 'Verification Link | The Code Of A Ninja | Subscription';
        //$recipient_email = $email;

        //$headers  = "MIME-Version: 1.0\r\n";
        //$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //$headers .= "From: {$ename} <{$email_sender}> \n";

        $mail->Body = $htmlStr;
        $mail->addAddress($email, $name);
        // send email using the mail function, you can also use php mailer library if you want
        if (!$mail->send()){
          echo "Mailer Error: " . $mail->ErrorInfo;
          die("Sending failed.");
        }else{
          // tell the user a verification email were sent
          //echo "<!-- <div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";-->


          // save the email in the database
          $created = date('Y-m-d H:i:s');

          //write query
          $sql = "INSERT INTO main_data ( name, email, phone, password, verified, verification_code, created)
                                  VALUES ('$name','$email','$mobile','$pass','0','$verificationCode','$created')";

          // Execute the query
          $result = mysqli_query($conn , $sql);
          if($result){
            // echo "<div>Unverified email was saved to the database.</div>";
            header("Location: verify.php");
          }else{
            echo "<div>Unable to save your email to the database.";
            //print_r($stmt->errorInfo());
          }
        }
      }
    }
    function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
?>
