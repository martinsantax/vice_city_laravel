window.onload = function () {

var frames = document.querySelectorAll('.product img');
function changeSpan(allSpan){
  for ([i, span] of allSpan.entries()) {
    if (i % 2 === 0) {
			span.style.webkitBboxShadow = "0px 0px 34px 4px rgba(104,199,206,0.82)",
			span.style.mozBoxShadow = "0px 0px 34px 4px rgba(104,199,206,0.82",
		 	span.style.boxShadow = "0px 0px 34px 4px rgba(104,199,206,0.82)"
    } else {
      span.style.webkitBboxShadow = "0px 0px 34px 4px rgba(255,255,255,0.82)",
			span.style.mozBoxShadow = "0px 0px 34px 4px rgba(255,255,255,0.82)",
		 	span.style.boxShadow = "0px 0px 34px 4px rgba(255,255,255,0.82)"
    }
  }
 }
 changeSpan(frames);


//___SLIDER___//

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n)
};

function currentSlide(n) {
  showSlides(slideIndex = n)
};

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  };


}
