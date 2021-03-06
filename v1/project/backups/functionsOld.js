//Main page for JS functions such as sidemenu load, searchbar load and user load


$(function(){
    $("#songP").load("songBar.html");
});

$(function(){
$("#navP").load("sidemenu.html");
});
$(function(){
$("#searchP").load("searchbar.html", loaded());
});

$(function(){ //User Callback (Just load-async)
    $("#userP").load("userProfile.html", loaded());
});

$(function(){ //Change to sync gridScroll
    $("#gridScrollP2").load("gridScroll.html", loaded());
});
$(function(){ 
    $("#gridScrollP").load("gridScroll.html", loaded());
});

$(function(){ //Change to sync listScroll
    $("#listScrollP2").load("listScroll.html", loaded());
});
$(function(){ 
    $("#listScrollP").load("listScroll.html", loaded());
});

$(function(){ //CreatePlaylist
    $("#playlistP").load("createPlaylist.html");
});

$(function(){ //Scroll Studio
    $("#gridScrollS").load("gridScrollStudio.html")
});



function loaded() {

    document.getElementById('expand').onclick = function(e) {
            
        if(document.getElementById('containerFull').className==="hidden") {
            var bgToggle = document.getElementById('containerFull');
            document.getElementById('containerFull').className = '';
            document.getElementById('container').className = 'hidden';
        
        }

        else if(document.getElementById('container').className==="hidden") {
            var bgToggle = document.getElementById('container');
            document.getElementById('container').className = '';
            document.getElementById('containerFull').className = 'hidden';
        
        }


        if(document.getElementById('search__box-expanded').className==="hidden") {
            var bgToggle = document.getElementById('search__box-expanded');
            document.getElementById('search__box-expanded').className = '';
            document.getElementById('search__box').className = 'hidden';
        
        }

        else if(document.getElementById('search__box').className==="hidden") {
            var bgToggle = document.getElementById('search__box');
            document.getElementById('search__box').className = '';
            document.getElementById('search__box-expanded').className = 'hidden';
        
        }
    };




    var showBar = document.getElementById("one");
                        alert(event.target.id);
                        if (showBar.id == event.target.id) {
                            alert("y");
                        }

}

//
// window functions
//

var internalmodal; //dfined

window.onclick = function(event) {
    try {
    if (event.target == internalmodal) {
      internalmodal.style.display = "none";
    }
    if (event.target == modal) {
      modal.style.display = "none";
      $("#suboverlay").empty();
      modal = document.getElementById("modal");
    }
    else if (event.target == leaveID) {
      modal.style.display = "none";
      $("#suboverlay").load("exitProfile.html");
    }
    else if (event.target == helpID) {
      modal.style.display = "none";
      $("#suboverlay").load("helpProfile.html");
    }
    else if (event.target == settingsID) {
      modal.style.display = "none";
      $("#suboverlay").load("settingsProfile.html");
    }
    else if (event.target == settingsDeleteID) {
      modal.style.display = "none";
      $("#suboverlay").load("deleteProfile.html");
    }
    } catch (e) {
        console.log();
  }
  
}