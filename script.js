function responsiveNav() {
  var x = document.getElementById("site-navigation");
  if (x.className === "main-navigation") {
    x.className += " responsive";
  } else {
    x.className = "main-navigation";
  }
}
