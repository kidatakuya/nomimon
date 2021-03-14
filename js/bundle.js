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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/animation.js":
/*!*****************************!*\
  !*** ./src/js/animation.js ***!
  \*****************************/
/*! exports provided: homeAnimation, itemPageAnimation */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"homeAnimation\", function() { return homeAnimation; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"itemPageAnimation\", function() { return itemPageAnimation; });\nfunction homeAnimation() {\n    console.log(\"a\");\n    //\n    // 表示アニメーション\n    //\n    const header = document.getElementById(\"js-header\");\n    const status = document.getElementById(\"js-status\");\n    const gNav = document.getElementById(\"js-g-nav\");\n    const character = document.getElementById(\"js-character\");\n    const middleObj = document.getElementsByClassName(\"obj-middle__item\");\n    setTimeout(function () {\n        header.style.transform = \"translateY(0)\";\n    }, 100);\n    setTimeout(function () {\n        gNav.style.transform = \"translateY(0)\";\n    }, 300);\n    for (let item of middleObj) {\n        setTimeout(function () {\n            item.style.opacity = \"1\";\n        }, 600);\n    }\n    setTimeout(function () {\n        character.style.opacity = \"1\";\n    }, 900);\n    setTimeout(function () {\n        status.style.opacity = \"1\";\n    }, 1200);\n}\n\nfunction itemPageAnimation() {\n    //\n    // 表示アニメーション\n    //\n    const header = document.getElementById(\"js-header\");\n    const itemSelectBar = document.getElementById(\"js-itemContainer\");\n    const character = document.getElementById(\"js-character\");\n    setTimeout(function () {\n        header.style.transform = \"translateY(0)\";\n    }, 100);\n    setTimeout(function () {\n        itemSelectBar.style.transform = \"translateY(0)\";\n    }, 300);\n    setTimeout(function () {\n        character.style.opacity = \"1\";\n    }, 600);\n}\n\n//# sourceURL=webpack:///./src/js/animation.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _itemSelector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./itemSelector */ \"./src/js/itemSelector.js\");\n/* harmony import */ var _qr_modal__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./qr_modal */ \"./src/js/qr_modal.js\");\n/* harmony import */ var _map_slide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./map_slide */ \"./src/js/map_slide.js\");\n/* harmony import */ var _animation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./animation */ \"./src/js/animation.js\");\n\n//\n// 関数インポート\n//\n\n\n\n\n\n\n\n\n//\n// ページに合わせて関数をだし分けて実行\n//\nconst pageType = document.body.getAttribute(\"data-pageType\");\nswitch (pageType) {\n    case \"home\":\n        Object(_animation__WEBPACK_IMPORTED_MODULE_3__[\"homeAnimation\"])();\n        break;\n    case \"map\":\n        Object(_map_slide__WEBPACK_IMPORTED_MODULE_2__[\"mapSlide\"])();\n        break;\n    case \"item\":\n        Object(_itemSelector__WEBPACK_IMPORTED_MODULE_0__[\"itemSort\"])();\n        Object(_itemSelector__WEBPACK_IMPORTED_MODULE_0__[\"itemSelect\"])();\n        Object(_animation__WEBPACK_IMPORTED_MODULE_3__[\"itemPageAnimation\"])();\n        break;\n    case \"qrScan\":\n        Object(_qr_modal__WEBPACK_IMPORTED_MODULE_1__[\"qrModal\"])();\n        break;\n}\n\n\n\n\n//\n// ブラウザーのアドレスバーを除く高さを算出\n//\nwindow.onload = () => {\n    const deviceWidth = window.innerWidth;\n    const deviceHeight = window.innerHeight;\n    // アドレスバーを除いた高さを指定する\n    if (deviceHeight < 667) {\n        const layout = document.getElementsByClassName(\"layout\")[0];\n        const objects = document.getElementsByClassName(\"objects\")[0];\n        layout.style.height = deviceHeight + \"px\";\n        objects.style.height = \"65vh\";\n    }\n    // デバイスに合わせてスクロールバーのスタイルを変更\n    if (deviceWidth > 430) {\n        const itemContentsWrap = document.getElementsByClassName(\"itemContents__container\")[0];\n        const itemContents = document.getElementsByClassName(\"itemContents\")[0];\n        itemContentsWrap.style.oveflow = \"hidden\";\n        itemContents.classList.add(\"viewScrollBar\");\n    }\n}\n\n// }\n\n\n//# sourceURL=webpack:///./src/js/index.js?");

/***/ }),

/***/ "./src/js/itemSelector.js":
/*!********************************!*\
  !*** ./src/js/itemSelector.js ***!
  \********************************/
