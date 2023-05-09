
function show_breakfast() {
  document.getElementById("breakfast").style.display="block"
  document.getElementById("lunch").style.display = "none";
  document.getElementById("dinner").style.display = "none";
  document.getElementById("drinks").style.display = "none";
}
function show_lunch() {
  document.getElementById("lunch").style.display = "block";
  document.getElementById("breakfast").style.display = "none";
  document.getElementById("dinner").style.display = "none";
  document.getElementById("drinks").style.display = "none";
}
function show_dinner() {
  document.getElementById("dinner").style.display = "block";
  document.getElementById("breakfast").style.display = "none";
  document.getElementById("lunch").style.display = "none";
  document.getElementById("drinks").style.display = "none";
}
function show_drinks() {
  document.getElementById("drinks").style.display = "block";
  document.getElementById("dinner").style.display = "none";
  document.getElementById("breakfast").style.display = "none";
  document.getElementById("lunch").style.display = "none";
}

let Index = 0;
ShowSlide();

function ShowSlide() {
  let i;
  let SlideMove = document.getElementsByClassName("mySlides");
  let Dot = document.getElementsByClassName("dot");
  for (i = 0; i < SlideMove.length; i++) {
    SlideMove[i].style.display = "none";  
  }
  Index ++;
  if (Index > SlideMove.length) {Index  = 1}    
  for (i = 0; i < Dot.length; i++) {
    Dot[i].className = Dot[i].className.replace(" active", "");
  }
  SlideMove[Index-1].style.display = "block";  
  Dot[Index-1].className += " active";
  setTimeout(ShowSlide, 2000); // Change image every 2 seconds
}
//let slideIndex2 = 1;
// showSlides2(slideIndex2);

// function currentSlide(n) {
//   showSlides2(slideIndex2 = n);
// }

// function showSlides2(n) {
//   let i;
//   let slides2 = document.getElementsByClassName("mySlides");
//   let dots2 = document.getElementsByClassName("dot");
//   if (n > slides2.length) {slideIndex2 = 1}    
//   if (n < 1) {slideIndex2 = slides2.length}
//   for (i = 0; i < slides2.length; i++) {
//     slides2[i].style.display = "none";  
//   }
//   for (i = 0; i < dots2.length; i++) {
//     dots2[i].className = dots2[i].className.replace(" active", "");
//   }
//   slides2[slideIndex2-1].style.display = "block";  
//   dots2[slideIndex2-1].className += " active";
// }



// let slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function showSlides(n) {
//   let item;
//   let SlideMove = document.getElementsByClassName("Slide");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (item = 0; item < slides.length; item++) {
//     slides[item].style.display = "none";  
//   }
 
//   slides[slideIndex-1].style.display = "flex";  

//
let slideIndex = 1;
showSlides(slideIndex);
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("w100");
  let dots = document.getElementsByClassName("dotted");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  

  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex"; 
  dots[slideIndex-1].className += " active";
}
