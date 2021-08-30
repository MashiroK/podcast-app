var modal = document.getElementById("modal");
var show = document.getElementById("profileUsr");
var backArrow = document.getElementsByClassName("close")[0];


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

