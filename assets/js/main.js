// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  myFunction();
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    stickyNavbar.style.backgroundColor = "#ffffff";
    stickyNavbar.style.transitionDuration = "3s";
  } else {
    stickyNavbar.style.transitionDuration = "3s";
    stickyNavbar.style.backgroundColor = "#00c851 !important";
  }
}

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

// scroll to top
let btn = $("#backtoTop");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});

// loader
window.addEventListener("load", () => {
  const preloader = document.querySelector(".preloader");
  preloader.classList.add("preload-finish");
});
