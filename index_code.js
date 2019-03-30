(function () {
    var loading = 0;
    var id = setInterval(frame, 64);
    function frame() {
        loading = loading +1;
        if(loading === 100){
            clearInterval(id);
            window.open("login.php","_self");
        }
    }
})();