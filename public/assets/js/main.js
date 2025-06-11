var slide = document.getElementById("slide");
var slideItems = slide.getElementsByClassName("slide-item");
var slideTitle = document.getElementsByClassName("slide-title");
var slideText = document.getElementsByClassName("slide-text");
var current = 0;

function prevSlide() {
    // Move to previous slide
    slideItems[current].classList.remove("active");
    current = (current > 0) ? current - 1 : slideItems.length - 1;
    slideItems[current].classList.add("active");
    slideTitle[current].classList.add("active");
    slideText[current].classList.add("active");
}

function nextSlide() {
    // Move to next slide
    slideItems[current].classList.remove("active");
    current = (current < slideItems.length - 1) ? current + 1 : 0;
    slideItems[current].classList.add("active");
    slideTitle[current].classList.add("active");
    slideText[current].classList.add("active");
}

// Add event listeners for prev/next buttons
document.getElementById("prev").addEventListener("click", prevSlide);
document.getElementById("next").addEventListener("click", nextSlide);






/*Calendar*/

