// ==UserScript==
// @name         Replace Paragraphs with Hello World
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Replaces all paragraphs on the page with "Hello, world!"
// @author       Your Name
// @match        http://*/*
// @match        https://*/*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    // Find all paragraph elements on the page
    var paragraphs = document.getElementsByTagName('p');

    // Loop through the paragraphs and replace the text with "Hello, world!"
    for (var i = 0; i < paragraphs.length; i++) {
        paragraphs[i].textContent = 'Hello, world!';
    }
})();