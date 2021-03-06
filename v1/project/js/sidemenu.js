let navExpand = document.querySelector(".nav__expand");

navExpand.addEventListener("click", () => {
  nav.classList.toggle("nav-closed");
});


var url = window.location.href.split("/").pop(); //Gets url.html
var x = document.getElementsByTagName("a");

for(var i=0; i < x.length; i++) {
  //No need to wipe active because js reloads everytime and clears active.
  if(x[i].href.split("/").pop() === url) {
    if (x[i].closest("li").classList.contains("nav__listitem-active")) {
      //x[i].closest("li").classList.remove("nav__listitem-active");
    }
      x[i].closest("li").classList.add("nav__listitem-active"); //adds active
  }
}

//Here code throws error of reading classList null
//on first load. For some reason, jquery cant get
//class on liveserver on first load and doesnt select
//anything, but after changing page works fine.
//Maybe because there's no default selection for
//active tab?