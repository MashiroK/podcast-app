var internalmodal = document.getElementById("modalPodcast");
var createPodcast = document.getElementById("createStudio");
var backArrowPodcast = document.getElementsByClassName("closePodcast")[0];


createPodcast.onclick = function() {
  internalmodal.style.display = "block";
  
}

backArrowPodcast.onclick = function() {
  internalmodal.style.display = "none";
}

//Re-code JS more organized in next iteration
//Currently a lot of elements and vars are spread across
//multiple files, instead of general functions, making
//it poorly readable.