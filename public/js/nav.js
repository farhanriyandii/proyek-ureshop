window.addEventListener("scroll", function(){
    var nav = document.getElementsByClassName("navbar");
    nav.classList.toggle("sticky", window.scrollY > 0);
  })