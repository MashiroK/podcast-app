var internalmodal = document.getElementById("modal-internal");
var createPlaylist = document.getElementById("createPlaylist");
var createPlaylist2 = document.getElementById("createPlaylist2");
var backArrowInternal = document.getElementsByClassName("close-internal")[0];


createPlaylist.onclick = function() {
  internalmodal.style.display = "block";
  
}
createPlaylist2.onclick = function() {
  internalmodal.style.display = "block";
  
}

backArrowInternal.onclick = function() {
  internalmodal.style.display = "none";
}

//Re-code JS more organized in next iteration
//Currently a lot of elements and vars are spread across
//multiple files, instead of general functions, making
//it poorly readable.