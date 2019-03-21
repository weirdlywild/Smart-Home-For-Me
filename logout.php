<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 02:55 AM
 */
session_start();
session_destroy();
header("Location: login.php");
?>