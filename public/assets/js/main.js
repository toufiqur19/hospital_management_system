// hamberger section start
const nav_item = document.getElementById("nav_item");
const nav_bar = document.getElementById("hamberger");

nav_bar.addEventListener("click", () => {
  nav_item.classList.toggle("hidden");
});

// slider section start

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

// slider section end

// testimonial section start
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: -20,
  freeMode: true,
  autoplay: {
        delay:3000,
      },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints:{
        0:{
          slidesPerView:1
        },
        768:{
          slidesPerView:2,
        }
      }
});
// testimonial section end 