/*! exports provided: itemSort, itemSelect */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"itemSort\", function() { return itemSort; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"itemSelect\", function() { return itemSelect; });\nconst item = document.getElementsByClassName(\"js-itemContents__item\");\nconst categoryBtns = document.getElementsByClassName(\"itemTab\");\n\n//\n// アイテムソート機能\n//\nfunction itemSort() {\n    for (let i = 0; i < categoryBtns.length; i++) {\n        categoryBtns[i].addEventListener(\"click\", (e) => {\n            let element = e.toElement;\n            let elementDataBtn = element.getAttribute(\"data-btn\");\n\n            //\n            // タブ切り替え\n            //\n            for (let j = 0; j < categoryBtns.length; j++) {\n                categoryBtns[j].classList.remove(\"itemTab--current\");\n            }\n            element.classList.add(\"itemTab--current\");\n\n            //\n            // ソート機能\n            //\n            for (let j = 0; j < item.length; j++) {\n                let itemDataAttr = item[j].getAttribute(\"data-item\");\n                // Allボタンで全表示, アクセサリー、背景の表示/非表示\n                if (elementDataBtn === \"all\") {\n                    fadeIn(j);\n                } else if (itemDataAttr === elementDataBtn) {\n                    fadeIn(j);\n                } else {\n                    fadeOut(j);\n                }\n            }\n        });\n    }\n}\n// ソート機能のフェードイン関数\nfunction fadeIn(j) {\n    item[j].classList.remove(\"none\");\n    item[j].classList.remove(\"fade-out\");\n    item[j].classList.add(\"fade-in\");\n}\n// ソート機能のフェードアウト関数\nfunction fadeOut(j) {\n    item[j].classList.remove(\"fade-in\");\n    item[j].classList.add(\"fade-out\");\n    item[j].classList.add(\"none\");\n}\n\n//\n// アイテム選択機能\n//\nfunction itemSelect() {\n    for (let i = 0; i < item.length; i++) {\n        item[i].addEventListener(\"click\", (e) => {\n            const arrowElement = document.createElement(\"span\");\n            arrowElement.setAttribute(\"class\", \"item-checked\");\n            const itemCheck = item[i].getElementsByClassName(\"item-checked\")[0];\n            const itemImg = item[i].getElementsByClassName(\"itemContents__img\")[0]\n\n            // アイテム全体をチェック、チェックついたアイテムを初期化\n            for (let j = 0; j < item.length; j++) {\n                const allItemChecked = item[j].getElementsByClassName(\"item-checked\")[0];\n                const allItemImg = item[j].getElementsByClassName(\"itemContents__img\")[0];\n                if (allItemChecked) {\n                    let allItemCheckedParent = allItemChecked.parentNode;\n                    allItemCheckedParent.removeChild(allItemChecked)\n                    allItemImg.classList.remove(\"opacity05\");\n                }\n            }\n\n            // クリックした要素にチェックをつける、既についてるなら削除\n            if (itemCheck) {\n                item[i].removeChild(itemCheck);\n                itemImg.classList.remove(\"opacity05\");\n            } else {\n                item[i].appendChild(arrowElement);\n                itemImg.classList.add(\"opacity05\");\n            }\n        });\n    }\n}\n\n//# sourceURL=webpack:///./src/js/itemSelector.js?");

/***/ }),

/***/ "./src/js/map_slide.js":
/*!*****************************!*\
  !*** ./src/js/map_slide.js ***!
  \*****************************/
/*! exports provided: mapSlide */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"mapSlide\", function() { return mapSlide; });\nfunction mapSlide() {\n    const mapDetail = document.getElementById(\"mapDetail\");\n    const mapOpenBtn = document.getElementById(\"mapOpenBtn\");\n    mapOpenBtn.addEventListener(\"click\", () => {\n        mapDetail.style.transform = `translateY(0)`;\n        mapOpenBtn.style.transform = `translateY(100%)`;\n    });\n\n    let count = 0;\n    let eventNum = 30;\n    let eventType = \"\";\n\n    // デバイス・ブラウザ取得\n    let userAgent = navigator.userAgent;\n    if (userAgent.indexOf(\"iPhone\") > 0 || userAgent.indexOf(\"iPod\") > 0 || userAgent.indexOf(\"Mobile\") > 0 && userAgent.indexOf(\"Android\") > 0) {\n        // Monile && Android はアンドロイド機種かつスマートフォン\n        eventNum = 20;\n        eventType = \"touchmove\";\n        mapSlideMobile(eventNum, eventType);\n\n    } else if (userAgent.indexOf(\"iPad\") > 0 || userAgent.indexOf(\"Android\") > 0) {\n        // iPadは対応してない\n    } else {\n        mapDetail.addEventListener(\"click\", () => {\n            mapDetail.style.transform = `translateY(100%)`;\n            mapOpenBtn.style.transform = `translateY(0)`;\n        });\n    }\n\n    // ドラッグでスライド表示処理\n    function mapSlideMobile(eventNum, eventType) {\n        mapDetail.addEventListener(\"touchstart\", (event) => {\n            event.preventDefault();\n        });\n        mapDetail.addEventListener(eventType, () => {\n            count++;\n            console.log(count);\n\n            mapDetail.style.transform = `translateY(${count}%)`;\n            if (count > eventNum) {\n                mapDetail.style.transform = `translateY(100%)`;\n                mapOpenBtn.style.transform = `translateY(0)`;\n            }\n        });\n        mapDetail.addEventListener(\"transitionend\", () => {\n            count = 0;\n        });\n    }\n\n}\n\n\n//# sourceURL=webpack:///./src/js/map_slide.js?");

/***/ }),

/***/ "./src/js/qr_modal.js":
/*!****************************!*\
  !*** ./src/js/qr_modal.js ***!
  \****************************/
/*! exports provided: qrModal */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"qrModal\", function() { return qrModal; });\nfunction qrModal() {\n    let modalContent = document.getElementById(\"js-qrErrorModal\");\n    let qrBack = document.getElementById(\"js-qrModalBackground\");\n    let btn = document.getElementById(\"js-qrmodalClose\").children[0];\n    \n\n    // モーダルを閉じるイベント\n    btn.addEventListener(\"click\", () => {\n        modalContent.classList.add(\"modalHide\");\n        qrBack.classList.add(\"modalHide\");\n    });\n    modalContent.addEventListener(\"animationend\", () => {\n        modalContent.style.display = \"none\";\n        qrBack.style.display = \"none\";\n    });\n}\n\n\n//# sourceURL=webpack:///./src/js/qr_modal.js?");

/***/ })

/******/ });