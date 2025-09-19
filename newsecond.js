const menuBtn = document.querySelector('.dash-container');
const nav = document.getElementById('primary-nav');

if (menuBtn && nav) {
  menuBtn.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    menuBtn.classList.toggle('rotate', isOpen);
    menuBtn.setAttribute('aria-expanded', String(isOpen));
    // document.body.style.overflow = isOpen ? 'hidden' : '';
  });
}

document.addEventListener('click', (event) => {
  const isClickInsideNav = nav.contains(event.target);

  const isHamburger = menuBtn.contains(event.target);
  if (!isClickInsideNav && !isHamburger) {
    nav.classList.remove('open');
    menuBtn.classList.remove('rotate');
  }
})


let currentIndex = 0;
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle("active", i === index);
  });
}

prevBtn.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
});

nextBtn.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
});

// show first slide
showSlide(currentIndex);


const name = document.querySelector('#name');
const email = document.querySelector('#email');
const message = document.querySelector('#message');


// Which platform will be best for delivery of messages

