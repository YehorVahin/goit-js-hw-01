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

// document.addEventListener("DOMContentLoaded", function () {
// 	const form = document.getElementById("form");
// 	form.addEventListener("submit", formSend);

// 	async function formSend(e) {
// 		e.preventDefault();

// 		let error = formValidate(form);

// 		let formData = new formData(form);

// 		if (error === 0) {
// 			form.classList.add("_sending");
// 			let response = await fetch("send.php", {
// 				method: "POST",
// 				body: formData,
// 			});
// 			if (response.ok) {
// 				let result = await response.json();
// 				alert(result.message);
// 				form.reset();
// 				form.classList.remove("_sending");
// 			} else {
// 				alert("Error");
// 				form.classList.remove("_sending");
// 			}
// 		} else {
// 			alert("Complete the required fields");
// 		}
// 	}

// 	function formValidate(form) {
// 		let error = 0;
// 		let formReq = document.querySelectorAll("._req");

// 		for (let index = 0; index < formReq.length; index++) {
// 			const input = formReq[index];
// 			formRemoveError(input);

// 			if (input.classList.contains("_email")) {
// 				if (emailTest(input)) {
// 					formAddError(input);
// 					error++;
// 				}
// 			} else if (
// 				input.getAttribute("type") === "checkbox" ||
// 				input.checked === false
// 			) {
// 				formAddError(input);
// 				error++;
// 			} else {
// 				if (input.value === "") {
// 					formAddError(input);
// 					error++;
// 				}
// 			}
// 		}
// 		return error;
// 	}

// 	function formAddError(input) {
// 		input.parentElement.classList.add("_error");
// 		input.classList.add("_error");
// 	}
// 	function formRemoveError(input) {
// 		input.parentElement.classList.remove("_error");
// 		input.classList.remove("_error");
// 	}

// 	function emailTest(input) {
// 		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
// 	}
// });
const ERROR_MESSAGE = "Some Error!";
const SUCCESS_MESSAGE = "Successfuly send!";
const form = document.querySelector(".form");
form.addEventListener("submit", formSend);

async function formSend(event) {
  event.preventDefault();
  const formData = new FormData(form);

  let response = await fetch("../php/send.php", {
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
