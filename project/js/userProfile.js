var modal = document.getElementById("modal");
var show = document.getElementById("profileUsr");
var backArrow = document.getElementsByClassName("close")[0];
var modalOld;


show.onclick = function() {
  modal.style.display = "block";
  
}

backArrow.onclick = function() {
  modal.style.display = "none";

  if ($("#exists").length > 0){ //Check if page exists
    $("#suboverlay").empty();
    modal = document.getElementById("modal");
    modal.style.display = "block";
  }
  else if ($("#exists2").length > 0){ //Checks if subpage exists
    $("#suboverlay").load("settingsProfile.html");
    modal = document.getElementById("modal");
    modal.style.display = "block";
  }
}

window.onclick = function(event) {
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

}

