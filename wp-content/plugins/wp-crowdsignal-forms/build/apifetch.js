window.crowdsignalForms=window.crowdsignalForms||{},window.crowdsignalForms.apiFetch=function(r){var e={};function t(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return r[n].call(o.exports,o,o.exports,t),o.l=!0,o.exports}return t.m=r,t.c=e,t.d=function(r,e,n){t.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},t.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},t.t=function(r,e){if(1&e&&(r=t(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var n=Object.create(null);if(t.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var o in r)t.d(n,o,function(e){return r[e]}.bind(null,o));return n},t.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return t.d(e,"a",e),e},t.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},t.p="",t(t.s=12)}([function(r,e){!function(){r.exports=this.regeneratorRuntime}()},function(r,e){r.exports=function(r,e,t){return e in r?Object.defineProperty(r,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):r[e]=t,r}},function(r,e,t){var n=t(11);r.exports=function(r,e){if(null==r)return{};var t,o,i=n(r,e);if(Object.getOwnPropertySymbols){var u=Object.getOwnPropertySymbols(r);for(o=0;o<u.length;o++)t=u[o],e.indexOf(t)>=0||Object.prototype.propertyIsEnumerable.call(r,t)&&(i[t]=r[t])}return i}},function(r,e){function t(r,e,t,n,o,i,u){try{var c=r[i](u),a=c.value}catch(f){return void t(f)}c.done?e(a):Promise.resolve(a).then(n,o)}r.exports=function(r){return function(){var e=this,n=arguments;return new Promise((function(o,i){var u=r.apply(e,n);function c(r){t(u,o,i,c,a,"next",r)}function a(r){t(u,o,i,c,a,"throw",r)}c(void 0)}))}}},function(r,e){!function(){r.exports=this.lodash}()},function(r,e,t){var n=t(6),o=t(7),i=t(8),u=t(10);r.exports=function(r){return n(r)||o(r)||i(r)||u()}},function(r,e){r.exports=function(r){if(Array.isArray(r))return r}},function(r,e){r.exports=function(r){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(r))return Array.from(r)}},function(r,e,t){var n=t(9);r.exports=function(r,e){if(r){if("string"==typeof r)return n(r,e);var t=Object.prototype.toString.call(r).slice(8,-1);return"Object"===t&&r.constructor&&(t=r.constructor.name),"Map"===t||"Set"===t?Array.from(t):"Arguments"===t||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)?n(r,e):void 0}}},function(r,e){r.exports=function(r,e){(null==e||e>r.length)&&(e=r.length);for(var t=0,n=new Array(e);t<e;t++)n[t]=r[t];return n}},function(r,e){r.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(r,e){r.exports=function(r,e){if(null==r)return{};var t,n,o={},i=Object.keys(r);for(n=0;n<i.length;n++)t=i[n],e.indexOf(t)>=0||(o[t]=r[t]);return o}},function(r,e,t){"use strict";t.r(e);var n=t(0),o=t.n(n),i=t(1),u=t.n(i),c=t(5),a=t.n(c),f=t(2),s=t.n(f),p=t(3),l=t.n(p),d=t(4);function b(r,e){var t=Object.keys(r);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(r);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable}))),t.push.apply(t,n)}return t}function y(r){for(var e=1;e<arguments.length;e++){var t=null!=arguments[e]?arguments[e]:{};e%2?b(Object(t),!0).forEach((function(e){u()(r,e,t[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(r,Object.getOwnPropertyDescriptors(t)):b(Object(t)).forEach((function(e){Object.defineProperty(r,e,Object.getOwnPropertyDescriptor(t,e))}))}return r}function O(r,e){var t=Object.keys(r);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(r);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable}))),t.push.apply(t,n)}return t}function w(r){for(var e=1;e<arguments.length;e++){var t=null!=arguments[e]?arguments[e]:{};e%2?O(Object(t),!0).forEach((function(e){u()(r,e,t[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(r,Object.getOwnPropertyDescriptors(t)):O(Object(t)).forEach((function(e){Object.defineProperty(r,e,Object.getOwnPropertyDescriptor(t,e))}))}return r}var m=[],v=function(){var r=l()(o.a.mark((function r(e,t){var n,i,u,c,f,p;return o.a.wrap((function(r){for(;;)switch(r.prev=r.next){case 0:if(n=e.path,i=s()(e,["path"]),u=a()(t),c=u[0],f=u.slice(1),c){r.next=7;break}return r.next=5,window.fetch(n,i);case 5:return p=r.sent,r.abrupt("return",p.json());case 7:return r.abrupt("return",c(w({path:n},i),(function(r){return v(r,f)})));case 8:case"end":return r.stop()}}),r)})));return function(e,t){return r.apply(this,arguments)}}(),h=function(){var r=l()(o.a.mark((function r(e){return o.a.wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return r.abrupt("return",v(e,m));case 1:case"end":return r.stop()}}),r)})));return function(e){return r.apply(this,arguments)}}();h.use=function(r){return m.push(r)},h.disable=function(r){var e=Object(d.findIndex)(m,(function(e){return e===r}));e&&m.splice(e,1)},h.middleware={defaultHeaders:function(r,e){return e(y({},r,{headers:y({},r.headers||{},{Accept:"application/json, */*;q=0.1"})}))},formatURL:function(r,e){return 0===r.path.indexOf("/crowdsignal-forms/v1")&&(r.path="/wp-json".concat(r.path)),e(r)},formatRequest:function(r,e){var t=r.data,n=s()(r,["data"]);return e(t?y({},n,{headers:y({},n.headers,{"Content-Type":"application/json"}),body:JSON.stringify(t)}):n)},wpAuth:function(r,e){return window._crowdsignalFormsWpNonce?e(y({credentials:"same-origin",mode:"same-origin"},r,{headers:y({"X-WP-Nonce":window._crowdsignalFormsWpNonce},r.headers)})):e(r)}},Object(d.forEach)(h.middleware,h.use);e.default=h}]).default;