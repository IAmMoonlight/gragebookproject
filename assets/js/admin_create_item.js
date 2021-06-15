(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/assets/js/admin_create_item"],{

/***/ "./src/js/others/forms/admin_create_item.js":
/*!**************************************************!*\
  !*** ./src/js/others/forms/admin_create_item.js ***!
  \**************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./common */ "./src/js/others/forms/common.js");

window.addEventListener('load', function () {
  if (this.document.querySelector('.form_admin_create_item')) {
    Object(_common__WEBPACK_IMPORTED_MODULE_0__["initCheckInput"])();
    Object(_common__WEBPACK_IMPORTED_MODULE_0__["checkEmptyTextareas"])(document.querySelectorAll('.form_block__textarea'));
    var name_item = document.querySelector('.form_block__input[type=input]');
    var correctNameItem = false;
    name_item.addEventListener('input', function (event) {
      var value = event.target.value;

      if (value.trim().length > 0) {
        correctNameItem = true;
      } else {
        correctNameItem = false;
      }

      if (correctNameItem) {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
      } else {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
      }
    });
  }
});

/***/ }),

/***/ "./src/js/others/forms/common.js":
/*!***************************************!*\
  !*** ./src/js/others/forms/common.js ***!
  \***************************************/
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

/***/ 4:
/*!********************************************************!*\
  !*** multi ./src/js/others/forms/admin_create_item.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\OpenServer\domains\gragebookproject\src\js\others\forms\admin_create_item.js */"./src/js/others/forms/admin_create_item.js");


/***/ })

},[[4,"/assets/js/manifest"]]]);