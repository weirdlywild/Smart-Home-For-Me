<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 12:43 AM
 */

$conn = mysqli_connect("localhost","root","","cust_info");
$conn_device = mysqli_connect("localhost","root","","device_info");
$conn_sensor = mysqli_connect("localhost","root","","sensor");

if(!$conn){
    echo "Customer Database Connection Fail";
}
if(!$conn_device){
    echo "Device Database Connection Fail";
}
if(!$conn_sensor){
    echo "Sensor Database Connection Fail";
}
?>
