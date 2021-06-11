(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/reset"],{

/***/ "./resources/js/others/forms/common.js":
/*!*********************************************!*\
  !*** ./resources/js/others/forms/common.js ***!
  \*********************************************/
/*! exports provided: canSubmit, checkEmptyTextareas, initCheckInput */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "canSubmit", function() { return canSubmit; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "checkEmptyTextareas", function() { return checkEmptyTextareas; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initCheckInput", function() { return initCheckInput; });
var canSubmit = function canSubmit(correct) {
  var btn = document.querySelector(".btn_submit");

  if (correct) {
    btn.classList.add("btn_submit_active");
    btn.removeAttribute('disabled');
  } else {
    if (btn.classList.contains('btn_submit_active')) {
      btn.classList.remove('btn_submit_active');
    }

    if (!btn.hasAttribute('disabled')) {
      btn.setAttribute('disabled', 'disabled');
    }
  }
};
var checkEmptyTextareas = function checkEmptyTextareas(textareas) {
  var _loop = function _loop(i) {
    textareas[i].onchange = function () {
      if (textareas[i].value.trim().length !== 0) {
        textareas[i].classList.add('has-val');
      } else {
        textareas[i].classList.remove('has-val');
      }
    };
  };

  for (var i = 0; i < textareas.length; i++) {
    _loop(i);
  }
}; // function addListenerToChangeDateField(dateInputs){
//     for(let i = 0; i < dateInputs.length; i++){
//         dateInputs[i].addEventListener('changeDate', function(e){
//             let inputEvent = e.target;
//             if(inputEvent.value.trim().length !== 0){
//                 inputEvent.classList.add('has-val');
//             }else{
//                 inputEvent.classList.remove('has-val');
//             }
//         });
//     }
// }

function checkEmptyInputs(inputs) {
  var _loop2 = function _loop2(i) {
    inputs[i].addEventListener('change', function () {
      // inputs[i].onchange = function(){
      var closest_choices = inputs[i].closest('.choices');

      if (inputs[i].value.trim().length !== 0) {
        inputs[i].classList.add('has-val');

        if (closest_choices) {
          closest_choices.classList.add('has-val');
        }
      } else {
        inputs[i].classList.remove('has-val');

        if (closest_choices) {
          closest_choices.classList.remove('has-val');
        }
      } // }

    });
  };

  for (var i = 0; i < inputs.length; i++) {
    _loop2(i);
  }
}

var initCheckInput = function initCheckInput() {
  var inputs = document.querySelectorAll('.form_block input');

  if (inputs.length > 0) {
    checkEmptyInputs(inputs);
  }
};

/***/ }),

/***/ "./resources/js/others/forms/reset.js":
/*!********************************************!*\
  !*** ./resources/js/others/forms/reset.js ***!
  \********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./common */ "./resources/js/others/forms/common.js");

window.addEventListener('load', function () {
  if (this.document.querySelector('.reset_form')) {
    Object(_common__WEBPACK_IMPORTED_MODULE_0__["initCheckInput"])();
    var email = document.querySelector('.form_block__input[type=email]');
    var password = document.querySelector('.form_block__input[type=password]');
    var repeat_pswd = document.querySelector('.repeat_pswd');
    var pswd1 = '';
    var pswd2 = '';
    var correctEmail = false;
    var correctPassword = false;
    var correctRepeatPswd = false;
    email.addEventListener('input', function (event) {
      var value = event.target.value;

      if (/@/.test(value.trim())) {
        correctEmail = true;
      } else {
        correctEmail = false;
      }

      if (correctPassword && correctEmail && correctRepeatPswd && pswd1 == pswd2) {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
      } else {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
      }
    });
    password.addEventListener('input', function (event) {
      pswd1 = event.target.value;

      if (/^[0-9A-z_#.]{8,40}$/.test(pswd1.trim())) {
        correctPassword = true;
      } else {
        correctPassword = false;
      }

      if (correctPassword && correctEmail && correctRepeatPswd && pswd1 == pswd2) {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
      } else {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
      }
    });
    repeat_pswd.addEventListener('input', function (event) {
      pswd2 = event.target.value;

      if (/^[0-9A-z_#.]{8,40}$/.test(pswd2.trim())) {
        correctRepeatPswd = true;
      } else {
        correctRepeatPswd = false;
      }

      if (correctPassword && correctEmail && correctRepeatPswd && pswd1 == pswd2) {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
      } else {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
      }
    });
  }
});

/***/ }),

/***/ 2:
/*!**************************************************!*\
  !*** multi ./resources/js/others/forms/reset.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\server\serverMySQl\domains\gragebookproject\resources\js\others\forms\reset.js */"./resources/js/others/forms/reset.js");


/***/ })

},[[2,"/js/manifest"]]]);