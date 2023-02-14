// ==UserScript==
// @name         Baidu Search Ad Filter
// @namespace    https://www.baidu.com
// @version      0.2
// @description  Remove Baidu search ads
// @author       DingYanfeng
// @match        https://www.baidu.com/s*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    // 删除页面上已经存在的广告
    removeAds();

    // 监听页面元素变化
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            // 如果有新元素加入，就删除
            if (mutation.addedNodes.length > 0) {
                removeAds();
            }
        });
    });

    var config = {
        childList: true,
        subtree: true
    };

    observer.observe(document.body, config);

    function removeAds() {
        //Select all the elements with the specified style
        var elements = document.querySelectorAll("[style='display:block !important;visibility:visible !important;']");

        //Remove the selected elements
        for (var i = 0; i < elements.length; i++) {
            elements[i].remove();
        }

        //Select all the elements with the specified style
        var elements2 = document.querySelectorAll("[data-click='{']");

        //Remove the selected elements
        for (var j = 0; j < elements2.length; j++) {
            elements2[j].remove();
        }
    }
})();