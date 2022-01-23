<?php
/**
 * Банер госуслуги
 */
add_action('ds11_gosuslugi','ds11_gosuslugi_output');
function ds11_gosuslugi_output(){
    ?>
    <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script> 
<style>
#js-show-iframe-wrapper{position:relative;display:flex;align-items:center;justify-content:center;width:100%;min-width:293px;max-width:100%;background:linear-gradient(138.4deg,#38bafe 26.49%,#2d73bc 79.45%);color:#fff;cursor:pointer}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing:border-box}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display:block;width:240px;min-height:56px;font-size:18px;line-height:24px;cursor:pointer;background:#0d4cd3;color:#fff;border:none;border-radius:8px;outline:0}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#1d5deb}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background:#2a63ad}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background:#2a63ad}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@font-face{font-family:LatoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWeb;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:Geometria;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Geometria-ExtraBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.ttf) format("truetype");font-weight:800;font-style:normal}
</style>

<style>
#js-show-iframe-wrapper{background:var(--pos-banner-fluid-29__background)}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{width:100%;min-height:52px;background:#fff;color:#0b1f33;font-size:16px;font-family:LatoWeb,sans-serif;font-weight:400;padding:0;line-height:1.2}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#e4ecfd}#js-show-iframe-wrapper .bf-29{position:relative;display:grid;grid-template-columns:var(--pos-banner-fluid-29__grid-template-columns);grid-template-rows:var(--pos-banner-fluid-29__grid-template-rows);width:100%;max-width:var(--pos-banner-fluid-29__max-width);box-sizing:border-box;grid-auto-flow:row dense}#js-show-iframe-wrapper .bf-29__decor{background:var(--pos-banner-fluid-29__bg-url) var(--pos-banner-fluid-29__bg-url-position) no-repeat;background-size:cover;background-color:#fff;position:relative}#js-show-iframe-wrapper .bf-29__content{display:flex;flex-direction:column;padding:var(--pos-banner-fluid-29__content-padding);grid-row:var(--pos-banner-fluid-29__content-grid-row);justify-content:center}#js-show-iframe-wrapper .bf-29__text{margin:var(--pos-banner-fluid-29__text-margin);font-size:var(--pos-banner-fluid-29__text-font-size);line-height:1.4;font-family:LatoWeb,sans-serif;font-weight:700;text-align:right;color:#fff}#js-show-iframe-wrapper .bf-29__bottom-wrap{display:flex;flex-direction:row;align-items:center}#js-show-iframe-wrapper .bf-29__logo-wrap{position:absolute;top:var(--pos-banner-fluid-29__logo-wrap-top);right:var(--pos-banner-fluid-29__logo-wrap-right);padding:var(--pos-banner-fluid-29__logo-wrap-padding);border-radius:0 0 8px 0}#js-show-iframe-wrapper .bf-29__logo{width:var(--pos-banner-fluid-29__logo-width);margin-left:1px}#js-show-iframe-wrapper .bf-29__slogan{font-family:LatoWeb,sans-serif;font-weight:700;font-size:var(--pos-banner-fluid-29__slogan-font-size);line-height:1.2;color:#005ca9}#js-show-iframe-wrapper .bf-29__btn-wrap{width:100%;max-width:var(--pos-banner-fluid-29__button-wrap-max-width)}
</style >
<div id='js-show-iframe-wrapper'>
  <div class='pos-banner-fluid bf-29'>

    <div class='bf-29__decor'>
      <div class='bf-29__logo-wrap'>
        <img
          class='bf-29__logo'
          src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
          alt='Госуслуги'
        />
        <div class='bf-29__slogan'>Решаем вместе</div >
      </div >
    </div >
    <div class='bf-29__content'>
      <div class='bf-29__text'>
        Есть предложения по организации учебного процесса или знаете, как сделать детский сад лучше?
      </div >

      <div class='bf-29__bottom-wrap'>
        <div class='bf-29__btn-wrap'>
          <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
          <button
            class='pos-banner-btn_2'
            type='button'
          >Написать сообщение
          </button >
        </div >
      </div>
    </div >

  </div >
</div >
<script>

(function(){
  "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);if(t)r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,r)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_29="--pos-banner-fluid-29__",posOptionsInitialBanner29={background:"linear-gradient(#2d73bc 26.49%,#38bafe 79.45%)","grid-template-columns":"100%","grid-template-rows":"292px auto","max-width":"100%","text-font-size":"20px","text-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-2.svg')","bg-url-position":"center bottom","content-padding":"24px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","logo-wrap-right":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_29;Object.keys(e).forEach(function(r){t.style.setProperty(n+r,e[r])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_29;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner29),n=document.getElementById("js-show-iframe-wrapper"),r=n?n.offsetWidth:document.body.offsetWidth;if(r>308)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-1.svg')",t["bg-url-position"]="center calc(100% + 22px)";if(r>340)t["button-wrap-max-width"]="206px";if(r>568)t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="32px 24px",t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-2.svg')",t["bg-url-position"]="center bottom";if(r>610)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/25/banner-fluid-bg-25-1.svg')",t["bg-url-position"]="calc(50% + 29px) calc(100% + 25px)";if(r>782)t["grid-template-columns"]="1fr 400px";if(r>820)t["grid-template-columns"]="1fr 420px",t["bg-url-position"]="center -12px";if(r>1098)t["grid-template-columns"]="1fr 557px",t["text-font-size"]="28px",t["content-padding"]="32px 32px 32px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(r>1300)t["content-padding"]="32px 40px 32px 140px",t["bg-url-position"]="center calc(100% + 33px)";if(r>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t["text-font-size"]="32px",t.background="linear-gradient(90deg, #2d73bc 5.49%,#38bafe 59.45%, #ffffff 60%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner29);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
})()
</script>
 <script>Widget("https://pos.gosuslugi.ru/form", 268131)</script>
    <?
}
?>