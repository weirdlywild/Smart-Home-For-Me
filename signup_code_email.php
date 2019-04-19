<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
require_once ('dbconn.php');
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
        $htmlStr .= "Hi " . $email . ",<br /><br />";

        $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
        $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";

        $htmlStr .= "Kind regards,<br />";
        $htmlStr .= "<a href='http://localhost/Smart-Home-For-Me/' target='_blank'>The Code of a Ninja</a><br />";


        $ename = "SmatHomeForMe";
        $email_sender = "pruthvipatel2807@gmail.com";
        $subject = "Verification Link | The Code Of A Ninja | Subscription";
        $recipient_email = $email;

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: {$ename} <{$email_sender}> \n";

        $body = $htmlStr;

        // send email using the mail function, you can also use php mailer library if you want
        if( mail($recipient_email, $subject, $body, $headers) ){

          // tell the user a verification email were sent
          echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";


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
        }else{
          die("Sending failed.");
        }
      }
    }
?>
