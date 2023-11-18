/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/script.js":
/*!**************************!*\
  !*** ./src/js/script.js ***!
  \**************************/
/***/ (function() {

eval("// レスポンシブ時\n\n// ハンバーメニュークリック時のクラス付与\n$('.nav_toggle').on('click', function () {\n    $('.bar').toggleClass('show');\n    $('.nav_header').toggleClass('open');\n    $('.burger-musk').fadeToggle(300);\n  });\n\n// リンククリック時のクラス削除\n$('a[href^=\"#\"]').click(function() {\n    $('.bar').removeClass('show');\n    $('.nav_header').removeClass('open');\n    $('.burger-musk').fadeToggle(0);\n});\n\n$(window).on('scroll', function () {\n  $('.ttl').fadeIn(3000);\n});\n\n$(window).scroll(function() {\n  const wHeight = $(window).height();\n  const scrollAmount = $(window).scrollTop();\n  $('.fade-in').each(function() {\n    const targetPosition = $(this).offset().top;\n    if (scrollAmount > targetPosition - wHeight) {\n      $(this).addClass(\"fadeInDown downup\");\n    }\n  });\n});\n\n//# sourceURL=webpack://toraji/./src/js/script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/script.js"]();
/******/ 	
/******/ })()
;