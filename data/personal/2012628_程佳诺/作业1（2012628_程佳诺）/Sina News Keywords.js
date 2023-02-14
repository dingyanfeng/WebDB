// ==UserScript==
// @name         Sina News Keywords
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Extracts the top three keywords from a Sina News article
// @author       Jianqing
// @match        https://news.sina.com.cn/*
// @grant        none
// @require      *
// ==/UserScript==

(function() {
    'use strict';

    // Get the article text
    const article = document.querySelector('#article').textContent;

    // Split the article text into words
    var cut = jieba.cut(article, true);

    // Count the frequency of each word
    const wordCounts = {};
    for (const word of cut) {
        if (!wordCounts[word]) {
            wordCounts[word] = 0;
        }
        wordCounts[word]++;
    }

    // Sort the words by frequency
    const sortedWords = Object.keys(wordCounts).sort((a, b) => wordCounts[b] - wordCounts[a]);

    // Get the top three words
    const topWords = sortedWords.slice(0, 3);

    // Display the top three words
    console.log('The top three keywords are:', topWords.join(', '));
})();