//Main page for JS functions such as sidemenu load, searchbar load and user load

$(function(){
    $("#navP").load("sidemenu.html", function() { //Sidemenu Callback
        $("#searchP").load("searchbar.html", function() { //Searchbar Callback
        
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
        });

        $(function(){
            $("#songP").load("songBar.html", function() { //Nested songBar Attributes
                window.addEventListener('click', function(event) { //Fix from click to load somehow

                    var nav = document.getElementById("nav");
                    if (nav.classList.contains("nav-closed")) {
                        $( "#gridChange" ).css("grid-template-columns", " 80px minmax(200px, 340px) minmax(150px, 1fr) minmax(80px, 120px)");
                    }
                    else {
                        $( "#gridChange" ).css("grid-template-columns", " 300px minmax(200px, 340px) minmax(150px, 1fr) minmax(80px, 120px)");
                    }
                    
                    $(function(){ //Loads songBar into any page with gridScroll
                        $("#gridScrollDoppel2").load("gridScroll.html", function() {
                            $("#gridScrollDoppel").load("gridScroll.html", function() {
                                var showBar = document.querySelectorAll("div.box > a");
                                showBar.forEach(boxy => {
                                    if ((event.target.type != "") && (boxy.type == event.target.type)) {
                                        songBar.style.display = "block";
                                    }
                                });
                            });
                        });
                    });

                    $(function(){ //Loads songBar into any page with listScroll
                        $("#listScrollDoppel").load("listScroll.html", function() {
                            var showBar = document.querySelectorAll("div.boxf > a");
                            showBar.forEach(boxy => {
                                if ((event.target.type != "") && (boxy.type == event.target.type)) {
                                    songBar.style.display = "block";
                                }
                            });
                        });
                    });
                
                });
            });
        });
    });

});


$(function(){ //User Callback (Just load-async)
    $("#userP").load("userProfile.html", function() {
    
});
});

$(function(){ //Change to sync gridScroll
    $("#gridScrollP2").load("gridScroll.html", function() {
        
    });
});
$(function(){ 
    $("#gridScrollP").load("gridScroll.html", function() {
       
    });
});

$(function(){ //Change to sync listScroll
    $("#listScrollP2").load("listScroll.html", function() {

    });
});
$(function(){ 
    $("#listScrollP").load("listScroll.html", function() {
    
    });
});

$(function(){ //CreatePlaylist
    $("#playlistP").load("createPlaylist.html");
});

$(function(){ //Scroll Studio
    $("#gridScrollS").load("gridScrollStudio.html")
});



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