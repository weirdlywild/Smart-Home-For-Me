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
}else
{
    echo "Error :".$sql;
}
if ($dpass!=$lpass){
    echo "<script>
      alert('Invalid Password');
    window.location.href='device.php';
    </script>";
}else{
  $chkgpio="SELECT * FROM `bedroom` WHERE email='$email'";
  $chkresult = mysqli_query($conn_device , $chkgpio);
  if(mysqli_num_rows($chkresult) > 0)
  {
      while($row = mysqli_fetch_assoc($chkresult))
      {
          $cgpio=$row['gpio'];
          if($cgpio==$gpio){
            echo "<script>
              alert('GPIO pin already Used in Bedroom');
            window.location.href='device.php';
            </script>";
          }//end if
      }
  }else
  {
      echo "Error :".$sql;
  }

  $chkgpio="SELECT * FROM `hall` WHERE email='$email'";
  $chkresult = mysqli_query($conn_device , $chkgpio);
  if(mysqli_num_rows($chkresult) > 0)
  {
      while($row = mysqli_fetch_assoc($chkresult))
      {
          $cgpio=$row['gpio'];
          if($cgpio==$gpio){
            echo "<script>
              alert('GPIO pin already Used in Hall');
            window.location.href='device.php';
            </script>";
          }//end if
      }
  }else
  {
      echo "Error :".$sql;
  }
  $chkgpio="SELECT * FROM `kitchen` WHERE email='$email'";
  $chkresult = mysqli_query($conn_device , $chkgpio);
  if(mysqli_num_rows($chkresult) > 0)
  {
      while($row = mysqli_fetch_assoc($chkresult))
      {
          $cgpio=$row['gpio'];
          if($cgpio==$gpio){
            echo "<script>
              alert('GPIO pin already Used in Kitchen');
            window.location.href='device.php';
            </script>";
          }//end if
      }
  }else
  {
      echo "Error :".$sql;
  }

    $desql ="INSERT INTO $cat (`device_id`, `email`, `name`, `dis`, `gpio`) VALUES (NULL,'$email', '$name', '$dis', '$gpio')";
    $deresult = mysqli_query($conn_device , $desql);
    if($deresult)
    {
      echo "<script>
        alert('Device Added Successfully');
      window.location.href='dashbord.php';
      </script>";
    }
    else
    {
        echo "Error :".$desql;
    }
}
