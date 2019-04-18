<?php
require_once ('dbconn.php');
$ssql="SELECT * FROM temp_hum ORDER BY id DESC LIMIT 1";
$sresult = mysqli_query($conn_sensor,$ssql);

//print values to screen
if(mysqli_num_rows($sresult) > 0)
{
  while ($row = mysqli_fetch_assoc($sresult)) {
    $stemp=$row['temp'];
    $shum=$row['hum'];
    $svgas=$row['vgas'];
  }
}
?>
