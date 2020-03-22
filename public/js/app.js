/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _dropdowns__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dropdowns */ "./resources/js/dropdowns.js");
/* harmony import */ var _modals__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modals */ "./resources/js/modals.js");
// require('./bootstrap');


Object(_dropdowns__WEBPACK_IMPORTED_MODULE_0__["default"])();
Object(_modals__WEBPACK_IMPORTED_MODULE_1__["default"])();

/***/ }),

/***/ "./resources/js/dropdowns.js":
/*!***********************************!*\
  !*** ./resources/js/dropdowns.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

var dropdowns = function dropdowns() {
  var activeClass = 'is-active';

  var dropdowns = _toConsumableArray(document.querySelectorAll('.dropdown-js'));

  function closeAll() {
    dropdowns.forEach(function (dropdown) {
      return dropdown.classList.remove(activeClass);
    });
  }

  function toggle() {
    var _this = this;

    dropdowns.forEach(function (dropdown) {
      if (_this === dropdown) {
        dropdown.classList.toggle(activeClass);
      } else {
        dropdown.classList.remove(activeClass);
      }
    });
  }

  function selectValue(event, dropdown) {
    if (event.target.nodeName.toLowerCase() === 'li') {
      var value = event.target.getAttribute('data-value');
      var dropdownSpan = dropdown.querySelector('span');
      var dropdownInput = dropdown.querySelector('input');
      dropdownSpan.textContent = value;
      dropdownInput.setAttribute('value', value);
    }
  }

  dropdowns.forEach(function (dropdown) {
    var dropdownList = dropdown.querySelector('ul');
    dropdown.addEventListener('click', toggle);
    dropdownList.addEventListener('click', function () {
      return selectValue(event, dropdown);
    });
  });
};

/* harmony default export */ __webpack_exports__["default"] = (dropdowns);

/***/ }),

/***/ "./resources/js/modals.js":
/*!********************************!*\
  !*** ./resources/js/modals.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var modals = function modals() {
  var activeClass = 'is-active';

  function createModal(modalClass, modalBtnClass) {
    var wrapper = document.querySelector(modalClass);
    var main = wrapper.querySelector('.modal-main');
    var openBtn = document.querySelector(modalBtnClass);
    var closeBtn = wrapper.querySelector('.modal-close-js');
    return {
      wrapper: wrapper,
      main: main,
      openBtn: openBtn,
      closeBtn: closeBtn
    };
  }

  var modalLogin = createModal('.modal-login-js', '.modal-login-btn-js');
  var modalRegister = createModal('.modal-register-js', '.modal-register-btn-js');

  function open(modal) {
    modal.wrapper.classList.add('is-active');
  }

  function close(modal) {
    modal.wrapper.classList.remove('is-active');
  }

  function clickOutside(event, modal) {
    var isClickInside = modal.main.contains(event.target);

    if (!isClickInside) {
      close(modal);
    }
  } // modalLogin.openBtn.addEventListener('click', () => open(modalLogin));
  // modalLogin.closeBtn.addEventListener('click', () => close(modalLogin));
  // modalLogin.wrapper.addEventListener('click', () => clickOutside(event, modalLogin));
  // modalRegister.openBtn.addEventListener('click', () => open(modalRegister));
  // modalRegister.closeBtn.addEventListener('click', () => close(modalRegister));
  // modalRegister.wrapper.addEventListener('click', () => clickOutside(event, modalRegister));

};

/* harmony default export */ __webpack_exports__["default"] = (modals);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Programing\Job-board\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Programing\Job-board\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });