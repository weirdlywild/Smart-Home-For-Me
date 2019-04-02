<?php
include 'dbconn.php';
session_start();
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
?>

<?php //read for bedroom
$dlbsql="SELECT * FROM bedroom";
$dlbresult=mysqli_query($conn_device,$dlbsql);
if(mysqli_num_rows($dlbresult) > 0)
{
    while($dlbrow = mysqli_fetch_assoc($dlbresult))
    {
        $dlbgpio = $dlbrow['gpio'];
        system("gpio mode ".$dlbgpio." out"); //set to out pin
        $dlbpin = exec("gpio read ".$dlbgpio); //check pin status
        if($dlbpin == 1){
            ?>                       <script>document.getElementById("'<?php echo $dlbgpio; ?>'").checked = false;</script>
        <?php              }else if($dlbpin == 0){
            ?>                      <script>document.getElementById("'<?php echo $dlbgpio; ?>'").checked = true;</script>
            <?php
        }else{
            echo "Problem in read pin(bedroom)";
        }
    }
}
?>//read bedroom over

<?php //read for hall
$dlhsql="SELECT * FROM hall";
$dlhresult=mysqli_query($conn_device,$dlhsql);
if(mysqli_num_rows($dlhresult) > 0)
{
    while($dlhrow = mysqli_fetch_assoc($dlhresult))
    {
        $dlhgpio = $dlhrow['gpio'];
        system("gpio mode ".$dlhgpio." out"); //set to out pin
        $dlhpin = exec("gpio read ".$dlhgpio); //check pin status
        if($dlhpin == 1){
            ?>                       <script>document.getElementById("'<?php echo $dlhgpio; ?>'").checked = false;</script>
        <?php              }else if($dlhpin == 0){
            ?>                      <script>document.getElementById("'<?php echo $dlhgpio; ?>'").checked = true;</script>
            <?php
        }else{
            echo "Problem in read pin(hall)";
        }
    }
}
?>//read for hall over

<?php //read for kitchen
$dlksql="SELECT * FROM kitchen";
$dlkresult=mysqli_query($conn_device,$dlksql);
if(mysqli_num_rows($dlkresult) > 0)
{
    while($dlkrow = mysqli_fetch_assoc($dlkresult))
    {
        $dlkgpio = $dlkrow['gpio'];
        system("gpio mode ".$dlkgpio." out"); //set to out pin
        $dlkpin = exec("gpio read ".$dlkgpio); //check pin status
        if($dlkpin == 1){
        ?>                          <script>document.getElementById("'<?php echo $dlkgpio; ?>'").checked = false;</script>
        <?php              }else if($dlkpin == 0){
            ?>                      <script>document.getElementById("'<?php echo $dlkgpio; ?>'").checked = true;</script>
            <?php
        }else{
            echo "Problem in read pin(kitchen)";
        }
    }
}
?>//read for hall over