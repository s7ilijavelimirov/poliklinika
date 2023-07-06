/******/ (() => { // webpackBootstrap
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************!*\
  !*** ./js/src/main.js ***!
  \************************/
jQuery(document).ready(function ($) {
  var spaceHolder = document.querySelector('.space-holder');
  var horizontal = document.querySelector('.horizontal');
  spaceHolder.style.height = "".concat(calcDynamicHeight(horizontal), "px");
  function calcDynamicHeight(ref) {
    var vw = window.innerWidth;
    var vh = window.innerHeight;
    var objectWidth = ref.scrollWidth;
    return objectWidth - vw + vh + 500; // 150 is the padding (in pixels) desired on the right side of the .cards container. This can be set to whatever your styles dictate
  }

  window.addEventListener('scroll', function () {
    var sticky = document.querySelector('.sticky');
    horizontal.style.transform = "translateX(-".concat(sticky.offsetTop, "px)");
  });
  window.addEventListener('resize', function () {
    spaceHolder.style.height = "".concat(calcDynamicHeight(horizontal), "px");
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***************************!*\
  !*** ./css/src/main.scss ***!
  \***************************/
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin

})();

/******/ })()
;
//# sourceMappingURL=main.min.d280e441105a1059996b.js.map