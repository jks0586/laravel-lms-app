"use strict";
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdate_N_E"]("pages/lms/organisation/create",{

/***/ "./src/hooks/lmsroutes.js":
/*!********************************!*\
  !*** ./src/hooks/lmsroutes.js ***!
  \********************************/
/***/ (function(module, __webpack_exports__, __webpack_require__) {

eval(__webpack_require__.ts("__webpack_require__.r(__webpack_exports__);\nconst lms = {\n    organisation: {\n        autocomplete: \"/lms/organisation/autocomplete\",\n        create: \"/lms/organisation/create\",\n        store: \"/lms/organisation/store\"\n    },\n    timezon: {\n        autocomplete: \"/lms/organisation/autocomplete\",\n        create: \"/lms/organisation/create\",\n        store: \"/lms/organisation/store\"\n    }\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (lms);\n\n\n;\n    // Wrapped in an IIFE to avoid polluting the global scope\n    ;\n    (function () {\n        var _a, _b;\n        // Legacy CSS implementations will `eval` browser code in a Node.js context\n        // to extract CSS. For backwards compatibility, we need to check we're in a\n        // browser context before continuing.\n        if (typeof self !== 'undefined' &&\n            // AMP / No-JS mode does not inject these helpers:\n            '$RefreshHelpers$' in self) {\n            // @ts-ignore __webpack_module__ is global\n            var currentExports = module.exports;\n            // @ts-ignore __webpack_module__ is global\n            var prevExports = (_b = (_a = module.hot.data) === null || _a === void 0 ? void 0 : _a.prevExports) !== null && _b !== void 0 ? _b : null;\n            // This cannot happen in MainTemplate because the exports mismatch between\n            // templating and execution.\n            self.$RefreshHelpers$.registerExportsForReactRefresh(currentExports, module.id);\n            // A module can be accepted automatically based on its exports, e.g. when\n            // it is a Refresh Boundary.\n            if (self.$RefreshHelpers$.isReactRefreshBoundary(currentExports)) {\n                // Save the previous exports on update so we can compare the boundary\n                // signatures.\n                module.hot.dispose(function (data) {\n                    data.prevExports = currentExports;\n                });\n                // Unconditionally accept an update to this module, we'll check if it's\n                // still a Refresh Boundary later.\n                // @ts-ignore importMeta is replaced in the loader\n                module.hot.accept();\n                // This field is set when the previous version of this module was a\n                // Refresh Boundary, letting us know we need to check for invalidation or\n                // enqueue an update.\n                if (prevExports !== null) {\n                    // A boundary can become ineligible if its exports are incompatible\n                    // with the previous exports.\n                    //\n                    // For example, if you add/remove/change exports, we'll want to\n                    // re-execute the importing modules, and force those components to\n                    // re-render. Similarly, if you convert a class component to a\n                    // function, we want to invalidate the boundary.\n                    if (self.$RefreshHelpers$.shouldInvalidateReactRefreshBoundary(prevExports, currentExports)) {\n                        module.hot.invalidate();\n                    }\n                    else {\n                        self.$RefreshHelpers$.scheduleUpdate();\n                    }\n                }\n            }\n            else {\n                // Since we just executed the code for the module, it's possible that the\n                // new exports made it ineligible for being a boundary.\n                // We only care about the case when we were _previously_ a boundary,\n                // because we already accepted this update (accidental side effect).\n                var isNoLongerABoundary = prevExports !== null;\n                if (isNoLongerABoundary) {\n                    module.hot.invalidate();\n                }\n            }\n        }\n    })();\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvaG9va3MvbG1zcm91dGVzLmpzLmpzIiwibWFwcGluZ3MiOiI7QUFBQSxNQUFNQSxNQUFJO0lBQ05DLGNBQWE7UUFDVEMsY0FBYTtRQUNiQyxRQUFPO1FBQ1BDLE9BQU07SUFDVjtJQUNBQyxTQUFRO1FBQ0pILGNBQWE7UUFDYkMsUUFBTztRQUNQQyxPQUFNO0lBQ1Y7QUFFSjtBQUVBLCtEQUFlSixHQUFHQSxFQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vX05fRS8uL3NyYy9ob29rcy9sbXNyb3V0ZXMuanM/N2JmZiJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBsbXM9e1xuICAgIG9yZ2FuaXNhdGlvbjp7XG4gICAgICAgIGF1dG9jb21wbGV0ZTonL2xtcy9vcmdhbmlzYXRpb24vYXV0b2NvbXBsZXRlJyxcbiAgICAgICAgY3JlYXRlOicvbG1zL29yZ2FuaXNhdGlvbi9jcmVhdGUnLFxuICAgICAgICBzdG9yZTonL2xtcy9vcmdhbmlzYXRpb24vc3RvcmUnLFxuICAgIH0sXG4gICAgdGltZXpvbjp7XG4gICAgICAgIGF1dG9jb21wbGV0ZTonL2xtcy9vcmdhbmlzYXRpb24vYXV0b2NvbXBsZXRlJyxcbiAgICAgICAgY3JlYXRlOicvbG1zL29yZ2FuaXNhdGlvbi9jcmVhdGUnLFxuICAgICAgICBzdG9yZTonL2xtcy9vcmdhbmlzYXRpb24vc3RvcmUnLFxuICAgIH0sXG5cbn1cblxuZXhwb3J0IGRlZmF1bHQgbG1zO1xuIl0sIm5hbWVzIjpbImxtcyIsIm9yZ2FuaXNhdGlvbiIsImF1dG9jb21wbGV0ZSIsImNyZWF0ZSIsInN0b3JlIiwidGltZXpvbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/hooks/lmsroutes.js\n"));

/***/ })

});