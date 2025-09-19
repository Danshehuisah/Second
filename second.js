// Toggle Mobile Menu
// const menuBtn = document.querySelector('.dash-container');
// const nav = document.querySelector('nav');

// if (menuBtn && nav) {
//   menuBtn.addEventListener('click', () => {
//     menuBtn.classList.toggle('rotate');
//     nav.classList.toggle('display');
//   });
// }

// Smooth Scroll for nav links
// document.querySelectorAll('a[href^="#"]').forEach(link => {
//   link.addEventListener('click', e => {
//     e.preventDefault();
//     const target = document.querySelector(link.getAttribute('href'));
//     if (target) {
//       target.scrollIntoView({ behavior: 'smooth' });
//     }
//   });
// });

// ========== NAVBAR SCROLL EFFECT ==========
// window.addEventListener("scroll", () => {
//   const header = document.querySelector("header");
//   if (window.scrollY > 50) {
//     header.classList.add("scrolled");
//   } else {
//     header.classList.remove("scrolled");
//   }
// });



// ========== SMOOTH SCROLL FOR LINKS ==========
// document.querySelectorAll("a[href^='#']").forEach(anchor => {
//   anchor.addEventListener("click", function (e) {
//     e.preventDefault();
//     document.querySelector(this.getAttribute("href"))
//       .scrollIntoView({ behavior: "smooth" });
//   });
// });


// ========== TESTIMONIAL SLIDER ==========
// let currentTestimonial = 0;
// const testimonials = document.querySelectorAll(".testimonial-card");

// function showTestimonial(index) {
//   testimonials.forEach((t, i) => {
//     t.style.display = i === index ? "block" : "none";
//   });
// }

// function nextTestimonial() {
//   currentTestimonial = (currentTestimonial + 1) % testimonials.length;
//   showTestimonial(currentTestimonial);
// }

// Show first one
// showTestimonial(currentTestimonial);

// Change every 5 seconds
// setInterval(nextTestimonial, 5000);



// ========== CONTACT FORM SUBMIT ==========
// const form = document.querySelector(".contact form");

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   alert("Thank you! Your message has been received.");
//   form.reset();
// });



// ===== Mobile Nav Toggle =====
const menuBtn = document.querySelector('.dash-container');
const nav = document.getElementById('primary-nav');
const dashContainer = document.querySelector('.dash-container');
menuBtn.addEventListener('click', function () {


    menuBtn.classList.toggle('rotate');
    document.querySelector('ul').classList.toggle('display');
})

if (menuBtn && nav) {
  menuBtn.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    menuBtn.classList.toggle('rotate', isOpen);
    menuBtn.setAttribute('aria-expanded', String(isOpen));
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

}

  // Close menu when a link is clicked (mobile)
  nav.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      if (nav.classList.contains('open')) {
        nav.classList.remove('open');
        menuBtn.classList.remove('rotate');
        menuBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  });

// ===== Smooth Scroll (nice UX) =====
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    const id = link.getAttribute('href');
    const target = document.querySelector(id);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.pushState(null, '', id);
    }
  });
});
