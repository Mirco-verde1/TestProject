/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
$(document).ready(function () {
  $('button').mouseover(function () {
    $(this).addClass('red');
  });
  $('button').mouseleave(function () {
    $(this).delay(500).removeClass('red');
  });
});
/******/ })()
;