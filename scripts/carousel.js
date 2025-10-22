const wrapper = document.querySelector('.carousel-wrapper');
const slides = document.querySelectorAll('.carousel-slide');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');
const dots = document.querySelectorAll('.carousel-dots');


let currentSlide = 0;

function goToSlide(index) {
  // nastav transform přímo na cílový slide
  wrapper.style.transition = 'transform 0.5s ease-in-out'; // animace
  wrapper.style.transform = `translateX(-${100 * index}%)`;
  currentSlide = index;
  dots.forEach(dot => dot.classList.remove('dots-active'));
  dots[currentSlide].classList.add('dots-active');
}

// inicializace
goToSlide(currentSlide);

// šipka doprava
next.addEventListener('click', () => {
  const nextSlide = (currentSlide + 1) % slides.length;
  goToSlide(nextSlide);
});

// šipka doleva
prev.addEventListener('click', () => {
  const prevSlide = (currentSlide - 1 + slides.length) % slides.length;
  goToSlide(prevSlide);
});


dots.forEach((dot, index) =>{
  dot.addEventListener('click', ()=>{
    goToSlide(index);
  })
  
})