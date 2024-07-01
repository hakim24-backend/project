
; /* Start:"a:4:{s:4:"full";s:50:"/local/templates/.default/js/jcf.js?16965759326703";s:6:"source";s:35:"/local/templates/.default/js/jcf.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*!
 * JavaScript Custom Forms
 *
 * Copyright 2014-2015 PSD2HTML - http://psd2html.com/jcf
 * Released under the MIT license (LICENSE.txt)
 *
 * Version: 1.2.3
 */
!function(e,t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof exports?module.exports=t(require("jquery")):e.jcf=t(jQuery)}(this,function(e){"use strict";var t="1.2.3",n=[],o={optionsKey:"jcf",dataKey:"jcf-instance",rtlClass:"jcf-rtl",focusClass:"jcf-focus",pressedClass:"jcf-pressed",disabledClass:"jcf-disabled",hiddenClass:"jcf-hidden",resetAppearanceClass:"jcf-reset-appearance",unselectableClass:"jcf-unselectable"},a="ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch,i=/Windows Phone/.test(navigator.userAgent);o.isMobileDevice=!(!a&&!i);var r=function(){var t=e("<style>").appendTo("head"),n=t.prop("sheet")||t.prop("styleSheet"),a=function(e,t,o){o=o||0,n.insertRule?n.insertRule(e+"{"+t+"}",o):n.addRule(e,t,o)};a("."+o.hiddenClass,"position:absolute !important;left:-9999px !important;height:1px !important;width:1px !important;margin:0 !important;border-width:0 !important;-webkit-appearance:none;-moz-appearance:none;appearance:none"),a("."+o.rtlClass+" ."+o.hiddenClass,"right:-9999px !important; left: auto !important"),a("."+o.unselectableClass,"-webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; -webkit-tap-highlight-color: rgba(0,0,0,0);"),a("."+o.resetAppearanceClass,"background: none; border: none; -webkit-appearance: none; appearance: none; opacity: 0; filter: alpha(opacity=0);");var i=e("html"),r=e("body");"rtl"!==i.css("direction")&&"rtl"!==r.css("direction")||i.addClass(o.rtlClass),i.on("reset",function(){setTimeout(function(){c.refreshAll()},0)}),o.styleSheetCreated=!0};!function(){var t,n=navigator.pointerEnabled||navigator.msPointerEnabled,o="ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch,a={},i="jcf-";t=n?{pointerover:navigator.pointerEnabled?"pointerover":"MSPointerOver",pointerdown:navigator.pointerEnabled?"pointerdown":"MSPointerDown",pointermove:navigator.pointerEnabled?"pointermove":"MSPointerMove",pointerup:navigator.pointerEnabled?"pointerup":"MSPointerUp"}:{pointerover:"mouseover",pointerdown:"mousedown"+(o?" touchstart":""),pointermove:"mousemove"+(o?" touchmove":""),pointerup:"mouseup"+(o?" touchend":"")},e.each(t,function(t,n){e.each(n.split(" "),function(e,n){a[n]=t})}),e.each(t,function(t,n){n=n.split(" "),e.event.special[i+t]={setup:function(){var t=this;e.each(n,function(e,n){t.addEventListener?t.addEventListener(n,c,!1):t["on"+n]=c})},teardown:function(){var t=this;e.each(n,function(e,n){t.addEventListener?t.removeEventListener(n,c,!1):t["on"+n]=null})}}});var r=null,s=function(e){var t=Math.abs(e.pageX-r.x),n=Math.abs(e.pageY-r.y),o=25;return o>=t&&o>=n?!0:void 0},c=function(t){var n=t||window.event,o=null,c=a[n.type];if(t=e.event.fix(n),t.type=i+c,n.pointerType)switch(n.pointerType){case 2:t.pointerType="touch";break;case 3:t.pointerType="pen";break;case 4:t.pointerType="mouse";break;default:t.pointerType=n.pointerType}else t.pointerType=n.type.substr(0,5);return t.pageX||t.pageY||(o=n.changedTouches?n.changedTouches[0]:n,t.pageX=o.pageX,t.pageY=o.pageY),"touchend"===n.type&&(r={x:t.pageX,y:t.pageY}),"mouse"===t.pointerType&&r&&s(t)?void 0:(e.event.dispatch||e.event.handle).call(this,t)}}(),function(){var t=("onwheel"in document||document.documentMode>=9?"wheel":"mousewheel DOMMouseScroll").split(" "),n="jcf-mousewheel";e.event.special[n]={setup:function(){var n=this;e.each(t,function(e,t){n.addEventListener?n.addEventListener(t,o,!1):n["on"+t]=o})},teardown:function(){var n=this;e.each(t,function(e,t){n.addEventListener?n.removeEventListener(t,o,!1):n["on"+t]=null})}};var o=function(t){var o=t||window.event;if(t=e.event.fix(o),t.type=n,"detail"in o&&(t.deltaY=-o.detail),"wheelDelta"in o&&(t.deltaY=-o.wheelDelta),"wheelDeltaY"in o&&(t.deltaY=-o.wheelDeltaY),"wheelDeltaX"in o&&(t.deltaX=-o.wheelDeltaX),"deltaY"in o&&(t.deltaY=o.deltaY),"deltaX"in o&&(t.deltaX=o.deltaX),t.delta=t.deltaY||t.deltaX,1===o.deltaMode){var a=16;t.delta*=a,t.deltaY*=a,t.deltaX*=a}return(e.event.dispatch||e.event.handle).call(this,t)}}();var s={fireNativeEvent:function(t,n){e(t).each(function(){var e,t=this;t.dispatchEvent?(e=document.createEvent("HTMLEvents"),e.initEvent(n,!0,!0),t.dispatchEvent(e)):document.createEventObject&&(e=document.createEventObject(),e.target=t,t.fireEvent("on"+n,e))})},bindHandlers:function(){var t=this;e.each(t,function(n,o){0===n.indexOf("on")&&e.isFunction(o)&&(t[n]=function(){return o.apply(t,arguments)})})}},c={version:t,modules:{},getOptions:function(){return e.extend({},o)},setOptions:function(t,n){arguments.length>1?this.modules[t]&&e.extend(this.modules[t].prototype.options,n):e.extend(o,t)},addModule:function(t){e.isFunction(t)&&(t=t(e,window));var a=function(t){t.element.data(o.dataKey)||t.element.data(o.dataKey,this),n.push(this),this.options=e.extend({},o,this.options,i(t.element),t),this.bindHandlers(),this.init.apply(this,arguments)},i=function(t){var n=t.data(o.optionsKey),a=t.attr(o.optionsKey);if(n)return n;if(a)try{return e.parseJSON(a)}catch(i){}};a.prototype=t,e.extend(t,s),t.plugins&&e.each(t.plugins,function(t,n){e.extend(n.prototype,s)});var r=a.prototype.destroy;a.prototype.destroy=function(){this.options.element.removeData(this.options.dataKey);for(var e=n.length-1;e>=0;e--)if(n[e]===this){n.splice(e,1);break}r&&r.apply(this,arguments)},this.modules[t.name]=a},getInstance:function(t){return e(t).data(o.dataKey)},replace:function(t,n,a){var i,s=this;return o.styleSheetCreated||r(),e(t).each(function(){var t,r=e(this);i=r.data(o.dataKey),i?i.refresh():(n||e.each(s.modules,function(e,t){return t.prototype.matchElement.call(t.prototype,r)?(n=e,!1):void 0}),n&&(t=e.extend({element:r},a),i=new s.modules[n](t)))}),i},refresh:function(t){e(t).each(function(){var t=e(this).data(o.dataKey);t&&t.refresh()})},destroy:function(t){e(t).each(function(){var t=e(this).data(o.dataKey);t&&t.destroy()})},replaceAll:function(t){var n=this;e.each(this.modules,function(o,a){e(a.prototype.selector,t).each(function(){this.className.indexOf("jcf-ignore")<0&&n.replace(this,o)})})},refreshAll:function(t){if(t)e.each(this.modules,function(n,a){e(a.prototype.selector,t).each(function(){var t=e(this).data(o.dataKey);t&&t.refresh()})});else for(var a=n.length-1;a>=0;a--)n[a].refresh()},destroyAll:function(t){if(t)e.each(this.modules,function(n,a){e(a.prototype.selector,t).each(function(t,n){var a=e(n).data(o.dataKey);a&&a.destroy()})});else for(;n.length;)n[0].destroy()}};return"function"==typeof define&&define.amd&&(window.jcf=c),c});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:58:"/local/templates/.default/js/jcf.select.js?169657593218792";s:6:"source";s:42:"/local/templates/.default/js/jcf.select.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*!
 * JavaScript Custom Forms : Select Module
 *
 * Copyright 2014-2015 PSD2HTML - http://psd2html.com/jcf
 * Released under the MIT license (LICENSE.txt)
 *
 * Version: 1.2.3
 */
!function(e){e.addModule(function(t,s){"use strict";function i(e){this.options=t.extend({wrapNative:!0,wrapNativeOnMobile:!0,fakeDropInBody:!0,useCustomScroll:!0,flipDropToFit:!0,maxVisibleItems:10,fakeAreaStructure:'<span class="jcf-select"><span class="jcf-select-text"></span><span class="jcf-select-opener"></span></span>',fakeDropStructure:'<div class="jcf-select-drop"><div class="jcf-select-drop-content"></div></div>',optionClassPrefix:"jcf-option-",selectClassPrefix:"jcf-select-",dropContentSelector:".jcf-select-drop-content",selectTextSelector:".jcf-select-text",dropActiveClass:"jcf-drop-active",flipDropClass:"jcf-drop-flipped"},e),this.init()}function o(e){this.options=t.extend({wrapNative:!0,useCustomScroll:!0,fakeStructure:'<span class="jcf-list-box"><span class="jcf-list-wrapper"></span></span>',selectClassPrefix:"jcf-select-",listHolder:".jcf-list-wrapper"},e),this.init()}function n(e){this.options=t.extend({holder:null,maxVisibleItems:10,selectOnClick:!0,useHoverClass:!1,useCustomScroll:!1,handleResize:!0,multipleSelectWithoutKey:!1,alwaysPreventMouseWheel:!1,indexAttribute:"data-index",cloneClassPrefix:"jcf-option-",containerStructure:'<span class="jcf-list"><span class="jcf-list-content"></span></span>',containerSelector:".jcf-list-content",captionClass:"jcf-optgroup-caption",disabledClass:"jcf-disabled",optionClass:"jcf-option",groupClass:"jcf-optgroup",hoverClass:"jcf-hover",selectedClass:"jcf-selected",scrollClass:"jcf-scroll-active"},e),this.init()}var l={name:"Select",selector:"select",options:{element:null,multipleCompactStyle:!1},plugins:{ListBox:o,ComboBox:i,SelectList:n},matchElement:function(e){return e.is("select")},init:function(){this.element=t(this.options.element),this.createInstance()},isListBox:function(){return this.element.is("[size]:not([jcf-size]), [multiple]")},createInstance:function(){this.instance&&this.instance.destroy(),this.isListBox()&&!this.options.multipleCompactStyle?this.instance=new o(this.options):this.instance=new i(this.options)},refresh:function(){var e=this.isListBox()&&this.instance instanceof i||!this.isListBox()&&this.instance instanceof o;e?this.createInstance():this.instance.refresh()},destroy:function(){this.instance.destroy()}};t.extend(i.prototype,{init:function(){this.initStructure(),this.bindHandlers(),this.attachEvents(),this.refresh()},initStructure:function(){this.win=t(s),this.doc=t(document),this.realElement=t(this.options.element),this.fakeElement=t(this.options.fakeAreaStructure).insertAfter(this.realElement),this.selectTextContainer=this.fakeElement.find(this.options.selectTextSelector),this.selectText=t("<span></span>").appendTo(this.selectTextContainer),h(this.fakeElement),this.fakeElement.addClass(r(this.realElement.prop("className"),this.options.selectClassPrefix)),this.realElement.prop("multiple")&&this.fakeElement.addClass("jcf-compact-multiple"),this.options.isMobileDevice&&this.options.wrapNativeOnMobile&&!this.options.wrapNative&&(this.options.wrapNative=!0),this.options.wrapNative?this.realElement.prependTo(this.fakeElement).css({position:"absolute",height:"100%",width:"100%"}).addClass(this.options.resetAppearanceClass):(this.realElement.addClass(this.options.hiddenClass),this.fakeElement.attr("title",this.realElement.attr("title")),this.fakeDropTarget=this.options.fakeDropInBody?t("body"):this.fakeElement)},attachEvents:function(){var e=this;this.delayedRefresh=function(){setTimeout(function(){e.refresh(),e.list&&(e.list.refresh(),e.list.scrollToActiveOption())},1)},this.options.wrapNative?this.realElement.on({focus:this.onFocus,change:this.onChange,click:this.onChange,keydown:this.delayedRefresh}):(this.realElement.on({focus:this.onFocus,change:this.onChange,keydown:this.onKeyDown}),this.fakeElement.on({"jcf-pointerdown":this.onSelectAreaPress}))},onKeyDown:function(e){13===e.which?this.toggleDropdown():this.dropActive&&this.delayedRefresh()},onChange:function(){this.refresh()},onFocus:function(){this.pressedFlag&&this.focusedFlag||(this.fakeElement.addClass(this.options.focusClass),this.realElement.on("blur",this.onBlur),this.toggleListMode(!0),this.focusedFlag=!0)},onBlur:function(){this.pressedFlag||(this.fakeElement.removeClass(this.options.focusClass),this.realElement.off("blur",this.onBlur),this.toggleListMode(!1),this.focusedFlag=!1)},onResize:function(){this.dropActive&&this.hideDropdown()},onSelectDropPress:function(){this.pressedFlag=!0},onSelectDropRelease:function(e,t){this.pressedFlag=!1,"mouse"===t.pointerType&&this.realElement.focus()},onSelectAreaPress:function(e){var s=!this.options.fakeDropInBody&&t(e.target).closest(this.dropdown).length;s||e.button>1||this.realElement.is(":disabled")||(this.selectOpenedByEvent=e.pointerType,this.toggleDropdown(),this.focusedFlag||("mouse"===e.pointerType?this.realElement.focus():this.onFocus(e)),this.pressedFlag=!0,this.fakeElement.addClass(this.options.pressedClass),this.doc.on("jcf-pointerup",this.onSelectAreaRelease))},onSelectAreaRelease:function(e){this.focusedFlag&&"mouse"===e.pointerType&&this.realElement.focus(),this.pressedFlag=!1,this.fakeElement.removeClass(this.options.pressedClass),this.doc.off("jcf-pointerup",this.onSelectAreaRelease)},onOutsideClick:function(e){var s=t(e.target),i=s.closest(this.fakeElement).length||s.closest(this.dropdown).length;i||this.hideDropdown()},onSelect:function(){this.refresh(),this.realElement.prop("multiple")?this.repositionDropdown():this.hideDropdown(),this.fireNativeEvent(this.realElement,"change")},toggleListMode:function(e){this.options.wrapNative||(e?this.realElement.attr({size:4,"jcf-size":""}):this.options.wrapNative||this.realElement.removeAttr("size jcf-size"))},createDropdown:function(){this.dropdown&&(this.list.destroy(),this.dropdown.remove()),this.dropdown=t(this.options.fakeDropStructure).appendTo(this.fakeDropTarget),this.dropdown.addClass(r(this.realElement.prop("className"),this.options.selectClassPrefix)),h(this.dropdown),this.realElement.prop("multiple")&&this.dropdown.addClass("jcf-compact-multiple"),this.options.fakeDropInBody&&this.dropdown.css({position:"absolute",top:-9999}),this.list=new n({useHoverClass:!0,handleResize:!1,alwaysPreventMouseWheel:!0,maxVisibleItems:this.options.maxVisibleItems,useCustomScroll:this.options.useCustomScroll,holder:this.dropdown.find(this.options.dropContentSelector),multipleSelectWithoutKey:this.realElement.prop("multiple"),element:this.realElement}),t(this.list).on({select:this.onSelect,press:this.onSelectDropPress,release:this.onSelectDropRelease})},repositionDropdown:function(){var e,t,s,i=this.fakeElement.offset(),o=this.fakeElement[0].getBoundingClientRect(),n=o.width||o.right-o.left,l=this.fakeElement.outerHeight(),r=this.dropdown.css("width",n).outerHeight(),h=this.win.scrollTop(),a=this.win.height(),c=!1;i.top+l+r>h+a&&i.top-r>h&&(c=!0),this.options.fakeDropInBody&&(s="static"!==this.fakeDropTarget.css("position")?this.fakeDropTarget.offset().top:0,this.options.flipDropToFit&&c?(t=i.left,e=i.top-r-s):(t=i.left,e=i.top+l-s),this.dropdown.css({width:n,left:t,top:e})),this.dropdown.add(this.fakeElement).toggleClass(this.options.flipDropClass,this.options.flipDropToFit&&c)},showDropdown:function(){this.realElement.prop("options").length&&(this.dropdown||this.createDropdown(),this.dropActive=!0,this.dropdown.appendTo(this.fakeDropTarget),this.fakeElement.addClass(this.options.dropActiveClass),this.refreshSelectedText(),this.repositionDropdown(),this.list.setScrollTop(this.savedScrollTop),this.list.refresh(),this.win.on("resize",this.onResize),this.doc.on("jcf-pointerdown",this.onOutsideClick))},hideDropdown:function(){this.dropdown&&(this.savedScrollTop=this.list.getScrollTop(),this.fakeElement.removeClass(this.options.dropActiveClass+" "+this.options.flipDropClass),this.dropdown.removeClass(this.options.flipDropClass).detach(),this.doc.off("jcf-pointerdown",this.onOutsideClick),this.win.off("resize",this.onResize),this.dropActive=!1,"touch"===this.selectOpenedByEvent&&this.onBlur())},toggleDropdown:function(){this.dropActive?this.hideDropdown():this.showDropdown()},refreshSelectedText:function(){var e,s=this.realElement.prop("selectedIndex"),i=this.realElement.prop("options")[s],o=i?i.getAttribute("data-image"):null,n="",l=this;this.realElement.prop("multiple")?(t.each(this.realElement.prop("options"),function(e,t){t.selected&&(n+=(n?", ":"")+t.innerHTML)}),n||(n=l.realElement.attr("placeholder")||""),this.selectText.removeAttr("class").html(n)):i?this.currentSelectedText===i.innerHTML&&this.currentSelectedImage===o||(e=r(i.className,this.options.optionClassPrefix),this.selectText.attr("class",e).html(i.innerHTML),o?(this.selectImage||(this.selectImage=t("<img>").prependTo(this.selectTextContainer).hide()),this.selectImage.attr("src",o).show()):this.selectImage&&this.selectImage.hide(),this.currentSelectedText=i.innerHTML,this.currentSelectedImage=o):(this.selectImage&&this.selectImage.hide(),this.selectText.removeAttr("class").empty())},refresh:function(){"none"===this.realElement.prop("style").display?this.fakeElement.hide():this.fakeElement.show(),this.refreshSelectedText(),this.fakeElement.toggleClass(this.options.disabledClass,this.realElement.is(":disabled"))},destroy:function(){this.options.wrapNative?this.realElement.insertBefore(this.fakeElement).css({position:"",height:"",width:""}).removeClass(this.options.resetAppearanceClass):(this.realElement.removeClass(this.options.hiddenClass),this.realElement.is("[jcf-size]")&&this.realElement.removeAttr("size jcf-size")),this.fakeElement.remove(),this.doc.off("jcf-pointerup",this.onSelectAreaRelease),this.realElement.off({focus:this.onFocus})}}),t.extend(o.prototype,{init:function(){this.bindHandlers(),this.initStructure(),this.attachEvents()},initStructure:function(){this.realElement=t(this.options.element),this.fakeElement=t(this.options.fakeStructure).insertAfter(this.realElement),this.listHolder=this.fakeElement.find(this.options.listHolder),h(this.fakeElement),this.fakeElement.addClass(r(this.realElement.prop("className"),this.options.selectClassPrefix)),this.realElement.addClass(this.options.hiddenClass),this.list=new n({useCustomScroll:this.options.useCustomScroll,holder:this.listHolder,selectOnClick:!1,element:this.realElement})},attachEvents:function(){var e=this;this.delayedRefresh=function(t){t&&(16===t.which||t.ctrlKey||t.metaKey||t.altKey)||(clearTimeout(e.refreshTimer),e.refreshTimer=setTimeout(function(){e.refresh(),e.list.scrollToActiveOption()},1))},this.realElement.on({focus:this.onFocus,click:this.delayedRefresh,keydown:this.delayedRefresh}),t(this.list).on({select:this.onSelect,press:this.onFakeOptionsPress,release:this.onFakeOptionsRelease})},onFakeOptionsPress:function(e,t){this.pressedFlag=!0,"mouse"===t.pointerType&&this.realElement.focus()},onFakeOptionsRelease:function(e,t){this.pressedFlag=!1,"mouse"===t.pointerType&&this.realElement.focus()},onSelect:function(){this.fireNativeEvent(this.realElement,"change"),this.fireNativeEvent(this.realElement,"click")},onFocus:function(){this.pressedFlag&&this.focusedFlag||(this.fakeElement.addClass(this.options.focusClass),this.realElement.on("blur",this.onBlur),this.focusedFlag=!0)},onBlur:function(){this.pressedFlag||(this.fakeElement.removeClass(this.options.focusClass),this.realElement.off("blur",this.onBlur),this.focusedFlag=!1)},refresh:function(){this.fakeElement.toggleClass(this.options.disabledClass,this.realElement.is(":disabled")),this.list.refresh()},destroy:function(){this.list.destroy(),this.realElement.insertBefore(this.fakeElement).removeClass(this.options.hiddenClass),this.fakeElement.remove()}}),t.extend(n.prototype,{init:function(){this.initStructure(),this.refreshSelectedClass(),this.attachEvents()},initStructure:function(){this.element=t(this.options.element),this.indexSelector="["+this.options.indexAttribute+"]",this.container=t(this.options.containerStructure).appendTo(this.options.holder),this.listHolder=this.container.find(this.options.containerSelector),this.lastClickedIndex=this.element.prop("selectedIndex"),this.rebuildList(),this.element.prop("multiple")&&(this.previousSelection=this.getSelectedOptionsIndexes())},attachEvents:function(){this.bindHandlers(),this.listHolder.on("jcf-pointerdown",this.indexSelector,this.onItemPress),this.listHolder.on("jcf-pointerdown",this.onPress),this.options.useHoverClass&&this.listHolder.on("jcf-pointerover",this.indexSelector,this.onHoverItem)},onPress:function(e){t(this).trigger("press",e),this.listHolder.on("jcf-pointerup",this.onRelease)},onRelease:function(e){t(this).trigger("release",e),this.listHolder.off("jcf-pointerup",this.onRelease)},onHoverItem:function(e){var t=parseFloat(e.currentTarget.getAttribute(this.options.indexAttribute));this.fakeOptions.removeClass(this.options.hoverClass).eq(t).addClass(this.options.hoverClass)},onItemPress:function(e){"touch"===e.pointerType||this.options.selectOnClick?(this.tmpListOffsetTop=this.list.offset().top,this.listHolder.on("jcf-pointerup",this.indexSelector,this.onItemRelease)):this.onSelectItem(e)},onItemRelease:function(e){this.listHolder.off("jcf-pointerup",this.indexSelector,this.onItemRelease),this.tmpListOffsetTop===this.list.offset().top&&this.listHolder.on("click",this.indexSelector,{savedPointerType:e.pointerType},this.onSelectItem),delete this.tmpListOffsetTop},onSelectItem:function(e){var s,i=parseFloat(e.currentTarget.getAttribute(this.options.indexAttribute)),o=e.data&&e.data.savedPointerType||e.pointerType||"mouse";this.listHolder.off("click",this.indexSelector,this.onSelectItem),e.button>1||this.realOptions[i].disabled||(this.element.prop("multiple")?e.metaKey||e.ctrlKey||"touch"===o||this.options.multipleSelectWithoutKey?this.realOptions[i].selected=!this.realOptions[i].selected:e.shiftKey?(s=[this.lastClickedIndex,i].sort(function(e,t){return e-t}),this.realOptions.each(function(e,t){t.selected=e>=s[0]&&e<=s[1]})):this.element.prop("selectedIndex",i):this.element.prop("selectedIndex",i),e.shiftKey||(this.lastClickedIndex=i),this.refreshSelectedClass(),"mouse"===o&&this.scrollToActiveOption(),t(this).trigger("select"))},rebuildList:function(){var s=this,i=this.element[0];this.storedSelectHTML=i.innerHTML,this.optionIndex=0,this.list=t(this.createOptionsList(i)),this.listHolder.empty().append(this.list),this.realOptions=this.element.find("option"),this.fakeOptions=this.list.find(this.indexSelector),this.fakeListItems=this.list.find("."+this.options.captionClass+","+this.indexSelector),delete this.optionIndex;var o=this.options.maxVisibleItems,n=this.element.prop("size");n>1&&!this.element.is("[jcf-size]")&&(o=n);var l=this.fakeOptions.length>o;return this.container.toggleClass(this.options.scrollClass,l),l&&(this.listHolder.css({maxHeight:this.getOverflowHeight(o),overflow:"auto"}),this.options.useCustomScroll&&e.modules.Scrollable)?void e.replace(this.listHolder,"Scrollable",{handleResize:this.options.handleResize,alwaysPreventMouseWheel:this.options.alwaysPreventMouseWheel}):void(this.options.alwaysPreventMouseWheel&&(this.preventWheelHandler=function(e){var t=s.listHolder.scrollTop(),i=s.listHolder.prop("scrollHeight")-s.listHolder.innerHeight();(0>=t&&e.deltaY<0||t>=i&&e.deltaY>0)&&e.preventDefault()},this.listHolder.on("jcf-mousewheel",this.preventWheelHandler)))},refreshSelectedClass:function(){var e,t=this,s=this.element.prop("multiple"),i=this.element.prop("selectedIndex");s?this.realOptions.each(function(e,s){t.fakeOptions.eq(e).toggleClass(t.options.selectedClass,!!s.selected)}):(this.fakeOptions.removeClass(this.options.selectedClass+" "+this.options.hoverClass),e=this.fakeOptions.eq(i).addClass(this.options.selectedClass),this.options.useHoverClass&&e.addClass(this.options.hoverClass))},scrollToActiveOption:function(){var e=this.getActiveOptionOffset();"number"==typeof e&&this.listHolder.prop("scrollTop",e)},getSelectedOptionsIndexes:function(){var e=[];return this.realOptions.each(function(t,s){s.selected&&e.push(t)}),e},getChangedSelectedIndex:function(){var e=this.element.prop("selectedIndex"),s=this,i=!1,o=null;return this.element.prop("multiple")?(this.currentSelection=this.getSelectedOptionsIndexes(),t.each(this.currentSelection,function(e,t){!i&&s.previousSelection.indexOf(t)<0&&(0===e&&(i=!0),o=t)}),this.previousSelection=this.currentSelection,o):e},getActiveOptionOffset:function(){var e=this.getChangedSelectedIndex();if(null!==e){var t=this.listHolder.height(),s=this.listHolder.prop("scrollTop"),i=this.fakeOptions.eq(e),o=i.offset().top-this.list.offset().top,n=i.innerHeight();return o+n>=s+t?o-t+n:s>o?o:void 0}},getOverflowHeight:function(e){var t=this.fakeListItems.eq(e-1),s=this.list.offset().top,i=t.offset().top,o=t.innerHeight();return i+o-s},getScrollTop:function(){return this.listHolder.scrollTop()},setScrollTop:function(e){this.listHolder.scrollTop(e)},createOption:function(e){var t=document.createElement("span");t.className=this.options.optionClass,t.innerHTML=e.innerHTML,t.setAttribute(this.options.indexAttribute,this.optionIndex++);var s,i=e.getAttribute("data-image");return i&&(s=document.createElement("img"),s.src=i,t.insertBefore(s,t.childNodes[0])),e.disabled&&(t.className+=" "+this.options.disabledClass),e.className&&(t.className+=" "+r(e.className,this.options.cloneClassPrefix)),t},createOptGroup:function(e){var t,s,i=document.createElement("span"),o=e.getAttribute("label");return t=document.createElement("span"),t.className=this.options.captionClass,t.innerHTML=o,i.appendChild(t),e.children.length&&(s=this.createOptionsList(e),i.appendChild(s)),i.className=this.options.groupClass,i},createOptionContainer:function(){var e=document.createElement("li");return e},createOptionsList:function(e){var s=this,i=document.createElement("ul");return t.each(e.children,function(e,t){var o,n=s.createOptionContainer(t);switch(t.tagName.toLowerCase()){case"option":o=s.createOption(t);break;case"optgroup":o=s.createOptGroup(t)}i.appendChild(n).appendChild(o)}),i},refresh:function(){this.storedSelectHTML!==this.element.prop("innerHTML")&&this.rebuildList();var t=e.getInstance(this.listHolder);t&&t.refresh(),this.refreshSelectedClass()},destroy:function(){this.listHolder.off("jcf-mousewheel",this.preventWheelHandler),this.listHolder.off("jcf-pointerdown",this.indexSelector,this.onSelectItem),this.listHolder.off("jcf-pointerover",this.indexSelector,this.onHoverItem),this.listHolder.off("jcf-pointerdown",this.onPress)}});var r=function(e,t){return e?e.replace(/[\s]*([\S]+)+[\s]*/gi,t+"$1 "):""},h=function(){function t(e){e.preventDefault()}var s=e.getOptions().unselectableClass;return function(e){e.addClass(s).on("selectstart",t)}}();return l})}(jcf);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:55:"/local/templates/.default/js/jcf.file.js?16965759323966";s:6:"source";s:40:"/local/templates/.default/js/jcf.file.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*!
 * JavaScript Custom Forms : File Module
 *
 * Copyright 2014-2015 PSD2HTML - http://psd2html.com/jcf
 * Released under the MIT license (LICENSE.txt)
 *
 * Version: 1.2.3
 */

(function(jcf) {

jcf.addModule(function($) {
	'use strict';

	return {
		name: 'File',
		selector: 'input[type="file"]',
		options: {
			fakeStructure: '<span class="jcf-file"><span class="jcf-fake-input"></span><span class="jcf-upload-button"><span class="jcf-button-content"></span></span></span>',
			buttonText: 'Choose file',
			placeholderText: 'No file chosen',
			realElementClass: 'jcf-real-element',
			extensionPrefixClass: 'jcf-extension-',
			selectedFileBlock: '.jcf-fake-input',
			buttonTextBlock: '.jcf-button-content'
		},
		matchElement: function(element) {
			return element.is('input[type="file"]');
		},
		init: function() {
			this.initStructure();
			this.attachEvents();
			this.refresh();
		},
		initStructure: function() {
			this.doc = $(document);
			this.realElement = $(this.options.element).addClass(this.options.realElementClass);
			this.fakeElement = $(this.options.fakeStructure).insertBefore(this.realElement);
			this.fileNameBlock = this.fakeElement.find(this.options.selectedFileBlock);
			this.buttonTextBlock = this.fakeElement.find(this.options.buttonTextBlock).text(this.options.buttonText);

			this.realElement.appendTo(this.fakeElement).css({
				position: 'absolute',
				opacity: 0
			});
		},
		attachEvents: function() {
			this.realElement.on({
				'jcf-pointerdown': this.onPress,
				change: this.onChange,
				focus: this.onFocus
			});
		},
		onChange: function() {
			this.refresh();
		},
		onFocus: function() {
			this.fakeElement.addClass(this.options.focusClass);
			this.realElement.on('blur', this.onBlur);
		},
		onBlur: function() {
			this.fakeElement.removeClass(this.options.focusClass);
			this.realElement.off('blur', this.onBlur);
		},
		onPress: function() {
			this.fakeElement.addClass(this.options.pressedClass);
			this.doc.on('jcf-pointerup', this.onRelease);
		},
		onRelease: function() {
			this.fakeElement.removeClass(this.options.pressedClass);
			this.doc.off('jcf-pointerup', this.onRelease);
		},
		getFileName: function() {
			var resultFileName = '',
				files = this.realElement.prop('files');

			if (files && files.length) {
				$.each(files, function(index, file) {
					resultFileName += (index > 0 ? ', ' : '') + file.name;
				});
			} else {
				resultFileName = this.realElement.val().replace(/^[\s\S]*(?:\\|\/)([\s\S^\\\/]*)$/g, '$1');
			}

			return resultFileName;
		},
		getFileExtension: function() {
			var fileName = this.realElement.val();
			return fileName.lastIndexOf('.') < 0 ? '' : fileName.substring(fileName.lastIndexOf('.') + 1).toLowerCase();
		},
		updateExtensionClass: function() {
			var currentExtension = this.getFileExtension(),
				currentClassList = this.fakeElement.prop('className'),
				cleanedClassList = currentClassList.replace(new RegExp('(\\s|^)' + this.options.extensionPrefixClass + '[^ ]+','gi'), '');

			this.fakeElement.prop('className', cleanedClassList);
			if (currentExtension) {
				this.fakeElement.addClass(this.options.extensionPrefixClass + currentExtension);
			}
		},
		refresh: function() {
			var selectedFileName = this.getFileName() || this.options.placeholderText;
			this.fakeElement.toggleClass(this.options.disabledClass, this.realElement.is(':disabled'));
			this.fileNameBlock.text(selectedFileName);
			this.updateExtensionClass();
		},
		destroy: function() {
			// reset styles and restore element position
			this.realElement.insertBefore(this.fakeElement).removeClass(this.options.realElementClass).css({
				position: '',
				opacity: ''
			});
			this.fakeElement.remove();

			// remove event handlers
			this.realElement.off({
				'jcf-pointerdown': this.onPress,
				change: this.onChange,
				focus: this.onFocus,
				blur: this.onBlur
			});
			this.doc.off('jcf-pointerup', this.onRelease);
		}
	};
});

}(jcf));

/* End */
;
; /* Start:"a:4:{s:4:"full";s:75:"/local/templates/.default/js/jquery.mCustomScrollbar.min.js?169657593240179";s:6:"source";s:59:"/local/templates/.default/js/jquery.mCustomScrollbar.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/* == malihu jquery custom scrollbar plugin == Version: 3.1.5, License: MIT License (MIT) */
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"undefined"!=typeof module&&module.exports?module.exports=e:e(jQuery,window,document)}(function(e){!function(t){var o="function"==typeof define&&define.amd,a="undefined"!=typeof module&&module.exports,n="https:"==document.location.protocol?"https:":"http:",i="cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js";o||(a?require("jquery-mousewheel")(e):e.event.special.mousewheel||e("head").append(decodeURI("%3Cscript src="+n+"//"+i+"%3E%3C/script%3E"))),t()}(function(){var t,o="mCustomScrollbar",a="mCS",n=".mCustomScrollbar",i={setTop:0,setLeft:0,axis:"y",scrollbarPosition:"inside",scrollInertia:950,autoDraggerLength:!0,alwaysShowScrollbar:0,snapOffset:0,mouseWheel:{enable:!0,scrollAmount:"auto",axis:"y",deltaFactor:"auto",disableOver:["select","option","keygen","datalist","textarea"]},scrollButtons:{scrollType:"stepless",scrollAmount:"auto"},keyboard:{enable:!0,scrollType:"stepless",scrollAmount:"auto"},contentTouchScroll:25,documentTouchScroll:!0,advanced:{autoScrollOnFocus:"input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",updateOnContentResize:!0,updateOnImageLoad:"auto",autoUpdateTimeout:60},theme:"light",callbacks:{onTotalScrollOffset:0,onTotalScrollBackOffset:0,alwaysTriggerOffsets:!0}},r=0,l={},s=window.attachEvent&&!window.addEventListener?1:0,c=!1,d=["mCSB_dragger_onDrag","mCSB_scrollTools_onDrag","mCS_img_loaded","mCS_disabled","mCS_destroyed","mCS_no_scrollbar","mCS-autoHide","mCS-dir-rtl","mCS_no_scrollbar_y","mCS_no_scrollbar_x","mCS_y_hidden","mCS_x_hidden","mCSB_draggerContainer","mCSB_buttonUp","mCSB_buttonDown","mCSB_buttonLeft","mCSB_buttonRight"],u={init:function(t){var t=e.extend(!0,{},i,t),o=f.call(this);if(t.live){var s=t.liveSelector||this.selector||n,c=e(s);if("off"===t.live)return void m(s);l[s]=setTimeout(function(){c.mCustomScrollbar(t),"once"===t.live&&c.length&&m(s)},500)}else m(s);return t.setWidth=t.set_width?t.set_width:t.setWidth,t.setHeight=t.set_height?t.set_height:t.setHeight,t.axis=t.horizontalScroll?"x":p(t.axis),t.scrollInertia=t.scrollInertia>0&&t.scrollInertia<17?17:t.scrollInertia,"object"!=typeof t.mouseWheel&&1==t.mouseWheel&&(t.mouseWheel={enable:!0,scrollAmount:"auto",axis:"y",preventDefault:!1,deltaFactor:"auto",normalizeDelta:!1,invert:!1}),t.mouseWheel.scrollAmount=t.mouseWheelPixels?t.mouseWheelPixels:t.mouseWheel.scrollAmount,t.mouseWheel.normalizeDelta=t.advanced.normalizeMouseWheelDelta?t.advanced.normalizeMouseWheelDelta:t.mouseWheel.normalizeDelta,t.scrollButtons.scrollType=g(t.scrollButtons.scrollType),h(t),e(o).each(function(){var o=e(this);if(!o.data(a)){o.data(a,{idx:++r,opt:t,scrollRatio:{y:null,x:null},overflowed:null,contentReset:{y:null,x:null},bindEvents:!1,tweenRunning:!1,sequential:{},langDir:o.css("direction"),cbOffsets:null,trigger:null,poll:{size:{o:0,n:0},img:{o:0,n:0},change:{o:0,n:0}}});var n=o.data(a),i=n.opt,l=o.data("mcs-axis"),s=o.data("mcs-scrollbar-position"),c=o.data("mcs-theme");l&&(i.axis=l),s&&(i.scrollbarPosition=s),c&&(i.theme=c,h(i)),v.call(this),n&&i.callbacks.onCreate&&"function"==typeof i.callbacks.onCreate&&i.callbacks.onCreate.call(this),e("#mCSB_"+n.idx+"_container img:not(."+d[2]+")").addClass(d[2]),u.update.call(null,o)}})},update:function(t,o){var n=t||f.call(this);return e(n).each(function(){var t=e(this);if(t.data(a)){var n=t.data(a),i=n.opt,r=e("#mCSB_"+n.idx+"_container"),l=e("#mCSB_"+n.idx),s=[e("#mCSB_"+n.idx+"_dragger_vertical"),e("#mCSB_"+n.idx+"_dragger_horizontal")];if(!r.length)return;n.tweenRunning&&Q(t),o&&n&&i.callbacks.onBeforeUpdate&&"function"==typeof i.callbacks.onBeforeUpdate&&i.callbacks.onBeforeUpdate.call(this),t.hasClass(d[3])&&t.removeClass(d[3]),t.hasClass(d[4])&&t.removeClass(d[4]),l.css("max-height","none"),l.height()!==t.height()&&l.css("max-height",t.height()),_.call(this),"y"===i.axis||i.advanced.autoExpandHorizontalScroll||r.css("width",x(r)),n.overflowed=y.call(this),M.call(this),i.autoDraggerLength&&S.call(this),b.call(this),T.call(this);var c=[Math.abs(r[0].offsetTop),Math.abs(r[0].offsetLeft)];"x"!==i.axis&&(n.overflowed[0]?s[0].height()>s[0].parent().height()?B.call(this):(G(t,c[0].toString(),{dir:"y",dur:0,overwrite:"none"}),n.contentReset.y=null):(B.call(this),"y"===i.axis?k.call(this):"yx"===i.axis&&n.overflowed[1]&&G(t,c[1].toString(),{dir:"x",dur:0,overwrite:"none"}))),"y"!==i.axis&&(n.overflowed[1]?s[1].width()>s[1].parent().width()?B.call(this):(G(t,c[1].toString(),{dir:"x",dur:0,overwrite:"none"}),n.contentReset.x=null):(B.call(this),"x"===i.axis?k.call(this):"yx"===i.axis&&n.overflowed[0]&&G(t,c[0].toString(),{dir:"y",dur:0,overwrite:"none"}))),o&&n&&(2===o&&i.callbacks.onImageLoad&&"function"==typeof i.callbacks.onImageLoad?i.callbacks.onImageLoad.call(this):3===o&&i.callbacks.onSelectorChange&&"function"==typeof i.callbacks.onSelectorChange?i.callbacks.onSelectorChange.call(this):i.callbacks.onUpdate&&"function"==typeof i.callbacks.onUpdate&&i.callbacks.onUpdate.call(this)),N.call(this)}})},scrollTo:function(t,o){if("undefined"!=typeof t&&null!=t){var n=f.call(this);return e(n).each(function(){var n=e(this);if(n.data(a)){var i=n.data(a),r=i.opt,l={trigger:"external",scrollInertia:r.scrollInertia,scrollEasing:"mcsEaseInOut",moveDragger:!1,timeout:60,callbacks:!0,onStart:!0,onUpdate:!0,onComplete:!0},s=e.extend(!0,{},l,o),c=Y.call(this,t),d=s.scrollInertia>0&&s.scrollInertia<17?17:s.scrollInertia;c[0]=X.call(this,c[0],"y"),c[1]=X.call(this,c[1],"x"),s.moveDragger&&(c[0]*=i.scrollRatio.y,c[1]*=i.scrollRatio.x),s.dur=ne()?0:d,setTimeout(function(){null!==c[0]&&"undefined"!=typeof c[0]&&"x"!==r.axis&&i.overflowed[0]&&(s.dir="y",s.overwrite="all",G(n,c[0].toString(),s)),null!==c[1]&&"undefined"!=typeof c[1]&&"y"!==r.axis&&i.overflowed[1]&&(s.dir="x",s.overwrite="none",G(n,c[1].toString(),s))},s.timeout)}})}},stop:function(){var t=f.call(this);return e(t).each(function(){var t=e(this);t.data(a)&&Q(t)})},disable:function(t){var o=f.call(this);return e(o).each(function(){var o=e(this);if(o.data(a)){o.data(a);N.call(this,"remove"),k.call(this),t&&B.call(this),M.call(this,!0),o.addClass(d[3])}})},destroy:function(){var t=f.call(this);return e(t).each(function(){var n=e(this);if(n.data(a)){var i=n.data(a),r=i.opt,l=e("#mCSB_"+i.idx),s=e("#mCSB_"+i.idx+"_container"),c=e(".mCSB_"+i.idx+"_scrollbar");r.live&&m(r.liveSelector||e(t).selector),N.call(this,"remove"),k.call(this),B.call(this),n.removeData(a),$(this,"mcs"),c.remove(),s.find("img."+d[2]).removeClass(d[2]),l.replaceWith(s.contents()),n.removeClass(o+" _"+a+"_"+i.idx+" "+d[6]+" "+d[7]+" "+d[5]+" "+d[3]).addClass(d[4])}})}},f=function(){return"object"!=typeof e(this)||e(this).length<1?n:this},h=function(t){var o=["rounded","rounded-dark","rounded-dots","rounded-dots-dark"],a=["rounded-dots","rounded-dots-dark","3d","3d-dark","3d-thick","3d-thick-dark","inset","inset-dark","inset-2","inset-2-dark","inset-3","inset-3-dark"],n=["minimal","minimal-dark"],i=["minimal","minimal-dark"],r=["minimal","minimal-dark"];t.autoDraggerLength=e.inArray(t.theme,o)>-1?!1:t.autoDraggerLength,t.autoExpandScrollbar=e.inArray(t.theme,a)>-1?!1:t.autoExpandScrollbar,t.scrollButtons.enable=e.inArray(t.theme,n)>-1?!1:t.scrollButtons.enable,t.autoHideScrollbar=e.inArray(t.theme,i)>-1?!0:t.autoHideScrollbar,t.scrollbarPosition=e.inArray(t.theme,r)>-1?"outside":t.scrollbarPosition},m=function(e){l[e]&&(clearTimeout(l[e]),$(l,e))},p=function(e){return"yx"===e||"xy"===e||"auto"===e?"yx":"x"===e||"horizontal"===e?"x":"y"},g=function(e){return"stepped"===e||"pixels"===e||"step"===e||"click"===e?"stepped":"stepless"},v=function(){var t=e(this),n=t.data(a),i=n.opt,r=i.autoExpandScrollbar?" "+d[1]+"_expand":"",l=["<div id='mCSB_"+n.idx+"_scrollbar_vertical' class='mCSB_scrollTools mCSB_"+n.idx+"_scrollbar mCS-"+i.theme+" mCSB_scrollTools_vertical"+r+"'><div class='"+d[12]+"'><div id='mCSB_"+n.idx+"_dragger_vertical' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>","<div id='mCSB_"+n.idx+"_scrollbar_horizontal' class='mCSB_scrollTools mCSB_"+n.idx+"_scrollbar mCS-"+i.theme+" mCSB_scrollTools_horizontal"+r+"'><div class='"+d[12]+"'><div id='mCSB_"+n.idx+"_dragger_horizontal' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>"],s="yx"===i.axis?"mCSB_vertical_horizontal":"x"===i.axis?"mCSB_horizontal":"mCSB_vertical",c="yx"===i.axis?l[0]+l[1]:"x"===i.axis?l[1]:l[0],u="yx"===i.axis?"<div id='mCSB_"+n.idx+"_container_wrapper' class='mCSB_container_wrapper' />":"",f=i.autoHideScrollbar?" "+d[6]:"",h="x"!==i.axis&&"rtl"===n.langDir?" "+d[7]:"";i.setWidth&&t.css("width",i.setWidth),i.setHeight&&t.css("height",i.setHeight),i.setLeft="y"!==i.axis&&"rtl"===n.langDir?"989999px":i.setLeft,t.addClass(o+" _"+a+"_"+n.idx+f+h).wrapInner("<div id='mCSB_"+n.idx+"' class='mCustomScrollBox mCS-"+i.theme+" "+s+"'><div id='mCSB_"+n.idx+"_container' class='mCSB_container' style='position:relative; top:"+i.setTop+"; left:"+i.setLeft+";' dir='"+n.langDir+"' /></div>");var m=e("#mCSB_"+n.idx),p=e("#mCSB_"+n.idx+"_container");"y"===i.axis||i.advanced.autoExpandHorizontalScroll||p.css("width",x(p)),"outside"===i.scrollbarPosition?("static"===t.css("position")&&t.css("position","relative"),t.css("overflow","visible"),m.addClass("mCSB_outside").after(c)):(m.addClass("mCSB_inside").append(c),p.wrap(u)),w.call(this);var g=[e("#mCSB_"+n.idx+"_dragger_vertical"),e("#mCSB_"+n.idx+"_dragger_horizontal")];g[0].css("min-height",g[0].height()),g[1].css("min-width",g[1].width())},x=function(t){var o=[t[0].scrollWidth,Math.max.apply(Math,t.children().map(function(){return e(this).outerWidth(!0)}).get())],a=t.parent().width();return o[0]>a?o[0]:o[1]>a?o[1]:"100%"},_=function(){var t=e(this),o=t.data(a),n=o.opt,i=e("#mCSB_"+o.idx+"_container");if(n.advanced.autoExpandHorizontalScroll&&"y"!==n.axis){i.css({width:"auto","min-width":0,"overflow-x":"scroll"});var r=Math.ceil(i[0].scrollWidth);3===n.advanced.autoExpandHorizontalScroll||2!==n.advanced.autoExpandHorizontalScroll&&r>i.parent().width()?i.css({width:r,"min-width":"100%","overflow-x":"inherit"}):i.css({"overflow-x":"inherit",position:"absolute"}).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({width:Math.ceil(i[0].getBoundingClientRect().right+.4)-Math.floor(i[0].getBoundingClientRect().left),"min-width":"100%",position:"relative"}).unwrap()}},w=function(){var t=e(this),o=t.data(a),n=o.opt,i=e(".mCSB_"+o.idx+"_scrollbar:first"),r=oe(n.scrollButtons.tabindex)?"tabindex='"+n.scrollButtons.tabindex+"'":"",l=["<a href='#' class='"+d[13]+"' "+r+" />","<a href='#' class='"+d[14]+"' "+r+" />","<a href='#' class='"+d[15]+"' "+r+" />","<a href='#' class='"+d[16]+"' "+r+" />"],s=["x"===n.axis?l[2]:l[0],"x"===n.axis?l[3]:l[1],l[2],l[3]];n.scrollButtons.enable&&i.prepend(s[0]).append(s[1]).next(".mCSB_scrollTools").prepend(s[2]).append(s[3])},S=function(){var t=e(this),o=t.data(a),n=e("#mCSB_"+o.idx),i=e("#mCSB_"+o.idx+"_container"),r=[e("#mCSB_"+o.idx+"_dragger_vertical"),e("#mCSB_"+o.idx+"_dragger_horizontal")],l=[n.height()/i.outerHeight(!1),n.width()/i.outerWidth(!1)],c=[parseInt(r[0].css("min-height")),Math.round(l[0]*r[0].parent().height()),parseInt(r[1].css("min-width")),Math.round(l[1]*r[1].parent().width())],d=s&&c[1]<c[0]?c[0]:c[1],u=s&&c[3]<c[2]?c[2]:c[3];r[0].css({height:d,"max-height":r[0].parent().height()-10}).find(".mCSB_dragger_bar").css({"line-height":c[0]+"px"}),r[1].css({width:u,"max-width":r[1].parent().width()-10})},b=function(){var t=e(this),o=t.data(a),n=e("#mCSB_"+o.idx),i=e("#mCSB_"+o.idx+"_container"),r=[e("#mCSB_"+o.idx+"_dragger_vertical"),e("#mCSB_"+o.idx+"_dragger_horizontal")],l=[i.outerHeight(!1)-n.height(),i.outerWidth(!1)-n.width()],s=[l[0]/(r[0].parent().height()-r[0].height()),l[1]/(r[1].parent().width()-r[1].width())];o.scrollRatio={y:s[0],x:s[1]}},C=function(e,t,o){var a=o?d[0]+"_expanded":"",n=e.closest(".mCSB_scrollTools");"active"===t?(e.toggleClass(d[0]+" "+a),n.toggleClass(d[1]),e[0]._draggable=e[0]._draggable?0:1):e[0]._draggable||("hide"===t?(e.removeClass(d[0]),n.removeClass(d[1])):(e.addClass(d[0]),n.addClass(d[1])))},y=function(){var t=e(this),o=t.data(a),n=e("#mCSB_"+o.idx),i=e("#mCSB_"+o.idx+"_container"),r=null==o.overflowed?i.height():i.outerHeight(!1),l=null==o.overflowed?i.width():i.outerWidth(!1),s=i[0].scrollHeight,c=i[0].scrollWidth;return s>r&&(r=s),c>l&&(l=c),[r>n.height(),l>n.width()]},B=function(){var t=e(this),o=t.data(a),n=o.opt,i=e("#mCSB_"+o.idx),r=e("#mCSB_"+o.idx+"_container"),l=[e("#mCSB_"+o.idx+"_dragger_vertical"),e("#mCSB_"+o.idx+"_dragger_horizontal")];if(Q(t),("x"!==n.axis&&!o.overflowed[0]||"y"===n.axis&&o.overflowed[0])&&(l[0].add(r).css("top",0),G(t,"_resetY")),"y"!==n.axis&&!o.overflowed[1]||"x"===n.axis&&o.overflowed[1]){var s=dx=0;"rtl"===o.langDir&&(s=i.width()-r.outerWidth(!1),dx=Math.abs(s/o.scrollRatio.x)),r.css("left",s),l[1].css("left",dx),G(t,"_resetX")}},T=function(){function t(){r=setTimeout(function(){e.event.special.mousewheel?(clearTimeout(r),W.call(o[0])):t()},100)}var o=e(this),n=o.data(a),i=n.opt;if(!n.bindEvents){if(I.call(this),i.contentTouchScroll&&D.call(this),E.call(this),i.mouseWheel.enable){var r;t()}P.call(this),U.call(this),i.advanced.autoScrollOnFocus&&H.call(this),i.scrollButtons.enable&&F.call(this),i.keyboard.enable&&q.call(this),n.bindEvents=!0}},k=function(){var t=e(this),o=t.data(a),n=o.opt,i=a+"_"+o.idx,r=".mCSB_"+o.idx+"_scrollbar",l=e("#mCSB_"+o.idx+",#mCSB_"+o.idx+"_container,#mCSB_"+o.idx+"_container_wrapper,"+r+" ."+d[12]+",#mCSB_"+o.idx+"_dragger_vertical,#mCSB_"+o.idx+"_dragger_horizontal,"+r+">a"),s=e("#mCSB_"+o.idx+"_container");n.advanced.releaseDraggableSelectors&&l.add(e(n.advanced.releaseDraggableSelectors)),n.advanced.extraDraggableSelectors&&l.add(e(n.advanced.extraDraggableSelectors)),o.bindEvents&&(e(document).add(e(!A()||top.document)).unbind("."+i),l.each(function(){e(this).unbind("."+i)}),clearTimeout(t[0]._focusTimeout),$(t[0],"_focusTimeout"),clearTimeout(o.sequential.step),$(o.sequential,"step"),clearTimeout(s[0].onCompleteTimeout),$(s[0],"onCompleteTimeout"),o.bindEvents=!1)},M=function(t){var o=e(this),n=o.data(a),i=n.opt,r=e("#mCSB_"+n.idx+"_container_wrapper"),l=r.length?r:e("#mCSB_"+n.idx+"_container"),s=[e("#mCSB_"+n.idx+"_scrollbar_vertical"),e("#mCSB_"+n.idx+"_scrollbar_horizontal")],c=[s[0].find(".mCSB_dragger"),s[1].find(".mCSB_dragger")];"x"!==i.axis&&(n.overflowed[0]&&!t?(s[0].add(c[0]).add(s[0].children("a")).css("display","block"),l.removeClass(d[8]+" "+d[10])):(i.alwaysShowScrollbar?(2!==i.alwaysShowScrollbar&&c[0].css("display","none"),l.removeClass(d[10])):(s[0].css("display","none"),l.addClass(d[10])),l.addClass(d[8]))),"y"!==i.axis&&(n.overflowed[1]&&!t?(s[1].add(c[1]).add(s[1].children("a")).css("display","block"),l.removeClass(d[9]+" "+d[11])):(i.alwaysShowScrollbar?(2!==i.alwaysShowScrollbar&&c[1].css("display","none"),l.removeClass(d[11])):(s[1].css("display","none"),l.addClass(d[11])),l.addClass(d[9]))),n.overflowed[0]||n.overflowed[1]?o.removeClass(d[5]):o.addClass(d[5])},O=function(t){var o=t.type,a=t.target.ownerDocument!==document&&null!==frameElement?[e(frameElement).offset().top,e(frameElement).offset().left]:null,n=A()&&t.target.ownerDocument!==top.document&&null!==frameElement?[e(t.view.frameElement).offset().top,e(t.view.frameElement).offset().left]:[0,0];switch(o){case"pointerdown":case"MSPointerDown":case"pointermove":case"MSPointerMove":case"pointerup":case"MSPointerUp":return a?[t.originalEvent.pageY-a[0]+n[0],t.originalEvent.pageX-a[1]+n[1],!1]:[t.originalEvent.pageY,t.originalEvent.pageX,!1];case"touchstart":case"touchmove":case"touchend":var i=t.originalEvent.touches[0]||t.originalEvent.changedTouches[0],r=t.originalEvent.touches.length||t.originalEvent.changedTouches.length;return t.target.ownerDocument!==document?[i.screenY,i.screenX,r>1]:[i.pageY,i.pageX,r>1];default:return a?[t.pageY-a[0]+n[0],t.pageX-a[1]+n[1],!1]:[t.pageY,t.pageX,!1]}},I=function(){function t(e,t,a,n){if(h[0].idleTimer=d.scrollInertia<233?250:0,o.attr("id")===f[1])var i="x",s=(o[0].offsetLeft-t+n)*l.scrollRatio.x;else var i="y",s=(o[0].offsetTop-e+a)*l.scrollRatio.y;G(r,s.toString(),{dir:i,drag:!0})}var o,n,i,r=e(this),l=r.data(a),d=l.opt,u=a+"_"+l.idx,f=["mCSB_"+l.idx+"_dragger_vertical","mCSB_"+l.idx+"_dragger_horizontal"],h=e("#mCSB_"+l.idx+"_container"),m=e("#"+f[0]+",#"+f[1]),p=d.advanced.releaseDraggableSelectors?m.add(e(d.advanced.releaseDraggableSelectors)):m,g=d.advanced.extraDraggableSelectors?e(!A()||top.document).add(e(d.advanced.extraDraggableSelectors)):e(!A()||top.document);m.bind("contextmenu."+u,function(e){e.preventDefault()}).bind("mousedown."+u+" touchstart."+u+" pointerdown."+u+" MSPointerDown."+u,function(t){if(t.stopImmediatePropagation(),t.preventDefault(),ee(t)){c=!0,s&&(document.onselectstart=function(){return!1}),L.call(h,!1),Q(r),o=e(this);var a=o.offset(),l=O(t)[0]-a.top,u=O(t)[1]-a.left,f=o.height()+a.top,m=o.width()+a.left;f>l&&l>0&&m>u&&u>0&&(n=l,i=u),C(o,"active",d.autoExpandScrollbar)}}).bind("touchmove."+u,function(e){e.stopImmediatePropagation(),e.preventDefault();var a=o.offset(),r=O(e)[0]-a.top,l=O(e)[1]-a.left;t(n,i,r,l)}),e(document).add(g).bind("mousemove."+u+" pointermove."+u+" MSPointerMove."+u,function(e){if(o){var a=o.offset(),r=O(e)[0]-a.top,l=O(e)[1]-a.left;if(n===r&&i===l)return;t(n,i,r,l)}}).add(p).bind("mouseup."+u+" touchend."+u+" pointerup."+u+" MSPointerUp."+u,function(){o&&(C(o,"active",d.autoExpandScrollbar),o=null),c=!1,s&&(document.onselectstart=null),L.call(h,!0)})},D=function(){function o(e){if(!te(e)||c||O(e)[2])return void(t=0);t=1,b=0,C=0,d=1,y.removeClass("mCS_touch_action");var o=I.offset();u=O(e)[0]-o.top,f=O(e)[1]-o.left,z=[O(e)[0],O(e)[1]]}function n(e){if(te(e)&&!c&&!O(e)[2]&&(T.documentTouchScroll||e.preventDefault(),e.stopImmediatePropagation(),(!C||b)&&d)){g=K();var t=M.offset(),o=O(e)[0]-t.top,a=O(e)[1]-t.left,n="mcsLinearOut";if(E.push(o),W.push(a),z[2]=Math.abs(O(e)[0]-z[0]),z[3]=Math.abs(O(e)[1]-z[1]),B.overflowed[0])var i=D[0].parent().height()-D[0].height(),r=u-o>0&&o-u>-(i*B.scrollRatio.y)&&(2*z[3]<z[2]||"yx"===T.axis);if(B.overflowed[1])var l=D[1].parent().width()-D[1].width(),h=f-a>0&&a-f>-(l*B.scrollRatio.x)&&(2*z[2]<z[3]||"yx"===T.axis);r||h?(U||e.preventDefault(),b=1):(C=1,y.addClass("mCS_touch_action")),U&&e.preventDefault(),w="yx"===T.axis?[u-o,f-a]:"x"===T.axis?[null,f-a]:[u-o,null],I[0].idleTimer=250,B.overflowed[0]&&s(w[0],R,n,"y","all",!0),B.overflowed[1]&&s(w[1],R,n,"x",L,!0)}}function i(e){if(!te(e)||c||O(e)[2])return void(t=0);t=1,e.stopImmediatePropagation(),Q(y),p=K();var o=M.offset();h=O(e)[0]-o.top,m=O(e)[1]-o.left,E=[],W=[]}function r(e){if(te(e)&&!c&&!O(e)[2]){d=0,e.stopImmediatePropagation(),b=0,C=0,v=K();var t=M.offset(),o=O(e)[0]-t.top,a=O(e)[1]-t.left;if(!(v-g>30)){_=1e3/(v-p);var n="mcsEaseOut",i=2.5>_,r=i?[E[E.length-2],W[W.length-2]]:[0,0];x=i?[o-r[0],a-r[1]]:[o-h,a-m];var u=[Math.abs(x[0]),Math.abs(x[1])];_=i?[Math.abs(x[0]/4),Math.abs(x[1]/4)]:[_,_];var f=[Math.abs(I[0].offsetTop)-x[0]*l(u[0]/_[0],_[0]),Math.abs(I[0].offsetLeft)-x[1]*l(u[1]/_[1],_[1])];w="yx"===T.axis?[f[0],f[1]]:"x"===T.axis?[null,f[1]]:[f[0],null],S=[4*u[0]+T.scrollInertia,4*u[1]+T.scrollInertia];var y=parseInt(T.contentTouchScroll)||0;w[0]=u[0]>y?w[0]:0,w[1]=u[1]>y?w[1]:0,B.overflowed[0]&&s(w[0],S[0],n,"y",L,!1),B.overflowed[1]&&s(w[1],S[1],n,"x",L,!1)}}}function l(e,t){var o=[1.5*t,2*t,t/1.5,t/2];return e>90?t>4?o[0]:o[3]:e>60?t>3?o[3]:o[2]:e>30?t>8?o[1]:t>6?o[0]:t>4?t:o[2]:t>8?t:o[3]}function s(e,t,o,a,n,i){e&&G(y,e.toString(),{dur:t,scrollEasing:o,dir:a,overwrite:n,drag:i})}var d,u,f,h,m,p,g,v,x,_,w,S,b,C,y=e(this),B=y.data(a),T=B.opt,k=a+"_"+B.idx,M=e("#mCSB_"+B.idx),I=e("#mCSB_"+B.idx+"_container"),D=[e("#mCSB_"+B.idx+"_dragger_vertical"),e("#mCSB_"+B.idx+"_dragger_horizontal")],E=[],W=[],R=0,L="yx"===T.axis?"none":"all",z=[],P=I.find("iframe"),H=["touchstart."+k+" pointerdown."+k+" MSPointerDown."+k,"touchmove."+k+" pointermove."+k+" MSPointerMove."+k,"touchend."+k+" pointerup."+k+" MSPointerUp."+k],U=void 0!==document.body.style.touchAction&&""!==document.body.style.touchAction;I.bind(H[0],function(e){o(e)}).bind(H[1],function(e){n(e)}),M.bind(H[0],function(e){i(e)}).bind(H[2],function(e){r(e)}),P.length&&P.each(function(){e(this).bind("load",function(){A(this)&&e(this.contentDocument||this.contentWindow.document).bind(H[0],function(e){o(e),i(e)}).bind(H[1],function(e){n(e)}).bind(H[2],function(e){r(e)})})})},E=function(){function o(){return window.getSelection?window.getSelection().toString():document.selection&&"Control"!=document.selection.type?document.selection.createRange().text:0}function n(e,t,o){d.type=o&&i?"stepped":"stepless",d.scrollAmount=10,j(r,e,t,"mcsLinearOut",o?60:null)}var i,r=e(this),l=r.data(a),s=l.opt,d=l.sequential,u=a+"_"+l.idx,f=e("#mCSB_"+l.idx+"_container"),h=f.parent();f.bind("mousedown."+u,function(){t||i||(i=1,c=!0)}).add(document).bind("mousemove."+u,function(e){if(!t&&i&&o()){var a=f.offset(),r=O(e)[0]-a.top+f[0].offsetTop,c=O(e)[1]-a.left+f[0].offsetLeft;r>0&&r<h.height()&&c>0&&c<h.width()?d.step&&n("off",null,"stepped"):("x"!==s.axis&&l.overflowed[0]&&(0>r?n("on",38):r>h.height()&&n("on",40)),"y"!==s.axis&&l.overflowed[1]&&(0>c?n("on",37):c>h.width()&&n("on",39)))}}).bind("mouseup."+u+" dragend."+u,function(){t||(i&&(i=0,n("off",null)),c=!1)})},W=function(){function t(t,a){if(Q(o),!z(o,t.target)){var r="auto"!==i.mouseWheel.deltaFactor?parseInt(i.mouseWheel.deltaFactor):s&&t.deltaFactor<100?100:t.deltaFactor||100,d=i.scrollInertia;if("x"===i.axis||"x"===i.mouseWheel.axis)var u="x",f=[Math.round(r*n.scrollRatio.x),parseInt(i.mouseWheel.scrollAmount)],h="auto"!==i.mouseWheel.scrollAmount?f[1]:f[0]>=l.width()?.9*l.width():f[0],m=Math.abs(e("#mCSB_"+n.idx+"_container")[0].offsetLeft),p=c[1][0].offsetLeft,g=c[1].parent().width()-c[1].width(),v="y"===i.mouseWheel.axis?t.deltaY||a:t.deltaX;else var u="y",f=[Math.round(r*n.scrollRatio.y),parseInt(i.mouseWheel.scrollAmount)],h="auto"!==i.mouseWheel.scrollAmount?f[1]:f[0]>=l.height()?.9*l.height():f[0],m=Math.abs(e("#mCSB_"+n.idx+"_container")[0].offsetTop),p=c[0][0].offsetTop,g=c[0].parent().height()-c[0].height(),v=t.deltaY||a;"y"===u&&!n.overflowed[0]||"x"===u&&!n.overflowed[1]||((i.mouseWheel.invert||t.webkitDirectionInvertedFromDevice)&&(v=-v),i.mouseWheel.normalizeDelta&&(v=0>v?-1:1),(v>0&&0!==p||0>v&&p!==g||i.mouseWheel.preventDefault)&&(t.stopImmediatePropagation(),t.preventDefault()),t.deltaFactor<5&&!i.mouseWheel.normalizeDelta&&(h=t.deltaFactor,d=17),G(o,(m-v*h).toString(),{dir:u,dur:d}))}}if(e(this).data(a)){var o=e(this),n=o.data(a),i=n.opt,r=a+"_"+n.idx,l=e("#mCSB_"+n.idx),c=[e("#mCSB_"+n.idx+"_dragger_vertical"),e("#mCSB_"+n.idx+"_dragger_horizontal")],d=e("#mCSB_"+n.idx+"_container").find("iframe");d.length&&d.each(function(){e(this).bind("load",function(){A(this)&&e(this.contentDocument||this.contentWindow.document).bind("mousewheel."+r,function(e,o){t(e,o)})})}),l.bind("mousewheel."+r,function(e,o){t(e,o)})}},R=new Object,A=function(t){var o=!1,a=!1,n=null;if(void 0===t?a="#empty":void 0!==e(t).attr("id")&&(a=e(t).attr("id")),a!==!1&&void 0!==R[a])return R[a];if(t){try{var i=t.contentDocument||t.contentWindow.document;n=i.body.innerHTML}catch(r){}o=null!==n}else{try{var i=top.document;n=i.body.innerHTML}catch(r){}o=null!==n}return a!==!1&&(R[a]=o),o},L=function(e){var t=this.find("iframe");if(t.length){var o=e?"auto":"none";t.css("pointer-events",o)}},z=function(t,o){var n=o.nodeName.toLowerCase(),i=t.data(a).opt.mouseWheel.disableOver,r=["select","textarea"];return e.inArray(n,i)>-1&&!(e.inArray(n,r)>-1&&!e(o).is(":focus"))},P=function(){var t,o=e(this),n=o.data(a),i=a+"_"+n.idx,r=e("#mCSB_"+n.idx+"_container"),l=r.parent(),s=e(".mCSB_"+n.idx+"_scrollbar ."+d[12]);s.bind("mousedown."+i+" touchstart."+i+" pointerdown."+i+" MSPointerDown."+i,function(o){c=!0,e(o.target).hasClass("mCSB_dragger")||(t=1)}).bind("touchend."+i+" pointerup."+i+" MSPointerUp."+i,function(){c=!1}).bind("click."+i,function(a){if(t&&(t=0,e(a.target).hasClass(d[12])||e(a.target).hasClass("mCSB_draggerRail"))){Q(o);var i=e(this),s=i.find(".mCSB_dragger");if(i.parent(".mCSB_scrollTools_horizontal").length>0){if(!n.overflowed[1])return;var c="x",u=a.pageX>s.offset().left?-1:1,f=Math.abs(r[0].offsetLeft)-u*(.9*l.width())}else{if(!n.overflowed[0])return;var c="y",u=a.pageY>s.offset().top?-1:1,f=Math.abs(r[0].offsetTop)-u*(.9*l.height())}G(o,f.toString(),{dir:c,scrollEasing:"mcsEaseInOut"})}})},H=function(){var t=e(this),o=t.data(a),n=o.opt,i=a+"_"+o.idx,r=e("#mCSB_"+o.idx+"_container"),l=r.parent();r.bind("focusin."+i,function(){var o=e(document.activeElement),a=r.find(".mCustomScrollBox").length,i=0;o.is(n.advanced.autoScrollOnFocus)&&(Q(t),clearTimeout(t[0]._focusTimeout),t[0]._focusTimer=a?(i+17)*a:0,t[0]._focusTimeout=setTimeout(function(){var e=[ae(o)[0],ae(o)[1]],a=[r[0].offsetTop,r[0].offsetLeft],s=[a[0]+e[0]>=0&&a[0]+e[0]<l.height()-o.outerHeight(!1),a[1]+e[1]>=0&&a[0]+e[1]<l.width()-o.outerWidth(!1)],c="yx"!==n.axis||s[0]||s[1]?"all":"none";"x"===n.axis||s[0]||G(t,e[0].toString(),{dir:"y",scrollEasing:"mcsEaseInOut",overwrite:c,dur:i}),"y"===n.axis||s[1]||G(t,e[1].toString(),{dir:"x",scrollEasing:"mcsEaseInOut",overwrite:c,dur:i})},t[0]._focusTimer))})},U=function(){var t=e(this),o=t.data(a),n=a+"_"+o.idx,i=e("#mCSB_"+o.idx+"_container").parent();i.bind("scroll."+n,function(){0===i.scrollTop()&&0===i.scrollLeft()||e(".mCSB_"+o.idx+"_scrollbar").css("visibility","hidden")})},F=function(){var t=e(this),o=t.data(a),n=o.opt,i=o.sequential,r=a+"_"+o.idx,l=".mCSB_"+o.idx+"_scrollbar",s=e(l+">a");s.bind("contextmenu."+r,function(e){e.preventDefault()}).bind("mousedown."+r+" touchstart."+r+" pointerdown."+r+" MSPointerDown."+r+" mouseup."+r+" touchend."+r+" pointerup."+r+" MSPointerUp."+r+" mouseout."+r+" pointerout."+r+" MSPointerOut."+r+" click."+r,function(a){function r(e,o){i.scrollAmount=n.scrollButtons.scrollAmount,j(t,e,o)}if(a.preventDefault(),ee(a)){var l=e(this).attr("class");switch(i.type=n.scrollButtons.scrollType,a.type){case"mousedown":case"touchstart":case"pointerdown":case"MSPointerDown":if("stepped"===i.type)return;c=!0,o.tweenRunning=!1,r("on",l);break;case"mouseup":case"touchend":case"pointerup":case"MSPointerUp":case"mouseout":case"pointerout":case"MSPointerOut":if("stepped"===i.type)return;c=!1,i.dir&&r("off",l);break;case"click":if("stepped"!==i.type||o.tweenRunning)return;r("on",l)}}})},q=function(){function t(t){function a(e,t){r.type=i.keyboard.scrollType,r.scrollAmount=i.keyboard.scrollAmount,"stepped"===r.type&&n.tweenRunning||j(o,e,t)}switch(t.type){case"blur":n.tweenRunning&&r.dir&&a("off",null);break;case"keydown":case"keyup":var l=t.keyCode?t.keyCode:t.which,s="on";if("x"!==i.axis&&(38===l||40===l)||"y"!==i.axis&&(37===l||39===l)){if((38===l||40===l)&&!n.overflowed[0]||(37===l||39===l)&&!n.overflowed[1])return;"keyup"===t.type&&(s="off"),e(document.activeElement).is(u)||(t.preventDefault(),t.stopImmediatePropagation(),a(s,l))}else if(33===l||34===l){if((n.overflowed[0]||n.overflowed[1])&&(t.preventDefault(),t.stopImmediatePropagation()),"keyup"===t.type){Q(o);var f=34===l?-1:1;if("x"===i.axis||"yx"===i.axis&&n.overflowed[1]&&!n.overflowed[0])var h="x",m=Math.abs(c[0].offsetLeft)-f*(.9*d.width());else var h="y",m=Math.abs(c[0].offsetTop)-f*(.9*d.height());G(o,m.toString(),{dir:h,scrollEasing:"mcsEaseInOut"})}}else if((35===l||36===l)&&!e(document.activeElement).is(u)&&((n.overflowed[0]||n.overflowed[1])&&(t.preventDefault(),t.stopImmediatePropagation()),"keyup"===t.type)){if("x"===i.axis||"yx"===i.axis&&n.overflowed[1]&&!n.overflowed[0])var h="x",m=35===l?Math.abs(d.width()-c.outerWidth(!1)):0;else var h="y",m=35===l?Math.abs(d.height()-c.outerHeight(!1)):0;G(o,m.toString(),{dir:h,scrollEasing:"mcsEaseInOut"})}}}var o=e(this),n=o.data(a),i=n.opt,r=n.sequential,l=a+"_"+n.idx,s=e("#mCSB_"+n.idx),c=e("#mCSB_"+n.idx+"_container"),d=c.parent(),u="input,textarea,select,datalist,keygen,[contenteditable='true']",f=c.find("iframe"),h=["blur."+l+" keydown."+l+" keyup."+l];f.length&&f.each(function(){e(this).bind("load",function(){A(this)&&e(this.contentDocument||this.contentWindow.document).bind(h[0],function(e){t(e)})})}),s.attr("tabindex","0").bind(h[0],function(e){t(e)})},j=function(t,o,n,i,r){function l(e){u.snapAmount&&(f.scrollAmount=u.snapAmount instanceof Array?"x"===f.dir[0]?u.snapAmount[1]:u.snapAmount[0]:u.snapAmount);var o="stepped"!==f.type,a=r?r:e?o?p/1.5:g:1e3/60,n=e?o?7.5:40:2.5,s=[Math.abs(h[0].offsetTop),Math.abs(h[0].offsetLeft)],d=[c.scrollRatio.y>10?10:c.scrollRatio.y,c.scrollRatio.x>10?10:c.scrollRatio.x],m="x"===f.dir[0]?s[1]+f.dir[1]*(d[1]*n):s[0]+f.dir[1]*(d[0]*n),v="x"===f.dir[0]?s[1]+f.dir[1]*parseInt(f.scrollAmount):s[0]+f.dir[1]*parseInt(f.scrollAmount),x="auto"!==f.scrollAmount?v:m,_=i?i:e?o?"mcsLinearOut":"mcsEaseInOut":"mcsLinear",w=!!e;return e&&17>a&&(x="x"===f.dir[0]?s[1]:s[0]),G(t,x.toString(),{dir:f.dir[0],scrollEasing:_,dur:a,onComplete:w}),e?void(f.dir=!1):(clearTimeout(f.step),void(f.step=setTimeout(function(){l()},a)))}function s(){clearTimeout(f.step),$(f,"step"),Q(t)}var c=t.data(a),u=c.opt,f=c.sequential,h=e("#mCSB_"+c.idx+"_container"),m="stepped"===f.type,p=u.scrollInertia<26?26:u.scrollInertia,g=u.scrollInertia<1?17:u.scrollInertia;switch(o){case"on":if(f.dir=[n===d[16]||n===d[15]||39===n||37===n?"x":"y",n===d[13]||n===d[15]||38===n||37===n?-1:1],Q(t),oe(n)&&"stepped"===f.type)return;l(m);break;case"off":s(),(m||c.tweenRunning&&f.dir)&&l(!0)}},Y=function(t){var o=e(this).data(a).opt,n=[];return"function"==typeof t&&(t=t()),t instanceof Array?n=t.length>1?[t[0],t[1]]:"x"===o.axis?[null,t[0]]:[t[0],null]:(n[0]=t.y?t.y:t.x||"x"===o.axis?null:t,n[1]=t.x?t.x:t.y||"y"===o.axis?null:t),"function"==typeof n[0]&&(n[0]=n[0]()),"function"==typeof n[1]&&(n[1]=n[1]()),n},X=function(t,o){if(null!=t&&"undefined"!=typeof t){var n=e(this),i=n.data(a),r=i.opt,l=e("#mCSB_"+i.idx+"_container"),s=l.parent(),c=typeof t;o||(o="x"===r.axis?"x":"y");var d="x"===o?l.outerWidth(!1)-s.width():l.outerHeight(!1)-s.height(),f="x"===o?l[0].offsetLeft:l[0].offsetTop,h="x"===o?"left":"top";switch(c){case"function":return t();case"object":var m=t.jquery?t:e(t);if(!m.length)return;return"x"===o?ae(m)[1]:ae(m)[0];case"string":case"number":if(oe(t))return Math.abs(t);if(-1!==t.indexOf("%"))return Math.abs(d*parseInt(t)/100);if(-1!==t.indexOf("-="))return Math.abs(f-parseInt(t.split("-=")[1]));if(-1!==t.indexOf("+=")){var p=f+parseInt(t.split("+=")[1]);return p>=0?0:Math.abs(p)}if(-1!==t.indexOf("px")&&oe(t.split("px")[0]))return Math.abs(t.split("px")[0]);if("top"===t||"left"===t)return 0;if("bottom"===t)return Math.abs(s.height()-l.outerHeight(!1));if("right"===t)return Math.abs(s.width()-l.outerWidth(!1));if("first"===t||"last"===t){var m=l.find(":"+t);return"x"===o?ae(m)[1]:ae(m)[0]}return e(t).length?"x"===o?ae(e(t))[1]:ae(e(t))[0]:(l.css(h,t),void u.update.call(null,n[0]))}}},N=function(t){function o(){return clearTimeout(f[0].autoUpdate),0===l.parents("html").length?void(l=null):void(f[0].autoUpdate=setTimeout(function(){return c.advanced.updateOnSelectorChange&&(s.poll.change.n=i(),s.poll.change.n!==s.poll.change.o)?(s.poll.change.o=s.poll.change.n,void r(3)):c.advanced.updateOnContentResize&&(s.poll.size.n=l[0].scrollHeight+l[0].scrollWidth+f[0].offsetHeight+l[0].offsetHeight+l[0].offsetWidth,s.poll.size.n!==s.poll.size.o)?(s.poll.size.o=s.poll.size.n,void r(1)):!c.advanced.updateOnImageLoad||"auto"===c.advanced.updateOnImageLoad&&"y"===c.axis||(s.poll.img.n=f.find("img").length,s.poll.img.n===s.poll.img.o)?void((c.advanced.updateOnSelectorChange||c.advanced.updateOnContentResize||c.advanced.updateOnImageLoad)&&o()):(s.poll.img.o=s.poll.img.n,void f.find("img").each(function(){n(this)}))},c.advanced.autoUpdateTimeout))}function n(t){function o(e,t){return function(){
return t.apply(e,arguments)}}function a(){this.onload=null,e(t).addClass(d[2]),r(2)}if(e(t).hasClass(d[2]))return void r();var n=new Image;n.onload=o(n,a),n.src=t.src}function i(){c.advanced.updateOnSelectorChange===!0&&(c.advanced.updateOnSelectorChange="*");var e=0,t=f.find(c.advanced.updateOnSelectorChange);return c.advanced.updateOnSelectorChange&&t.length>0&&t.each(function(){e+=this.offsetHeight+this.offsetWidth}),e}function r(e){clearTimeout(f[0].autoUpdate),u.update.call(null,l[0],e)}var l=e(this),s=l.data(a),c=s.opt,f=e("#mCSB_"+s.idx+"_container");return t?(clearTimeout(f[0].autoUpdate),void $(f[0],"autoUpdate")):void o()},V=function(e,t,o){return Math.round(e/t)*t-o},Q=function(t){var o=t.data(a),n=e("#mCSB_"+o.idx+"_container,#mCSB_"+o.idx+"_container_wrapper,#mCSB_"+o.idx+"_dragger_vertical,#mCSB_"+o.idx+"_dragger_horizontal");n.each(function(){Z.call(this)})},G=function(t,o,n){function i(e){return s&&c.callbacks[e]&&"function"==typeof c.callbacks[e]}function r(){return[c.callbacks.alwaysTriggerOffsets||w>=S[0]+y,c.callbacks.alwaysTriggerOffsets||-B>=w]}function l(){var e=[h[0].offsetTop,h[0].offsetLeft],o=[x[0].offsetTop,x[0].offsetLeft],a=[h.outerHeight(!1),h.outerWidth(!1)],i=[f.height(),f.width()];t[0].mcs={content:h,top:e[0],left:e[1],draggerTop:o[0],draggerLeft:o[1],topPct:Math.round(100*Math.abs(e[0])/(Math.abs(a[0])-i[0])),leftPct:Math.round(100*Math.abs(e[1])/(Math.abs(a[1])-i[1])),direction:n.dir}}var s=t.data(a),c=s.opt,d={trigger:"internal",dir:"y",scrollEasing:"mcsEaseOut",drag:!1,dur:c.scrollInertia,overwrite:"all",callbacks:!0,onStart:!0,onUpdate:!0,onComplete:!0},n=e.extend(d,n),u=[n.dur,n.drag?0:n.dur],f=e("#mCSB_"+s.idx),h=e("#mCSB_"+s.idx+"_container"),m=h.parent(),p=c.callbacks.onTotalScrollOffset?Y.call(t,c.callbacks.onTotalScrollOffset):[0,0],g=c.callbacks.onTotalScrollBackOffset?Y.call(t,c.callbacks.onTotalScrollBackOffset):[0,0];if(s.trigger=n.trigger,0===m.scrollTop()&&0===m.scrollLeft()||(e(".mCSB_"+s.idx+"_scrollbar").css("visibility","visible"),m.scrollTop(0).scrollLeft(0)),"_resetY"!==o||s.contentReset.y||(i("onOverflowYNone")&&c.callbacks.onOverflowYNone.call(t[0]),s.contentReset.y=1),"_resetX"!==o||s.contentReset.x||(i("onOverflowXNone")&&c.callbacks.onOverflowXNone.call(t[0]),s.contentReset.x=1),"_resetY"!==o&&"_resetX"!==o){if(!s.contentReset.y&&t[0].mcs||!s.overflowed[0]||(i("onOverflowY")&&c.callbacks.onOverflowY.call(t[0]),s.contentReset.x=null),!s.contentReset.x&&t[0].mcs||!s.overflowed[1]||(i("onOverflowX")&&c.callbacks.onOverflowX.call(t[0]),s.contentReset.x=null),c.snapAmount){var v=c.snapAmount instanceof Array?"x"===n.dir?c.snapAmount[1]:c.snapAmount[0]:c.snapAmount;o=V(o,v,c.snapOffset)}switch(n.dir){case"x":var x=e("#mCSB_"+s.idx+"_dragger_horizontal"),_="left",w=h[0].offsetLeft,S=[f.width()-h.outerWidth(!1),x.parent().width()-x.width()],b=[o,0===o?0:o/s.scrollRatio.x],y=p[1],B=g[1],T=y>0?y/s.scrollRatio.x:0,k=B>0?B/s.scrollRatio.x:0;break;case"y":var x=e("#mCSB_"+s.idx+"_dragger_vertical"),_="top",w=h[0].offsetTop,S=[f.height()-h.outerHeight(!1),x.parent().height()-x.height()],b=[o,0===o?0:o/s.scrollRatio.y],y=p[0],B=g[0],T=y>0?y/s.scrollRatio.y:0,k=B>0?B/s.scrollRatio.y:0}b[1]<0||0===b[0]&&0===b[1]?b=[0,0]:b[1]>=S[1]?b=[S[0],S[1]]:b[0]=-b[0],t[0].mcs||(l(),i("onInit")&&c.callbacks.onInit.call(t[0])),clearTimeout(h[0].onCompleteTimeout),J(x[0],_,Math.round(b[1]),u[1],n.scrollEasing),!s.tweenRunning&&(0===w&&b[0]>=0||w===S[0]&&b[0]<=S[0])||J(h[0],_,Math.round(b[0]),u[0],n.scrollEasing,n.overwrite,{onStart:function(){n.callbacks&&n.onStart&&!s.tweenRunning&&(i("onScrollStart")&&(l(),c.callbacks.onScrollStart.call(t[0])),s.tweenRunning=!0,C(x),s.cbOffsets=r())},onUpdate:function(){n.callbacks&&n.onUpdate&&i("whileScrolling")&&(l(),c.callbacks.whileScrolling.call(t[0]))},onComplete:function(){if(n.callbacks&&n.onComplete){"yx"===c.axis&&clearTimeout(h[0].onCompleteTimeout);var e=h[0].idleTimer||0;h[0].onCompleteTimeout=setTimeout(function(){i("onScroll")&&(l(),c.callbacks.onScroll.call(t[0])),i("onTotalScroll")&&b[1]>=S[1]-T&&s.cbOffsets[0]&&(l(),c.callbacks.onTotalScroll.call(t[0])),i("onTotalScrollBack")&&b[1]<=k&&s.cbOffsets[1]&&(l(),c.callbacks.onTotalScrollBack.call(t[0])),s.tweenRunning=!1,h[0].idleTimer=0,C(x,"hide")},e)}}})}},J=function(e,t,o,a,n,i,r){function l(){S.stop||(x||m.call(),x=K()-v,s(),x>=S.time&&(S.time=x>S.time?x+f-(x-S.time):x+f-1,S.time<x+1&&(S.time=x+1)),S.time<a?S.id=h(l):g.call())}function s(){a>0?(S.currVal=u(S.time,_,b,a,n),w[t]=Math.round(S.currVal)+"px"):w[t]=o+"px",p.call()}function c(){f=1e3/60,S.time=x+f,h=window.requestAnimationFrame?window.requestAnimationFrame:function(e){return s(),setTimeout(e,.01)},S.id=h(l)}function d(){null!=S.id&&(window.requestAnimationFrame?window.cancelAnimationFrame(S.id):clearTimeout(S.id),S.id=null)}function u(e,t,o,a,n){switch(n){case"linear":case"mcsLinear":return o*e/a+t;case"mcsLinearOut":return e/=a,e--,o*Math.sqrt(1-e*e)+t;case"easeInOutSmooth":return e/=a/2,1>e?o/2*e*e+t:(e--,-o/2*(e*(e-2)-1)+t);case"easeInOutStrong":return e/=a/2,1>e?o/2*Math.pow(2,10*(e-1))+t:(e--,o/2*(-Math.pow(2,-10*e)+2)+t);case"easeInOut":case"mcsEaseInOut":return e/=a/2,1>e?o/2*e*e*e+t:(e-=2,o/2*(e*e*e+2)+t);case"easeOutSmooth":return e/=a,e--,-o*(e*e*e*e-1)+t;case"easeOutStrong":return o*(-Math.pow(2,-10*e/a)+1)+t;case"easeOut":case"mcsEaseOut":default:var i=(e/=a)*e,r=i*e;return t+o*(.499999999999997*r*i+-2.5*i*i+5.5*r+-6.5*i+4*e)}}e._mTween||(e._mTween={top:{},left:{}});var f,h,r=r||{},m=r.onStart||function(){},p=r.onUpdate||function(){},g=r.onComplete||function(){},v=K(),x=0,_=e.offsetTop,w=e.style,S=e._mTween[t];"left"===t&&(_=e.offsetLeft);var b=o-_;S.stop=0,"none"!==i&&d(),c()},K=function(){return window.performance&&window.performance.now?window.performance.now():window.performance&&window.performance.webkitNow?window.performance.webkitNow():Date.now?Date.now():(new Date).getTime()},Z=function(){var e=this;e._mTween||(e._mTween={top:{},left:{}});for(var t=["top","left"],o=0;o<t.length;o++){var a=t[o];e._mTween[a].id&&(window.requestAnimationFrame?window.cancelAnimationFrame(e._mTween[a].id):clearTimeout(e._mTween[a].id),e._mTween[a].id=null,e._mTween[a].stop=1)}},$=function(e,t){try{delete e[t]}catch(o){e[t]=null}},ee=function(e){return!(e.which&&1!==e.which)},te=function(e){var t=e.originalEvent.pointerType;return!(t&&"touch"!==t&&2!==t)},oe=function(e){return!isNaN(parseFloat(e))&&isFinite(e)},ae=function(e){var t=e.parents(".mCSB_container");return[e.offset().top-t.offset().top,e.offset().left-t.offset().left]},ne=function(){function e(){var e=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var t=0;t<e.length;t++)if(e[t]+"Hidden"in document)return e[t]+"Hidden";return null}var t=e();return t?document[t]:!1};e.fn[o]=function(t){return u[t]?u[t].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof t&&t?void e.error("Method "+t+" does not exist"):u.init.apply(this,arguments)},e[o]=function(t){return u[t]?u[t].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof t&&t?void e.error("Method "+t+" does not exist"):u.init.apply(this,arguments)},e[o].defaults=i,window[o]=!0,e(window).bind("load",function(){e(n)[o](),e.extend(e.expr[":"],{mcsInView:e.expr[":"].mcsInView||function(t){var o,a,n=e(t),i=n.parents(".mCSB_container");if(i.length)return o=i.parent(),a=[i[0].offsetTop,i[0].offsetLeft],a[0]+ae(n)[0]>=0&&a[0]+ae(n)[0]<o.height()-n.outerHeight(!1)&&a[1]+ae(n)[1]>=0&&a[1]+ae(n)[1]<o.width()-n.outerWidth(!1)},mcsInSight:e.expr[":"].mcsInSight||function(t,o,a){var n,i,r,l,s=e(t),c=s.parents(".mCSB_container"),d="exact"===a[3]?[[1,0],[1,0]]:[[.9,.1],[.6,.4]];if(c.length)return n=[s.outerHeight(!1),s.outerWidth(!1)],r=[c[0].offsetTop+ae(s)[0],c[0].offsetLeft+ae(s)[1]],i=[c.parent()[0].offsetHeight,c.parent()[0].offsetWidth],l=[n[0]<i[0]?d[0]:d[1],n[1]<i[1]?d[0]:d[1]],r[0]-i[0]*l[0][0]<0&&r[0]+n[0]-i[0]*l[0][1]>=0&&r[1]-i[1]*l[1][0]<0&&r[1]+n[1]-i[1]*l[1][1]>=0},mcsOverflow:e.expr[":"].mcsOverflow||function(t){var o=e(t).data(a);if(o)return o.overflowed[0]||o.overflowed[1]}})})})});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:53:"/local/templates/.default/js/script.js?16965759327972";s:6:"source";s:38:"/local/templates/.default/js/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function() {

	$('#wrapper').css('padding-top', $('#header').innerHeight());
	$('#header').addClass('sticky');
	$(window).on('resize orientationChange', function() {
		$('#wrapper').css('padding-top', $('#header').innerHeight());
	});

	/**/
	function stickyFooter(){
		if($(window).height() == $('#wrapper').innerHeight()){
			$('#wrapper').css('padding-bottom', $('#footer').innerHeight());
			$('#footer').addClass('sticky-footer');
		}else{
			$('#footer').removeClass('sticky-footer');
			$('#wrapper').css('padding-bottom', 0);
		}
	}
	stickyFooter();
	$(window).on('resize orientationChange', function() {
		stickyFooter();
	});

	/**/
	$(window).scroll(function (){
		if ($(this).scrollTop() > 0){
			$("body").addClass('sticky');
		} else{
			$("body").removeClass('sticky');
		}
	});

	$('#nav-trigger, .bg-hide, #nav-close').on('click', function(){
		$('#nav-wrap').toggleClass('active');
		$('#nav-wrap').slideToggle();
		$('.nav-trigger').toggleClass('active');
		$('body').toggleClass('menu-active');
		return false;
	});

	$('#search-trigger').on('click', function(){
		$('#search-header').toggleClass('active');
		$(this).toggleClass('active');
		return false;
	});

	/* */
	$('#grid-view').on('click', function(){
		$('.products-row').removeClass('products-list');
		$(this).addClass('active');
		$('#list-view').removeClass('active');
		return false;
	});
	$('#list-view').on('click', function(){
		$('.products-row').addClass('products-list');
		$(this).addClass('active');
		$('#grid-view').removeClass('active');
		return false;
	});
	$('#open-filter, #filterClose, .filter-open-bg').on('click', function(){
		$('#filter').toggleClass('active');
		$('body').toggleClass('filter-active');
		return false;
	});

	// Video. When the slide is changing
	function playPauseVideo(slick, control){
		var currentSlide, slideType, startTime, player, video;
		currentSlide = slick.find(".slick-current");
		slideType = currentSlide.attr("class").split(" ")[1];
		player = currentSlide.find("iframe").get(0);
		startTime = currentSlide.data("video-start");
		if (slideType === "video") {
			video = currentSlide.find("video").get(0);
			if (video != null) {
			  if (control === "play"){
			    video.play();
			  } else {
			    video.pause();
			  }
			}
		}
	}
	$('#slider').on("init", function(slick){
		slick = $(slick.currentTarget);
		setTimeout(function(){
	  		playPauseVideo(slick,"play");
		}, 100);
	});
	$('#slider').on("beforeChange", function(event, slick) {
		slick = $(slick.$slider);
		playPauseVideo(slick,"pause");
	});
	$('#slider').on("afterChange", function(event, slick) {
		slick = $(slick.$slider);
		playPauseVideo(slick,"play");
	});

	$('#slider').slick({
		infinite: true,
		slidesToShow: 1,
		autoplay: true,
		arrows: true,
		dots: true,
		draggable: true,
		fade: false,
		speed: 1000,
		autoplaySpeed: 10000,
		appendDots: '.slider-nav',
		appendArrows: '.slider-nav',
	});

	$('.carousel').slick({
		infinite: true,
		slidesToShow: 3,
		autoplay: true,
		arrows: true,
		dots: false,
		draggable: true,
		fade: false,
		speed: 1000,
		autoplaySpeed: 7000,
		responsive: [
		    {
		      breakpoint: 575,
		      settings: {
		        slidesToShow: 2,
		      }
		    },
		    {
		      breakpoint: 350,
		      settings: {
		        slidesToShow: 1,
		      }
		    }
		]
	});

	$('.gallery-carousel').slick({
		infinite: true,
		slidesToShow: 1,
		autoplay: false,
		arrows: true,
		dots: false,
		draggable: true,
		fade: false,
		speed: 1000,
		adaptiveHeight: true,
		appendDots: '.modal-gallery .slider-nav',
		appendArrows: '.modal-gallery .slider-nav',
	});
	$('.modal-gallery').on('shown.bs.modal', function (e) {
	    $('.gallery-carousel').slick("setPosition", 0);
	});

	/**/
    $(window).scroll(function (){
	    if ($(this).scrollTop() > 800){
	      $("#up").fadeIn();
	    } else{
	      $("#up").fadeOut();
	    }
    });
    $("#up").click(function (){
	    $("body,html").animate({
	      scrollTop:0
	    }, 600);
	    return false;
    });

    /**/
    jcf.setOptions('Select', {
		wrapNative: false
	});
	jcf.setOptions('File', {
		buttonText: $('html').attr('lang') == 'en' ? 'pdf, doc, docx. 2Mb max' : 'pdf, doc, docx. Не более 2 Мб',
		placeholderText: $('html').attr('lang') == 'en' ? 'Attach resume' : 'Прикрепить резюме'
	});
	jcf.replaceAll();

	$(".scroll-box").mCustomScrollbar({
		theme: "minimal",
		scrollInertia: 400
	});

	/**/
	function bootstrapTabControl(){
	  var i, items = $('.tabs .nav a'), pane = $('.tabs .tab-pane');
	  // next
	  $('.tab-next').on('click', function(){
	      for(i = 0; i < items.length; i++){
	          if($(items[i]).hasClass('active') == true){
	              break;
	          }
	      }
	      if(i < items.length - 1){
	          // for tab
	          $(items[i]).removeClass('active');
	          $(items[i+1]).addClass('active');
	          // for pane
	          $(pane[i]).removeClass('show active');
	          $(pane[i+1]).addClass('show active');

	          $('.tab-prev').removeClass('hide');
	      }
	      if(i == items.length - 2){
	      	$(this).addClass('hide');
	      }
	      return false;
	  });
	  // Prev
	  $('.tab-prev').on('click', function(){
	      for(i = 0; i < items.length; i++){
	          if($(items[i]).hasClass('active') == true){
	              break;
	          }
	      }
	      if(i != 0){
	          // for tab
	          $(items[i]).removeClass('active');
	          $(items[i-1]).addClass('active');
	          // for pane
	          $(pane[i]).removeClass('show active');
	          $(pane[i-1]).addClass('show active');

	          $('.tab-next').removeClass('hide');
	      }
	      if(i == 1){
	      	$(this).addClass('hide');
	      }
	      return false;
	  });
	}
	bootstrapTabControl();

	$('.year-carousel').slick({
		infinite: false,
		slidesToShow: 11,
		slidesToScroll: 11,
		autoplay: false,
		arrows: true,
		dots: false,
		draggable: false,
		fade: false,
		speed: 500,
		responsive: [
            {
                breakpoint: 1201,
                settings: {
					slidesToShow: 8,
					slidesToScroll: 8
                }
			},
			{
                breakpoint: 768,
                settings: {
					slidesToShow: 4,
					slidesToScroll: 4
                }
            }
        ]
	});

	$('.our-history .nav a').on('click', function (e) {
		e.preventDefault();
		$('.our-history .nav a').removeClass('active');
		$(this).addClass('active');
		$('.tab-pane').removeClass('active show');
        $($(this).attr('href')).addClass('active show');
	});

	$('.fancybox').fancybox({
		beforeShow : function(){
		 this.title =  $(this.element).data("caption");
		}
	});

	$('.js-decor-btn').on('click', function (e) {
		e.preventDefault();
		setTimeout(function(){
			$('.js-decor-slider-large').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				adaptiveHeight: true,
				asNavFor: '.js-decor-slider-small'
			});
			$('.js-decor-slider-small').slick({
				slidesToShow: 8,
				slidesToScroll: 1,
				asNavFor: '.js-decor-slider-large',
				dots: false,
				centerMode: false,
				focusOnSelect: true
			});
		}, 200);

	});

	function sayHi() { $("#preloader").hide(); }setTimeout(sayHi, 2000);

	const navTrigger = document.querySelector('#nav-trigger')
	const svgDocument = document.querySelector('.logo object').contentDocument
	const svgElement = svgDocument.querySelector('svg')

	navTrigger.addEventListener('click', () => {
		erase()
	})

	function draw() {
		svgElement.classList.add('active')
	}

	function erase() {
		svgElement.classList.remove('active')
	}

	setTimeout(draw, 300)
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:50:"/local/templates/.default/js/map.js?16965759323330";s:6:"source";s:35:"/local/templates/.default/js/map.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/

function new_map( $el ) {

      // var
      var $markers = $el.find('.marker');
      var $zoom = Number($el.attr('data-zoom'));

      // vars
      var args = {
            zoom: $zoom,
            center: new google.maps.LatLng(0, 0),
            mapTypeControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      // create map
      var map = new google.maps.Map( $el[0], args);

      // add a markers reference
      map.markers = [];

      // add markers
      $markers.each(function(){
            add_marker( $(this), map );
      });
      // center map
      center_map( map );

      // return
      return map;
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {
      // var
      var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

      // create marker
      var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: '/local/templates/.default/img/pin.png',
      });
      // add to array
      map.markers.push( marker );

      // if marker contains HTML, add it to an infoWindow
      // if( $marker.html() ){
            // create info window
            var infowindow = new google.maps.InfoWindow({
                  content: $marker.html()
            });
            // show info window when marker is clicked

            google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open( map, this );
            });

      // }
}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/
function center_map( map, zoom ) {

      // vars
      var bounds = new google.maps.LatLngBounds();
      // loop through all markers and create bounds
      $.each( map.markers, function( i, marker ){
            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
            bounds.extend( latlng );
      });
      // only 1 marker?
      if( map.markers.length == 1 ){
            // set center of map
          map.setCenter( bounds.getCenter() );
          //map.setZoom( 16 );
      }
      else{
            // fit to bounds
            map.fitBounds( bounds );
      }
}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type    function
*  @date    8/11/2013
*  @since   5.0.0
*
*  @param   n/a
*  @return  n/a
*/
// global var
var map = null;

