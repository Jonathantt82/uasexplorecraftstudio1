const slider = document.querySelector('.slider');  
const slides = document.querySelectorAll('.slides img');  
const prevArrow = document.querySelector('.prev-arrow');  
const nextArrow = document.querySelector('.next-arrow');  
let currentSlide = 0;  
  
// Initialize the first slide  
slides[0].classList.add('active');  
  
// Next arrow click event  
nextArrow.addEventListener('click', () => {  
  slides[currentSlide].classList.remove('active');  
  currentSlide = (currentSlide + 1) % slides.length;  
  slides[currentSlide].classList.add('active');  
});  
  
// Prev arrow click event  
prevArrow.addEventListener('click', () => {  
  slides[currentSlide].classList.remove('active');  
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;  
  slides[currentSlide].classList.add('active');  
});
