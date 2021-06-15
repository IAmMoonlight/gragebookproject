(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/assets/js/attendance"],{

/***/ "./src/js/others/forms/attendance.js":
/*!*******************************************!*\
  !*** ./src/js/others/forms/attendance.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./common */ "./src/js/others/forms/common.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


window.addEventListener('load', function () {
  var _this = this;

  if (this.document.querySelector('.table_item_file')) {
    (function () {
      var btns_upload_file = document.querySelectorAll('.table_item_file');
      var uploader_file = document.querySelector('.upload_file_wrapper');

      var _iterator = _createForOfIteratorHelper(btns_upload_file),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var btn_upload_file = _step.value;
          btn_upload_file.addEventListener('click', function () {
            uploader_file.classList.remove('hide');
          });
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }

      if (_this.document.querySelector('.upload_file_wrapper')) {
        Object(_common__WEBPACK_IMPORTED_MODULE_0__["initCheckInput"])();
        var close_upload_file = document.querySelector('.btn_close_upload');
        var file = document.querySelector('.form_block__input[type=file]');
        var date = document.querySelector('.form_block__input[type=date]');
        var correctFile = false;
        var correctDate = false;
        close_upload_file.addEventListener('click', function () {
          uploader_file.classList.add('hide');
        });
        file.addEventListener('input', function (event) {
          var value = event.target.value;

          if (value.trim().length > 0) {
            correctFile = true;
          } else {
            correctFile = false;
          }

          if (correctFile && correctDate) {
            Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
          } else {
            Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
          }
        });
        date.addEventListener('input', function (event) {
          var value = event.target.value;

          if (value.trim().length > 0) {
            correctDate = true;
          } else {
            correctDate = false;
          }

          if (correctFile && correctDate) {
            Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(true);
          } else {
            Object(_common__WEBPACK_IMPORTED_MODULE_0__["canSubmit"])(false);
          }
        });
      }
    })();
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

/***/ 5:
/*!*************************************************!*\
  !*** multi ./src/js/others/forms/attendance.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\OpenServer\domains\gradebook\src\js\others\forms\attendance.js */"./src/js/others/forms/attendance.js");


/***/ })

},[[5,"/assets/js/manifest"]]]);