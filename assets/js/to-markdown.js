!function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var n;n="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,n.toMarkdown=e()}}(function(){return function e(n,t,r){function o(a,c){if(!t[a]){if(!n[a]){var l="function"==typeof require&&require;if(!c&&l)return l(a,!0);if(i)return i(a,!0);var u=new Error("Cannot find module '"+a+"'");throw u.code="MODULE_NOT_FOUND",u}var f=t[a]={exports:{}};n[a][0].call(f.exports,function(e){var t=n[a][1][e];return o(t?t:e)},f,f.exports,e,n,t,r)}return t[a].exports}for(var i="function"==typeof require&&require,a=0;a<r.length;a++)o(r[a]);return o}({1:[function(e,n,t){"use strict";function r(e){return e.replace(/^[ \r\n\t]+|[ \r\n\t]+$/g,"")}function o(e){return-1!==C.indexOf(e.nodeName.toLowerCase())}function i(e){return-1!==k.indexOf(e.nodeName.toLowerCase())}function a(){var e=w.DOMParser,n=!1;try{(new e).parseFromString("","text/html")&&(n=!0)}catch(t){}return n}function c(){var e=function(){};return e.prototype.parseFromString=function(e){var n=N.implementation.createHTMLDocument("");return e.toLowerCase().indexOf("<!doctype")>-1?n.documentElement.innerHTML=e:n.body.innerHTML=e,n},e}function l(e){var n=(new E).parseFromString(e,"text/html");return x(n,o),n}function u(e){for(var n,t,r,o=[e],i=[];o.length>0;)for(n=o.shift(),i.push(n),t=n.childNodes,r=0;r<t.length;r++)1===t[r].nodeType&&o.push(t[r]);return i.shift(),i}function f(e){for(var n="",t=0;t<e.childNodes.length;t++)if(1===e.childNodes[t].nodeType)n+=e.childNodes[t]._replacement;else{if(3!==e.childNodes[t].nodeType)continue;n+=e.childNodes[t].data}return n}function d(e,n){return e.cloneNode(!1).outerHTML.replace("><",">"+n+"<")}function s(e,n){if("string"==typeof n)return n===e.nodeName.toLowerCase();if(Array.isArray(n))return-1!==n.indexOf(e.nodeName.toLowerCase());if("function"==typeof n)return n.call(g,e);throw new TypeError("`filter` needs to be a string, array, or function")}function p(e,n){var t,r,i;return"left"===e?(t=n.previousSibling,r=/ $/):(t=n.nextSibling,r=/^ /),t&&(3===t.nodeType?i=r.test(t.nodeValue):1!==t.nodeType||o(t)||(i=r.test(t.textContent))),i}function m(e){var n="",t="";if(!o(e)){var r=/^[ \r\n\t]/.test(e.innerHTML),i=/[ \r\n\t]$/.test(e.innerHTML);r&&!p("left",e)&&(n=" "),i&&!p("right",e)&&(t=" ")}return{leading:n,trailing:t}}function h(e){var n,t=f(e);if(!i(e)&&!/A/.test(e.nodeName)&&/^\s*$/i.test(t))return void(e._replacement="");for(var o=0;o<v.length;o++){var a=v[o];if(s(e,a.filter)){if("function"!=typeof a.replacement)throw new TypeError("`replacement` needs to be a function that returns a string");var c=m(e);(c.leading||c.trailing)&&(t=r(t)),n=c.leading+a.replacement.call(g,t,e)+c.trailing;break}}e._replacement=n}var g,v,N,b=e("./lib/md-converters"),y=e("./lib/gfm-converters"),x=e("collapse-whitespace"),w="undefined"!=typeof window?window:this;N="undefined"==typeof document?e("jsdom").jsdom():document;var C=["address","article","aside","audio","blockquote","body","canvas","center","dd","dir","div","dl","dt","fieldset","figcaption","figure","footer","form","frameset","h1","h2","h3","h4","h5","h6","header","hgroup","hr","html","isindex","li","main","menu","nav","noframes","noscript","ol","output","p","pre","section","table","tbody","td","tfoot","th","thead","tr","ul"],k=["area","base","br","col","command","embed","hr","img","input","keygen","link","meta","param","source","track","wbr"],E=a()?w.DOMParser:c();g=function(e,n){if(n=n||{},"string"!=typeof e)throw new TypeError(e+" is not a string");e=e.replace(/(\d+)\. /g,"$1\\. ");var t,r=l(e).body,o=u(r);v=b.slice(0),n.gfm&&(v=y.concat(v)),n.converters&&(v=n.converters.concat(v));for(var i=o.length-1;i>=0;i--)h(o[i]);return t=f(r),t.replace(/^[\t\r\n]+|[\t\r\n\s]+$/g,"").replace(/\n\s+\n/g,"\n\n").replace(/\n{3,}/g,"\n\n")},g.isBlock=o,g.isVoid=i,g.trim=r,g.outer=d,n.exports=g},{"./lib/gfm-converters":2,"./lib/md-converters":3,"collapse-whitespace":4,jsdom:7}],2:[function(e,n,t){"use strict";function r(e,n){var t=Array.prototype.indexOf.call(n.parentNode.childNodes,n),r=" ";return 0===t&&(r="| "),r+e+" |"}var o=/highlight highlight-(\S+)/;n.exports=[{filter:"br",replacement:function(){return"\n"}},{filter:["del","s","strike"],replacement:function(e){return"~~"+e+"~~"}},{filter:function(e){return"checkbox"===e.type&&"LI"===e.parentNode.nodeName},replacement:function(e,n){return(n.checked?"[x]":"[ ]")+" "}},{filter:["th","td"],replacement:function(e,n){return r(e,n)}},{filter:"tr",replacement:function(e,n){var t="",o={left:":--",right:"--:",center:":-:"};if("THEAD"===n.parentNode.nodeName)for(var i=0;i<n.childNodes.length;i++){var a=n.childNodes[i].attributes.align,c="---";a&&(c=o[a.value]||c),t+=r(c,n.childNodes[i])}return"\n"+e+(t?"\n"+t:"")}},{filter:"table",replacement:function(e){return"\n\n"+e+"\n\n"}},{filter:["thead","tbody","tfoot"],replacement:function(e){return e}},{filter:function(e){return"PRE"===e.nodeName&&e.firstChild&&"CODE"===e.firstChild.nodeName},replacement:function(e,n){return"\n\n```\n"+n.firstChild.textContent+"\n```\n\n"}},{filter:function(e){return"PRE"===e.nodeName&&"DIV"===e.parentNode.nodeName&&o.test(e.parentNode.className)},replacement:function(e,n){var t=n.parentNode.className.match(o)[1];return"\n\n```"+t+"\n"+n.textContent+"\n```\n\n"}},{filter:function(e){return"DIV"===e.nodeName&&o.test(e.className)},replacement:function(e){return"\n\n"+e+"\n\n"}}]},{}],3:[function(e,n,t){"use strict";n.exports=[{filter:"p",replacement:function(e){return"\n\n"+e+"\n\n"}},{filter:"br",replacement:function(){return"  \n"}},{filter:["h1","h2","h3","h4","h5","h6"],replacement:function(e,n){for(var t=n.nodeName.charAt(1),r="",o=0;t>o;o++)r+="#";return"\n\n"+r+" "+e+"\n\n"}},{filter:"hr",replacement:function(){return"\n\n* * *\n\n"}},{filter:["em","i"],replacement:function(e){return"_"+e+"_"}},{filter:["strong","b"],replacement:function(e){return"**"+e+"**"}},{filter:function(e){var n=e.previousSibling||e.nextSibling,t="PRE"===e.parentNode.nodeName&&!n;return"CODE"===e.nodeName&&!t},replacement:function(e){return"`"+e+"`"}},{filter:function(e){return"A"===e.nodeName&&e.getAttribute("href")},replacement:function(e,n){var t=n.title?' "'+n.title+'"':"";return"["+e+"]("+n.getAttribute("href")+t+")"}},{filter:"img",replacement:function(e,n){var t=n.alt||"",r=n.getAttribute("src")||"",o=n.title||"",i=o?' "'+o+'"':"";return r?"!["+t+"]("+r+i+")":""}},{filter:function(e){return"PRE"===e.nodeName&&"CODE"===e.firstChild.nodeName},replacement:function(e,n){return"\n\n    "+n.firstChild.textContent.replace(/\n/g,"\n    ")+"\n\n"}},{filter:"blockquote",replacement:function(e){return e=this.trim(e),e=e.replace(/\n{3,}/g,"\n\n"),e=e.replace(/^/gm,"> "),"\n\n"+e+"\n\n"}},{filter:"li",replacement:function(e,n){e=e.replace(/^\s+/,"").replace(/\n/gm,"\n    ");var t="*   ",r=n.parentNode,o=Array.prototype.indexOf.call(r.children,n)+1;return t=/ol/i.test(r.nodeName)?o+".  ":"*   ",t+e}},{filter:["ul","ol"],replacement:function(e,n){for(var t=[],r=0;r<n.childNodes.length;r++)t.push(n.childNodes[r]._replacement);return/li/i.test(n.parentNode.nodeName)?"\n"+t.join("\n"):"\n\n"+t.join("\n")+"\n\n"}},{filter:function(e){return this.isBlock(e)},replacement:function(e,n){return"\n\n"+this.outer(n,e)+"\n\n"}},{filter:function(){return!0},replacement:function(e,n){return this.outer(n,e)}}]},{}],4:[function(e,n,t){"use strict";function r(e){return!(!e||!u[e.nodeName])}function o(e){return!(!e||!l[e.nodeName])}function i(e,n){if(e.firstChild&&"PRE"!==e.nodeName){"function"!=typeof n&&(n=r);for(var t=null,i=!1,l=null,u=c(l,e);u!==e;){if(3===u.nodeType){var f=u.data.replace(/[ \r\n\t]+/g," ");if(t&&!/ $/.test(t.data)||i||" "!==f[0]||(f=f.substr(1)),!f){u=a(u);continue}u.data=f,t=u}else{if(1!==u.nodeType){u=a(u);continue}n(u)||"BR"===u.nodeName?(t&&(t.data=t.data.replace(/ $/,"")),t=null,i=!1):o(u)&&(t=null,i=!0)}var d=c(l,u);l=u,u=d}t&&(t.data=t.data.replace(/ $/,""),t.data||a(t))}}function a(e){var n=e.nextSibling||e.parentNode;return e.parentNode.removeChild(e),n}function c(e,n){return e&&e.parentNode===n||"PRE"===n.nodeName?n.nextSibling||n.parentNode:n.firstChild||n.nextSibling||n.parentNode}var l=e("void-elements");Object.keys(l).forEach(function(e){l[e.toUpperCase()]=1});var u={};e("block-elements").forEach(function(e){u[e.toUpperCase()]=1}),n.exports=i},{"block-elements":5,"void-elements":6}],5:[function(e,n,t){n.exports=["address","article","aside","audio","blockquote","canvas","dd","div","dl","fieldset","figcaption","figure","footer","form","h1","h2","h3","h4","h5","h6","header","hgroup","hr","main","nav","noscript","ol","output","p","pre","section","table","tfoot","ul","video"]},{}],6:[function(e,n,t){n.exports={area:!0,base:!0,br:!0,col:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,menuitem:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0}},{}],7:[function(e,n,t){},{}]},{},[1])(1)});