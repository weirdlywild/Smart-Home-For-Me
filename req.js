function cngbtn(gpio) {
//send the read value and gpio pin number to gpio.php for changes
//this is the http request
    var request = new XMLHttpRequest();
    request.open( "GET" , "gpio.php?gpio="+gpio, true);
    request.send(null);
    //receiving informations
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {

        }
        //test if fail
        else if (request.readyState === 4 && request.status === 500) {
            alert ("server error");
            return ("fail");
        }
        else if (request.readyState === 4 && request.status !== 200 && request.status !== 500 ) {
            alert ("Something went wrong!");
            return ("fail"); }
    };
    return 0;
}