var internalmodal = document.getElementById("modalUpload");
var uploadPodcast = document.getElementById("upload");
var backArrowUpload = document.getElementsByClassName("closeUpload")[0];

uploadPodcast.onclick = function() {
  internalmodal.style.display = "block";
  
}

backArrowUpload.onclick = function() {
  internalmodal.style.display = "none";
}

//Re-code JS more organized in next iteration
//Currently a lot of elements and vars are spread across
//multiple files, instead of general functions, making
//it poorly readable.