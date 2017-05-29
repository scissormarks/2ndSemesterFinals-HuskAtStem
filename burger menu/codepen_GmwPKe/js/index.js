'use strict';

var nav_toggle = $('.nav-toggle');
var nav_overlay = $('.nav-overlay');
var nav = $('.nav');

nav_toggle.click(function () {
   $(this).toggleClass('is-active');
   nav.toggleClass('is-active');
   nav_overlay.toggleClass('is-active');
});

nav_overlay.click(function () {
   nav_toggle.toggleClass('is-active');
   nav.toggleClass('is-active');
   $(this).toggleClass('is-active');
});