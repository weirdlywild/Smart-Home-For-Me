<?php
//This page is requested by the JavaScript, it updates the pin's status and then print it
//Getting and using values
if (isset($_GET["gpio"])) {
    $gpio = strip_tags($_GET["gpio"]);
    echo " this is gpio $gpio";

    //test if value is a number
    if ( is_numeric($gpio) ) {

        //set the gpio's mode to output
        system("gpio mode ".$gpio." out");
        //reading pin's status
        $read=exec ("gpio read ".$gpio);
        //set the gpio to high/low
        if ($read==0){
            system("gpio write ".$gpio." 1");
        }else if($read==1){
            system("gpio write ".$gpio." 0");
        }else{
            echo "read error";
        }

    }
    else { echo ("fail"); }
} //print fail if cannot use values
else { echo ("fail"); }
?>