$(document).ready(function(){

      $('.map').each(function(){
            // create map
            map = new_map( $(this) );
      });

});

})(jQuery);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:67:"/bitrix/components/bitrix/search.title/script.min.js?16965758586443";s:6:"source";s:48:"/bitrix/components/bitrix/search.title/script.js";s:3:"min";s:52:"/bitrix/components/bitrix/search.title/script.min.js";s:3:"map";s:52:"/bitrix/components/bitrix/search.title/script.map.js";}"*/
function JCTitleSearch(t){var e=this;this.arParams={AJAX_PAGE:t.AJAX_PAGE,CONTAINER_ID:t.CONTAINER_ID,INPUT_ID:t.INPUT_ID,MIN_QUERY_LEN:parseInt(t.MIN_QUERY_LEN)};if(t.WAIT_IMAGE)this.arParams.WAIT_IMAGE=t.WAIT_IMAGE;if(t.MIN_QUERY_LEN<=0)t.MIN_QUERY_LEN=1;this.cache=[];this.cache_key=null;this.startText="";this.running=false;this.runningCall=false;this.currentRow=-1;this.RESULT=null;this.CONTAINER=null;this.INPUT=null;this.WAIT=null;this.ShowResult=function(t){if(BX.type.isString(t)){e.RESULT.innerHTML=t}e.RESULT.style.display=e.RESULT.innerHTML!==""?"block":"none";var s=e.adjustResultNode();var i;var n;var l=BX.findChild(e.RESULT,{tag:"table",class:"title-search-result"},true);if(l){n=BX.findChild(l,{tag:"th"},true)}if(n){var r=BX.pos(l);r.width=r.right-r.left;var a=BX.pos(n);a.width=a.right-a.left;n.style.width=a.width+"px";e.RESULT.style.width=s.width+a.width+"px";e.RESULT.style.left=s.left-a.width-1+"px";if(r.width-a.width>s.width)e.RESULT.style.width=s.width+a.width-1+"px";r=BX.pos(l);i=BX.pos(e.RESULT);if(i.right>r.right){e.RESULT.style.width=r.right-r.left+"px"}}var o;if(l)o=BX.findChild(e.RESULT,{class:"title-search-fader"},true);if(o&&n){i=BX.pos(e.RESULT);o.style.left=i.right-i.left-18+"px";o.style.width=18+"px";o.style.top=0+"px";o.style.height=i.bottom-i.top+"px";o.style.display="block"}};this.onKeyPress=function(t){var s=BX.findChild(e.RESULT,{tag:"table",class:"title-search-result"},true);if(!s)return false;var i;var n=s.rows.length;switch(t){case 27:e.RESULT.style.display="none";e.currentRow=-1;e.UnSelectAll();return true;case 40:if(e.RESULT.style.display=="none")e.RESULT.style.display="block";var l=-1;for(i=0;i<n;i++){if(!BX.findChild(s.rows[i],{class:"title-search-separator"},true)){if(l==-1)l=i;if(e.currentRow<i){e.currentRow=i;break}else if(s.rows[i].className=="title-search-selected"){s.rows[i].className=""}}}if(i==n&&e.currentRow!=i)e.currentRow=l;s.rows[e.currentRow].className="title-search-selected";return true;case 38:if(e.RESULT.style.display=="none")e.RESULT.style.display="block";var r=-1;for(i=n-1;i>=0;i--){if(!BX.findChild(s.rows[i],{class:"title-search-separator"},true)){if(r==-1)r=i;if(e.currentRow>i){e.currentRow=i;break}else if(s.rows[i].className=="title-search-selected"){s.rows[i].className=""}}}if(i<0&&e.currentRow!=i)e.currentRow=r;s.rows[e.currentRow].className="title-search-selected";return true;case 13:if(e.RESULT.style.display=="block"){for(i=0;i<n;i++){if(e.currentRow==i){if(!BX.findChild(s.rows[i],{class:"title-search-separator"},true)){var a=BX.findChild(s.rows[i],{tag:"a"},true);if(a){window.location=a.href;return true}}}}}return false}return false};this.onTimeout=function(){e.onChange(function(){setTimeout(e.onTimeout,500)})};this.onChange=function(t){if(e.running){e.runningCall=true;return}e.running=true;if(e.INPUT.value!=e.oldValue&&e.INPUT.value!=e.startText){e.oldValue=e.INPUT.value;if(e.INPUT.value.length>=e.arParams.MIN_QUERY_LEN){e.cache_key=e.arParams.INPUT_ID+"|"+e.INPUT.value;if(e.cache[e.cache_key]==null){if(e.WAIT){var s=BX.pos(e.INPUT);var i=s.bottom-s.top-2;e.WAIT.style.top=s.top+1+"px";e.WAIT.style.height=i+"px";e.WAIT.style.width=i+"px";e.WAIT.style.left=s.right-i+2+"px";e.WAIT.style.display="block"}BX.ajax.post(e.arParams.AJAX_PAGE,{ajax_call:"y",INPUT_ID:e.arParams.INPUT_ID,q:e.INPUT.value,l:e.arParams.MIN_QUERY_LEN},function(s){e.cache[e.cache_key]=s;e.ShowResult(s);e.currentRow=-1;e.EnableMouseEvents();if(e.WAIT)e.WAIT.style.display="none";if(!!t)t();e.running=false;if(e.runningCall){e.runningCall=false;e.onChange()}});return}else{e.ShowResult(e.cache[e.cache_key]);e.currentRow=-1;e.EnableMouseEvents()}}else{e.RESULT.style.display="none";e.currentRow=-1;e.UnSelectAll()}}if(!!t)t();e.running=false};this.onScroll=function(){if(BX.type.isElementNode(e.RESULT)&&e.RESULT.style.display!=="none"&&e.RESULT.innerHTML!==""){e.adjustResultNode()}};this.UnSelectAll=function(){var t=BX.findChild(e.RESULT,{tag:"table",class:"title-search-result"},true);if(t){var s=t.rows.length;for(var i=0;i<s;i++)t.rows[i].className=""}};this.EnableMouseEvents=function(){var t=BX.findChild(e.RESULT,{tag:"table",class:"title-search-result"},true);if(t){var s=t.rows.length;for(var i=0;i<s;i++)if(!BX.findChild(t.rows[i],{class:"title-search-separator"},true)){t.rows[i].id="row_"+i;t.rows[i].onmouseover=function(t){if(e.currentRow!=this.id.substr(4)){e.UnSelectAll();this.className="title-search-selected";e.currentRow=this.id.substr(4)}};t.rows[i].onmouseout=function(t){this.className="";e.currentRow=-1}}}};this.onFocusLost=function(t){setTimeout(function(){e.RESULT.style.display="none"},250)};this.onFocusGain=function(){if(e.RESULT.innerHTML.length)e.ShowResult()};this.onKeyDown=function(t){if(!t)t=window.event;if(e.RESULT.style.display=="block"){if(e.onKeyPress(t.keyCode))return BX.PreventDefault(t)}};this.adjustResultNode=function(){if(!(BX.type.isElementNode(e.RESULT)&&BX.type.isElementNode(e.CONTAINER))){return{top:0,right:0,bottom:0,left:0,width:0,height:0}}var t=BX.pos(e.CONTAINER);e.RESULT.style.position="absolute";e.RESULT.style.top=t.bottom+2+"px";e.RESULT.style.left=t.left+"px";e.RESULT.style.width=t.width+"px";return t};this._onContainerLayoutChange=function(){if(BX.type.isElementNode(e.RESULT)&&e.RESULT.style.display!=="none"&&e.RESULT.innerHTML!==""){e.adjustResultNode()}};this.Init=function(){this.CONTAINER=document.getElementById(this.arParams.CONTAINER_ID);BX.addCustomEvent(this.CONTAINER,"OnNodeLayoutChange",this._onContainerLayoutChange);this.RESULT=document.body.appendChild(document.createElement("DIV"));this.RESULT.className="title-search-result";this.INPUT=document.getElementById(this.arParams.INPUT_ID);this.startText=this.oldValue=this.INPUT.value;BX.bind(this.INPUT,"focus",function(){e.onFocusGain()});BX.bind(this.INPUT,"blur",function(){e.onFocusLost()});this.INPUT.onkeydown=this.onKeyDown;if(this.arParams.WAIT_IMAGE){this.WAIT=document.body.appendChild(document.createElement("DIV"));this.WAIT.style.backgroundImage="url('"+this.arParams.WAIT_IMAGE+"')";if(!BX.browser.IsIE())this.WAIT.style.backgroundRepeat="none";this.WAIT.style.display="none";this.WAIT.style.position="absolute";this.WAIT.style.zIndex="1100"}BX.bind(this.INPUT,"bxchange",function(){e.onChange()});var t=BX.findParent(this.CONTAINER,BX.is_fixed);if(BX.type.isElementNode(t)){BX.bind(window,"scroll",BX.throttle(this.onScroll,100,this))}};BX.ready(function(){e.Init(t)})}
/* End */
;
; /* Start:"a:4:{s:4:"full";s:85:"/local/components/webtu/feedback.question/templates/.default/script.js?16965759321517";s:6:"source";s:70:"/local/components/webtu/feedback.question/templates/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function (window){
    if (!!window.FeedbackCallbackQuestion){
        return;
    }

    window.FeedbackCallbackQuestion = function (arParams) {
        this.visual = {};
        this.params = {};
        this.errorCode = 0;

        this.obFormContainer = null;

		if (typeof arParams === 'object')
		{
			this.params = arParams;
			this.initConfig();

    		if (this.errorCode === 0)
    		{
    			BX.ready(BX.delegate(this.init, this));
    		}

            this.params = {};
        }
    }

	window.FeedbackCallbackQuestion.prototype =
	{
		initConfig: function()
		{
			if (!this.params.VISUAL || typeof this.params.VISUAL !== 'object')
			{
				this.errorCode = -1;
				return;
			}

            this.visual = this.params.VISUAL;
		},

		init: function()
		{
			if (this.visual.FORM_CONTINER)
			{
				this.obFormContainer = BX(this.visual.FORM_CONTINER);
			}

            if(this.obFormContainer)
            {
                var message_err = this.obFormContainer.querySelector('.message_err');
                var message_send = this.obFormContainer.querySelector('.message_send');

                if(message_err || message_send)
                {
                    var mainContainer = BX.findParent(this.obFormContainer, {"tag" : "DIV"});

                    if(mainContainer)
                    {
                        $('#question').modal('show');
                    }
                }
            }
        }
    }
})(window);
/* End */
;; /* /local/templates/.default/js/jcf.js?16965759326703*/
; /* /local/templates/.default/js/jcf.select.js?169657593218792*/
; /* /local/templates/.default/js/jcf.file.js?16965759323966*/
; /* /local/templates/.default/js/jquery.mCustomScrollbar.min.js?169657593240179*/
; /* /local/templates/.default/js/script.js?16965759327972*/
; /* /local/templates/.default/js/map.js?16965759323330*/
; /* /bitrix/components/bitrix/search.title/script.min.js?16965758586443*/
; /* /local/components/webtu/feedback.question/templates/.default/script.js?16965759321517*/

//# sourceMappingURL=template_220e58c664092dd66ebe08f7f89d6076.map.js