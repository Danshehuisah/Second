const photoInput = document.getElementById('photoInput');
const preview = document.getElementById('preview');

// Load saved photo on page load
window.addEventListener('DOMContentLoaded', function () {
  const savedPhoto = localStorage.getItem('userPhoto');
  if (savedPhoto) {
    preview.src = savedPhoto;
  }

  // Update profile preview
photoInput.addEventListener('change', function () {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', function () {
      preview.src = reader.result;
      localStorage.setItem('userPhoto', reader.result);
    });
    reader.readAsDataURL(file);
  }
});



  // Animate left and right sections on load
  const right = document.querySelector('.right');
  const left = document.querySelector('.left');
  setTimeout(() => {
    left.classList.add('animate');
  }, 100);
  setTimeout(() => {
    right.classList.add('animate');
  }, 300);

  // Handle scrolling text animation only if it overflows
  document.querySelectorAll('.info').forEach(info => {
    const text = info.querySelector('.name');
    const containerWidth = info.clientWidth;
    const textWidth = text.scrollWidth;

    if (textWidth > containerWidth) {
      const scrollDistance = containerWidth - textWidth;
      text.style.setProperty('--scroll-distance', `${scrollDistance}px`);
      text.classList.add('animate-scroll');
    }
  });
});


