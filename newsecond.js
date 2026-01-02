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
});
const navLinks = document.querySelectorAll('#primary-nav');
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('open');
    menuBtn.classList.remove('rotate');
    menuBtn.setAttribute('aria-expanded', 'false');
});
});


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



function revealOnScroll () {
  const animElements = document.querySelectorAll('.anim');
  animElements.forEach(animElement => {
    const windowHeight = window.innerHeight;
    const sectionTop = animElement.getBoundingClientRect().top;
    if (windowHeight > sectionTop) {
      animElement.classList.add('sect-anim');
    } else {
      animElement.classList.remove('sect-anim');
    }
  })
}


window.addEventListener('load', revealOnScroll);
window.addEventListener('scroll', revealOnScroll);

window.addEventListener('scroll', () => {
  const topNav = document.querySelector('.nav-and-logo');
  topNav.style.height = '70px';
})


// window.addEventListener('DOMContentLoaded', function () {
//   const img = document.querySelector('#img');
  const photoInput = document.querySelector('#photoInput');

  // Load saved photo
  // const savedPhoto = localStorage.getItem('userPhoto');
  // if (savedPhoto) {
  //   img.src = savedPhoto;
  //   img.classList.add('loaded');
  // }

  // Preview new photo
  // photoInput.addEventListener('change', function () {
  //   const file = this.files[0];

  //   if (!file) return;

  //   const reader = new FileReader();
  //   reader.onload = function () {
  //     img.src = reader.result;
  //     img.classList.add('loaded');
  //     localStorage.setItem('userPhoto', reader.result);
  //   };

  //   reader.readAsDataURL(file);
  // });
// });

const theNavLinks = document.querySelectorAll('#primary-nav ul a');

theNavLinks.forEach(clickNav => {
  clickNav.addEventListener('click', () => {
      theNavLinks.forEach(addToClicked =>
        addToClicked.classList.remove('active'));
        clickNav.classList.add('active');
  })
}

)
