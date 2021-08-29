var modalC = document.getElementById("modal");
var showC = document.getElementById("profile");
var backArrowC = document.getElementsByClassName("close")[0];

backArrowC.onclick = function() {
  
}

window.onclick = function(event) {
  if (event.target == modalC) {
    
    modal.style.display = "none";
    $("#leave").empty();
  }
}