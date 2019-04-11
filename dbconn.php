<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 12:43 AM
 */

$conn = mysqli_connect("localhost","root","root","cust_info");
$conn_device = mysqli_connect("localhost","root","root","device_info");
if(!$conn){
    echo "Customer Database Connection Fail";
}
if(!$conn_device){
    echo "Device Database Connection Fail";
}
?>
