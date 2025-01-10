"use strict";


$(function () {
  $(".slider__inner").slick({
    prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
    infinite: false,
  });
  $("select").styler();
  $(".news__slider-inner").slick({
    prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
    infinite: false,
  });

  $(".header__btn-menu").on("click", function () {
    $(".menu ul").slideToggle();
  });
});





const ERROR_MESSAGE = "Some Error!";
const SUCCESS_MESSAGE = "Successfuly send!";
const form = document.querySelector(".form");
form.addEventListener("submit", formSend);

async function formSend(event) {
  event.preventDefault();
  const formData = new FormData(form);

  let response = await fetch("php/send.php", {
    method: "POST",
    body: formData,
    mode: 'no-cors'
  });
 
  if (response.ok) {
    colorMessage = "linear-gradient(to right, #00b09b, #96c93d)";
    showTostMessage(SUCCESS_MESSAGE, colorMessage);
    form.reset();
  } else {
    colorMessage = "linear-gradient(to right, red, red)";
    showTostMessage(ERROR_MESSAGE, colorMessage);
  }
}

function showTostMessage(message, colorMessage) {
  Toastify({
    text: message,
    duration: 5000,
    newWindow: true,
    className: "toast-message",
    close: true,
    gravity: "top",
    position: "center",
    stopOnFocus: true,
    style: {
      background: colorMessage,
    },
  }).showToast();
}