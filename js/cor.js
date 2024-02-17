function vtog(v) {
  // (A) CLOSE FULLSCREEN
  if (v === false) {
    let vid = document.querySelector(".gallery .full");
    vid.classList.remove("full");
    vid.controls = false;
    vid.pause();
    document.getElementById("vClose").classList.remove("show");
  }

  // (B) ENGAGE FULLSCREEN
  else if (!v.classList.contains("full")) {
    v.classList.add("full");
    v.controls = true;
    v.play();
    vdocument.getElementById("vClose").classList.add("show");
  }
}

// (C) INIT - CLICK TO FULLSCREEN
window.addEventListener("load", () => {
  for (let v of document.querySelectorAll(".gallery video")) {
    v.onclick = () => vtog(v);
  }
});
