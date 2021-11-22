var songBar = document.getElementById("song-bar");
var like = document.getElementById("heartBtn");
var playBtn = document.getElementById("playBtn");
var pauseBtn = document.getElementById("pauseBtn");
var closeBtn = document.getElementById("closeBtn");
//var showBar = document.getElementById("one");

like.onclick = function() {
    if (like.style.fill === "rgb(111, 91, 140)") {
        like.style.fill = "none";
    }
    else {
        like.style.fill = "#6F5B8C";
    }
}

playBtn.onclick = function() {
    playBtn.classList.add("hidden");
    pauseBtn.classList.remove("hidden");
}

pauseBtn.onclick = function() {
    pauseBtn.classList.add("hidden");
    playBtn.classList.remove("hidden");
}

closeBtn.onclick = function() {
    songBar.style.display = "none";
}

