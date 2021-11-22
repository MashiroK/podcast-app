$(document).keypress(function(e){
    if (document.activeElement === document.getElementById("se1") || document.activeElement === document.getElementById("se2")) {
        if (e.which == 13){
            document.getElementById("search").click(); // on future implement search only if has string typed
        }
    }
});