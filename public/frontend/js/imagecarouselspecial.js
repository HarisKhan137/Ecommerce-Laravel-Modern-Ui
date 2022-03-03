const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");
const indicator = document.querySelector(".indicators");

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = "translateX(" + -size * counter + "px)";

nextBtn.addEventListener("click", () => {
  if (counter >= carouselImages.length - 1) return;
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter++;
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  if (counter == 4) {
    $("#img1").addClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 2) {
    $("#img1").removeClass("opacity");
    $("#img2").addClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 3) {
    $("#img1").removeClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").addClass("opacity");
  }
});

prevBtn.addEventListener("click", () => {
  if (counter <= 0) return;
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter--;
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  if (counter == 4) {
    $("#img1").addClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 2) {
    $("#img1").removeClass("opacity");
    $("#img2").addClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 3) {
    $("#img1").removeClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").addClass("opacity");
  }
});

carouselSlide.addEventListener("transitionend", () => {
  if (carouselImages[counter].id === "lastClone") {
    carouselSlide.style.transition = "none";
    counter = carouselImages.length - 2;
    carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  }
  if (carouselImages[counter].id === "firstClone") {
    carouselSlide.style.transition = "none";
    counter = carouselImages.length - counter;
    carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  }
});

function slider() {
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter++;
  // console.log(counter);
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  if (counter == 4) {
    $("#img1").addClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 2) {
    $("#img1").removeClass("opacity");
    $("#img2").addClass("opacity");
    $("#img3").removeClass("opacity");
  } else if (counter == 3) {
    $("#img1").removeClass("opacity");
    $("#img2").removeClass("opacity");
    $("#img3").addClass("opacity");
  }
}

setInterval(slider, 8000);

function img1() {
  if (counter >= carouselImages.length - 1) return;
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter = 1;
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";

  $("#img1").addClass("opacity");
  $("#img2").removeClass("opacity");
  $("#img3").removeClass("opacity");
}

function img2() {
  if (counter >= carouselImages.length - 1) return;
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter = 2;
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  $("#img1").removeClass("opacity");
  $("#img2").addClass("opacity");
  $("#img3").removeClass("opacity");
}

function img3() {
  if (counter >= carouselImages.length - 1) return;
  carouselSlide.style.transition =
    "transform 1s cubic-bezier(0.22, 1.61, 0.65, 1)";
  counter = 3;
  carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
  $("#img1").removeClass("opacity");
  $("#img2").removeClass("opacity");
  $("#img3").addClass("opacity");
}
