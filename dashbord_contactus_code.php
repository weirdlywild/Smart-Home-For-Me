<?php
/*
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
use PHPMailer\PHPMailer\PHPMailer;
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

if(isset($_POST['txtfname']) && isset($_POST['txtmail']) && isset($_POST['txtlname']) && isset($_POST['txtwrite'])){
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $email = $_POST['txtmail'];
    $message = $_POST['txtwrite'];
}
$formcontent="From : $fname $lname <br> Email : $email <br><br> <h3>Message :</h3> <h4>$message</h4>";
$mail->Subject = 'Contact Form Response';
$mail->Body = $formcontent;
$mail->addAddress('pruthvipatel2807@gmail.com', 'SmartHomeForMe');
// send email using the mail function, you can also use php mailer library if you want
if (!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
    die("Sending failed.");
}else{
  echo "<script>
    alert('Respond Send Successfully');
  window.location.href='dashbord_contactus.php';
  </script>";
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
