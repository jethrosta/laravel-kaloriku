/*
var countdownNumberEl = document.getElementById('countdown-number');
var countdown = 30;

var responsiveSlider = function() {

    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    var circle = document.getElementsByTagName("circle");

countdownNumberEl.textContent = countdown;

setInterval(function() {
    countdown = --countdown <= 0 ? 30 : countdown;

    countdownNumberEl.textContent = countdown;
}, 1000);




    window.addEventListener('resize', function() {
        sliderWidth = slider.offsetWidth;
    });

    if (countdown === 31) {
        circle[0].style.animation = "countdown 1s forwards";
    }
    circle[0].addEventListener("animationend", function(){
        circle[0].style.animation = "none";
        circle[0].style.strokeDashoffset = "113px";
    });
    var prevSlide = function() {
        if(count > 1) {
            count = count - 2;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
        else if(count = 1) {
            count = items - 1;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
    };



    var nextSlide = function() {
        if(count < items) {
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
        else if(count = items) {
            slideList.style.left = "0px";
            count = 1;
        }
        if (countdown === 31) {
            circle[0].style.strokeDashoffset = "113px";
        }
    };

    next.addEventListener("click", function() {
        event.preventDefault()
        nextSlide();
        countdown = 31;
    });

    prev.addEventListener("click", function() {
        event.preventDefault()
        prevSlide();
        countdown = 31;
    });

    setInterval(function() {
        nextSlide()
    }, 31000);
    countdown = 31;

};

window.onload = function() {
    responsiveSlider();
}
*/
var prev = document.getElementById("prev");
var next = document.getElementById("next");

let currentSlide = 0;
let slides = document.querySelectorAll('.slider__item');
let timerIntervalId = setInterval(updateTimerAndSlide, 1000);
let timerDuration = slides[currentSlide].getAttribute('data-timer-duration');
let remainingTime = timerDuration;

let duration = slides[currentSlide].dataset.timerDuration;
document.querySelector("svg circle").style.animation = `countdown ${duration}s linear forwards`;

document.querySelector('.slider__prev').addEventListener('click', prevSlide);
document.querySelector('.slider__next').addEventListener('click', nextSlide);

function prevSlide() {
    slides.forEach(slide => slide.classList.remove('active'));
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    number.innerText = `${currentSlide + 1}/${slides.length}`;
}

function nextSlide() {
    clearInterval(timerIntervalId);
    slides.forEach(slide => slide.classList.remove('active'));
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
    remainingTime = slides[currentSlide].getAttribute('data-timer-duration');
}

function updateTimerAndSlide() {
    remainingTime--;
    document.getElementById("timer").innerText = remainingTime;
    if (remainingTime  <= 0) {
        if (currentSlide === slides.length - 1) {
            clearInterval(timerIntervalId);
            setTimeout(() => {
                window.location.href = "exercises/endPage";
            }, 3000);
        } else {
            clearInterval(timerIntervalId);
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
            remainingTime = slides[currentSlide].getAttribute('data-timer-duration');
            timerIntervalId = setInterval(updateTimerAndSlide, 1000);
        }
    }
}


function redirectToEndPage() {
    remainingTime--;
    if (remainingTime === 0) {
        clearInterval(timerIntervalId);
        window.location.href = "endPage.html";
    }
}
