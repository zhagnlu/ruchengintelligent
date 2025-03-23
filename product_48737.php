<!DOCTYPE html><html lang="en-US" prefix="og: https://ogp.me/ns#"><head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-VWRCJYQDF2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VWRCJYQDF2');
</script>
    <meta charset="UTF-8">
    <script>
        if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }
    </script>
    <script>
        class RocketLazyLoadScripts {
            constructor(e) {
                this.triggerEvents = e, this.eventOptions = {
                    passive: !0
                }, this.userEventListener = this.triggerListener.bind(this), this.delayedScripts = {
                    normal: [],
                    async: [],
                    defer: []
                }, this.allJQueries = []
            }
            _addUserInteractionListener(e) {
                this.triggerEvents.forEach((t => window.addEventListener(t, e.userEventListener, e.eventOptions)))
            }
            _removeUserInteractionListener(e) {
                this.triggerEvents.forEach((t => window.removeEventListener(t, e.userEventListener, e.eventOptions)))
            }
            triggerListener() {
                this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow()
            }
            async _loadEverythingNow() {
                this._delayEventListeners(), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async), await this._triggerDOMContentLoaded(), await this._triggerWindowLoad(), window.dispatchEvent(new Event("rocket-allScriptsLoaded"))
            }
            _registerAllDelayedScripts() {
                document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e => {
                    e.hasAttribute("src") ? e.hasAttribute("async") && !1 !== e.async ? this.delayedScripts.async.push(e) : e.hasAttribute("defer") && !1 !== e.defer || "module" === e.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(e) : this.delayedScripts.normal.push(e) : this.delayedScripts.normal.push(e)
                }))
            }
            async _transformScript(e) {
                return await this._requestAnimFrame(), new Promise((t => {
                    const n = document.createElement("script");
                    let r;
                    [...e.attributes].forEach((e => {
                        let t = e.nodeName;
                        "type" !== t && ("data-rocket-type" === t && (t = "type", r = e.nodeValue), n.setAttribute(t, e.nodeValue))
                    })), e.hasAttribute("src") ? (n.addEventListener("load", t), n.addEventListener("error", t)) : (n.text = e.text, t()), e.parentNode.replaceChild(n, e)
                }))
            }
            async _loadScriptsFromList(e) {
                const t = e.shift();
                return t ? (await this._transformScript(t), this._loadScriptsFromList(e)) : Promise.resolve()
            }
            _preloadAllScripts() {
                var e = document.createDocumentFragment();
                [...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async].forEach((t => {
                    const n = t.getAttribute("src");
                    if (n) {
                        const t = document.createElement("link");
                        t.href = n, t.rel = "preload", t.as = "script", e.appendChild(t)
                    }
                })), document.head.appendChild(e)
            }
            _delayEventListeners() {
                let e = {};

                function t(t, n) {
                    ! function(t) {
                        function n(n) {
                            return e[t].eventsToRewrite.indexOf(n) >= 0 ? "rocket-" + n : n
                        }
                        e[t] || (e[t] = {
                            originalFunctions: {
                                add: t.addEventListener,
                                remove: t.removeEventListener
                            },
                            eventsToRewrite: []
                        }, t.addEventListener = function() {
                            arguments[0] = n(arguments[0]), e[t].originalFunctions.add.apply(t, arguments)
                        }, t.removeEventListener = function() {
                            arguments[0] = n(arguments[0]), e[t].originalFunctions.remove.apply(t, arguments)
                        })
                    }(t), e[t].eventsToRewrite.push(n)
                }

                function n(e, t) {
                    let n = e[t];
                    Object.defineProperty(e, t, {
                        get: () => n || function() {},
                        set(r) {
                            e["rocket" + t] = n = r
                        }
                    })
                }
                t(document, "DOMContentLoaded"), t(window, "DOMContentLoaded"), t(window, "load"), t(window, "pageshow"), t(document, "readystatechange"), n(document, "onreadystatechange"), n(window, "onload"), n(window, "onpageshow")
            }
            _delayJQueryReady(e) {
                let t = window.jQuery;
                Object.defineProperty(window, "jQuery", {
                    get: () => t,
                    set(n) {
                        if (n && n.fn && !e.allJQueries.includes(n)) {
                            n.fn.ready = n.fn.init.prototype.ready = function(t) {
                                e.domReadyFired ? t.bind(document)(n) : document.addEventListener("rocket-DOMContentLoaded", (() => t.bind(document)(n)))
                            };
                            const t = n.fn.on;
                            n.fn.on = n.fn.init.prototype.on = function() {
                                if (this[0] === window) {
                                    function e(e) {
                                        return e.split(" ").map((e => "load" === e || 0 === e.indexOf("load.") ? "rocket-jquery-load" : e)).join(" ")
                                    }
                                    "string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = e(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t => {
                                        delete Object.assign(arguments[0], {
                                            [e(t)]: arguments[0][t]
                                        })[t]
                                    }))
                                }
                                return t.apply(this, arguments), this
                            }, e.allJQueries.push(n)
                        }
                        t = n
                    }
                })
            }
            async _triggerDOMContentLoaded() {
                this.domReadyFired = !0, await this._requestAnimFrame(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._requestAnimFrame(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._requestAnimFrame(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._requestAnimFrame(), document.rocketonreadystatechange && document.rocketonreadystatechange()
            }
            async _triggerWindowLoad() {
                await this._requestAnimFrame(), window.dispatchEvent(new Event("rocket-load")), await this._requestAnimFrame(), window.rocketonload && window.rocketonload(), await this._requestAnimFrame(), this.allJQueries.forEach((e => e(window).trigger("rocket-jquery-load"))), window.dispatchEvent(new Event("rocket-pageshow")), await this._requestAnimFrame(), window.rocketonpageshow && window.rocketonpageshow()
            }
            _handleDocumentWrite() {
                const e = new Map;
                document.write = document.writeln = function(t) {
                    const n = document.currentScript,
                        r = document.createRange(),
                        i = n.parentElement;
                    let o = e.get(n);
                    void 0 === o && (o = n.nextSibling, e.set(n, o));
                    const a = document.createDocumentFragment();
                    r.setStart(a, 0), a.appendChild(r.createContextualFragment(t)), i.insertBefore(a, o)
                }
            }
            async _requestAnimFrame() {
                return new Promise((e => requestAnimationFrame(e)))
            }
            static run() {
                const e = new RocketLazyLoadScripts(["keydown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"]);
                e._addUserInteractionListener(e)
            }
        }
        RocketLazyLoadScripts.run();
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WGF9NDP');
    </script>
    <link rel="preload" href="https://www.adhmt.com/wp-content/astra-local-fonts/roboto/KFOlCnqEu92Fr1MmYUtfBBc4.woff2" as="font" type="font/woff2" crossorigin="">
    <title>机器人折弯机 - </title>
    <style id="rocket-critical-css">
        /* Critical Path CSS Generated by Pegasaas Accelerator at https://pegasaas.com/ for https://www.adhmt.com/ viewport Desktop - 1920px */
        
        @charset "UTF-8";
        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal!important
        }
        
        /* @charset "UTF-8"; */
        body,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        html,
        iframe,
        li,
        p,
        textarea,
        ul {
            border: 0;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }
        
        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }
        
        body {
            margin: 0
        }
        
        main,
        nav {
            display: block
        }
        
        a {
            background-color: transparent
        }
        
        a,
        a:visited {
            text-decoration: none
        }
        
        img {
            border: 0
        }
        
        svg:not(:root) {
            overflow: hidden
        }
        
        figure {
            margin: 0
        }
        
        button,
        input,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }
        
        button {
            overflow: visible
        }
        
        button {
            text-transform: none
        }
        
        button {
            -webkit-appearance: button
        }
        
        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }
        
        input {
            line-height: normal
        }
        
        textarea {
            overflow: auto
        }
        
        .ast-container {
            max-width: 100%
        }
        
        .ast-container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px
        }
        
        .ast-container::after {
            content: "";
            display: table;
            clear: both
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            clear: both
        }
        
        .entry-content h1,
        h1 {
            color: #808285;
            font-size: 2em;
            line-height: 1.2
        }
        
        .entry-content h2,
        h2 {
            color: #808285;
            font-size: 1.7em;
            line-height: 1.3
        }
        
        .entry-content h3,
        h3 {
            color: #808285;
            font-size: 1.5em;
            line-height: 1.4
        }
        
        h4 {
            color: #808285;
            line-height: 1.5;
            font-size: 1.3em
        }
        
        .entry-content h5,
        h5 {
            color: #808285;
            line-height: 1.6;
            font-size: 1.2em
        }
        
        .entry-content h6,
        h6 {
            color: #808285;
            line-height: 1.7;
            font-size: 1.1em
        }
        
        html {
            box-sizing: border-box
        }
        
        *,
         :after,
         :before {
            box-sizing: inherit
        }
        
        body {
            color: #808285;
            background: #fff;
            font-style: normal
        }
        
        ul {
            margin: 0 0 1.5em 3em
        }
        
        ul {
            list-style: disc
        }
        
        li>ul {
            margin-bottom: 0;
            margin-left: 1.5em
        }
        
        i {
            font-style: italic
        }
        
        img {
            height: auto;
            max-width: 100%
        }
        
        button,
        input,
        textarea {
            color: #808285;
            font-weight: 400;
            font-size: 100%;
            margin: 0;
            vertical-align: baseline
        }
        
        button,
        input {
            line-height: normal
        }
        
        button {
            border: 1px solid;
            border-color: #eaeaea;
            border-radius: 2px;
            background: #e6e6e6;
            padding: .6em 1em .4em;
            color: #fff
        }
        
        input[type=email],
        input[type=text],
        textarea {
            color: #666;
            border: 1px solid #ccc;
            border-radius: 2px;
            -webkit-appearance: none
        }
        
        textarea {
            padding-left: 3px;
            width: 100%
        }
        
        a {
            color: #4169e1
        }
        
        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal!important
        }
        
        #primary:after,
        #primary:before,
        .ast-container:after,
        .ast-container:before,
        .clear:after,
        .clear:before,
        .site-content:after,
        .site-content:before,
        .site-header:after,
        .site-header:before,
        .site-main:after,
        .site-main:before {
            content: "";
            display: table
        }
        
        #primary:after,
        .ast-container:after,
        .clear:after,
        .site-content:after,
        .site-header:after,
        .site-main:after {
            clear: both
        }
        
        iframe {
            max-width: 100%
        }
        
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        body:not(.logged-in) {
            position: relative
        }
        
        #page {
            position: relative
        }
        
        a {
            text-decoration: none
        }
        
        img {
            vertical-align: middle
        }
        
        .entry-content h1,
        .entry-content h2,
        .entry-content h3,
        .entry-content h5,
        .entry-content h6 {
            margin-bottom: 20px
        }
        
        p {
            margin-bottom: 1.75em
        }
        
        .search-form .search-field {
            outline: 0
        }
        
        .ast-search-menu-icon {
            position: relative;
            z-index: 3
        }
        
        input {
            line-height: 1
        }
        
        .ast-custom-button,
        body,
        button,
        textarea {
            line-height: 1.85714285714286
        }
        
        body {
            background-color: #fff
        }
        
        #page {
            display: block
        }
        
        #primary {
            display: block;
            position: relative;
            float: left;
            width: 100%
        }
        
        #primary {
            margin: 4em 0
        }
        
        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0
        }
        
        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0
        }
        
        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px
        }
        
        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0
        }
        
        .ast-search-icon .astra-search-icon {
            font-size: 1.3em
        }
        
        .main-navigation {
            height: 100%;
            -js-display: inline-flex;
            display: inline-flex
        }
        
        .main-navigation ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
            position: relative
        }
        
        .main-header-menu .menu-link {
            text-decoration: none;
            padding: 0 1em;
            display: inline-block
        }
        
        .main-header-menu .menu-item {
            position: relative
        }
        
        .main-header-menu .sub-menu {
            width: 240px;
            background: #fff;
            left: -999em;
            position: absolute;
            top: 100%;
            z-index: 99999
        }
        
        .main-header-menu .sub-menu .menu-link {
            padding: .9em 1em;
            display: block;
            word-wrap: break-word
        }
        
        .main-header-menu .sub-menu .menu-item:not(.menu-item-has-children) .menu-link .icon-arrow:first-of-type {
            display: none
        }
        
        .submenu-with-border .sub-menu {
            border-width: 1px;
            border-style: solid
        }
        
        .submenu-with-border .sub-menu .menu-link {
            border-width: 0 0 1px;
            border-style: solid
        }
        
        .ast-desktop .submenu-with-border .sub-menu>.menu-item:last-child>.menu-link {
            border-bottom-width: 0
        }
        
        .ast-button-wrap {
            display: inline-block
        }
        
        .ast-button-wrap button {
            box-shadow: none;
            border: none
        }
        
        .ast-button-wrap .menu-toggle {
            padding: 0;
            width: 2.2em;
            height: 2.1em;
            font-size: 1.5em;
            font-weight: 400;
            border-radius: 2px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            border-radius: 2px;
            vertical-align: middle;
            line-height: 1.85714285714286
        }
        
        .ast-button-wrap .menu-toggle.main-header-menu-toggle {
            padding: 0 .5em;
            width: auto;
            text-align: center
        }
        
        .header-main-layout-1 .ast-main-header-bar-alignment {
            margin-left: auto
        }
        
        .site-navigation {
            height: 100%
        }
        
        .entry-content>:last-child {
            margin-bottom: 0
        }
        
        body {
            overflow-x: hidden
        }
        
        .ast-builder-grid-row {
            display: grid;
            grid-template-columns: auto auto;
            align-items: center;
            grid-column-gap: 20px;
            overflow-wrap: anywhere
        }
        
        .ast-builder-grid-row>.site-header-section {
            flex-wrap: nowrap
        }
        
        .ast-builder-layout-element {
            align-items: center
        }
        
        .site-header-section {
            height: 100%;
            min-height: 0;
            align-items: center
        }
        
        .site-header-section .ast-main-header-bar-alignment {
            height: 100%
        }
        
        .site-header-section>* {
            padding: 0 10px
        }
        
        .site-header-section>div:first-child {
            padding-left: 0
        }
        
        .site-header-section>div:last-child {
            padding-right: 0
        }
        
        .site-header-section .ast-builder-menu {
            align-items: center
        }
        
        .ast-builder-layout-element.ast-header-search {
            height: auto
        }
        
        .ast-grid-right-section {
            justify-content: flex-end
        }
        
        .ast-logo-title-inline .ast-site-identity {
            padding: 1em 0;
            -js-display: inline-flex;
            display: inline-flex;
            vertical-align: middle;
            align-items: center
        }
        
        .ahfb-svg-iconset {
            -js-display: inline-flex;
            display: inline-flex;
            align-self: center
        }
        
        .ahfb-svg-iconset svg {
            width: 17px;
            height: 17px
        }
        
        .ast-builder-grid-row-container {
            display: grid;
            align-content: center
        }
        
        .main-header-bar .main-header-bar-navigation {
            height: 100%
        }
        
        .ast-nav-menu .sub-menu {
            line-height: 1.45
        }
        
        .ast-builder-menu .main-navigation {
            padding: 0
        }
        
        .ast-builder-menu .main-navigation>ul {
            align-self: center
        }
        
        .menu-toggle .ast-close-svg {
            display: none
        }
        
        .ast-mobile-header-wrap .menu-toggle .mobile-menu-toggle-icon {
            -js-display: inline-flex;
            display: inline-flex;
            align-self: center
        }
        
        .ast-mobile-header-wrap .ast-button-wrap .menu-toggle.main-header-menu-toggle {
            -js-display: flex;
            display: flex;
            align-items: center;
            width: auto;
            height: auto
        }
        
        .menu-toggle .mobile-menu-toggle-icon {
            -js-display: inline-flex;
            display: inline-flex;
            align-self: center
        }
        
        .ast-button-wrap .menu-toggle.main-header-menu-toggle {
            padding: .5em;
            align-items: center;
            -js-display: flex;
            display: flex
        }
        
        .site-header {
            z-index: 99;
            position: relative
        }
        
        .main-header-bar-wrap {
            position: relative
        }
        
        .main-header-bar {
            background-color: #fff;
            border-bottom-color: #eaeaea;
            border-bottom-style: solid
        }
        
        .main-header-bar {
            margin-left: auto;
            margin-right: auto
        }
        
        .ast-desktop .main-header-menu.ast-menu-shadow .sub-menu {
            box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1)
        }
        
        .site-branding {
            line-height: 1;
            align-self: center
        }
        
        .ast-menu-toggle {
            display: none;
            background: 0 0;
            color: inherit;
            border-style: dotted;
            border-color: transparent
        }
        
        .main-header-bar {
            z-index: 4;
            position: relative
        }
        
        .main-header-bar .main-header-bar-navigation .sub-menu {
            line-height: 1.45
        }
        
        .main-header-bar .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            line-height: normal
        }
        
        .ast-site-identity {
            padding: 1em 0
        }
        
        .ast-desktop .main-header-menu>.menu-item .sub-menu:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            transform: translateY(-100%)
        }
        
        input[type=email],
        input[type=text],
        textarea {
            color: #666;
            padding: .75em;
            height: auto;
            border-width: 1px;
            border-style: solid;
            border-color: #eaeaea;
            border-radius: 2px;
            background: #fafafa;
            box-shadow: none;
            box-sizing: border-box
        }
        
        textarea {
            width: 100%
        }
        
        .page .entry-header {
            margin-bottom: 1.5em
        }
        
        .ast-single-post .entry-header.ast-header-without-markup {
            margin-bottom: 0
        }
        
        .entry-header {
            margin-bottom: 1em;
            word-wrap: break-word
        }
        
        .entry-content {
            word-wrap: break-word
        }
        
        .entry-content p {
            margin-bottom: 1.6em
        }
        
        .ast-flex {
            -js-display: flex;
            display: flex;
            flex-wrap: wrap
        }
        
        .ast-inline-flex {
            -js-display: inline-flex;
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            align-content: center
        }
        
        .ast-flex-grow-1 {
            flex-grow: 1
        }
        
        .menu-item-object-language_switcher .trp-flag-image {
            display: inline-block;
            margin: -1px 5px;
            vertical-align: baseline;
            padding: 0;
            border: 0;
            border-radius: 0
        }
        
        @media all and (max-width:768px) {
            #content:before {
                content: ""
            }
        }
        
        .ast-mobile-popup-content .ast-builder-layout-element:not(.ast-builder-menu):not(.ast-header-divider-element) {
            padding: 15px 20px
        }
        
        [data-section*=section-hb-button-] .ast-builder-button-size-sm .ast-custom-button {
            font-size: 15px;
            padding: 10px 40px
        }
        
        #ast-scroll-top {
            display: none;
            position: fixed;
            text-align: center;
            z-index: 99;
            width: 2.1em;
            height: 2.1em;
            line-height: 2.1;
            color: #fff;
            border-radius: 2px;
            content: ""
        }
        
        @media (min-width:769px) {
            #ast-scroll-top {
                content: "769"
            }
        }
        
        .ast-scroll-to-top-right {
            right: 30px;
            bottom: 30px
        }
        
        .ast-desktop .ast-mega-menu-enabled.main-header-menu>.menu-item-has-children>.menu-link::after {
            content: '';
            margin: 0
        }
        
        .ast-search-box.header-cover {
            display: none;
            opacity: 0;
            width: 100%;
            height: 100%
        }
        
        .ast-search-box.header-cover .search-field {
            background: 0 0;
            border: 0;
            color: #fafafa;
            box-shadow: none;
            text-align: left;
            padding: 0
        }
        
        .ast-search-box.header-cover .ast-search-wrapper {
            position: absolute;
            width: 100%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }
        
        .ast-search-box.header-cover .ast-search-wrapper .search-form {
            line-height: normal
        }
        
        .ast-search-box.header-cover #close {
            color: #fafafa;
            transform: rotate(0);
            font-size: 2em;
            z-index: 9;
            font-weight: 400
        }
        
        .ast-search-box.header-cover .search-field::-webkit-input-placeholder {
            color: #fafafa
        }
        
        .ast-search-box.header-cover .search-field:-moz-placeholder {
            color: #fafafa
        }
        
        .ast-search-box.header-cover .search-field::-moz-placeholder {
            color: #fafafa
        }
        
        .ast-search-box.header-cover .search-field:-ms-input-placeholder {
            color: #fafafa
        }
        
        .ast-search-box.header-cover {
            position: absolute;
            background: rgba(25, 25, 25, .94);
            top: 0;
            z-index: 10
        }
        
        .ast-search-box.header-cover .search-field {
            font-size: 2em;
            line-height: 2;
            width: 100%
        }
        
        .ast-search-box.header-cover .ast-container {
            position: relative
        }
        
        .ast-search-box.header-cover .close,
        .ast-search-box.header-cover .search-text-wrap {
            display: inline-block
        }
        
        .ast-search-box.header-cover .search-text-wrap {
            width: calc(100% - 2.5em);
            vertical-align: middle
        }
        
        .ast-search-box.header-cover #close {
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }
        
        @font-face {
            font-family: eicons;
            src: url('/static/font/eicons.eot');
            src: url('/static/font/eicons.eot') format("embedded-opentype"), url('/static/font/eicons.woff2') format("woff2"), url('/static/font/eicons.woff') format("woff"), url('/static/font/eicons.ttf') format("truetype"), url('/static/font/eicons.woff2') format("svg");
            font-weight: 400;
            font-style: normal
        }
        
        [class^=eicon] {
            display: inline-block;
            font-family: eicons;
            font-size: inherit;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .eicon-chevron-right:before {
            content: '\e87d'
        }
        
        .eicon-chevron-left:before {
            content: '\e87e'
        }
        
        .elementor-screen-only,
        .screen-reader-text {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }
        
        .elementor-clearfix:after {
            content: "";
            display: block;
            clear: both;
            width: 0;
            height: 0
        }
        
        .elementor {
            -webkit-hyphens: manual;
            -ms-hyphens: manual;
            hyphens: manual
        }
        
        .elementor *,
        .elementor :after,
        .elementor :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }
        
        .elementor a {
            -webkit-box-shadow: none;
            box-shadow: none;
            text-decoration: none
        }
        
        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            -webkit-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
        
        .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
            margin: 0
        }
        
        .elementor .elementor-background-overlay {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute
        }
        
        .elementor-widget-wrap .elementor-element.elementor-widget__width-auto {
            max-width: 100%
        }
        
        .elementor-invisible {
            visibility: hidden
        }
        
        .elementor-align-center {
            text-align: center
        }
        
        .elementor-align-center .elementor-button {
            width: auto
        }
        
        @media (max-width:767px) {
            .elementor-mobile-align-center {
                text-align: center
            }
            .elementor-mobile-align-center .elementor-button {
                width: auto
            }
        }
        
         :root {
            --page-title-display: block
        }
        
        .elementor-section {
            position: relative
        }
        
        .elementor-section .elementor-container {
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative
        }
        
        @media (max-width:1024px) {
            .elementor-section .elementor-container {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }
        
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px
        }
        
        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-line-pack: start;
            align-content: flex-start
        }
        
        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex
        }
        
        .elementor-widget-wrap>.elementor-element {
            width: 100%
        }
        
        .elementor-widget {
            position: relative
        }
        
        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }
        
        .elementor-column {
            min-height: 1px
        }
        
        .elementor-column {
            position: relative;
            display: flex
        }
        
        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px
        }
        
        .elementor-column-gap-wider>.elementor-column>.elementor-element-populated {
            padding: 30px
        }
        
        .elementor-inner-section .elementor-column-gap-no .elementor-element-populated {
            padding: 0
        }
        
        @media (min-width:768px) {
            .elementor-column.elementor-col-25 {
                width: 25%
            }
            .elementor-column.elementor-col-33 {
                width: 33.333%
            }
            .elementor-column.elementor-col-50 {
                width: 50%
            }
            .elementor-column.elementor-col-66 {
                width: 66.666%
            }
            .elementor-column.elementor-col-100 {
                width: 100%
            }
        }
        
        @media (max-width:767px) {
            .elementor-column {
                width: 100%
            }
        }
        
        .elementor-grid {
            display: grid;
            grid-column-gap: var(--grid-column-gap);
            grid-row-gap: var(--grid-row-gap)
        }
        
        .elementor-grid .elementor-grid-item {
            min-width: 0
        }
        
        .elementor-grid-0 .elementor-grid {
            display: inline-block;
            width: 100%;
            word-spacing: var(--grid-column-gap);
            margin-bottom: calc(-1 * var(--grid-row-gap))
        }
        
        .elementor-grid-0 .elementor-grid .elementor-grid-item {
            display: inline-block;
            margin-bottom: var(--grid-row-gap);
            word-break: break-word
        }
        
        [class^=eicon] {
            display: inline-block;
            font-family: eicons;
            font-size: inherit;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .eicon-chevron-right:before {
            content: "\e87d"
        }
        
        .eicon-chevron-left:before {
            content: "\e87e"
        }
        
        .elementor-button {
            display: inline-block;
            line-height: 1;
            background-color: #818a91;
            font-size: 15px;
            padding: 12px 24px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            color: #fff;
            fill: #fff;
            text-align: center
        }
        
        .elementor-button:visited {
            color: #fff
        }
        
        .elementor-button-content-wrapper {
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }
        
        .elementor-button-icon {
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }
        
        .elementor-button-text {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
            display: inline-block
        }
        
        .elementor-button .elementor-align-icon-right {
            margin-left: 5px;
            -webkit-box-ordinal-group: 16;
            -ms-flex-order: 15;
            order: 15
        }
        
        .elementor-button span {
            text-decoration: inherit
        }
        
        .elementor-tab-title a {
            color: inherit
        }
        
        .elementor-icon {
            display: inline-block;
            line-height: 1;
            color: #818a91;
            font-size: 50px;
            text-align: center
        }
        
        .elementor-icon i {
            width: 1em;
            height: 1em;
            position: relative;
            display: block
        }
        
        .elementor-icon i:before {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1
        }
        
        .swiper-container .swiper-slide figure {
            line-height: 0
        }
        
        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }
        
        .swiper-wrapper {
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
        
        .swiper-slide {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative
        }
        
        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            z-index: 10
        }
        
        .elementor-pagination-position-outside .swiper-container {
            padding-bottom: 30px
        }
        
        .elementor-pagination-position-outside .elementor-swiper-button {
            top: calc(50% - 30px / 2)
        }
        
        .elementor-swiper-button {
            position: absolute;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            z-index: 1;
            font-size: 25px;
            color: hsla(0, 0%, 93.3%, .9);
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        
        .elementor-swiper-button-prev {
            left: 10px
        }
        
        .elementor-swiper-button-next {
            right: 10px
        }
        
        .elementor .elementor-element ul.elementor-icon-list-items {
            padding: 0
        }
        
        @media (max-width:767px) {
            .elementor .elementor-hidden-phone {
                display: none
            }
        }
        
        @media (min-width:768px) and (max-width:1024px) {
            .elementor .elementor-hidden-tablet {
                display: none
            }
        }
        
        .elementor-accordion {
            text-align: left
        }
        
        .elementor-accordion .elementor-accordion-item {
            border: 1px solid #d4d4d4
        }
        
        .elementor-accordion .elementor-accordion-item+.elementor-accordion-item {
            border-top: none
        }
        
        .elementor-accordion .elementor-tab-title {
            margin: 0;
            padding: 15px 20px;
            font-weight: 700;
            line-height: 1;
            outline: none
        }
        
        .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
            display: inline-block;
            width: 1.5em
        }
        
        .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right {
            float: right;
            text-align: right
        }
        
        .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed {
            display: block
        }
        
        .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened {
            display: none
        }
        
        .elementor-accordion .elementor-tab-content {
            display: none;
            padding: 15px 20px;
            border-top: 1px solid #d4d4d4
        }
        
        @media (max-width:767px) {
            .elementor-accordion .elementor-tab-title {
                padding: 12px 15px
            }
            .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                width: 1.2em
            }
            .elementor-accordion .elementor-tab-content {
                padding: 7px 15px
            }
        }
        
        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1
        }
        
        @media (min-width:768px) {
            .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
                display: flex
            }
            .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto
            }
            .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
                text-align: left;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
            .elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start
            }
        }
        
        @media (max-width:767px) {
            .elementor-widget-icon-box .elementor-icon-box-icon {
                margin-left: auto!important;
                margin-right: auto!important;
                margin-bottom: 15px
            }
        }
        
        .elementor-widget-icon-box .elementor-icon-box-wrapper {
            text-align: center
        }
        
        .elementor-widget-icon-box .elementor-icon-box-content {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1
        }
        
        .elementor-widget-icon-box .elementor-icon-box-description {
            margin: 0
        }
        
        .elementor-widget .elementor-icon-list-items {
            list-style-type: none;
            margin: 0;
            padding: 0
        }
        
        .elementor-widget .elementor-icon-list-item {
            margin: 0;
            padding: 0;
            position: relative
        }
        
        .elementor-widget .elementor-icon-list-item:after {
            position: absolute;
            bottom: 0;
            width: 100%
        }
        
        .elementor-widget .elementor-icon-list-item,
        .elementor-widget .elementor-icon-list-item a {
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: inherit
        }
        
        .elementor-widget.elementor-list-item-link-full_width a {
            width: 100%
        }
        
        .elementor-widget.elementor-align-center .elementor-icon-list-item,
        .elementor-widget.elementor-align-center .elementor-icon-list-item a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }
        
        .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
            margin: auto
        }
        
        .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
            left: 0
        }
        
        .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
            right: 0
        }
        
        @media (max-width:1024px) {
            .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                left: 0
            }
            .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }
        
        @media (max-width:767px) {
            .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                left: 0
            }
            .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }
        
        .elementor-widget-image {
            text-align: center
        }
        
        .elementor-widget-image a {
            display: inline-block
        }
        
        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block
        }
        
        .elementor-widget-image-box .elementor-image-box-content {
            width: 100%
        }
        
        @media (min-width:768px) {
            .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                margin: auto
            }
            .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start
            }
        }
        
        @media (max-width:767px) {
            .elementor-widget-image-box .elementor-image-box-img {
                margin-left: auto!important;
                margin-right: auto!important;
                margin-bottom: 15px
            }
        }
        
        .elementor-widget-image-box .elementor-image-box-img {
            display: inline-block
        }
        
        .elementor-widget-image-box .elementor-image-box-title a {
            color: inherit
        }
        
        .elementor-widget-image-box .elementor-image-box-wrapper {
            text-align: center
        }
        
        .elementor-widget-image-carousel .swiper-container {
            position: static
        }
        
        .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
            line-height: inherit
        }
        
        .elementor-widget-image-carousel .swiper-slide {
            text-align: center
        }
        
        .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
            max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
        }
        
        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container {
            line-height: 1;
            font-size: PEGASAAS_ZERO_PX
        }
        
        .elementor-widget-social-icons .elementor-grid {
            grid-column-gap: var(--grid-column-gap, 5px);
            grid-row-gap: var(--grid-row-gap, 5px);
            grid-template-columns: var(--grid-template-columns);
            -webkit-box-pack: var(--justify-content, center);
            -ms-flex-pack: var(--justify-content, center);
            justify-content: var(--justify-content, center);
            justify-items: var(--justify-content, center)
        }
        
        .elementor-icon.elementor-social-icon {
            font-size: var(--icon-size, 25px);
            line-height: var(--icon-size, 25px);
            width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
        }
        
        .elementor-social-icon {
            --e-social-icon-icon-color: #fff;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            background-color: #818a91;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center
        }
        
        .elementor-social-icon i {
            color: var(--e-social-icon-icon-color)
        }
        
        .elementor-social-icon:last-child {
            margin: 0
        }
        
        .elementor-social-icon-facebook-f {
            background-color: #3b5998
        }
        
        .elementor-social-icon-linkedin {
            background-color: #0077b5
        }
        
        .elementor-social-icon-twitter {
            background-color: #1da1f2
        }
        
        .elementor-social-icon-youtube {
            background-color: #cd201f
        }
        
        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
            -webkit-border-radius: 10%;
            border-radius: 10%
        }
        
        /* @charset "UTF-8"; */
        .elementor-location-footer:before {
            content: "";
            display: table;
            clear: both
        }
        
        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text {
            display: inline-block
        }
        
        [data-elementor-type=popup]:not(.elementor-edit-area) {
            display: none
        }
        
        .swiper-slide {
            will-change: transform;
            border-style: solid;
            border-width: 0;
            overflow: hidden
        }
        
        .uael-icon-wrap .uael-icon {
            display: inline-block
        }
        
        .uael-infobox-icon-left .uael-infobox-left-right-wrap {
            -js-display: flex;
            display: -moz-box;
            display: flex
        }
        
        .uael-infobox-icon-left.uael-infobox-image-valign-middle .uael-infobox-content,
        .uael-infobox-image-valign-middle .uael-imgicon-wrap {
            -ms-flex-item-align: center;
            -webkit-align-self: center;
            align-self: center
        }
        
        .uael-infobox .uael-infobox-content,
        .uael-infobox-left-right-wrap,
        .uael-infobox-title-wrap {
            width: 100%
        }
        
        .uael-infobox-left {
            text-align: left;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-box-pack: start;
            justify-content: flex-start
        }
        
        .uael-infobox-center {
            text-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            justify-content: center
        }
        
        .uael-infobox-icon-left .uael-icon-wrap {
            margin-right: 10px
        }
        
        .uael-icon-wrap .uael-icon i {
            height: auto;
            width: auto;
            position: relative;
            display: block
        }
        
        .uael-infobox-module-link {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 4
        }
        
        .uael-icon-wrap .uael-icon i:before {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        .uael-wpf-style .wpforms-form .wpforms-field-label {
            margin-bottom: 10px
        }
        
        .uael-wpf-style .wpforms-form .wpforms-field {
            margin-bottom: 20px
        }
        
        .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .uael-wpf-style .wpforms-form .wpforms-field textarea {
            outline: 0
        }
        
        .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]) {
            height: auto
        }
        
        .uael-wpf-style .wpforms-form .wpforms-submit-container button[type=submit] {
            border-width: 0
        }
        
        .uael-wpf-style .wpforms-container .wpforms-field {
            padding: 0
        }
        
        .uael-wpf-input-size-sm .uael-wpf-style .wpforms-form .wpforms-field textarea {
            height: 70px
        }
        
        .uael-wpf-input-size-sm .uael-wpf-style .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .uael-wpf-input-size-sm .uael-wpf-style .wpforms-field textarea {
            font-size: 15px;
            padding: 12px 10px
        }
        
        .uael-wpf-btn-size-sm .uael-wpf-style .wpforms-form button[type=submit] {
            font-size: 15px;
            padding: 12px 24px;
            -webkit-border-radius: 3px;
            border-radius: 3px
        }
        
        .uael-wpf-input-size-md .uael-wpf-style .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .uael-wpf-input-size-md .uael-wpf-style .wpforms-field textarea {
            font-size: 16px;
            padding: 15px 10px
        }
        
        .uael-wpf-input-size-md .uael-wpf-style .wpforms-container textarea {
            height: 120px
        }
        
        .uael-wpf-button-justify .uael-wpf-style .wpforms-form button,
        .uael-wpf-button-left .uael-wpf-style .wpforms-form button {
            display: -webkit-box;
            display: -ms-flexbox;
            -js-display: flex;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            width: auto
        }
        
        .uael-wpf-button-left .uael-wpf-style .wpforms-form button[type=submit] {
            margin-left: 0;
            margin-right: auto
        }
        
        .uael-wpf-button-justify .uael-wpf-style .wpforms-form button[type=submit] {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            justify-content: center;
            width: 100%
        }
        
        .fab {
            font-family: 'Font Awesome 5 Brands';
            font-weight: 400
        }
        
        .wpforms-container noscript.wpforms-error-noscript {
            color: #990000
        }
        
        .wpforms-container .wpforms-submit-container {
            padding: 10px 0 0 0;
            position: relative
        }
        
        .wpforms-container {
            margin-bottom: 26px
        }
        
        .wpforms-container .wpforms-field-hp {
            display: none !important;
            position: absolute !important;
            left: -9000px !important
        }
        
        .wpforms-container .wpforms-field.wpforms-field-hidden {
            display: none;
            padding: 0
        }
        
        .wpforms-container input.wpforms-field-medium {
            max-width: 60%
        }
        
        .wpforms-container input.wpforms-field-large {
            max-width: 100%
        }
        
        .wpforms-container textarea.wpforms-field-large {
            height: 220px
        }
        
        .wpforms-container .wpforms-field {
            padding: 10px 0;
            position: relative
        }
        
        .wpforms-container .wpforms-field-label {
            display: block;
            font-weight: 700;
            float: none
        }
        
        .wpforms-container .wpforms-required-label {
            color: #ff0000;
            font-weight: normal
        }
        
        .wpforms-container input[type=email],
        .wpforms-container input[type=text],
        .wpforms-container textarea {
            display: block;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            float: none
        }
        
        @media only screen and (max-width: 600px) {
            .wpforms-container .wpforms-field:not(.wpforms-field-phone):not(.wpforms-field-select-style-modern) {
                overflow-x: hidden
            }
            .wpforms-container .wpforms-form .wpforms-field>* {
                max-width: 100%
            }
        }
        
        .fa,
        .fab,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }
        
        .fa-angle-right:before {
            content: "\f105"
        }
        
        .fa-caret-right:before {
            content: "\f0da"
        }
        
        .fa-facebook-f:before {
            content: "\f39e"
        }
        
        .fa-funnel-dollar:before {
            content: "\f662"
        }
        
        .fa-globe:before {
            content: "\f0ac"
        }
        
        .fa-head-side-virus:before {
            content: "\e064"
        }
        
        .fa-linkedin:before {
            content: "\f08c"
        }
        
        .fa-long-arrow-alt-right:before {
            content: "\f30b"
        }
        
        .fa-minus:before {
            content: "\f068"
        }
        
        .fa-plus:before {
            content: "\f067"
        }
        
        .fa-ship:before {
            content: "\f21a"
        }
        
        .fa-shopping-cart:before {
            content: "\f07a"
        }
        
        .fa-twitter:before {
            content: "\f099"
        }
        
        .fa-user-shield:before {
            content: "\f505"
        }
        
        .fa-wrench:before {
            content: "\f0ad"
        }
        
        .fa-youtube:before {
            content: "\f167"
        }
        
        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url('/static/font/fa-brands-400.eot');
            src: url('/static/font/fa-brands-400.eot') format("embedded-opentype"), url('/static/font/fa-brands-400.woff2') format("woff2"), url('/static/font/fa-brands-400.woff') format("woff"), url('/static/font/fa-brands-400.ttf') format("truetype"), url('/static/font/fa-brands-400.woff2') format("svg")
        }
        
        .fab {
            font-family: "Font Awesome 5 Brands"
        }
        
        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url('/static/font/fa-regular-400.eot');
            src: url('/static/font/fa-regular-400.eot') format("embedded-opentype"), url('/static/font/fa-regular-400.woff2') format("woff2"), url('/static/font/fa-regular-400.woff') format("woff"), url('/static/font/fa-regular-400.ttf') format("truetype"), url('/static/font/fa-regular-400.woff2') format("svg")
        }
        
        .fab {
            font-weight: 400
        }
        
        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url('/static/font/fa-solid-900.eot');
            src: url('/static/font/fa-solid-900.eot') format("embedded-opentype"), url('/static/font/fa-solid-900.woff2') format("woff2"), url('/static/font/fa-solid-900.woff') format("woff"), url('/static/font/fa-solid-900.ttf') format("truetype"), url('/static/font/fa-solid-900.woff2') format("svg")
        }
        
        .fa,
        .fas {
            font-family: "Font Awesome 5 Free"
        }
        
        .fa,
        .fas {
            font-weight: 900
        }
        
        .fa,
        .fab,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }
        
        .fa-angle-right:before {
            content: "\f105"
        }
        
        .fa-caret-right:before {
            content: "\f0da"
        }
        
        .fa-facebook-f:before {
            content: "\f39e"
        }
        
        .fa-funnel-dollar:before {
            content: "\f662"
        }
        
        .fa-globe:before {
            content: "\f0ac"
        }
        
        .fa-head-side-virus:before {
            content: "\e064"
        }
        
        .fa-linkedin:before {
            content: "\f08c"
        }
        
        .fa-long-arrow-alt-right:before {
            content: "\f30b"
        }
        
        .fa-minus:before {
            content: "\f068"
        }
        
        .fa-plus:before {
            content: "\f067"
        }
        
        .fa-ship:before {
            content: "\f21a"
        }
        
        .fa-shopping-cart:before {
            content: "\f07a"
        }
        
        .fa-twitter:before {
            content: "\f099"
        }
        
        .fa-user-shield:before {
            content: "\f505"
        }
        
        .fa-wrench:before {
            content: "\f0ad"
        }
        
        .fa-youtube:before {
            content: "\f167"
        }
        
        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url('/static/font/fa-solid-900.eot');
            src: url('/static/font/fa-solid-900.eot') format("embedded-opentype"), url('/static/font/fa-solid-900.woff2') format("woff2"), url('/static/font/fa-solid-900.woff') format("woff"), url('/static/font/fa-solid-900.ttf') format("truetype"), url('/static/font/fa-solid-900.woff2') format("svg")
        }
        
        .fa,
        .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900
        }
        
        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url('/static/font/fa-brands-400.eot');
            src: url('/static/font/fa-brands-400.eot') format("embedded-opentype"), url('/static/font/fa-brands-400.woff2') format("woff2"), url('/static/font/fa-brands-400.woff') format("woff"), url('/static/font/fa-brands-400.ttf') format("truetype"), url('/static/font/fa-brands-400.woff2') format("svg")
        }
        
        .fab {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }
    </style>
    <link rel="preload" as="style" href="static/css/css.css">
    <style id="" media="print" onload="this.media='all'">
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEz0dL_nz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEzQdL_nz.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEzwdL_nz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEzMdL_nz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEz8dL_nz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(static/font/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style><noscript><link rel="preload" href="static/css/css.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"></noscript>
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Robotic Press Brake - ADH">
    <meta property="og:description" content="It can realize automatic loading and unloading, automatic sorting and stacking, and the automatic die change technology of manipulator ensures the excellent">
    <meta property="og:url" content="https://www.adhmt.com/products/press-brake/robotic-press-brake/">
    <meta property="og:site_name" content="ADH">
    <meta property="og:updated_time" content="2021-08-25T16:36:10+08:00">
    <meta property="og:image" content="https://www.adhmt.com/wp-content/uploads/2021/08/1-1-5.jpg">
    <meta property="og:image:secure_url" content="https://www.adhmt.com/wp-content/uploads/2021/08/1-1-5.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="800">
    <meta property="og:image:alt" content="Robotic Press Brake">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Robotic Press Brake - ADH">
    <meta name="twitter:description" content="It can realize automatic loading and unloading, automatic sorting and stacking, and the automatic die change technology of manipulator ensures the excellent">
    <meta name="twitter:image" content="https://www.adhmt.com/wp-content/uploads/2021/08/1-1-5.jpg">
    <meta name="twitter:label1" content="Time to read">
    <meta name="twitter:data1" content="2 minutes">
    <link rel="dns-prefetch" href="https://maps.googleapis.com/">
    <link rel="dns-prefetch" href="https://maps.gstatic.com/">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="dns-prefetch" href="https://use.fontawesome.com/">
    <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
    <link rel="dns-prefetch" href="https://apis.google.com/">
    <link rel="dns-prefetch" href="https://google-analytics.com/">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/">
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com/">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
    <link rel="dns-prefetch" href="https://www.googletagservices.com/">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net/">
    <link rel="dns-prefetch" href="https://adservice.google.com/">
    <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com/">
    <link rel="dns-prefetch" href="https://tpc.googlesyndication.com/">
    <link rel="dns-prefetch" href="https://youtube.com/">
    <link rel="dns-prefetch" href="https://i.ytimg.com/">
    <link rel="dns-prefetch" href="https://player.vimeo.com/">
    <link rel="dns-prefetch" href="https://api.pinterest.com/">
    <link rel="dns-prefetch" href="https://assets.pinterest.com/">
    <link rel="dns-prefetch" href="https://connect.facebook.net/">
    <link rel="dns-prefetch" href="https://platform.twitter.com/">
    <link rel="dns-prefetch" href="https://syndication.twitter.com/">
    <link rel="dns-prefetch" href="https://platform.instagram.com/">
    <link rel="dns-prefetch" href="https://referrer.disqus.com/">
    <link rel="dns-prefetch" href="https://c.disquscdn.com/">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org/">
    <link rel="dns-prefetch" href="https://pixel.wp.com/">
    <link rel="dns-prefetch" href="https://disqus.com/">
    <link rel="dns-prefetch" href="https://s.gravatar.com/">
    <link rel="dns-prefetch" href="https://0.gravatar.com/">
    <link rel="dns-prefetch" href="https://2.gravatar.com/">
    <link rel="dns-prefetch" href="https://1.gravatar.com/">
    <link rel="dns-prefetch" href="https://sitename.disqus.com/">
    <link rel="dns-prefetch" href="https://s7.addthis.com/">
    <link rel="dns-prefetch" href="https://platform.linkedin.com/">
    <link rel="dns-prefetch" href="https://w.sharethis.com/">
    <link rel="dns-prefetch" href="https://s0.wp.com/">
    <link rel="dns-prefetch" href="https://s1.wp.com/">
    <link rel="dns-prefetch" href="https://s2.wp.com/">
    <link rel="dns-prefetch" href="https://stats.wp.com/">
    <link rel="dns-prefetch" href="https://ajax.microsoft.com/">
    <link rel="dns-prefetch" href="https://ajax.aspnetcdn.com/">
    <link rel="dns-prefetch" href="https://s3.amazonaws.com/">
    <link rel="dns-prefetch" href="https://code.jquery.com/">
    <link rel="dns-prefetch" href="https://stackpath.bootstrapcdn.com/">
    <link rel="dns-prefetch" href="https://github.githubassets.com/">
    <link rel="dns-prefetch" href="https://ad.doubleclick.net/">
    <link rel="dns-prefetch" href="https://stats.g.doubleclick.net/">
    <link rel="dns-prefetch" href="https://cm.g.doubleclick.net/">
    <link rel="dns-prefetch" href="https://stats.buysellads.com/">
    <link rel="dns-prefetch" href="https://s3.buysellads.com/">
    <link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
    <link rel="alternate" type="application/rss+xml" title="ADH » Feed" href="https://www.adhmt.com/feed/">
    <link rel="alternate" type="application/rss+xml" title="ADH » Comments Feed" href="https://www.adhmt.com/comments/feed/">
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="preload" href="static/css/style.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="https://www.adhmt.com/wp-content/themes/astra/assets/css/minified/frontend.min.css?ver=3.7.7" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <style id="astra-theme-css-inline-css">
        html {
            font-size: 112.5%;
        }
        
        a,
        .page-title {
            color: #0F3186;
        }
        
        a:hover,
        a:focus {
            color: #0F3186;
        }
        
        body,
        button,
        input,
        select,
        textarea,
        .ast-button,
        .ast-custom-button {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 18px;
            font-size: 1rem;
            line-height: 1.5;
        }
        
        blockquote {
            color: #000000;
        }
        
        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6,
        .site-title,
        .site-title a {
            font-family: 'Roboto', sans-serif;
            font-weight: 900;
            text-transform: none;
        }
        
        .site-title {
            font-size: 25px;
            font-size: 1.3888888888889rem;
            display: none;
        }
        
        header .custom-logo-link img {
            max-width: 110px;
        }
        
        .astra-logo-svg {
            width: 110px;
        }
        
        .ast-archive-description .ast-archive-title {
            font-size: 40px;
            font-size: 2.2222222222222rem;
        }
        
        .site-header .site-description {
            font-size: 25px;
            font-size: 1.3888888888889rem;
            display: none;
        }
        
        .entry-title {
            font-size: 30px;
            font-size: 1.6666666666667rem;
        }
        
        h1,
        .entry-content h1 {
            font-size: 60px;
            font-size: 3.3333333333333rem;
            font-family: 'Roboto', sans-serif;
            line-height: 1.618;
            text-transform: none;
        }
        
        h2,
        .entry-content h2 {
            font-size: 48px;
            font-size: 2.6666666666667rem;
            font-family: 'Roboto', sans-serif;
            line-height: 1.618;
            text-transform: none;
        }
        
        h3,
        .entry-content h3 {
            font-size: 30px;
            font-size: 1.6666666666667rem;
            font-family: 'Roboto', sans-serif;
            line-height: 1.618;
            text-transform: none;
        }
        
        h4,
        .entry-content h4 {
            font-size: 20px;
            font-size: 1.1111111111111rem;
            line-height: 1.618;
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        h5,
        .entry-content h5 {
            font-size: 16px;
            font-size: 0.88888888888889rem;
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        h6,
        .entry-content h6 {
            font-size: 12px;
            font-size: 0.66666666666667rem;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
        }
        
        .ast-single-post .entry-title,
        .page-title {
            font-size: 30px;
            font-size: 1.6666666666667rem;
        }
        
         ::selection {
            background-color: #0F3186;
            color: #ffffff;
        }
        
        body,
        h1,
        .entry-title a,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: #153243;
        }
        
        .tagcloud a:hover,
        .tagcloud a:focus,
        .tagcloud a.current-item {
            color: #ffffff;
            border-color: #0F3186;
            background-color: #0F3186;
        }
        
        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: #0F3186;
        }
        
        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: #0F3186;
            background-color: #0F3186;
            box-shadow: none;
        }
        
        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: #0F3186;
            border-color: #0F3186;
        }
        
        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: #0F3186;
        }
        
        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: #0F3186;
        }
        
        .entry-meta a:hover,
        .entry-meta a:hover *,
        .entry-meta a:focus,
        .entry-meta a:focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: #0F3186;
        }
        
        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: #0F3186;
        }
        
        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: #0F3186;
        }
        
        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: #0F3186;
            border-color: #0F3186;
        }
        
        .calendar_wrap #today>a {
            color: #ffffff;
        }
        
        .page-links .page-link,
        .single .post-navigation a {
            color: #0F3186;
        }
        
        .ast-header-break-point .main-header-bar .ast-button-wrap .menu-toggle {
            border-radius: 7px;
        }
        
        .widget-title {
            font-size: 25px;
            font-size: 1.3888888888889rem;
            color: #153243;
        }
        
        .single .ast-author-details .author-title {
            color: #0F3186;
        }
        
        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em;
        }
        
        .site-logo-img img {
            transition: all 0.2s linear;
        }
        
        .ast-page-builder-template .hentry {
            margin: 0;
        }
        
        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }
        
        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0;
        }
        
        .ast-page-builder-template .no-results {
            text-align: center;
            margin: 4em auto;
        }
        
        .ast-page-builder-template .ast-pagination {
            padding: 2em;
        }
        
        .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
            margin-top: 0;
        }
        
        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }
        
        .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
            margin-bottom: 0;
        }
        
        .ast-page-builder-template.single .post-navigation {
            padding-bottom: 2em;
        }
        
        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }
        
        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .ast-page-builder-template .ast-archive-description {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .single.ast-page-builder-template .entry-header {
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
            margin-left: 0;
            margin-right: 0;
        }
        
        @media (max-width:921px) {
            #ast-desktop-header {
                display: none;
            }
        }
        
        @media (min-width:921px) {
            #ast-mobile-header {
                display: none;
            }
        }
        
        .wp-block-buttons.aligncenter {
            justify-content: center;
        }
        
        @media (max-width:782px) {
            .entry-content .wp-block-columns .wp-block-column {
                margin-left: 0px;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single {
                padding: 1.5em 2.14em;
            }
            .ast-separate-container #primary,
            .ast-separate-container #secondary {
                padding: 1.5em 0;
            }
            #primary,
            #secondary {
                padding: 1.5em 0;
                margin: 0;
            }
            .ast-left-sidebar #content>.ast-container {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
            }
            .ast-author-box img.avatar {
                margin: 20px 0 0 0;
            }
        }
        
        @media (min-width:922px) {
            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary {
                border: 0;
            }
            .search-no-results.ast-separate-container #primary {
                margin-bottom: 4em;
            }
        }
        
        .elementor-button-wrapper .elementor-button {
            border-style: solid;
            text-decoration: none;
            border-top-width: 1px;
            border-right-width: 1px;
            border-left-width: 1px;
            border-bottom-width: 1px;
        }
        
        body .elementor-button.elementor-size-sm,
        body .elementor-button.elementor-size-xs,
        body .elementor-button.elementor-size-md,
        body .elementor-button.elementor-size-lg,
        body .elementor-button.elementor-size-xl,
        body .elementor-button {
            border-radius: 0;
            padding-top: 14px;
            padding-right: 40px;
            padding-bottom: 14px;
            padding-left: 40px;
        }
        
        .elementor-button-wrapper .elementor-button {
            border-color: #0F3186;
            background-color: var(--ast-global-color-1);
        }
        
        .elementor-button-wrapper .elementor-button:hover,
        .elementor-button-wrapper .elementor-button:focus {
            color: #ffffff;
            background-color: var(--ast-global-color-3);
            border-color: #000000;
        }
        
        .wp-block-button .wp-block-button__link,
        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: var(--ast-global-color-5);
        }
        
        .elementor-button-wrapper .elementor-button {
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
            text-transform: capitalize;
        }
        
        .wp-block-button .wp-block-button__link:hover,
        .wp-block-button .wp-block-button__link:focus {
            color: #ffffff;
            background-color: var(--ast-global-color-3);
            border-color: #000000;
        }
        
        .elementor-widget-heading h1.elementor-heading-title {
            line-height: 1.618;
        }
        
        .elementor-widget-heading h2.elementor-heading-title {
            line-height: 1.618;
        }
        
        .elementor-widget-heading h3.elementor-heading-title {
            line-height: 1.618;
        }
        
        .elementor-widget-heading h4.elementor-heading-title {
            line-height: 1.618;
        }
        
        .wp-block-button .wp-block-button__link {
            border-style: solid;
            border-top-width: 1px;
            border-right-width: 1px;
            border-left-width: 1px;
            border-bottom-width: 1px;
            border-color: #0F3186;
            background-color: var(--ast-global-color-1);
            color: var(--ast-global-color-5);
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
            text-transform: capitalize;
            border-radius: 0;
        }
        
        .wp-block-buttons .wp-block-button .wp-block-button__link {
            padding-top: 14px;
            padding-right: 40px;
            padding-bottom: 14px;
            padding-left: 40px;
        }
        
        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            border-style: solid;
            border-top-width: 1px;
            border-right-width: 1px;
            border-left-width: 1px;
            border-bottom-width: 1px;
            color: var(--ast-global-color-5);
            border-color: #0F3186;
            background-color: var(--ast-global-color-1);
            border-radius: 0;
            padding-top: 14px;
            padding-right: 40px;
            padding-bottom: 14px;
            padding-left: 40px;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
            text-transform: capitalize;
        }
        
        button:focus,
        .menu-toggle:hover,
        button:hover,
        .ast-button:hover,
        .ast-custom-button:hover .button:hover,
        .ast-custom-button:hover,
        input[type=reset]:hover,
        input[type=reset]:focus,
        input#submit:hover,
        input#submit:focus,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus {
            color: #ffffff;
            background-color: var(--ast-global-color-3);
            border-color: #000000;
        }
        
        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-title,
            .ast-separate-container .ast-archive-description {
                padding: 1.5em 1em;
            }
            .ast-separate-container #content .ast-container {
                padding-left: 0.54em;
                padding-right: 0.54em;
            }
            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 1em;
                margin-bottom: 1.5em;
            }
            .ast-separate-container .ast-comment-list .bypostauthor {
                padding: .5em;
            }
            .ast-search-menu-icon.ast-dropdown-active .search-field {
                width: 170px;
            }
        }
        
        @media (max-width:921px) {
            .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
                display: inline-block;
            }
            .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
                margin: 0;
            }
            .ast-comment-avatar-wrap img {
                max-width: 2.5em;
            }
            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 2.14em;
            }
            .ast-separate-container .comment-respond {
                padding: 2em 2.14em;
            }
            .ast-comment-meta {
                padding: 0 1.8888em 1.3333em;
            }
        }
        
        body,
        .ast-separate-container {
            background-color: #ffffff;
            ;
            background-image: none;
            ;
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
            margin-left: -6.67em;
            margin-right: -6.67em;
            width: auto;
        }
        
        @media (max-width: 1200px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.4em;
                margin-right: -2.4em;
            }
        }
        
        @media (max-width: 768px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.14em;
                margin-right: -2.14em;
            }
        }
        
        @media (max-width: 544px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -1em;
                margin-right: -1em;
            }
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .alignwide {
            margin-left: -20px;
            margin-right: -20px;
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignfull,
        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignwide {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        
        @media (max-width:921px) {
            .widget-title {
                font-size: 22px;
                font-size: 1.375rem;
            }
            body,
            button,
            input,
            select,
            textarea,
            .ast-button,
            .ast-custom-button {
                font-size: 16px;
                font-size: 0.88888888888889rem;
            }
            #secondary,
            #secondary button,
            #secondary input,
            #secondary select,
            #secondary textarea {
                font-size: 16px;
                font-size: 0.88888888888889rem;
            }
            .site-title {
                font-size: 25px;
                font-size: 1.3888888888889rem;
                display: none;
            }
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }
            .site-header .site-description {
                font-size: 25px;
                font-size: 1.3888888888889rem;
                display: none;
            }
            .entry-title {
                font-size: 30px;
            }
            h1,
            .entry-content h1 {
                font-size: 72px;
            }
            h2,
            .entry-content h2 {
                font-size: 60px;
            }
            h3,
            .entry-content h3 {
                font-size: 30px;
            }
            h4,
            .entry-content h4 {
                font-size: 20px;
                font-size: 1.1111111111111rem;
            }
            h5,
            .entry-content h5 {
                font-size: 16px;
                font-size: 0.88888888888889rem;
            }
            h6,
            .entry-content h6 {
                font-size: 12px;
                font-size: 0.66666666666667rem;
            }
            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
            .astra-logo-svg {
                width: 120px;
            }
            header .custom-logo-link img,
            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 120px;
            }
        }
        
        @media (max-width:544px) {
            .widget-title {
                font-size: 22px;
                font-size: 1.375rem;
            }
            body,
            button,
            input,
            select,
            textarea,
            .ast-button,
            .ast-custom-button {
                font-size: 16px;
                font-size: 0.88888888888889rem;
            }
            #secondary,
            #secondary button,
            #secondary input,
            #secondary select,
            #secondary textarea {
                font-size: 16px;
                font-size: 0.88888888888889rem;
            }
            .site-title {
                font-size: 17px;
                font-size: 0.94444444444444rem;
                display: none;
            }
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }
            .site-header .site-description {
                font-size: 20px;
                font-size: 1.1111111111111rem;
                display: none;
            }
            .entry-title {
                font-size: 30px;
            }
            h1,
            .entry-content h1 {
                font-size: 40px;
            }
            h2,
            .entry-content h2 {
                font-size: 45px;
            }
            h3,
            .entry-content h3 {
                font-size: 30px;
            }
            h4,
            .entry-content h4 {
                font-size: 20px;
                font-size: 1.1111111111111rem;
            }
            h5,
            .entry-content h5 {
                font-size: 15px;
                font-size: 0.83333333333333rem;
            }
            h6,
            .entry-content h6 {
                font-size: 12px;
                font-size: 0.66666666666667rem;
            }
            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
            header .custom-logo-link img,
            .ast-header-break-point .site-branding img,
            .ast-header-break-point .custom-logo-link img {
                max-width: 100px;
            }
            .astra-logo-svg {
                width: 100px;
            }
            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 100px;
            }
        }
        
        @media (max-width:544px) {
            html {
                font-size: 112.5%;
            }
        }
        
        @media (min-width:922px) {
            .ast-container {
                max-width: 1400px;
            }
        }
        
        @font-face {
            font-family: "Astra";
            src: url(static/font/astra.woff) format("woff"), url(static/font/astra.ttf) format("truetype"), url(https://www.adhmt.com/wp-content/themes/astra/assets/fonts/astra.svg) format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }
        
        @media (min-width:922px) {
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
                margin-left: -0px;
            }
        }
        
        .footer-widget-area[data-section^="section-fb-html-"] .ast-builder-html-element {
            text-align: center;
        }
        
        .astra-icon-down_arrow::after {
            content: "\e900";
            font-family: Astra;
        }
        
        .astra-icon-close::after {
            content: "\e5cd";
            font-family: Astra;
        }
        
        .astra-icon-drag_handle::after {
            content: "\e25d";
            font-family: Astra;
        }
        
        .astra-icon-format_align_justify::after {
            content: "\e235";
            font-family: Astra;
        }
        
        .astra-icon-menu::after {
            content: "\e5d2";
            font-family: Astra;
        }
        
        .astra-icon-reorder::after {
            content: "\e8fe";
            font-family: Astra;
        }
        
        .astra-icon-search::after {
            content: "\e8b6";
            font-family: Astra;
        }
        
        .astra-icon-zoom_in::after {
            content: "\e56b";
            font-family: Astra;
        }
        
        .astra-icon-check-circle::after {
            content: "\e901";
            font-family: Astra;
        }
        
        .astra-icon-shopping-cart::after {
            content: "\f07a";
            font-family: Astra;
        }
        
        .astra-icon-shopping-bag::after {
            content: "\f290";
            font-family: Astra;
        }
        
        .astra-icon-shopping-basket::after {
            content: "\f291";
            font-family: Astra;
        }
        
        .astra-icon-circle-o::after {
            content: "\e903";
            font-family: Astra;
        }
        
        .astra-icon-certificate::after {
            content: "\e902";
            font-family: Astra;
        }
        
        blockquote {
            padding: 1.2em;
        }
        
         :root .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }
        
         :root .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }
        
         :root .wp-block-button .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }
        
         :root .wp-block-button .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }
        
         :root .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }
        
         :root .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }
        
         :root .wp-block-button .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }
        
         :root .wp-block-button .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }
        
         :root .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }
        
         :root .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }
        
         :root .wp-block-button .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }
        
         :root .wp-block-button .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }
        
         :root .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }
        
         :root .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }
        
         :root .wp-block-button .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }
        
         :root .wp-block-button .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }
        
         :root .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }
        
         :root .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }
        
         :root .wp-block-button .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }
        
         :root .wp-block-button .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }
        
         :root .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }
        
         :root .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }
        
         :root .wp-block-button .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }
        
         :root .wp-block-button .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }
        
         :root .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }
        
         :root .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }
        
         :root .wp-block-button .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }
        
         :root .wp-block-button .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }
        
         :root .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }
        
         :root .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }
        
         :root .wp-block-button .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }
        
         :root .wp-block-button .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }
        
         :root .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }
        
         :root .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }
        
         :root .wp-block-button .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }
        
         :root .wp-block-button .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }
        
         :root {
            --ast-global-color-0: #0170B9;
            --ast-global-color-1: #3a3a3a;
            --ast-global-color-2: #3a3a3a;
            --ast-global-color-3: #4B4F58;
            --ast-global-color-4: #F5F5F5;
            --ast-global-color-5: #FFFFFF;
            --ast-global-color-6: #F2F5F7;
            --ast-global-color-7: #424242;
            --ast-global-color-8: #000000;
        }
        
        .ast-breadcrumbs .trail-browse,
        .ast-breadcrumbs .trail-items,
        .ast-breadcrumbs .trail-items li {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            background: inherit;
            text-indent: 0;
        }
        
        .ast-breadcrumbs .trail-browse {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            color: inherit;
        }
        
        .ast-breadcrumbs .trail-items {
            list-style: none;
        }
        
        .trail-items li::after {
            padding: 0 0.3em;
            content: "\00bb";
        }
        
        .trail-items li:last-of-type::after {
            display: none;
        }
        
        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: #0F3186;
        }
        
        @media (max-width:921px) {
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }
        
        @media (max-width:544px) {
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }
        
        .ast-builder-layout-element[data-section="title_tagline"] {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }
        
        [data-section*="section-hb-button-"] .menu-link {
            display: none;
        }
        
        .ast-header-button-1[data-section*="section-hb-button-"] .ast-builder-button-wrap .ast-custom-button {
            font-weight: normal;
            text-transform: capitalize;
        }
        
        .ast-header-button-1 .ast-custom-button {
            color: var(--ast-global-color-5);
            background: rgba(255, 255, 255, 0);
            border-color: var(--ast-global-color-5);
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-right-width: 1px;
            border-radius: 6px;
        }
        
        .ast-header-button-1 .ast-custom-button:hover {
            color: var(--ast-global-color-5);
            background: rgba(255, 255, 255, 0);
        }
        
        @media (max-width:921px) {
            .ast-header-button-1 .ast-custom-button {
                color: #ffffff;
                background: #7cb209;
            }
        }
        
        .ast-header-button-1[data-section*="section-hb-button-"] .ast-builder-button-wrap .ast-custom-button {
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
        }
        
        @media (max-width:544px) {
            .ast-header-button-1[data-section*="section-hb-button-"] .ast-builder-button-wrap .ast-custom-button {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }
        
        .ast-header-button-1[data-section="section-hb-button-1"] {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"] {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"] {
                display: flex;
            }
        }
        
        .ast-builder-menu-1 {
            font-family: inherit;
            font-weight: inherit;
            text-transform: capitalize;
        }
        
        .ast-builder-menu-1 .menu-item>.menu-link {
            font-size: 16px;
            font-size: 0.88888888888889rem;
            color: #ffffff;
        }
        
        .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
            color: #ffffff;
        }
        
        .ast-builder-menu-1 .menu-item:hover>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
            color: #ebedef;
        }
        
        .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
            color: #ebedef;
        }
        
        .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
        .ast-builder-menu-1 .current-menu-ancestor>.menu-link {
            color: #ebedef;
        }
        
        .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
            color: #ebedef;
        }
        
        .ast-builder-menu-1 .sub-menu,
        .ast-builder-menu-1 .inline-on-mobile .sub-menu {
            border-top-width: 2px;
            border-bottom-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-color: #0F3186;
            border-style: solid;
            border-radius: 0;
        }
        
        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }
        
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
            height: calc( 0px + 5px);
        }
        
        .ast-builder-menu-1 .main-header-menu,
        .ast-builder-menu-1 .main-header-menu .sub-menu {
            /* background-color: ; */
            background-image: none;
            ;
        }
        
        .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
            border-style: none;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 .main-header-menu .menu-item>.menu-link {
                padding-top: 0px;
                padding-bottom: 0px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .ast-builder-menu-1 .main-header-menu .menu-item>.menu-link {
                color: #000000;
            }
            .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
                color: #000000;
            }
            .ast-builder-menu-1 .menu-item:hover>.menu-link,
            .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
                color: #0F3186;
            }
            .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
                color: #0F3186;
            }
            .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
            .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
            .ast-builder-menu-1 .current-menu-ancestor>.menu-link,
            .ast-builder-menu-1 .current-menu-ancestor>.ast-menu-toggle {
                color: #0F3186;
            }
            .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
                color: #0F3186;
            }
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0px;
                right: calc( 20px - 0.907em);
            }
            .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
        }
        
        .ast-builder-menu-1 {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }
        
        .main-header-bar .main-header-bar-navigation .ast-search-icon {
            display: block;
            z-index: 4;
            position: relative;
        }
        
        .ast-search-icon {
            z-index: 4;
            position: relative;
            line-height: normal;
        }
        
        .main-header-bar .ast-search-menu-icon .search-form {
            background-color: #ffffff;
        }
        
        .ast-search-menu-icon.ast-dropdown-active.slide-search .search-form {
            visibility: visible;
            opacity: 1;
        }
        
        .ast-search-menu-icon .search-form {
            border: 1px solid #e7e7e7;
            line-height: normal;
            padding: 0 3em 0 0;
            border-radius: 2px;
            display: inline-block;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            position: relative;
            color: inherit;
            background-color: #fff;
        }
        
        .ast-search-menu-icon .astra-search-icon {
            -js-display: flex;
            display: flex;
            line-height: normal;
        }
        
        .ast-search-menu-icon .astra-search-icon:focus {
            outline: none;
        }
        
        .ast-search-menu-icon .search-field {
            border: none;
            background-color: transparent;
            transition: width .2s;
            border-radius: inherit;
            color: inherit;
            font-size: inherit;
            width: 0;
            color: #757575;
        }
        
        .ast-search-menu-icon .search-submit {
            display: none;
            background: none;
            border: none;
            font-size: 1.3em;
            color: #757575;
        }
        
        .ast-search-menu-icon.ast-dropdown-active {
            visibility: visible;
            opacity: 1;
            position: relative;
        }
        
        .ast-search-menu-icon.ast-dropdown-active .search-field {
            width: 235px;
        }
        
        .ast-header-search .ast-search-menu-icon.slide-search .search-form,
        .ast-header-search .ast-search-menu-icon.ast-inline-search .search-form {
            -js-display: flex;
            display: flex;
            align-items: center;
        }
        
        .ast-search-menu-icon.ast-inline-search .search-field {
            width: 100%;
            padding: 0.60em;
            padding-right: 5.5em;
        }
        
        .site-header-section-left .ast-search-menu-icon.slide-search .search-form {
            padding-left: 3em;
            padding-right: unset;
            left: -1em;
            right: unset;
        }
        
        .site-header-section-left .ast-search-menu-icon.slide-search .search-form .search-field {
            margin-right: unset;
            margin-left: 10px;
        }
        
        .ast-search-menu-icon.slide-search .search-form {
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            visibility: hidden;
            opacity: 0;
            transition: all .2s;
            position: absolute;
            z-index: 3;
            right: -1em;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .ast-header-search .ast-search-menu-icon .search-form .search-field:-ms-input-placeholder,
        .ast-header-search .ast-search-menu-icon .search-form .search-field:-ms-input-placeholder {
            opacity: 0.5;
        }
        
        .ast-header-search .ast-search-menu-icon.slide-search .search-form,
        .ast-header-search .ast-search-menu-icon.ast-inline-search .search-form {
            -js-display: flex;
            display: flex;
            align-items: center;
        }
        
        .ast-builder-layout-element.ast-header-search {
            height: auto;
        }
        
        .ast-header-search .astra-search-icon {
            color: #ffffff;
            font-size: 18px;
        }
        
        .ast-header-search .search-field::placeholder,
        .ast-header-search .ast-icon {
            color: #ffffff;
        }
        
        .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field {
            margin-right: 8px;
        }
        
        @media (max-width:921px) {
            .ast-header-search .astra-search-icon {
                font-size: 18px;
            }
            .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field {
                margin-right: 8px;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-search .astra-search-icon {
                font-size: 18px;
            }
            .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field {
                margin-right: 8px;
            }
        }
        
        .ast-header-search {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-header-search {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-header-search {
                display: flex;
            }
        }
        
        .site-below-footer-wrap {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            background-color: #0F3186;
            ;
            background-image: none;
            ;
            min-height: 80px;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
            max-width: 1360px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }
        
        .ast-builder-grid-row-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }
        
        @media (max-width:921px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            padding-right: 30px;
        }
        
        @media (max-width:921px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                padding-top: 1em;
                padding-bottom: 1em;
            }
        }
        
        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: grid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }
        
        .ast-builder-html-element img.alignnone {
            display: inline-block;
        }
        
        .ast-builder-html-element p:first-child {
            margin-top: 0;
        }
        
        .ast-builder-html-element p:last-child {
            margin-bottom: 0;
        }
        
        .ast-header-break-point .main-header-bar .ast-builder-html-element {
            line-height: 1.85714285714286;
        }
        
        .footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
            color: #ffffff;
        }
        
        .footer-widget-area[data-section="section-fb-html-1"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="section-fb-html-1"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="section-fb-html-1"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
            color: #ffffff;
        }
        
        .footer-widget-area[data-section="section-fb-html-2"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
                text-align: center;
            }
        }
        
        .footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
                text-align: left;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
                text-align: left;
            }
        }
        
        .ast-footer-copyright {
            text-align: left;
        }
        
        .ast-footer-copyright {
            color: #ffffff;
        }
        
        @media (max-width:921px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }
        
        .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }
        
        .site-footer {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(static/image/about-bg-free-img.jpg);
            ;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }
        
        .site-primary-footer-wrap {
            padding-top: 45px;
            padding-bottom: 45px;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
            background-color: #0F3186;
            ;
            background-image: none;
            ;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row {
            max-width: 1360px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row,
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }
        
        .ast-builder-grid-row-2-equal .ast-builder-grid-row {
            grid-template-columns: repeat( 2, 1fr);
        }
        
        @media (max-width:921px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-2-lheavy .ast-builder-grid-row {
                grid-template-columns: 2fr 1fr;
            }
        }
        
        @media (max-width:544px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
            padding-top: 150px;
            padding-bottom: 20px;
            padding-left: 50px;
            padding-right: 50px;
        }
        
        @media (max-width:921px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                padding-top: 50px;
                padding-bottom: 50px;
                padding-left: 50px;
                padding-right: 50px;
            }
        }
        
        @media (max-width:544px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                padding-top: 50px;
                padding-bottom: 50px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
            display: grid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                display: grid;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .footer-widget-area-inner {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .footer-widget-area-inner {
                text-align: left;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .footer-widget-area-inner {
                text-align: center;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .footer-widget-area-inner {
            color: #ffffff;
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
            color: #ffffff;
            font-size: 70px;
            font-size: 3.8888888888889rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 40px;
                font-size: 2.2222222222222rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .footer-widget-area-inner {
                font-size: 15px;
                font-size: 0.83333333333333rem;
            }
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 24px;
                font-size: 1.3333333333333rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }
        
        .elementor-post.elementor-grid-item.hentry {
            margin-bottom: 0;
        }
        
        .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
        .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
            width: auto;
            margin: 0;
            float: none;
        }
        
        .ast-left-sidebar .elementor-section.elementor-section-stretched,
        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important;
        }
        
        .elementor-template-full-width .ast-container {
            display: block;
        }
        
        @media (max-width:544px) {
            .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
                width: auto;
                margin: 0;
            }
            .elementor-element .woocommerce .woocommerce-result-count {
                float: none;
            }
        }
        
        .ast-header-button-1 .ast-custom-button {
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.39) inset;
        }
        
        .ast-desktop .ast-mega-menu-enabled .ast-builder-menu-1 div:not( .astra-full-megamenu-wrapper) .sub-menu,
        .ast-desktop .ast-builder-menu-1 .sub-menu,
        .ast-builder-menu-1 .inline-on-mobile .sub-menu,
        .ast-desktop .ast-builder-menu-1 .astra-full-megamenu-wrapper,
        .ast-desktop .ast-builder-menu-1 .sub-menu {
            box-shadow: 0px 4px 10px -2px rgba(0, 0, 0, 0.1);
        }
        
        .ast-desktop .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            max-width: 35%;
        }
        
        @media (max-width:921px) {
            .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
                max-width: 70%;
            }
        }
        
        @media (max-width:544px) {
            .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
                max-width: 70%;
            }
        }
        
        .ast-header-break-point .main-header-bar {
            border-bottom-width: 0;
        }
        
        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 0;
            }
        }
        
        .ast-safari-browser-less-than-11 .main-header-menu .menu-item,
        .ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items {
            display: block;
        }
        
        .main-header-menu .menu-item,
        #astra-footer-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .main-header-menu>.menu-item>.menu-link,
        #astra-footer-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex;
        }
        
        .header-main-layout-1 .ast-flex.main-header-container,
        .header-main-layout-3 .ast-flex.main-header-container {
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .main-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link:after {
            position: absolute;
            right: 1em;
            top: 50%;
            transform: translate(0, -50%) rotate(270deg);
        }
        
        .ast-header-break-point .main-header-bar .main-header-bar-navigation .page_item_has_children>.ast-menu-toggle::before,
        .ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
        .ast-header-break-point .ast-mobile-header-wrap .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before {
            font-weight: bold;
            content: "\e900";
            font-family: Astra;
            text-decoration: inherit;
            display: inline-block;
        }
        
        .ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link:before {
            content: "\e900";
            font-family: Astra;
            font-size: .65em;
            text-decoration: inherit;
            display: inline-block;
            transform: translate(0, -2px) rotateZ(270deg);
            margin-right: 5px;
        }
        
        .widget_search .search-form:after {
            font-family: Astra;
            font-size: 1.2em;
            font-weight: normal;
            content: "\e8b6";
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translate(0, -50%);
        }
        
        .astra-search-icon::before {
            content: "\e8b6";
            font-family: Astra;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
            text-align: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .main-header-bar .main-header-bar-navigation .page_item_has_children>a:after,
        .main-header-bar .main-header-bar-navigation .menu-item-has-children>a:after,
        .site-header-focus-item .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            content: "\e900";
            display: inline-block;
            font-family: Astra;
            font-size: .6rem;
            font-weight: bold;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-left: 10px;
            line-height: normal;
        }
        
        .ast-mobile-popup-drawer .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
            transform: rotateX(180deg);
        }
        
        .ast-header-break-point .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            display: none;
        }
        
        .ast-separate-container .blog-layout-1,
        .ast-separate-container .blog-layout-2,
        .ast-separate-container .blog-layout-3 {
            background-color: transparent;
            background-image: none;
        }
        
        .ast-separate-container .ast-article-post {
            background-color: #ffffff;
            ;
            background-image: none;
            ;
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post {
                background-color: #ffffff;
                ;
                background-image: none;
                ;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post {
                background-color: #ffffff;
                ;
                background-image: none;
                ;
            }
        }
        
        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .ast-separate-container .comments-area .comment-respond,
        .ast-separate-container .comments-area .ast-comment-list li,
        .ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container.ast-two-container #secondary .widget,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .comments-area .comments-title {
            background-color: #ffffff;
            ;
            background-image: none;
            ;
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title {
                background-color: #ffffff;
                ;
                background-image: none;
                ;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title {
                background-color: #ffffff;
                ;
                background-image: none;
                ;
            }
        }
        
        .ast-off-canvas-active body.ast-main-header-nav-open {
            overflow: hidden;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-header {
            -js-display: flex;
            display: flex;
            justify-content: flex-end;
            min-height: calc( 1.2em + 24px);
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-header .menu-toggle-close {
            background: transparent;
            border: 0;
            font-size: 24px;
            line-height: 1;
            padding: .6em;
            color: inherit;
            -js-display: flex;
            display: flex;
            box-shadow: none;
        }
        
        .ast-mobile-popup-drawer.ast-mobile-popup-full-width .ast-mobile-popup-inner {
            max-width: none;
            transition: transform 0s ease-in, opacity 0.2s ease-in;
        }
        
        .ast-mobile-popup-drawer.active {
            left: 0;
            opacity: 1;
            right: 0;
            z-index: 100000;
            transition: opacity 0.25s ease-out;
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-overlay {
            opacity: 1;
            cursor: pointer;
            visibility: visible;
        }
        
        body.admin-bar .ast-mobile-popup-drawer,
        body.admin-bar .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            top: 32px;
        }
        
        body.admin-bar.ast-primary-sticky-header-active .ast-mobile-popup-drawer,
        body.admin-bar.ast-primary-sticky-header-active .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            top: 0px;
        }
        
        @media (max-width: 782px) {
            body.admin-bar .ast-mobile-popup-drawer,
            body.admin-bar .ast-mobile-popup-drawer .ast-mobile-popup-inner {
                top: 46px;
            }
        }
        
        .ast-mobile-popup-content>*,
        .ast-desktop-popup-content>* {
            padding: 10px 0;
            height: auto;
        }
        
        .ast-mobile-popup-content>*:first-child,
        .ast-desktop-popup-content>*:first-child {
            padding-top: 10px;
        }
        
        .ast-mobile-popup-content>.ast-builder-menu,
        .ast-desktop-popup-content>.ast-builder-menu {
            padding-top: 0;
        }
        
        .ast-mobile-popup-content>*:last-child,
        .ast-desktop-popup-content>*:last-child {
            padding-bottom: 0;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-icon,
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children .sub-menu,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-icon {
            display: none;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.ast-inline-search label,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.ast-inline-search label {
            width: 100%;
        }
        
        .ast-mobile-popup-content .ast-builder-menu-mobile .main-header-menu,
        .ast-mobile-popup-content .ast-builder-menu-mobile .main-header-menu .sub-menu {
            background-color: transparent;
        }
        
        .ast-mobile-popup-content .ast-icon svg {
            height: .85em;
            width: .95em;
            margin-top: 15px;
        }
        
        .ast-mobile-popup-content .ast-icon.icon-search svg {
            margin-top: 0;
        }
        
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-fade>.menu-item>.sub-menu,
        .ast-mobile-popup-drawer.show,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
            opacity: 1;
            visibility: visible;
        }
        
        .ast-mobile-popup-drawer {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -99999rem;
            right: 99999rem;
            transition: opacity 0.25s ease-in, left 0s 0.25s, right 0s 0.25s;
            opacity: 0;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            width: 100%;
            transform: translateX(100%);
            max-width: 90%;
            right: 0;
            top: 0;
            background: #fafafa;
            color: #3a3a3a;
            bottom: 0;
            opacity: 0;
            position: fixed;
            box-shadow: 0 0 2rem 0 rgba(0, 0, 0, 0.1);
            -js-display: flex;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease-in, opacity 0.2s ease-in;
            overflow-y: auto;
            overflow-x: hidden;
        }
        
        .ast-mobile-popup-drawer.ast-mobile-popup-left .ast-mobile-popup-inner {
            transform: translateX(-100%);
            right: auto;
            left: 0;
        }
        
        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-popup-drawer .main-header-bar-navigation ul .menu-item .sub-menu .menu-link {
            padding-left: 30px;
        }
        
        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-popup-drawer .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
            padding-left: 40px;
        }
        
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            right: calc( 20px - 0.907em);
        }
        
        .ast-mobile-popup-drawer.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            left: calc( 20px - 0.907em);
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.slide-search,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.slide-search {
            width: 100%;
            position: relative;
            display: block;
            right: auto;
            transform: none;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.slide-search .search-form,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-form,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.slide-search .search-form,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-form {
            right: 0;
            visibility: visible;
            opacity: 1;
            position: relative;
            top: auto;
            transform: none;
            padding: 0;
            display: block;
            overflow: hidden;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-field,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-field {
            width: 100%;
            padding-right: 5.5em;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-submit,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-submit {
            display: block;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding: 0 1em;
            border-radius: 0;
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            opacity: 1;
            visibility: visible;
            transform: translateX(0%);
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            background-color: #ffffff;
            ;
        }
        
        .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-desktop-header-content {
            background-color: #ffffff;
            ;
        }
        
        .ast-mobile-popup-content>*,
        .ast-mobile-header-content>*,
        .ast-desktop-popup-content>*,
        .ast-desktop-header-content>* {
            padding-top: 0;
            padding-bottom: 0;
        }
        
        .content-align-flex-start .ast-builder-layout-element {
            justify-content: flex-start;
        }
        
        .content-align-flex-start .main-header-menu {
            text-align: left;
        }
        
        .ast-mobile-popup-drawer.active .menu-toggle-close {
            color: #3a3a3a;
        }
        
        .ast-mobile-header-wrap .ast-primary-header-bar,
        .ast-primary-header-bar .site-primary-header-wrap {
            min-height: 30px;
        }
        
        .ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
            line-height: 30px;
        }
        
        @media (max-width:921px) {
            #masthead .ast-mobile-header-wrap .ast-primary-header-bar,
            #masthead .ast-mobile-header-wrap .ast-below-header-bar {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        
        .ast-header-break-point .ast-primary-header-bar {
            border-bottom-width: 0;
            border-bottom-color: #eaeaea;
            border-bottom-style: solid;
        }
        
        @media (min-width:922px) {
            .ast-primary-header-bar {
                border-bottom-width: 0;
                border-bottom-color: #eaeaea;
                border-bottom-style: solid;
            }
        }
        
        .ast-primary-header-bar {
            background-color: #0F3186;
            ;
            background-image: none;
            ;
        }
        
        .ast-desktop .ast-primary-header-bar.main-header-bar,
        .ast-header-break-point #masthead .ast-primary-header-bar.main-header-bar {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }
        
        @media (max-width:921px) {
            .ast-desktop .ast-primary-header-bar.main-header-bar,
            .ast-header-break-point #masthead .ast-primary-header-bar.main-header-bar {
                padding-top: 1.5em;
                padding-bottom: 1.5em;
                padding-left: 1em;
                padding-right: 1em;
            }
        }
        
        @media (max-width:544px) {
            .ast-desktop .ast-primary-header-bar.main-header-bar,
            .ast-header-break-point #masthead .ast-primary-header-bar.main-header-bar {
                padding-top: 1em;
                padding-bottom: 1em;
            }
        }
        
        .ast-primary-header-bar {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-fill {
            color: #ffffff;
            border: none;
            background: #0F3186;
            border-radius: 7px;
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
            width: 20px;
            height: 20px;
            fill: #ffffff;
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
            color: #ffffff;
        }
        
         :root {
            --e-global-color-astglobalcolor0: #0170B9;
            --e-global-color-astglobalcolor1: #3a3a3a;
            --e-global-color-astglobalcolor2: #3a3a3a;
            --e-global-color-astglobalcolor3: #4B4F58;
            --e-global-color-astglobalcolor4: #F5F5F5;
            --e-global-color-astglobalcolor5: #FFFFFF;
            --e-global-color-astglobalcolor6: #F2F5F7;
            --e-global-color-astglobalcolor7: #424242;
            --e-global-color-astglobalcolor8: #000000;
        }
        
        .ast-desktop .astra-menu-animation-slide-up>.menu-item>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item>.sub-menu .sub-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(.5em);
            transition: visibility .2s ease, transform .2s ease
        }
        
        .ast-desktop .astra-menu-animation-slide-up>.menu-item .menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item .menu-item:hover>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item:hover>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-up>.menu-item:hover>.sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            transition: opacity .2s ease, visibility .2s ease, transform .2s ease
        }
        
        .ast-desktop .astra-menu-animation-slide-up>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-up>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
            -js-display: flex;
            display: flex
        }
        
        .ast-desktop .astra-menu-animation-slide-down>.menu-item>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item>.sub-menu .sub-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-.5em);
            transition: visibility .2s ease, transform .2s ease
        }
        
        .ast-desktop .astra-menu-animation-slide-down>.menu-item .menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item .menu-item:hover>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item:hover>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-down>.menu-item:hover>.sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            transition: opacity .2s ease, visibility .2s ease, transform .2s ease
        }
        
        .ast-desktop .astra-menu-animation-slide-down>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-slide-down>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
            -js-display: flex;
            display: flex
        }
        
        .ast-desktop .astra-menu-animation-fade>.menu-item>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-fade>.menu-item>.sub-menu,
        .ast-desktop .astra-menu-animation-fade>.menu-item>.sub-menu .sub-menu {
            opacity: 0;
            visibility: hidden;
            transition: opacity ease-in-out .3s
        }
        
        .ast-desktop .astra-menu-animation-fade>.menu-item .menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-fade>.menu-item .menu-item:hover>.sub-menu,
        .ast-desktop .astra-menu-animation-fade>.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-fade>.menu-item.focus>.sub-menu,
        .ast-desktop .astra-menu-animation-fade>.menu-item:hover>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-fade>.menu-item:hover>.sub-menu {
            opacity: 1;
            visibility: visible;
            transition: opacity ease-in-out .3s
        }
        
        .ast-desktop .astra-menu-animation-fade>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
        .ast-desktop .astra-menu-animation-fade>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
            -js-display: flex;
            display: flex
        }
    </style>
    <link data-minify="1" rel="preload" href="static/css/astra-local-fonts.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--grayscale: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--purple-yellow: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--blue-red: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--midnight: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--magenta-yellow: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--purple-green: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--duotone--blue-orange: url('https://www.adhmt.com/products/press-brake/robotic-press-brake/');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }
        
        body {
            margin: 0;
        }
        
        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }
        
        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }
        
        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }
        
        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-color {
            color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-color {
            color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-color {
            color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-color {
            color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-color {
            color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-color {
            color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-color {
            color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-color {
            color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-color {
            color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-background-color {
            background-color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-background-color {
            background-color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-background-color {
            background-color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-background-color {
            background-color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-background-color {
            background-color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-background-color {
            background-color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-background-color {
            background-color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-background-color {
            background-color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-background-color {
            background-color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-border-color {
            border-color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-border-color {
            border-color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-border-color {
            border-color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-border-color {
            border-color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-border-color {
            border-color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-border-color {
            border-color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-border-color {
            border-color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-border-color {
            border-color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-border-color {
            border-color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }
        
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }
        
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }
        
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }
        
        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }
        
        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        
        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        
        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        
        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        
        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        
        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }
        
        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }
        
        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        
        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }
        
        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link data-minify="1" rel="preload" href="static/css/trp-language-switcher.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link data-minify="1" rel="preload" href="static/css/astra-addon-61f1085d129cf8-25040518.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <style id="astra-addon-css-inline-css">
        #content:before {
            content: "921";
            position: absolute;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
        }
        
        .single .ast-author-details .author-title {
            color: #0F3186;
        }
        
        @media (max-width:921px) {
            .single.ast-separate-container .ast-author-meta {
                padding: 1.5em 2.14em;
            }
            .single .ast-author-meta .post-author-avatar {
                margin-bottom: 1em;
            }
            .ast-separate-container .ast-grid-2 .ast-article-post,
            .ast-separate-container .ast-grid-3 .ast-article-post,
            .ast-separate-container .ast-grid-4 .ast-article-post {
                width: 100%;
            }
            .blog-layout-1 .post-content,
            .blog-layout-1 .ast-blog-featured-section {
                float: none;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on {
                margin-top: 0;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
                margin-top: 1em;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
                margin-top: -1.5em;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
                margin-left: -2.14em;
                margin-right: -2.14em;
            }
            .ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child {
                margin-top: -1.5em;
            }
            .ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content {
                margin-left: -2.14em;
                margin-right: -2.14em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
                margin-left: -1.5em;
                margin-right: -1.5em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
                margin-left: -0.5em;
                margin-right: -0.5em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on {
                margin-top: 0;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
                margin-top: 1em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
                margin-top: -1.5em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
                margin-left: -1.5em;
                margin-right: -1.5em;
            }
            .blog-layout-2 {
                display: flex;
                flex-direction: column-reverse;
            }
            .ast-separate-container .blog-layout-3,
            .ast-separate-container .blog-layout-1 {
                display: block;
            }
            .ast-plain-container .ast-grid-2 .ast-article-post,
            .ast-plain-container .ast-grid-3 .ast-article-post,
            .ast-plain-container .ast-grid-4 .ast-article-post,
            .ast-page-builder-template .ast-grid-2 .ast-article-post,
            .ast-page-builder-template .ast-grid-3 .ast-article-post,
            .ast-page-builder-template .ast-grid-4 .ast-article-post {
                width: 100%;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
                margin-top: 0;
                margin-left: -2.14em;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
                margin-top: 0;
                margin-left: -1.14em;
            }
        }
        
        @media (min-width:922px) {
            .single .ast-author-meta .ast-author-details {
                display: flex;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-archive-description,
            .ast-separate-container.ast-blog-grid-3 .ast-archive-description,
            .ast-separate-container.ast-blog-grid-4 .ast-archive-description {
                margin-bottom: 1.33333em;
            }
            .blog-layout-2.ast-no-thumb .post-content,
            .blog-layout-3.ast-no-thumb .post-content {
                width: calc(100% - 5.714285714em);
            }
            .blog-layout-2.ast-no-thumb.ast-no-date-box .post-content,
            .blog-layout-3.ast-no-thumb.ast-no-date-box .post-content {
                width: 100%;
            }
            .ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts,
            .ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts,
            .ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts {
                border-bottom: 0;
            }
            .ast-separate-container .ast-grid-2>.site-main>.ast-row,
            .ast-separate-container .ast-grid-3>.site-main>.ast-row,
            .ast-separate-container .ast-grid-4>.site-main>.ast-row {
                margin-left: 0;
                margin-right: 0;
                display: flex;
                flex-flow: row wrap;
                align-items: stretch;
            }
            .ast-separate-container .ast-grid-2>.site-main>.ast-row:before,
            .ast-separate-container .ast-grid-2>.site-main>.ast-row:after,
            .ast-separate-container .ast-grid-3>.site-main>.ast-row:before,
            .ast-separate-container .ast-grid-3>.site-main>.ast-row:after,
            .ast-separate-container .ast-grid-4>.site-main>.ast-row:before,
            .ast-separate-container .ast-grid-4>.site-main>.ast-row:after {
                flex-basis: 0;
                width: 0;
            }
            .ast-separate-container .ast-grid-2 .ast-article-post,
            .ast-separate-container .ast-grid-3 .ast-article-post,
            .ast-separate-container .ast-grid-4 .ast-article-post {
                display: flex;
                padding: 0;
            }
            .ast-plain-container .ast-grid-2>.site-main>.ast-row,
            .ast-plain-container .ast-grid-3>.site-main>.ast-row,
            .ast-plain-container .ast-grid-4>.site-main>.ast-row,
            .ast-page-builder-template .ast-grid-2>.site-main>.ast-row,
            .ast-page-builder-template .ast-grid-3>.site-main>.ast-row,
            .ast-page-builder-template .ast-grid-4>.site-main>.ast-row {
                margin-left: -1em;
                margin-right: -1em;
                display: flex;
                flex-flow: row wrap;
                align-items: stretch;
            }
            .ast-plain-container .ast-grid-2>.site-main>.ast-row:before,
            .ast-plain-container .ast-grid-2>.site-main>.ast-row:after,
            .ast-plain-container .ast-grid-3>.site-main>.ast-row:before,
            .ast-plain-container .ast-grid-3>.site-main>.ast-row:after,
            .ast-plain-container .ast-grid-4>.site-main>.ast-row:before,
            .ast-plain-container .ast-grid-4>.site-main>.ast-row:after,
            .ast-page-builder-template .ast-grid-2>.site-main>.ast-row:before,
            .ast-page-builder-template .ast-grid-2>.site-main>.ast-row:after,
            .ast-page-builder-template .ast-grid-3>.site-main>.ast-row:before,
            .ast-page-builder-template .ast-grid-3>.site-main>.ast-row:after,
            .ast-page-builder-template .ast-grid-4>.site-main>.ast-row:before,
            .ast-page-builder-template .ast-grid-4>.site-main>.ast-row:after {
                flex-basis: 0;
                width: 0;
            }
            .ast-plain-container .ast-grid-2 .ast-article-post,
            .ast-plain-container .ast-grid-3 .ast-article-post,
            .ast-plain-container .ast-grid-4 .ast-article-post,
            .ast-page-builder-template .ast-grid-2 .ast-article-post,
            .ast-page-builder-template .ast-grid-3 .ast-article-post,
            .ast-page-builder-template .ast-grid-4 .ast-article-post {
                display: flex;
            }
            .ast-plain-container .ast-grid-2 .ast-article-post:last-child,
            .ast-plain-container .ast-grid-3 .ast-article-post:last-child,
            .ast-plain-container .ast-grid-4 .ast-article-post:last-child,
            .ast-page-builder-template .ast-grid-2 .ast-article-post:last-child,
            .ast-page-builder-template .ast-grid-3 .ast-article-post:last-child,
            .ast-page-builder-template .ast-grid-4 .ast-article-post:last-child {
                margin-bottom: 2.5em;
            }
        }
        
        @media (min-width:922px) {
            .single .post-author-avatar,
            .single .post-author-bio {
                float: left;
                clear: right;
            }
            .single .ast-author-meta .post-author-avatar {
                margin-right: 1.33333em;
            }
            .single .ast-author-meta .about-author-title-wrapper,
            .single .ast-author-meta .post-author-bio {
                text-align: left;
            }
            .blog-layout-2 .post-content {
                padding-right: 2em;
            }
            .blog-layout-2.ast-no-date-box.ast-no-thumb .post-content {
                padding-right: 0;
            }
            .blog-layout-3 .post-content {
                padding-left: 2em;
            }
            .blog-layout-3.ast-no-date-box.ast-no-thumb .post-content {
                padding-left: 0;
            }
            .ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts:nth-child(2n+0),
            .ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts:nth-child(2n+1),
            .ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts:nth-child(2n+0),
            .ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts:nth-child(2n+1),
            .ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts:nth-child(2n+0),
            .ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts:nth-child(2n+1) {
                padding: 0 1em 0;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
                margin-top: 0.5em;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
            .ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
                margin-left: -1em;
                margin-right: -1em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
                margin-left: -0.5em;
                margin-right: -0.5em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
                margin-top: 0.5em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
                margin-top: -1.33333em;
            }
            .ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
            .ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
                margin-left: -1em;
                margin-right: -1em;
            }
            .ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-1,
            .ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-2,
            .ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-3 {
                padding: 1.33333em 1em;
            }
            .ast-separate-container .ast-grid-3 .ast-article-post .blog-layout-1,
            .ast-separate-container .ast-grid-4 .ast-article-post .blog-layout-1 {
                padding: 1.33333em 1em;
            }
            .single.ast-separate-container .ast-author-meta {
                padding: 1.5em 1em;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
                margin-left: -1em;
            }
            .ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
                margin-left: -0.5em;
            }
        }
        
        @media (min-width:922px) {
            .ast-hide-display-device-desktop {
                display: none;
            }
        }
        
        @media (min-width:545px) and (max-width:921px) {
            .ast-hide-display-device-tablet {
                display: none;
            }
        }
        
        @media (max-width:544px) {
            .ast-hide-display-device-mobile {
                display: none;
            }
        }
        
        .ast-article-post .ast-date-meta .posted-on,
        .ast-article-post .ast-date-meta .posted-on * {
            background: #0F3186;
            color: #ffffff;
        }
        
        .ast-article-post .ast-date-meta .posted-on .date-month,
        .ast-article-post .ast-date-meta .posted-on .date-year {
            color: #ffffff;
        }
        
        .ast-load-more:hover {
            color: #ffffff;
            border-color: #0F3186;
            background-color: #0F3186;
        }
        
        .ast-loader>div {
            background-color: #0F3186;
        }
        
        .ast-single-post .entry-title,
        .page-title {
            color: #0F3186;
        }
        
        .ast-small-footer {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .ast-small-footer a {
            color: #ffffff;
        }
        
        .ast-small-footer a:hover {
            color: #ffffff;
        }
        
        .ast-header-search .ast-search-menu-icon .search-field {
            border-radius: 2px;
        }
        
        .ast-header-search .ast-search-menu-icon .search-submit {
            border-radius: 2px;
        }
        
        .ast-header-search .ast-search-menu-icon .search-form {
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-right-width: 1px;
            border-color: #ddd;
            border-radius: 2px;
        }
        
        @media (min-width:922px) {
            .ast-container {
                max-width: 1400px;
            }
        }
        
        @media (min-width:993px) {
            .ast-container {
                max-width: 1400px;
            }
        }
        
        @media (min-width:1201px) {
            .ast-container {
                max-width: 1400px;
            }
        }
        
        .ast-separate-container.ast-single-post .ast-article-post,
        .ast-separate-container.ast-single-post .ast-article-single,
        .ast-separate-container.ast-single-post .ast-comment-list li.depth-1,
        .ast-separate-container.ast-single-post .comment-respond,
        .ast-separate-container.ast-single-post .ast-related-posts-wrap,
        .ast-separate-container.ast-single-post .ast-woocommerce-container,
        .single.ast-separate-container.ast-single-post .ast-author-meta,
        .ast-separate-container.ast-single-post .ast-single-related-posts-container {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        
        .ast-separate-container.ast-single-post .ast-article-post,
        .ast-separate-container.ast-single-post .ast-article-single,
        .ast-separate-container.ast-single-post .comments-count-wrapper,
        .ast-separate-container.ast-single-post .ast-comment-list li.depth-1,
        .ast-separate-container.ast-single-post .comment-respond,
        .ast-separate-container.ast-single-post .related-posts-title-wrapper,
        .ast-separate-container.ast-single-post .related-posts-title-wrapper,
        .single.ast-separate-container.ast-single-post .ast-author-meta,
        .ast-separate-container.ast-single-post .ast-related-posts-wrap,
        .ast-separate-container.ast-single-post .ast-woocommerce-container,
        .ast-separate-container.ast-single-post .ast-single-related-posts-container {
            padding-right: 30px;
            padding-left: 30px;
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .ast-comment-list li.depth-1,
            .ast-separate-container .comment-respond,
            .single.ast-separate-container .ast-author-details,
            .ast-separate-container .ast-related-posts-wrap,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .ast-single-related-posts-container {
                padding-top: 1.5em;
                padding-bottom: 1.5em;
            }
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-count-wrapper,
            .ast-separate-container .ast-comment-list li.depth-1,
            .ast-separate-container .comment-respond,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container .related-posts-title-wrapper,
            .single.ast-separate-container .ast-author-details,
            .single.ast-separate-container .about-author-title-wrapper,
            .ast-separate-container .ast-related-posts-wrap,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .ast-single-related-posts-container {
                padding-right: 2.14em;
                padding-left: 2.14em;
            }
            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary,
            .ast-separate-container #primary,
            .ast-plain-container #primary {
                margin-top: 1.5em;
                margin-bottom: 1.5em;
            }
            .ast-left-sidebar #primary,
            .ast-right-sidebar #primary,
            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary,
            .ast-separate-container #primary {
                padding-left: 0em;
                padding-right: 0em;
            }
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-right: -2.14em;
                margin-left: -2.14em;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .ast-comment-list li.depth-1,
            .ast-separate-container .comment-respond,
            .single.ast-separate-container .ast-author-details,
            .ast-separate-container .ast-related-posts-wrap,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .ast-single-related-posts-container {
                padding-top: 1.5em;
                padding-bottom: 1.5em;
            }
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-count-wrapper,
            .ast-separate-container .ast-comment-list li.depth-1,
            .ast-separate-container .comment-respond,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container .related-posts-title-wrapper,
            .single.ast-separate-container .ast-author-details,
            .single.ast-separate-container .about-author-title-wrapper,
            .ast-separate-container .ast-related-posts-wrap,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .ast-single-related-posts-container {
                padding-right: 1em;
                padding-left: 1em;
            }
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-right: -1em;
                margin-left: -1em;
            }
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
                top: 0px;
                right: calc( 20px - 0.907em);
            }
            .ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
                right: calc( 20px - 0.907em);
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .header-main-layout-2 .site-branding,
            .ast-header-break-point .ast-mobile-header-stack .ast-mobile-menu-buttons {
                padding-bottom: 0;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container #secondary .widget {
                margin-bottom: 1.5em;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container #primary {
                padding-top: 0;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container #primary {
                padding-bottom: 0;
            }
        }
        
        .site-header .ast-sticky-shrunk .ast-site-identity,
        .ast-sticky-shrunk .main-header-menu>.menu-item>.menu-link,
        .ast-sticky-shrunk li.ast-masthead-custom-menu-items {
            padding-top: 0;
            padding-bottom: 0;
        }
        
        .ast-header-break-point .ast-sticky-shrunk.main-navigation .sub-menu .menu-item .menu-link {
            padding-top: 0;
            padding-bottom: 0;
        }
        
        .ast-sticky-shrunk .main-header-menu .sub-menu .menu-link {
            padding-top: 0.9em;
            padding-bottom: 0.9em;
        }
        
        .site-header .ast-sticky-shrunk .ast-site-identity,
        .ast-sticky-shrunk li.ast-masthead-custom-menu-items {
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }
        
        .ast-sticky-header-shrink .ast-primary-header-bar.ast-header-sticked,
        .ast-sticky-header-shrink .ast-primary-header-bar.ast-header-sticked .site-primary-header-wrap,
        .ast-header-sticked .ast-primary-header-bar .site-primary-header-wrap,
        .ast-sticky-header-shrink .ast-mobile-header-wrap .ast-primary-header-bar.ast-header-sticked,
        .ast-sticky-header-shrink .ast-mobile-header-wrap .ast-stick-primary-below-wrapper.ast-header-sticked .ast-below-header,
        .ast-sticky-header-shrink .ast-stick-primary-below-wrapper.ast-header-sticked .ast-primary-header-bar .site-primary-header-wrap {
            min-height: 20px;
        }
        
        .ast-desktop.ast-sticky-header-shrink .ast-primary-header-bar.ast-header-sticked .main-header-menu>.menu-item {
            line-height: 20px;
        }
        
        .ast-sticky-header-shrink .ast-above-header-bar.ast-header-sticked .site-above-header-wrap,
        .ast-sticky-header-shrink .ast-above-header-bar.ast-header-sticked .site-above-header-wrap,
        .ast-header-sticked .ast-above-header-bar .site-above-header-wrap,
        .ast-header-sticked .ast-above-header-bar,
        .ast-sticky-header-shrink .ast-mobile-header-wrap .ast-above-header-bar.ast-header-sticked {
            min-height: 40px;
        }
        
        .ast-desktop.ast-sticky-header-shrink .ast-above-header-bar.ast-header-sticked .main-header-menu>.menu-item {
            line-height: 40px;
        }
        
        .ast-sticky-header-shrink .ast-below-header-bar.ast-header-sticked,
        .ast-sticky-header-shrink .ast-below-header-bar.ast-header-sticked .site-below-header-wrap,
        .ast-sticky-header-shrink .ast-below-header-bar.ast-header-sticked.site-below-header-wrap,
        .ast-header-sticked .ast-below-header-bar .site-below-header-wrap,
        .ast-sticky-header-shrink .ast-mobile-header-wrap .ast-below-header-bar.ast-header-sticked .site-below-header-wrap {
            min-height: 50px;
        }
        
        .ast-desktop.ast-sticky-header-shrink .ast-below-header-bar.ast-header-sticked .main-header-menu>.menu-item {
            line-height: 50px;
        }
        
        .ast-builder-menu-1 .main-header-menu.submenu-with-border .astra-megamenu,
        .ast-builder-menu-1 .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper {
            border-top-width: 2px;
            border-bottom-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-style: solid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 .main-header-menu .sub-menu>.menu-item>.menu-link {
                padding-top: 0px;
                padding-bottom: 0px;
                padding-left: 30px;
                padding-right: 20px;
            }
            .ast-header-break-point .ast-builder-menu-1 .sub-menu .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0px;
                right: calc( 20px - 0.907em);
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 .sub-menu .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0px;
            }
        }
        
        .ast-above-header,
        .main-header-bar,
        .ast-below-header {
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        
        .ast-above-header,
        .main-header-bar,
        .ast-below-header {
            max-width: 100%;
        }
        
        .ast-header-sticked .ast-header-button-1 .ast-builder-button-wrap .ast-custom-button {
            border-top-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            border-right-width: 0px;
        }
        
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
            fill: #ffffff;
        }
        
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
            color: #ffffff;
        }
        
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-fill {
            background: #0F3186;
        }
        
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-fill,
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
            color: #ffffff;
            border: none;
        }
        
        #ast-scroll-top {
            background-color: #0F3186;
            font-size: 15px;
            font-size: 0.83333333333333rem;
        }
        
        .ast-scroll-top-icon::before {
            content: "\e900";
            font-family: Astra;
            text-decoration: inherit;
        }
        
        .ast-scroll-top-icon {
            transform: rotate(180deg);
        }
        
        .site-title,
        .site-title a {
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        .site-header .site-description {
            text-transform: none;
        }
        
        .secondary .widget-title {
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        .secondary .widget>*:not(.widget-title) {
            font-family: 'Roboto', sans-serif;
        }
        
        .ast-single-post .entry-title,
        .page-title {
            font-weight: 700;
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        .ast-archive-description .ast-archive-title {
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        .blog .entry-title,
        .blog .entry-title a,
        .archive .entry-title,
        .archive .entry-title a,
        .search .entry-title,
        .search .entry-title a {
            font-family: 'Roboto', sans-serif;
            text-transform: none;
        }
        
        button,
        .ast-button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            text-transform: capitalize;
        }
        
        .elementor-widget-heading h4.elementor-heading-title {
            line-height: 1.618;
        }
        
        .ast-hfb-header.ast-desktop .ast-builder-menu-1 .main-header-menu .menu-item.menu-item-heading>.menu-link {
            font-family: inherit;
            font-weight: 700;
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
            font-weight: 900;
            line-height: 1;
        }
        
        .ast-desktop .ast-mm-widget-content .ast-mm-widget-item {
            padding: 0;
        }
        
        .ast-desktop .ast-mega-menu-enabled.main-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after,
        .ast-desktop .ast-mega-menu-enabled.ast-below-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after,
        .ast-desktop .ast-mega-menu-enabled.ast-above-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after {
            content: "\e900";
            display: inline-block;
            font-family: Astra;
            font-size: .6rem;
            font-weight: bold;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-left: 10px;
            line-height: normal;
        }
        
        .ast-search-box.header-cover #close::before,
        .ast-search-box.full-screen #close::before {
            font-family: Astra;
            content: "\e5cd";
            display: inline-block;
            transition: transform .3s ease-in-out;
        }
        
        .ast-advanced-headers-different-logo .advanced-header-logo,
        .ast-header-break-point .ast-has-mobile-header-logo .advanced-header-logo {
            display: inline-block;
        }
        
        .ast-header-break-point.ast-advanced-headers-different-logo .ast-has-mobile-header-logo .ast-mobile-header-logo {
            display: none;
        }
        
        .ast-advanced-headers-layout {
            width: 100%;
        }
        
        .ast-header-break-point .ast-advanced-headers-parallax {
            background-attachment: fixed;
        }
        
        #masthead .site-logo-img .astra-logo-svg,
        .ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
            max-width: 110px;
        }
        
        @media (max-width:921px) {
            #masthead .site-logo-img .astra-logo-svg,
            .ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
                max-width: 120px;
            }
        }
        
        @media (max-width:543px) {
            #masthead .site-logo-img .astra-logo-svg,
            .ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
                max-width: 100px;
            }
        }
        
        [CLASS*="-sticky-header-active"] #ast-fixed-header.ast-header-sticked .site-title a,
        [CLASS*="-sticky-header-active"] .ast-header-sticked .site-title a:focus,
        [CLASS*="-sticky-header-active"] .ast-header-sticked .site-title a:visited,
        [CLASS*="-sticky-header-active"] .ast-header-sticked .site-title a {
            color: #ffffff;
        }
        
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-1 #ast-hf-menu-1.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading>.menu-link {
            background: transparent;
        }
        
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-1 #ast-hf-menu-1.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading:hover>.menu-link,
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-1 #ast-hf-menu-1.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading>.menu-link:hover {
            background: transparent;
        }
        
        [CLASS*="-sticky-header-active"] .ast-builder-menu-1 #ast-hf-menu-1>.menu-item>.menu-link {
            color: #ffffff;
        }
        
        [CLASS*="-sticky-header-active"] .ast-builder-menu-1 #ast-hf-menu-1 .sub-menu .menu-link {
            color: #000000;
        }
        
        [CLASS*="-sticky-header-active"] .ast-builder-menu-1 #ast-hf-menu-1 .sub-menu .menu-item>.menu-link:hover,
        [CLASS*="-sticky-header-active"] .ast-builder-menu-1 #ast-hf-menu-1 .sub-menu .menu-item:hover>.menu-link {
            background-color: #f2f2f4;
        }
        
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-2 #ast-hf-menu-2.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading>.menu-link {
            background: transparent;
        }
        
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-2 #ast-hf-menu-2.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading:hover>.menu-link,
        [CLASS*="-sticky-header-active"].ast-desktop .ast-builder-menu-2 #ast-hf-menu-2.ast-mega-menu-enabled .sub-menu .menu-item.menu-item-heading>.menu-link:hover {
            background: transparent;
        }
        
        .ast-transparent-header.ast-primary-sticky-header-active .main-header-bar-wrap .main-header-bar,
        .ast-primary-sticky-header-active .main-header-bar-wrap .main-header-bar,
        .ast-primary-sticky-header-active.ast-header-break-point .main-header-bar-wrap .main-header-bar,
        .ast-transparent-header.ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked,
        .ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked,
        .ast-primary-sticky-header-ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked {
            background: #0F3186;
        }
        
        .ast-primary-sticky-header-active .main-header-menu,
        .ast-primary-sticky-header-active .main-header-menu .menu-link,
        .ast-primary-sticky-header-active .ast-builder-menu-1 .main-header-menu .menu-item>.menu-link,
        .ast-primary-sticky-header-active .ast-builder-menu-2 .main-header-menu .menu-item>.menu-link,
        .ast-primary-sticky-header-active .ast-header-custom-item,
        .ast-header-custom-item a,
        .ast-primary-sticky-header-active li.ast-masthead-custom-menu-items,
        .ast-primary-sticky-header-active li.ast-masthead-custom-menu-items a,
        .ast-primary-sticky-header-active.ast-advanced-headers .main-header-menu>.menu-item>.menu-link {
            color: #ffffff;
        }
        
        .ast-primary-sticky-header-active .ast-masthead-custom-menu-items .ast-inline-search form {
            border-color: #ffffff;
        }
        
        .ast-builder-menu-1 .main-header-menu .sub-menu {
            background: #e3ecf2;
        }
        
        .ast-builder-menu-1 .main-header-menu .sub-menu .menu-link {
            color: #000000;
        }
        
        .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item>.ast-menu-toggle {
            color: #000000;
        }
        
        .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item .menu-link:hover {
            color: #000000;
            background: #f2f2f4;
        }
        
        .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item:hover>.ast-menu-toggle {
            color: #000000;
        }
        
        .ast-footer-copyright a {
            color: #ffffff;
        }
        
        .ast-footer-copyright a:hover {
            color: #ffffff;
        }
    </style>
    <link data-minify="1" rel="preload" href="static/css/elementor-icons.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="static/css/frontend.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <style id="elementor-frontend-inline-css">
        .elementor-kit-5426 {
            --e-global-color-primary: #0F3186;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #FB9A27;
            --e-global-color-ca3beb7: #E3ECF2;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }
        
        .elementor-kit-5426 button:hover,
        .elementor-kit-5426 button:focus,
        .elementor-kit-5426 input[type="button"]:hover,
        .elementor-kit-5426 input[type="button"]:focus,
        .elementor-kit-5426 input[type="submit"]:hover,
        .elementor-kit-5426 input[type="submit"]:focus,
        .elementor-kit-5426 .elementor-button:hover,
        .elementor-kit-5426 .elementor-button:focus {
            color: #FFFFFF;
        }
        
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }
        
        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }
        
        /* {} */
        
        h1.entry-title {
            display: var(--page-title-display);
        }
        
        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }
        }
        
        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }
        }
        
        .elementor-3467 .elementor-element.elementor-element-5f1adbd3:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-5f1adbd3>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var( --e-global-color-primary);
        }
        
        .elementor-3467 .elementor-element.elementor-element-5f1adbd3 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 80px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5f1adbd3>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-6395c5e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6395c5e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6395c5e:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #0F3186;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-element-populated,
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-element-populated>.elementor-background-overlay,
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-background-slideshow {
            border-radius: 0px 0px 250px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-element-populated {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6395c5e>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-671e90da {
            text-align: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-671e90da img {
            border-radius: 0px 150px 150px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-671e90da>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-2ef2d8e4.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2ef2d8e4.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2ef2d8e4>.elementor-element-populated {
            padding: 10% 10% 10% 10%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1a7f4b02 {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1a7f4b02 .elementor-heading-title {
            color: #FFFFFF;
            line-height: 1.2em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-9683311 {
            color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(10px/2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(10px/2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(10px/2);
            margin-left: calc(10px/2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-10px/2);
            margin-left: calc(-10px/2);
        }
        
        body.rtl .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-10px/2);
        }
        
        body:not(.rtl) .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-10px/2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-icon i {
            color: #FB9A27;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-icon svg {
            fill: #FB9A27;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 {
            --e-icon-list-icon-size: 14px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-text {
            color: #FFFFFF;
            padding-left: 8px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-7a90bcaf .elementor-spacer-inner {
            height: 20px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533 .elementor-repeater-item-f96ab12 .elementor-button {
            color: #000000;
            background-color: #FB9A27;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #FB9A27;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533 .elementor-repeater-item-1a1fde5 .elementor-button {
            color: #FFFFFF;
            background-color: #02010100;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533 .elementor-repeater-item-1a1fde5 .elementor-button:hover {
            color: #FFFFFF;
            background-color: #FFFFFF00;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533 .uael-dual-button-wrap .uael-button-wrapper {
            margin-right: calc( 20px / 2);
            margin-left: calc( 20px / 2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-none .uael-dual-button-wrap {
            margin-right: calc( -20px / 2);
            margin-left: calc( -20px / 2);
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper {
            margin-bottom: calc( 20px / 2);
            margin-top: calc( 20px / 2);
            margin-right: 0;
            margin-left: 0;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper:last-child {
            margin-bottom: 0;
        }
        
        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper:first-child {
            margin-top: 0;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4f16b4d7 {
            padding: 100px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-separator {
            border-top-style: solid;
            display: inline-block;
            border-top-color: rgba(21, 50, 67, 0.2);
            border-top-width: 4px;
            width: 50px;
            margin: 20px 0px 20px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox-title {
            line-height: 2em;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox-title-prefix {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2693c1de .elementor-button .elementor-align-icon-right {
            margin-left: 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2693c1de .elementor-button .elementor-align-icon-left {
            margin-right: 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2693c1de .elementor-button {
            background-color: #0F318600;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5ae8d687:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-5ae8d687>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("static/image/blob-grad-1-1.png");
            background-repeat: no-repeat;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5ae8d687 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 100px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5ae8d687>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3830f795>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3830f795 {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #F5F6FD;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 32px;
            margin-bottom: 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3830f795>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-500e438a>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 10% 0% 20%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-7e28b395 .elementor-heading-title {
            line-height: 2em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-7e28b395>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1fce0156 {
            --divider-border-style: solid;
            --divider-border-width: 3px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1fce0156 .elementor-divider-separator {
            width: 100%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1fce0156 .elementor-divider {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated>.elementor-background-overlay {
            background-image: url("static/image/placeholder-25.png");
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness( 100%) contrast( 100%) saturate( 100%) blur( 40px) hue-rotate( 0deg);
        }
        
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated,
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated>.elementor-background-overlay,
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-0ee1d19 {
            left: 70.4%;
            transform: translate(0, -63.3%);
            top: 63.3%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-0ee1d19 {
            right: 70.4%;
            transform: translate(0, -70.4%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-e024718 {
            left: 27.8%;
            transform: translate(0, -39.6%);
            top: 39.6%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-e024718 {
            right: 27.8%;
            transform: translate(0, -27.8%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-0cb9342 {
            left: 47.7%;
            transform: translate(0, -59.9%);
            top: 59.9%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-1e92adac .elementor-repeater-item-0cb9342 {
            right: 47.7%;
            transform: translate(0, -47.7%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot img {
            opacity: 1;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot-content.uael-hotspot-anim:before {
            min-width: 1em;
            min-height: 1em;
            line-height: 1em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot-content.uael-hotspot-anim:before {
            background-color: #0F31869E;
            border-radius: 100px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac .uael-hotspot-content {
            border-style: none;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip .tooltipster-content {
            text-align: center;
            padding: 20px 20px 20px 20px;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-tooltipster-active.uael-hotspot-tooltip .tooltipster-box {
            background-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1e92adac>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }
        
        .elementor-3467 .elementor-element.elementor-element-550a5915>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-550a5915 {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #F5F6FD;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-550a5915>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated>.elementor-background-overlay {
            background-image: url("static/image/placeholder-25.png");
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness( 100%) contrast( 100%) saturate( 100%) blur( 40px) hue-rotate( 0deg);
        }
        
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated,
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated>.elementor-background-overlay,
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .elementor-repeater-item-0ee1d19 {
            left: 19.7%;
            transform: translate(0, -100%);
            top: 100%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-c75a9ae .elementor-repeater-item-0ee1d19 {
            right: 19.7%;
            transform: translate(0, -19.7%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot img {
            opacity: 1;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot-content.uael-hotspot-anim:before {
            min-width: 1em;
            min-height: 1em;
            line-height: 1em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot-content.uael-hotspot-anim:before {
            background-color: #0F31869E;
            border-radius: 100px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae .uael-hotspot-content {
            border-style: none;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip .tooltipster-content {
            text-align: center;
            padding: 20px 20px 20px 20px;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-tooltipster-active.uael-hotspot-tooltip .tooltipster-box {
            background-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c75a9ae>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }
        
        .elementor-3467 .elementor-element.elementor-element-8087382>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 10% 0% 20%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-37d52c7a .elementor-heading-title {
            line-height: 2em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-37d52c7a>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5a67c77e {
            --divider-border-style: solid;
            --divider-border-width: 3px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5a67c77e .elementor-divider-separator {
            width: 100%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5a67c77e .elementor-divider {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-68bef096>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-68bef096 {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #F5F6FD;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-68bef096>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-42216817>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 10% 0% 20%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6862a272 .elementor-heading-title {
            line-height: 2em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6862a272>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3a8771ba {
            --divider-border-style: solid;
            --divider-border-width: 3px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3a8771ba .elementor-divider-separator {
            width: 100%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3a8771ba .elementor-divider {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated>.elementor-background-overlay {
            background-image: url("static/image/placeholder-25.png");
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness( 100%) contrast( 100%) saturate( 100%) blur( 40px) hue-rotate( 0deg);
        }
        
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated,
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated>.elementor-background-overlay,
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa .elementor-repeater-item-0ee1d19 {
            left: 82.6%;
            transform: translate(0, -43%);
            top: 43%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-14823dfa .elementor-repeater-item-0ee1d19 {
            right: 82.6%;
            transform: translate(0, -82.6%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot img {
            opacity: 1;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot-content.uael-hotspot-anim:before {
            min-width: 1em;
            min-height: 1em;
            line-height: 1em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot-content.uael-hotspot-anim:before {
            background-color: #0F31869E;
            border-radius: 100px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa .uael-hotspot-content {
            border-style: none;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip .tooltipster-content {
            text-align: center;
            padding: 20px 20px 20px 20px;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-tooltipster-active.uael-hotspot-tooltip .tooltipster-box {
            background-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-14823dfa>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }
        
        .elementor-3467 .elementor-element.elementor-element-45bf93e5>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-45bf93e5 {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #F5F6FD;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-45bf93e5>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated>.elementor-background-overlay {
            background-image: url("static/image/placeholder-25.png");
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness( 100%) contrast( 100%) saturate( 100%) blur( 40px) hue-rotate( 0deg);
        }
        
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated,
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated>.elementor-background-overlay,
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .elementor-repeater-item-0ee1d19 {
            left: 42.5%;
            transform: translate(0, -52.9%);
            top: 52.9%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-39d9dd0b .elementor-repeater-item-0ee1d19 {
            right: 42.5%;
            transform: translate(0, -42.5%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .elementor-repeater-item-e024718 {
            left: 56.3%;
            transform: translate(0, -67.5%);
            top: 67.5%;
        }
        
        .rtl .elementor-3467 .elementor-element.elementor-element-39d9dd0b .elementor-repeater-item-e024718 {
            right: 56.3%;
            transform: translate(0, -56.3%);
            left: unset;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot img {
            opacity: 1;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot-content.uael-hotspot-anim:before {
            min-width: 1em;
            min-height: 1em;
            line-height: 1em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot-content,
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot-content.uael-hotspot-anim:before {
            background-color: #0F31869E;
            border-radius: 100px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b .uael-hotspot-content {
            border-style: none;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip .tooltipster-content {
            text-align: center;
            padding: 20px 20px 20px 20px;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-tooltipster-active.uael-hotspot-tooltip .tooltipster-box {
            background-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #0F3186;
        }
        
        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-39d9dd0b>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }
        
        .elementor-3467 .elementor-element.elementor-element-1b144603>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 10% 0% 20%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-13885670 .elementor-heading-title {
            line-height: 2em;
        }
        
        .elementor-3467 .elementor-element.elementor-element-13885670>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-49bdb850 {
            --divider-border-style: solid;
            --divider-border-width: 3px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-49bdb850 .elementor-divider-separator {
            width: 100%;
        }
        
        .elementor-3467 .elementor-element.elementor-element-49bdb850 .elementor-divider {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-696e47b3:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-696e47b3>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #0F3186;
        }
        
        .elementor-3467 .elementor-element.elementor-element-696e47b3 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 0px 100px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-696e47b3>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5c71caff {
            text-align: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-5c71caff .elementor-heading-title {
            color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-72f29589 {
            text-align: center;
            color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6bd54ec6 .elementor-button {
            fill: #000000;
            color: #000000;
            background-color: #FB9A27;
            border-radius: 0px 0px 0px 0px;
            padding: 15px 30px 15px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6bd54ec6 .elementor-button:hover,
        .elementor-3467 .elementor-element.elementor-element-6bd54ec6 .elementor-button:focus {
            background-color: #FB9A27;
        }
        
        .elementor-3467 .elementor-element.elementor-element-467f7e8a:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-467f7e8a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F2F2F4;
        }
        
        .elementor-3467 .elementor-element.elementor-element-467f7e8a {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 0px 100px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-467f7e8a>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-separator-parent {
            text-align: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-separator {
            border-top-style: solid;
            display: inline-block;
            border-top-color: rgba(21, 50, 67, 0.2);
            border-top-width: 4px;
            width: 50px;
            margin: 20px 0px 20px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-title {
            line-height: 2em;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-title-prefix {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-58036de8 .elementor-spacer-inner {
            height: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3d8e7c7e:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-3d8e7c7e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3d8e7c7e {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3d8e7c7e>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-755fcbc5.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-755fcbc5.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-755fcbc5>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-2dce53d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2dce53d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2dce53d>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2ef66f40 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-2ef66f40 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2ef66f40 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2ef66f40 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-78892a:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-78892a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-78892a {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-78892a>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-52e82609.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-52e82609.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-52e82609>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-74fd56ef.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-74fd56ef.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-74fd56ef>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6630a2b5 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-6630a2b5 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6630a2b5 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-6630a2b5 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-9cdba65:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-9cdba65>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-9cdba65 {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-9cdba65>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-de2993d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-de2993d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-de2993d>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-11ac913.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-11ac913.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-11ac913>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-937172a .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-937172a .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-937172a .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-937172a .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-64dc3d7b:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-64dc3d7b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-64dc3d7b {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-64dc3d7b>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-2d87a79.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2d87a79.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2d87a79>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-401f963e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-401f963e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-401f963e>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-29feabf9 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-29feabf9 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-29feabf9 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-29feabf9 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-590a453f:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-590a453f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-590a453f {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-590a453f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-401a051d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-401a051d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-401a051d>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-7cb2fe92.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-7cb2fe92.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-7cb2fe92>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3f76c416 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-3f76c416 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3f76c416 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3f76c416 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-d3295aa:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-d3295aa>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-d3295aa {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-d3295aa>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-1653dd7c.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1653dd7c.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-1653dd7c>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-398ea43f.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-398ea43f.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-398ea43f>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4898f153 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-4898f153 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4898f153 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-4898f153 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2cbca2a:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-2cbca2a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2cbca2a {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2cbca2a>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-3fb4274.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3fb4274.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-3fb4274>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-c5d2c05.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c5d2c05.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-c5d2c05>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-141df51e .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-141df51e .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-141df51e .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-141df51e .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-566000d1:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-566000d1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3467 .elementor-element.elementor-element-566000d1 {
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.18);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-566000d1>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-2d588c7e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2d588c7e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-2d588c7e>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-bc-flex-widget .elementor-3467 .elementor-element.elementor-element-172e7c14.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-172e7c14.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-172e7c14>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-783389f8 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-783389f8 .uael-separator-parent {
            text-align: left;
        }
        
        .elementor-3467 .elementor-element.elementor-element-783389f8 .uael-infobox-title {
            color: #0F3186;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-783389f8 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-635c958a {
            padding: 100px 0px 100px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox,
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-separator-parent {
            text-align: center;
        }
        
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-separator {
            border-top-style: solid;
            display: inline-block;
            border-top-color: rgba(21, 50, 67, 0.2);
            border-top-width: 4px;
            width: 50px;
            margin: 20px 0px 20px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-title {
            line-height: 2em;
            margin: 0px 0px 10px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-title-prefix {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-text {
            margin: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-738cc106 .elementor-button {
            text-transform: none;
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #FFFFFF;
            padding: 0px 0px 0px 0px;
        }
        
        .elementor-3467 .elementor-element.elementor-element-738cc106 .elementor-button:hover,
        .elementor-3467 .elementor-element.elementor-element-738cc106 .elementor-button:focus {
            color: #000000;
        }
        
        .elementor-3467 .elementor-element.elementor-element-738cc106 .elementor-button:hover svg,
        .elementor-3467 .elementor-element.elementor-element-738cc106 .elementor-button:focus svg {
            fill: #000000;
        }
        
        @media(max-width:1024px) {
            .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(1px/2);
            }
            .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(1px/2);
            }
            .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(1px/2);
                margin-left: calc(1px/2);
            }
            .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-1px/2);
                margin-left: calc(-1px/2);
            }
            body.rtl .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-1px/2);
            }
            body:not(.rtl) .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-1px/2);
            }
            .elementor-3467 .elementor-element.elementor-element-1af56af8>.elementor-widget-container {
                margin: -8px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-tablet .uael-dual-button-wrap .uael-button-wrapper {
                margin-bottom: calc( 20px / 2);
                margin-top: calc( 20px / 2);
                margin-right: 0;
                margin-left: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-tablet .uael-dual-button-wrap .uael-button-wrapper:last-child {
                margin-bottom: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-tablet .uael-dual-button-wrap .uael-button-wrapper:first-child {
                margin-top: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-separator {
                width: 50px;
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox-title {
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox-title-prefix {
                margin: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-5ae8d687 {
                padding: 80px 40px 80px 40px;
            }
            .elementor-3467 .elementor-element.elementor-element-3830f795 {
                border-width: 0px 0px 0px 0px;
                margin-top: 24px;
                margin-bottom: 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-500e438a>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 20px 20px 20px 20px;
            }
            .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-550a5915 {
                border-width: 0px 0px 0px 0px;
                margin-top: 24px;
                margin-bottom: 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-8087382>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 20px 20px 20px 20px;
            }
            .elementor-3467 .elementor-element.elementor-element-68bef096 {
                border-width: 0px 0px 0px 0px;
                margin-top: 24px;
                margin-bottom: 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-42216817>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 20px 20px 20px 20px;
            }
            .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-45bf93e5 {
                border-width: 0px 0px 0px 0px;
                margin-top: 24px;
                margin-bottom: 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-1b144603>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 20px 20px 20px 20px;
            }
            .elementor-3467 .elementor-element.elementor-element-5c71caff .elementor-heading-title {
                font-size: 40px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-separator {
                width: 50px;
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-title {
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-title-prefix {
                margin: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-text {
                margin: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-separator {
                width: 50px;
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-title {
                margin: 20px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-title-prefix {
                margin: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-text {
                margin: 0px 0px 0px 0px;
            }
        }
        
        @media(min-width:768px) {
            .elementor-3467 .elementor-element.elementor-element-6395c5e {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-2ef2d8e4 {
                width: 50%;
            }
        }
        
        @media(max-width:1024px) and (min-width:768px) {
            .elementor-3467 .elementor-element.elementor-element-6395c5e {
                width: 100%;
            }
            .elementor-3467 .elementor-element.elementor-element-2ef2d8e4 {
                width: 100%;
            }
            .elementor-3467 .elementor-element.elementor-element-500e438a {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-4ed93d92 {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-374dec96 {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-8087382 {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-42216817 {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-5006602a {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-4cf47740 {
                width: 50%;
            }
            .elementor-3467 .elementor-element.elementor-element-1b144603 {
                width: 50%;
            }
        }
        
        @media(max-width:767px) {
            .elementor-3467 .elementor-element.elementor-element-5f1adbd3 {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-2ef2d8e4>.elementor-element-populated {
                padding: 80px 20px 80px 20px;
            }
            .elementor-3467 .elementor-element.elementor-element-1a7f4b02 .elementor-heading-title {
                font-size: 28px;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-mobile .uael-dual-button-wrap .uael-button-wrapper {
                margin-bottom: calc( 20px / 2);
                margin-top: calc( 20px / 2);
                margin-right: 0;
                margin-left: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-mobile .uael-dual-button-wrap .uael-button-wrapper:last-child {
                margin-bottom: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-mobile .uael-dual-button-wrap .uael-button-wrapper:first-child {
                margin-top: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533 .uael-dual-button-wrap .uael-button-wrapper {
                margin-right: calc( 20px / 2);
                margin-left: calc( 20px / 2);
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-none .uael-dual-button-wrap {
                margin-right: calc( -20px / 2);
                margin-left: calc( -20px / 2);
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper {
                margin-bottom: calc( 20px / 2);
                margin-top: calc( 20px / 2);
                margin-right: 0;
                margin-left: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper:last-child {
                margin-bottom: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper:first-child {
                margin-top: 0;
            }
            .elementor-3467 .elementor-element.elementor-element-10a72533>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-4f16b4d7 {
                padding: 30px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-56d7df0 .uael-infobox-title {
                font-size: 34px;
            }
            .elementor-3467 .elementor-element.elementor-element-5ae8d687 {
                padding: 64px 24px 64px 24px;
            }
            .elementor-3467 .elementor-element.elementor-element-3830f795 {
                border-width: 0px 0px 1px 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 40px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-500e438a>.elementor-element-populated {
                margin: 0px 16px 0px 0px;
                --e-column-margin-right: 16px;
                --e-column-margin-left: 0px;
                padding: 48px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-7e28b395 .elementor-heading-title {
                font-size: 24px;
            }
            .elementor-3467 .elementor-element.elementor-element-4ed93d92>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-550a5915 {
                border-width: 0px 0px 1px 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 40px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-374dec96>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-8087382>.elementor-element-populated {
                margin: 0px 16px 0px 0px;
                --e-column-margin-right: 16px;
                --e-column-margin-left: 0px;
                padding: 48px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-37d52c7a .elementor-heading-title {
                font-size: 24px;
            }
            .elementor-3467 .elementor-element.elementor-element-68bef096 {
                border-width: 0px 0px 1px 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 40px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-42216817>.elementor-element-populated {
                margin: 0px 16px 0px 0px;
                --e-column-margin-right: 16px;
                --e-column-margin-left: 0px;
                padding: 48px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-6862a272 .elementor-heading-title {
                font-size: 24px;
            }
            .elementor-3467 .elementor-element.elementor-element-5006602a>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-45bf93e5 {
                border-width: 0px 0px 1px 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 40px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-4cf47740>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-1b144603>.elementor-element-populated {
                margin: 0px 16px 0px 0px;
                --e-column-margin-right: 16px;
                --e-column-margin-left: 0px;
                padding: 48px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-13885670 .elementor-heading-title {
                font-size: 24px;
            }
            .elementor-3467 .elementor-element.elementor-element-5c71caff .elementor-heading-title {
                font-size: 30px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-title {
                font-size: 34px;
            }
            .elementor-3467 .elementor-element.elementor-element-21cdd8d1 .uael-infobox-text {
                margin: 30px 0px 0px 0px;
            }
            .elementor-3467 .elementor-element.elementor-element-2ef66f40 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-6630a2b5 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-937172a .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-29feabf9 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-3f76c416 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-4898f153 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-141df51e .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-783389f8 .uael-infobox-title {
                font-size: 22px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox,
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-separator-parent {
                text-align: center;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-title {
                font-size: 34px;
            }
            .elementor-3467 .elementor-element.elementor-element-67bc8856 .uael-infobox-text {
                margin: 30px 0px 0px 0px;
            }
        }
        
        .elementor-4181 .elementor-element.elementor-element-dd0c112:not(.elementor-motion-effects-element-type-background),
        .elementor-4181 .elementor-element.elementor-element-dd0c112>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var( --e-global-color-primary);
        }
        
        .elementor-4181 .elementor-element.elementor-element-dd0c112 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dd0c112>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-view-stacked .elementor-icon {
            background-color: #FFFFFF;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-view-framed .elementor-icon,
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-view-default .elementor-icon {
            fill: #FFFFFF;
            color: #FFFFFF;
            border-color: #FFFFFF;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-position-right .elementor-icon-box-icon {
            margin-left: 20px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-position-left .elementor-icon-box-icon {
            margin-right: 20px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 20px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon {
            font-size: 64px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon i {
            transform: rotate(0deg);
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon-box-title {
            margin-bottom: 5px;
            color: var( --e-global-color-accent);
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon-box-title,
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon-box-title a {
            font-size: 20px;
            font-weight: 300;
        }
        
        .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon-box-description {
            color: #FFFFFF;
            font-size: 29px;
            font-weight: 600;
        }
        
        .elementor-bc-flex-widget .elementor-4181 .elementor-element.elementor-element-225a123.elementor-column .elementor-widget-wrap {
            align-items: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-225a123.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-225a123.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-6430db3 .elementor-button {
            fill: #000000;
            color: #000000;
            background-color: var( --e-global-color-accent);
            border-style: solid;
            border-width: 0px 0px 0px 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-55fcb11a:not(.elementor-motion-effects-element-type-background),
        .elementor-4181 .elementor-element.elementor-element-55fcb11a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F2F2F4;
        }
        
        .elementor-4181 .elementor-element.elementor-element-55fcb11a {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 0px 20px 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-55fcb11a>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53f1ae38>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: flex-start;
            align-items: flex-start;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53f1ae38 {
            padding: 90px 0px 90px 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-70287cfa {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-70287cfa .elementor-heading-title {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }
        
        body.rtl .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }
        
        body:not(.rtl) .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 {
            --e-icon-list-icon-size: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-text {
            color: rgba(0, 0, 0, 0.79);
            padding-left: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-item>a {
            font-size: 15px;
            font-weight: 300;
        }
        
        .elementor-4181 .elementor-element.elementor-element-3e9b93ea {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-3e9b93ea .elementor-heading-title {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }
        
        body.rtl .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }
        
        body:not(.rtl) .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 {
            --e-icon-list-icon-size: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-text {
            color: rgba(0, 0, 0, 0.79);
            padding-left: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-item>a {
            font-size: 15px;
            font-weight: 300;
        }
        
        .elementor-4181 .elementor-element.elementor-element-71eedad5 {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-71eedad5 .elementor-heading-title {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }
        
        body.rtl .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }
        
        body:not(.rtl) .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b {
            --e-icon-list-icon-size: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-text {
            color: rgba(0, 0, 0, 0.79);
            padding-left: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-item>a {
            font-size: 15px;
            font-weight: 300;
        }
        
        .elementor-4181 .elementor-element.elementor-element-6c3f125c {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-6c3f125c .elementor-heading-title {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }
        
        body.rtl .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }
        
        body:not(.rtl) .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 {
            --e-icon-list-icon-size: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-text {
            color: rgba(0, 0, 0, 0.79);
            padding-left: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-item>a {
            font-size: 15px;
            font-weight: 300;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 {
            --grid-template-columns: repeat(0, auto);
            --icon-size: 18px;
            --grid-column-gap: 24px;
            --grid-row-gap: 0px;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-widget-container {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-social-icon {
            background-color: rgba(0, 0, 0, 0);
            --icon-padding: 0em;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-social-icon i {
            color: rgba(0, 0, 0, 0.45);
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-social-icon svg {
            fill: rgba(0, 0, 0, 0.45);
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-social-icon:hover i {
            color: #00ce1b;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-social-icon:hover svg {
            fill: #00ce1b;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53973512 {
            text-align: center;
        }
        
        .elementor-4181 .elementor-element.elementor-element-53973512 .elementor-heading-title {
            color: rgba(0, 0, 0, 0.38);
            font-size: 12px;
            font-weight: 300;
        }
        
        @media(min-width:768px) {
            .elementor-4181 .elementor-element.elementor-element-e60d775 {
                width: 73.897%;
            }
            .elementor-4181 .elementor-element.elementor-element-225a123 {
                width: 25.85%;
            }
        }
        
        @media(max-width:1024px) and (min-width:768px) {
            .elementor-4181 .elementor-element.elementor-element-95d0017 {
                width: 25%;
            }
            .elementor-4181 .elementor-element.elementor-element-6a2c20d {
                width: 25%;
            }
            .elementor-4181 .elementor-element.elementor-element-6b60189b {
                width: 25%;
            }
            .elementor-4181 .elementor-element.elementor-element-11a44bef {
                width: 25%;
            }
        }
        
        @media(max-width:1024px) {
            .elementor-4181 .elementor-element.elementor-element-55fcb11a {
                padding: 50px 20px 50px 20px;
            }
            .elementor-4181 .elementor-element.elementor-element-53f1ae38 {
                padding: 70px 20px 20px 20px;
            }
            .elementor-4181 .elementor-element.elementor-element-53d6c866>.elementor-widget-container {
                padding: 40px 0px 0px 0px;
            }
        }
        
        @media(max-width:767px) {
            .elementor-4181 .elementor-element.elementor-element-dbf6cde .elementor-icon-box-icon {
                margin-bottom: 20px;
            }
            .elementor-4181 .elementor-element.elementor-element-55fcb11a {
                padding: 30px 20px 30px 20px;
            }
            .elementor-4181 .elementor-element.elementor-element-357749d3>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-4181 .elementor-element.elementor-element-53f1ae38 {
                margin-top: 10px;
                margin-bottom: 0px;
            }
            .elementor-4181 .elementor-element.elementor-element-95d0017 {
                width: 50%;
            }
            .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-4181 .elementor-element.elementor-element-64a0f249 .elementor-icon-list-item>a {
                font-size: 13px;
            }
            .elementor-4181 .elementor-element.elementor-element-6a2c20d {
                width: 50%;
            }
            .elementor-4181 .elementor-element.elementor-element-6a2c20d>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
            .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-4181 .elementor-element.elementor-element-4a350a60 .elementor-icon-list-item>a {
                font-size: 13px;
            }
            .elementor-4181 .elementor-element.elementor-element-6b60189b {
                width: 50%;
            }
            .elementor-4181 .elementor-element.elementor-element-6b60189b>.elementor-element-populated {
                padding: 50px 0px 0px 0px;
            }
            .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-4181 .elementor-element.elementor-element-4d86529b .elementor-icon-list-item>a {
                font-size: 13px;
            }
            .elementor-4181 .elementor-element.elementor-element-11a44bef {
                width: 50%;
            }
            .elementor-4181 .elementor-element.elementor-element-11a44bef>.elementor-element-populated {
                padding: 50px 0px 0px 0px;
            }
            .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-4181 .elementor-element.elementor-element-748a4185 .elementor-icon-list-item>a {
                font-size: 13px;
            }
            .elementor-4181 .elementor-element.elementor-element-53d6c866 .elementor-widget-container {
                text-align: center;
            }
            .elementor-4181 .elementor-element.elementor-element-53973512 .elementor-heading-title {
                line-height: 15px;
            }
        }
        
        .elementor-5412 .elementor-element.elementor-element-851b203:not(.elementor-motion-effects-element-type-background),
        .elementor-5412 .elementor-element.elementor-element-851b203>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var( --e-global-color-ca3beb7);
        }
        
        .elementor-5412 .elementor-element.elementor-element-851b203 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 30px 30px 30px 30px;
        }
        
        .elementor-5412 .elementor-element.elementor-element-851b203>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-5412 .elementor-element.elementor-element-7b8239ff .elementor-heading-title {
            color: var( --e-global-color-primary);
            font-size: 21px;
            font-weight: 800;
            text-transform: capitalize;
        }
        
        .elementor-5412 .elementor-element.elementor-element-37866615 {
            text-align: left;
            font-family: "Muli", Sans-serif;
            font-size: 14px;
        }
        
        #elementor-popup-modal-5412 .dialog-message {
            width: 380px;
            height: 100vh;
            align-items: flex-start;
        }
        
        #elementor-popup-modal-5412 {
            justify-content: flex-start;
            align-items: flex-end;
        }
        
        #elementor-popup-modal-5412 .dialog-close-button {
            display: flex;
        }
        
        #elementor-popup-modal-5412 .dialog-widget-content {
            animation-duration: 1.2s;
            background-color: var( --e-global-color-ca3beb7);
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
        }
        
        @media(max-width:767px) {
            #elementor-popup-modal-5412 .dialog-message {
                width: 100vw;
            }
        }
        
        .elementor-3968 .elementor-element.elementor-element-25426574:not(.elementor-motion-effects-element-type-background),
        .elementor-3968 .elementor-element.elementor-element-25426574>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }
        
        .elementor-3968 .elementor-element.elementor-element-25426574,
        .elementor-3968 .elementor-element.elementor-element-25426574>.elementor-background-overlay {
            border-radius: 5px 5px 5px 5px;
        }
        
        .elementor-3968 .elementor-element.elementor-element-25426574 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 20px 5px 20px;
        }
        
        .elementor-3968 .elementor-element.elementor-element-25426574>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        
        .elementor-3968 .elementor-element.elementor-element-347732c .elementor-heading-title {
            font-size: 36px;
        }
        
        #elementor-popup-modal-3968 .dialog-message {
            width: 50vw;
            height: auto;
        }
        
        #elementor-popup-modal-3968 {
            justify-content: center;
            align-items: center;
            pointer-events: all;
            background-color: #0F3186E8;
        }
        
        #elementor-popup-modal-3968 .dialog-close-button {
            display: flex;
        }
        
        #elementor-popup-modal-3968 .dialog-widget-content {
            animation-duration: 1.2s;
            background-color: #000000;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
        }
        
        #elementor-popup-modal-3968 .dialog-close-button i {
            color: var( --e-global-color-primary);
        }
        
        #elementor-popup-modal-3968 .dialog-close-button svg {
            fill: var( --e-global-color-primary);
        }
        
        @media(max-width:1024px) {
            #elementor-popup-modal-3968 .dialog-message {
                width: 50vw;
            }
        }
        
        @media(max-width:767px) {
            .elementor-3968 .elementor-element.elementor-element-25426574 {
                padding: 0px 0px 0px 0px;
            }
            .elementor-3968 .elementor-element.elementor-element-347732c {
                text-align: center;
            }
            .elementor-3968 .elementor-element.elementor-element-347732c .elementor-heading-title {
                font-size: 28px;
            }
            #elementor-popup-modal-3968 .dialog-message {
                width: 90vw;
            }
            #elementor-popup-modal-3968 {
                justify-content: center;
                align-items: center;
            }
        }
    </style>
    <link rel="preload" href="static/css/frontend.min1.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="static/css/uael-frontend.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="static/css/wpforms-full.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link data-minify="1" rel="preload" href="static/css/all.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="static/css/v4-shims.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="https://www.adhmt.com/wp-content/themes/adh/style.css?ver=1.0.0" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link rel="preload" href="static/css/fontawesome.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link data-minify="1" rel="preload" href="static/css/regular.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link data-minify="1" rel="preload" href="static/css/solid.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <link data-minify="1" rel="preload" href="static/css/brands.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <script src="static/js/jquery.min.js" id="jquery-core-js"></script>
    <script src="static/js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="rocketlazyloadscript" src="static/js/v4-shims.min.js" id="font-awesome-4-shim-js" defer=""></script>
    <link rel="https://api.w.org/" href="https://www.adhmt.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://www.adhmt.com/wp-json/wp/v2/pages/3467">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.adhmt.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.adhmt.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.9">
    <link rel="shortlink" href="https://www.adhmt.com/?p=3467">
    <link rel="alternate" type="application/json+oembed" href="https://www.adhmt.com/wp-json/oembed/1.0/embed?url=https://www.adhmt.com/products/press-brake/robotic-press-brake/">
    <link rel="alternate" type="text/xml+oembed" href="https://www.adhmt.com/wp-json/oembed/1.0/embed?url=https://www.adhmt.com/products/press-brake/robotic-press-brake/&amp;format=xml">
    <link rel="alternate" hreflang="en-US" href="">
    <link rel="alternate" hreflang="en" href="">
    <link rel="alternate" hreflang="es-ES" href="https://www.adhmt.com/es/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="es" href="https://www.adhmt.com/es/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="ru-RU" href="https://www.adhmt.com/ru/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="ru" href="https://www.adhmt.com/ru/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="pt-PT" href="https://www.adhmt.com/pt/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="pt" href="https://www.adhmt.com/pt/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="fr-FR" href="https://www.adhmt.com/fr/products/press-brake/robotic-press-brake/">
    <link rel="alternate" hreflang="fr" href="https://www.adhmt.com/fr/products/press-brake/robotic-press-brake/">
    <link rel="icon" href="https://www.adhmt.com/wp-content/uploads/2021/09/favicon-32x32-1.png" sizes="32x32">
    <link rel="icon" href="https://www.adhmt.com/wp-content/uploads/2021/09/favicon-32x32-1.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.adhmt.com/wp-content/uploads/2021/09/favicon-32x32-1.png">
    <meta name="msapplication-TileImage" content="https://www.adhmt.com/wp-content/uploads/2021/09/favicon-32x32-1.png">
    <style id="wp-custom-css">
        /* Calculated field */
        
        #fbuilder div .cff-calculated-field {
            background-color: #c1f222;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding-top: 30px !important;
            padding-bottom: 30px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
        /* Label */
        
        .pbreak .cff-calculated-field label {
            font-weight: 700;
        }
    </style>
    <noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
    <script type="rocketlazyloadscript">
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */ (function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}} var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
        return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia} if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
        setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return} var links=w.document.getElementsByTagName("link");for(var i=0;i
        <links.length;i++){var link=links[i];if(link.rel==="preload" &&link.getAttribute( "as")==="style" &&!link.getAttribute( "data-loadcss")){link.setAttribute( "data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener(
            "load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent( "onload",function(){rp.poly();w.clearInterval(run)})}} if(typeof exports!=="undefined" ){exports.loadCSS=loadCSS} else{w.loadCSS=loadCSS}}(typeof global!=="undefined"
            ?global:this)) </script>
<meta name="keywords" content=""><link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">
        <!-- twitter分享 -->
        <meta property="twitter:url" content="/product_48737.php">
        <meta name="twitter:title" content="机器人折弯机">
        <meta name="twitter:description" content="无需专业技术人员
99.99% 保证产品精度
集成知名品牌部件，确保系统安全可靠">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small">

        <!-- facebook分享 -->
        <meta property="og:url" content="/product_48737.php">
        <meta property="og:type" content="article">
        <meta property="og:title" content="机器人折弯机">
        <meta property="og:description" content="无需专业技术人员
99.99% 保证产品精度
集成知名品牌部件，确保系统安全可靠">
        <meta property="og:image" content="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small">

        <script>
            function shareFacebook() {
                var _shareUrl = 'https://facebook.com/sharer/sharer.php?'; //真实的appkey，必选参数
                _shareUrl += '&u=' + encodeURIComponent(location.href); //参数url设置分享的内容链接|默认当前页location，可选参数
                window.open(_shareUrl, '_blank');
            }
            function shareTwitter() {
                var _shareUrl = 'https://twitter.com/intent/tweet/?'; //真实的appkey，必选参数
                _shareUrl += '&text=' + encodeURIComponent('机器人折弯机'); 
                _shareUrl += '&url=' + encodeURIComponent(location.href); 
                window.open(_shareUrl, '_blank');
            }
            function sharePinterest() {
                var _shareUrl = 'https://pinterest.com/pin/create/button/?'; //真实的appkey，必选参数
                _shareUrl += '&media=' + encodeURIComponent('//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small'); 
                _shareUrl += '&description=' + encodeURIComponent('机器人折弯机'); 
                _shareUrl += '&url=' + encodeURIComponent(location.href); 
                window.open(_shareUrl, '_blank');
            }
        </script>
    
            <meta charset="UTF-8">
            <script>
                var docCookies = {
    getItem: function (sKey) {
        return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[-.+*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
    },
    setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
        if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
        var sExpires = "";
        if (vEnd) {
            switch (vEnd.constructor) {
            case Number:
                sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
                break;
            case String:
                sExpires = "; expires=" + vEnd;
                break;
            case Date:
                sExpires = "; expires=" + vEnd.toUTCString();
                break;
            }
        }
        document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
        return true;
        },
        removeItem: function (sKey, sPath, sDomain) {
        if (!sKey || !this.hasItem(sKey)) { return false; }
        document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + ( sDomain ? "; domain=" + sDomain : "") + ( sPath ? "; path=" + sPath : "");
        return true;
    },
    hasItem: function (sKey) {
        return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[-.+*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
    },
    keys: /* optional method: you can safely remove it! */ function () {
        var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
        for (var nIdx = 0; nIdx < aKeys.length; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
        return aKeys;
    }
};
                if (location.hostname === 'zhang3794.temp.cn2.caihongjianzhan.com') {
                    if (!docCookies.getItem('login_name')) {
                        location.href = 'http://zhang3794.cn2.caihongjianzhan.com'
                    }
                }
            </script>
        </head>

<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-3467 page-child parent-pageid-606 wp-custom-logo translatepress-en_US ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.7 ast-full-width-layout ast-sticky-main-shrink ast-sticky-header-shrink ast-inherit-site-logo-sticky ast-primary-sticky-enabled elementor-default elementor-kit-5426 elementor-page elementor-page-3467 astra-addon-3.6.5">
    <a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">Skip to content</a>
    <div class="hfeed site" id="page">
        <!-- header -->
        <!-- 公用头部 -->

        
        <div component="header.php">
            <link rel="stylesheet" type="text/css" href="/css/customer.css">
<script type="text/javascript" src="/js/jiaogeiwocommon.js"></script>

<div data-elementor-type="header" data-elementor-id="98" class="elementor elementor-98 elementor-location-header" data-elementor-settings="[]">
    <div class="elementor-section-wrap">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-d003c66 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d003c66" data-element_type="section" data-settings="{" background_background":"classic","sticky":"top","sticky_effects_offset":2,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}"="">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-952ff51" data-id="952ff51" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-418bccb elementor-widget elementor-widget-image" data-id="418bccb" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img width="154" height="60" src="//cdn.xuansiwei.com/zhang3794/1648384271459/111.png?x-oss-process=style/png_small" class="attachment-large size-large" alt="" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-47e0e60" data-id="47e0e60" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-269a059 elementor-nav-menu__align-right elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu">


                            
        <div component="menus.js">
            
        <div class="elementor-widget-container">
            <nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                <ul id="menu-1-269a059" class="elementor-nav-menu">
                    
                            <li class="menu-item menu-item-type-custom page_item menu-item-13752">
                                <a href="/index.php" class="elementor-item">Home</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13753">
                                <a href="/about.php" class="elementor-item">About Us</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                <a href="/product.php" aria-haspopup="true" aria-expanded="false" class="elementor-item elementor-item-anchor">Product</a>
                                
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                         
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                    <a href="/product.php?c=1" class="elementor-sub-item">Press Brake</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                        <a href="/product_1_1.php" class="elementor-sub-item">Electro-hydraulic CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                        <a href="/product_1_2.php" class="elementor-sub-item">Torsion-synchro CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                        <a href="/product_1_3.php" class="elementor-sub-item">Tandem Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                        <a href="/product_1_4.php" class="elementor-sub-item">Heavy-duty Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                        <a href="/product_1_5.php" class="elementor-sub-item">Robotic Press Brake</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                    <a href="/product.php?c=2" class="elementor-sub-item">Hydraulic Shear</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                        <a href="/product_2_1.php" class="elementor-sub-item">Swing Beam Shear</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                        <a href="/product_2_2.php" class="elementor-sub-item">Guillotine Shear</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                    <a href="/product.php?c=3" class="elementor-sub-item">Fiber Laser Cutter</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                        <a href="/product_3_1.php" class="elementor-sub-item">T1 Single Table Fiber Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                        <a href="/product_3_2.php" class="elementor-sub-item">T2 Double Table Fiber Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                        <a href="/product_3_3.php" class="elementor-sub-item">T3 Fully Enclosed Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                        <a href="/product_3_4.php" class="elementor-sub-item">TR1 Single Panel Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                        <a href="/product_3_5.php" class="elementor-sub-item">TR2 Exchange Table Plate and Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                        <a href="/product_3_6.php" class="elementor-sub-item">TR3 Full-protection Interactive Table Panel Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                        <a href="/product_3_7.php" class="elementor-sub-item">Tube Laser Cutting Machine</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                    <a href="/product.php?c=4" class="elementor-sub-item">Veneer Reeling Machine</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                        <a href="/product_4_1.php" class="elementor-sub-item">W11 Three-roller symmetrical Veneer Reeling Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                        <a href="/product_4_2.php" class="elementor-sub-item">W11S Universal Veneer Reeling Machine</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                    <a href="/product.php?c=5" class="elementor-sub-item">Hand-Opeeated Ironworker</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                        <a href="/product_5_1.php" class="elementor-sub-item">Hand-Opeeated Ironworker</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                    <a href="/product.php?c=6" class="elementor-sub-item">Four-Column Hydraulic Press</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                        <a href="/product_6_1.php" class="elementor-sub-item">Four-Column Hydraulic Press</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                    <a href="/product.php?c=7" class="elementor-sub-item">Mechanical Blade</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                        <a href="/product_7_1.php" class="elementor-sub-item">Rolling Shear Slitting Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                        <a href="/product_7_2.php" class="elementor-sub-item">Slitting round blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                        <a href="/product_7_3.php" class="elementor-sub-item">Shearing Machine Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                        <a href="/product_7_4.php" class="elementor-sub-item">Ink Doctor Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                        <a href="/product_7_5.php" class="elementor-sub-item">Rolled Steel Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                        <a href="/product_7_6.php" class="elementor-sub-item">Slow Shredder Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                        <a href="/product_7_7.php" class="elementor-sub-item">Saw Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                        <a href="/product_7_8.php" class="elementor-sub-item">Chipper Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                        <a href="/product_7_9.php" class="elementor-sub-item">Corrugated Paper Cutting Slitter Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                        <a href="/product_7_10.php" class="elementor-sub-item">Crusher Blade</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                    <a href="/product.php?c=8" class="elementor-sub-item">Press Brake Tools</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                        <a href="/product_8_1.php" class="elementor-sub-item">Die of CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                        <a href="/product_8_2.php" class="elementor-sub-item">Press Brake Flattening Die</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                        <a href="/product_8_3.php" class="elementor-sub-item">Upper Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                        <a href="/product_8_4.php" class="elementor-sub-item">Single/Multi V Lower Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                        <a href="/product_8_5.php" class="elementor-sub-item">Arc Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                        <a href="/product_8_6.php" class="elementor-sub-item">Gooseneck Scimitar</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                        <a href="/product_8_7.php" class="elementor-sub-item">Traceless Bending Mould</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
                                    </ul>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13755">
                                <a href="/services.php" class="elementor-item">Services</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13756">
                                <a href="/blog.php" class="elementor-item">Blog</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13758">
                                <a href="/contact.php" class="elementor-item">Contact us</a>
                                
                            </li>
                        
                </ul>
            </nav>
            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                <i class="eicon-menu-bar" aria-hidden="true" role="presentation"></i>
                <span class="elementor-screen-only">Menu</span>
            </div>
            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                <ul id="menu-2-269a059" class="elementor-nav-menu">
                    
                            <li class="menu-item menu-item-type-custom page_item menu-item-13752">
                                <a href="/index.php" class="elementor-item">Home</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13753">
                                <a href="/about.php" class="elementor-item">About Us</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                <a href="/product.php" aria-haspopup="true" aria-expanded="false" class="elementor-item elementor-item-anchor">Product</a>
                                
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                         
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                    <a href="/product.php?c=1" class="elementor-sub-item">Press Brake</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                        <a href="/product_1_1.php" class="elementor-sub-item">Electro-hydraulic CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                        <a href="/product_1_2.php" class="elementor-sub-item">Torsion-synchro CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                        <a href="/product_1_3.php" class="elementor-sub-item">Tandem Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                        <a href="/product_1_4.php" class="elementor-sub-item">Heavy-duty Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                        <a href="/product_1_5.php" class="elementor-sub-item">Robotic Press Brake</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                    <a href="/product.php?c=2" class="elementor-sub-item">Hydraulic Shear</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                        <a href="/product_2_1.php" class="elementor-sub-item">Swing Beam Shear</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                        <a href="/product_2_2.php" class="elementor-sub-item">Guillotine Shear</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                    <a href="/product.php?c=3" class="elementor-sub-item">Fiber Laser Cutter</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                        <a href="/product_3_1.php" class="elementor-sub-item">T1 Single Table Fiber Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                        <a href="/product_3_2.php" class="elementor-sub-item">T2 Double Table Fiber Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                        <a href="/product_3_3.php" class="elementor-sub-item">T3 Fully Enclosed Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                        <a href="/product_3_4.php" class="elementor-sub-item">TR1 Single Panel Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                        <a href="/product_3_5.php" class="elementor-sub-item">TR2 Exchange Table Plate and Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                        <a href="/product_3_6.php" class="elementor-sub-item">TR3 Full-protection Interactive Table Panel Tube Integrated Laser Cutting Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                        <a href="/product_3_7.php" class="elementor-sub-item">Tube Laser Cutting Machine</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                    <a href="/product.php?c=4" class="elementor-sub-item">Veneer Reeling Machine</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                        <a href="/product_4_1.php" class="elementor-sub-item">W11 Three-roller symmetrical Veneer Reeling Machine</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                        <a href="/product_4_2.php" class="elementor-sub-item">W11S Universal Veneer Reeling Machine</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                    <a href="/product.php?c=5" class="elementor-sub-item">Hand-Opeeated Ironworker</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                        <a href="/product_5_1.php" class="elementor-sub-item">Hand-Opeeated Ironworker</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                    <a href="/product.php?c=6" class="elementor-sub-item">Four-Column Hydraulic Press</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                        <a href="/product_6_1.php" class="elementor-sub-item">Four-Column Hydraulic Press</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                    <a href="/product.php?c=7" class="elementor-sub-item">Mechanical Blade</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                        <a href="/product_7_1.php" class="elementor-sub-item">Rolling Shear Slitting Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                        <a href="/product_7_2.php" class="elementor-sub-item">Slitting round blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                        <a href="/product_7_3.php" class="elementor-sub-item">Shearing Machine Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                        <a href="/product_7_4.php" class="elementor-sub-item">Ink Doctor Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                        <a href="/product_7_5.php" class="elementor-sub-item">Rolled Steel Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                        <a href="/product_7_6.php" class="elementor-sub-item">Slow Shredder Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                        <a href="/product_7_7.php" class="elementor-sub-item">Saw Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                        <a href="/product_7_8.php" class="elementor-sub-item">Chipper Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                        <a href="/product_7_9.php" class="elementor-sub-item">Corrugated Paper Cutting Slitter Blade</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                        <a href="/product_7_10.php" class="elementor-sub-item">Crusher Blade</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
 
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                    <a href="/product.php?c=8" class="elementor-sub-item">Press Brake Tools</a>
                                                    
                                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                                            
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                        <a href="/product_8_1.php" class="elementor-sub-item">Die of CNC Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                        <a href="/product_8_2.php" class="elementor-sub-item">Press Brake Flattening Die</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                        <a href="/product_8_3.php" class="elementor-sub-item">Upper Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                        <a href="/product_8_4.php" class="elementor-sub-item">Single/Multi V Lower Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                        <a href="/product_8_5.php" class="elementor-sub-item">Arc Die of Press Brake</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                        <a href="/product_8_6.php" class="elementor-sub-item">Gooseneck Scimitar</a>
                                                                    </li>
                                                                

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                        <a href="/product_8_7.php" class="elementor-sub-item">Traceless Bending Mould</a>
                                                                    </li>
                                                                
                                                        </ul>
                                                    
                                                </li>
                                            
                                    </ul>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13755">
                                <a href="/services.php" class="elementor-item">Services</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13756">
                                <a href="/blog.php" class="elementor-item">Blog</a>
                                
                            </li>
                        

                            <li class="menu-item menu-item-type-custom page_item menu-item-13758">
                                <a href="/contact.php" class="elementor-item">Contact us</a>
                                
                            </li>
                        
                </ul>
            </nav>
        </div>

    
        </div>
    


                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-640b616 elementor-hidden-mobile disnone" data-id="640b616" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-95079e7 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form" data-id="95079e7">
                            <div class="elementor-widget-container">
                                <form class="elementor-search-form" role="search" action="" method="get">
                                    <div class="elementor-search-form__toggle">
                                        <i aria-hidden="true" class="fas fa-search"></i> <span class="elementor-screen-only">Search</span>
                                    </div>
                                    <div class="elementor-search-form__container">
                                        <input placeholder="Search..." class="elementor-search-form__input" type="search" name="s" title="Search" value="">
                                        <div class="dialog-lightbox-close-button dialog-close-button">
                                            <i class="eicon-close" aria-hidden="true"></i>
                                            <span class="elementor-screen-only">Close</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    var $ = jQuery;
</script>
<script>
    $('.elementor-menu-toggle').click(function() {
        $(this).toggleClass('elementor-active')
    })
    // $(function(){
    //     $('.elementor-menu-toggle').on('click',function(){
    //         $(this).toggleClass('elementor-active');
    //         $(this).next().slideToggle();
    //     });
    // });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6253cb2db0d10b6f3e6cce5d/1g0bl3c2r';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
        </div>
    
        <div id="content" class="site-content">
            <div class="ast-container">
                <div id="primary" class="content-area primary">
                    <main id="main" class="site-main">
                        <article class="post-3467 page type-page status-publish ast-article-single" id="post-3467" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
                            <header class="entry-header ast-header-without-markup"></header>
                            <div class="entry-content clear" itemprop="text">
                                <div data-elementor-type="wp-page" data-elementor-id="3467" class="elementor elementor-3467" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                        
        <div component="product_tpl_title.js">
            
    <section class="elementor-section elementor-top-section elementor-element elementor-element-5f1adbd3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5f1adbd3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6395c5e" data-id="6395c5e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-671e90da  elementor-widget elementor-widget-image" data-id="671e90da" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="1000" height="800" src="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small" class="attachment-full size-full" alt="" loading="lazy">
                        <noscript>
                                <img width="1000" height="800" src="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small" class="attachment-full size-full" alt="" >
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ef2d8e4" data-id="2ef2d8e4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1a7f4b02  elementor-widget elementor-widget-heading" data-id="1a7f4b02" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">机器人折弯机</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9683311  elementor-widget elementor-widget-text-editor" data-id="9683311" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>无需专业技术人员
99.99% 保证产品精度
集成知名品牌部件，确保系统安全可靠</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1af56af8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1af56af8" data-element_type="widget" data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                <span class="elementor-icon-list-text">可实现自动上下料，自动分拣码垛，机械手自动换模技术，保证了小批量多品种生产和大规模生产的卓越效率。</span>
                            </li>
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                <span class="elementor-icon-list-text">可实现自动上下料，自动分拣码垛，机械手自动换模技术，保证了小批量多品种生产和大规模生产的卓越效率。</span>
                            </li>
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                <span class="elementor-icon-list-text">可实现自动上下料，自动分拣码垛，机械手自动换模技术，保证了小批量多品种生产和大规模生产的卓越效率。</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7a90bcaf elementor-widget elementor-widget-spacer" data-id="7a90bcaf" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-10a72533 uael-button-halign-left uael-mobile-button-halign-justify uael-tablet-button-halign-justify uael-button-stack-tablet  elementor-widget elementor-widget-uael-buttons" data-id="10a72533" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="uael-buttons.default">
                    <div class="elementor-widget-container">
                        <div class="uael-dual-button-outer-wrap">
                            <div class="uael-dual-button-wrap">
                                <div class="uael-button-wrapper elementor-button-wrapper uael-dual-button elementor-repeater-item-f96ab12 uael-dual-button-0">
                                    <a class="elementor-button-link elementor-button elementor-size-lg elementor-button-link elementor-animation-grow" href="javascript:;">
                                        <span class="elementor-button-content-wrapper uael-buttons-icon-">
                                            <span class="elementor-align-icon- elementor-button-icon"></span>
                                        <span class="elementor-button-text elementor-inline-editing" data-elementor-setting-key="buttons.0.text" data-elementor-inline-editing-toolbar="none">Request A Quote</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="uael-button-wrapper elementor-button-wrapper uael-dual-button elementor-repeater-item-1a1fde5 uael-dual-button-1">
                                    <a class="elementor-button-link elementor-button elementor-size-lg elementor-button-link elementor-animation-grow" href="javascript:;">
                                        <span class="elementor-button-content-wrapper uael-buttons-icon- elementor-button-content-wrapper uael-buttons-icon-">
                                            <span class="elementor-align-icon- elementor-button-icon"></span>
                                        <span class="elementor-button-text elementor-inline-editing" data-elementor-setting-key="buttons.1.text" data-elementor-inline-editing-toolbar="none">Watch Video</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
    
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-4f16b4d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4f16b4d7" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7fa17c4c" data-id="7fa17c4c" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-56d7df0 elementor-widget elementor-widget-uael-infobox" data-id="56d7df0" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                    <div class="uael-infobox-left-right-wrap">
                                                                        <div class="uael-infobox-content">
                                                                            <div class="uael-infobox-title-wrap">
                                                                                <h6 class="uael-infobox-title-prefix elementor-inline-editing" data-elementor-setting-key="infobox_title_prefix" data-elementor-inline-editing-toolbar="basic">Check Out</h6>
                                                                                <div class="uael-separator-parent">
                                                                                    <div class="uael-separator"></div>
                                                                                </div>
                                                                                <h2 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Machine Details</h2>
                                                                            </div>
                                                                            <div class="uael-infobox-text-wrap">
                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2693c1de elementor-align-left elementor-tablet-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2693c1de" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="javascript:;" target="_blank" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                                                                        <span class="elementor-button-text">720° Panorama View</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <!-- images -->

                                        
        <div component="images_2.js">
            
    <section class="elementor-section elementor-top-section elementor-element elementor-element-5ae8d687 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5ae8d687" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f6b9023" data-id="1f6b9023" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
    
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3830f795 elementor-section-content-middle elementor-reverse-mobile elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3830f795" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-500e438a" data-id="500e438a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1fce0156 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="1fce0156" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ed93d92" data-id="4ed93d92" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-element elementor-element-1e92adac elementor-invisible elementor-widget elementor-widget-uael-hotspot" data-id="1e92adac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;position&quot;:&quot;top&quot;,&quot;trigger&quot;:&quot;hover&quot;,&quot;anim_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:350,&quot;sizes&quot;:[]},&quot;tooltip_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;tooltip_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;tooltip_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="uael-hotspot.default">
                            <div class="elementor-widget-container">
                                <div class="uael-hotspot  uael-hotspot-tooltip-yes ">
                                    <img width="1024" height="683" src="//cdn.xuansiwei.com/zhang3794/1643250732877/tupian12.png?x-oss-process=style/png_small" class="attachment-large size-large" alt="" loading="lazy">
                                    <noscript>
                                        <img width="1024" height="683" src="//cdn.xuansiwei.com/zhang3794/1643250732877/tupian12.png?x-oss-process=style/png_small" class="attachment-large size-large" alt="">
                                    </noscript>
                                    <div class="uael-hotspot-container" data-side="top" data-hotspottrigger="hover" data-arrow="true" data-distance="6" data-delay="300" data-animation="fade" data-animduration="350" data-zindex="99" data-length="3" data-autoplay="" data-repeat="" data-tourinterval="4000" data-overlay="" data-autoaction="" data-hotspotviewport="90" data-tooltip-maxwidth="250" data-tooltip-minwidth="0">
                                        <span class="uael-tooltip elementor-repeater-item-0ee1d19">
                                        <span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim " id="uael-tooltip-id-1e92adac-1" data-uaeltour="1" data-tooltip-content="#uael-tooltip-content-1e92adac-0ee1d19">
                                        <i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                        </span>
                                        <span class="uael-tooltip-container">
                                        <span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-0ee1d19"><p>Center alignment table</p> <span class="uael-tour"><span class="uael-actual-step">1 of 3</span>
                                        <ul>
                                            <li><a href="#0" class="uael-prev-1e92adac" data-tooltipid="1">« Previous</a></li>
                                            <li><a href="#0" class="uael-next-1e92adac" data-tooltipid="1">Next »</a></li>
                                        </ul>
                                        </span>
                                        </span>
                                        </span>
                                        <span class="uael-tooltip elementor-repeater-item-e024718">
<span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim " id="uael-tooltip-id-1e92adac-2" data-uaeltour="2" data-tooltip-content="#uael-tooltip-content-1e92adac-e024718">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                        </span>
                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-e024718"><p>CNC Press Brake</p> <span class="uael-tour"><span class="uael-actual-step">2 of 3</span>
                                        <ul>
                                            <li><a href="#0" class="uael-prev-1e92adac" data-tooltipid="2">« Previous</a></li>
                                            <li><a href="#0" class="uael-next-1e92adac" data-tooltipid="2">Next »</a></li>
                                        </ul>
                                        </span>
                                        </span>
                                        </span>
                                        <span class="uael-tooltip elementor-repeater-item-0cb9342">
<span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim " id="uael-tooltip-id-1e92adac-3" data-uaeltour="3" data-tooltip-content="#uael-tooltip-content-1e92adac-0cb9342">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                        </span>
                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-0cb9342"><p>Manipulator</p> <span class="uael-tour"><span class="uael-actual-step">3 of 3</span>
                                        <ul>
                                            <li><a href="#0" class="uael-prev-1e92adac" data-tooltipid="3">« Previous</a></li>
                                            <li><a href="#0" class="uael-next-1e92adac" data-tooltipid="3">Next »</a></li>
                                        </ul>
                                        </span>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
    </div>
    </div>
</div>
</section>

        </div>
    
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-696e47b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="696e47b3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f7faac5" data-id="7f7faac5" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-5c71caff elementor-widget elementor-widget-heading" data-id="5c71caff" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Want to get the price?</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-72f29589 elementor-widget elementor-widget-text-editor" data-id="72f29589" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Our sales experts will contact you within 24 hours.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6bd54ec6 elementor-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="6bd54ec6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjM5NjgiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Get Free Quote</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- 其他产品 -->
                                        
        <div component="pro_other.js">
            
    <section class="elementor-section elementor-top-section elementor-element elementor-element-467f7e8a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="467f7e8a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-347275a9" data-id="347275a9" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-21cdd8d1 elementor-widget elementor-widget-uael-infobox" data-id="21cdd8d1" data-element_type="widget" data-widget_type="uael-infobox.default">
                    <div class="elementor-widget-container">
                        <div class="uael-module-content uael-infobox  uael-infobox-center  uael-infobox-link-type-none">
                            <div class="uael-infobox-left-right-wrap">
                                <div class="uael-infobox-content">
                                    <div class="uael-infobox-title-wrap">
                                        <h6 class="uael-infobox-title-prefix elementor-inline-editing" data-elementor-setting-key="infobox_title_prefix" data-elementor-inline-editing-toolbar="basic">Standard &amp; Optional</h6>
                                        <div class="uael-separator-parent">
                                            <div class="uael-separator"></div>
                                        </div>
                                        <h2 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Components</h2>
                                    </div>
                                    <div class="uael-infobox-text-wrap">
                                        <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                            <p>You can better understand the performance of the machine through the following machine detail display and text description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-58036de8 elementor-widget elementor-widget-spacer" data-id="58036de8" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3d8e7c7e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d8e7c7e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-755fcbc5" data-id="755fcbc5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-72fb2127  elementor-widget elementor-widget-image" data-id="72fb2127" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1644924894888/111.jpg?x-oss-process=style/small" class="attachment-large size-large" alt="" loading="lazy">
                                        <noscript>
                                            <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1644924894888/111.jpg?x-oss-process=style/small" class="attachment-large size-large" alt=""  sizes="(max-width: 700px) 100vw, 700px">
                                        </noscript>                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2dce53d" data-id="2dce53d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2ef66f40 elementor-widget elementor-widget-uael-infobox" data-id="2ef66f40" data-element_type="widget" data-widget_type="uael-infobox.default">
                                    <div class="elementor-widget-container">
                                        <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                            <div class="uael-infobox-left-right-wrap">
                                                <div class="uael-infobox-content">
                                                    <div class="uael-infobox-title-wrap">
                                                        <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">数控折弯机</h3>
                                                    </div>
                                                    <div class="uael-infobox-text-wrap">
                                                        <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                            <p>简介简介简介简介简介简介简介</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    ,
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3d8e7c7e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d8e7c7e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-755fcbc5" data-id="755fcbc5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-72fb2127  elementor-widget elementor-widget-image" data-id="72fb2127" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small" class="attachment-large size-large" alt="" loading="lazy">
                                        <noscript>
                                            <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1642996001922/dwtdcd985b_1.jpg?x-oss-process=style/small" class="attachment-large size-large" alt=""  sizes="(max-width: 700px) 100vw, 700px">
                                        </noscript>                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2dce53d" data-id="2dce53d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2ef66f40 elementor-widget elementor-widget-uael-infobox" data-id="2ef66f40" data-element_type="widget" data-widget_type="uael-infobox.default">
                                    <div class="elementor-widget-container">
                                        <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                            <div class="uael-infobox-left-right-wrap">
                                                <div class="uael-infobox-content">
                                                    <div class="uael-infobox-title-wrap">
                                                        <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">机器人折弯机</h3>
                                                    </div>
                                                    <div class="uael-infobox-text-wrap">
                                                        <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                            <p>无需专业技术人员
99.99% 保证产品精度
集成知名品牌部件，确保系统安全可靠</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
            </div>
        </div>
    </div>
</section>

        </div>
    
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-635c958a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="635c958a" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a94ff9b" data-id="2a94ff9b" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-67bc8856 elementor-widget elementor-widget-uael-infobox" data-id="67bc8856" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="uael-module-content uael-infobox  uael-infobox-center  uael-infobox-link-type-none">
                                                                    <div class="uael-infobox-left-right-wrap">
                                                                        <div class="uael-infobox-content">
                                                                            <div class="uael-infobox-title-wrap">
                                                                                <h6 class="uael-infobox-title-prefix elementor-inline-editing" data-elementor-setting-key="infobox_title_prefix" data-elementor-inline-editing-toolbar="basic">Download</h6>
                                                                                <div class="uael-separator-parent">
                                                                                    <div class="uael-separator"></div>
                                                                                </div>
                                                                                <h2 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Technical Specifications</h2>
                                                                            </div>
                                                                            <div class="uael-infobox-text-wrap">
                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                    <p>You can download our product brochure through the link below to learn more about the technical specifications of the machine</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-738cc106 elementor-align-center elementor-widget elementor-widget-button" data-id="738cc106" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="javascript:;" class="elementor-button-link elementor-button elementor-size-xl" role="button">
                                                                        <span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<i aria-hidden="true" class="fas fa-download"></i> </span>
                                                                        <span class="elementor-button-text">Download brochure</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
        <div id="ast-mobile-popup-wrapper">
            <div id="ast-mobile-popup" class="ast-mobile-popup-drawer content-align-flex-start ast-mobile-popup-right">
                <div class="ast-mobile-popup-overlay"></div>
                <div class="ast-mobile-popup-inner">
                    <div class="ast-mobile-popup-header">
                        <button id="menu-toggle-close" class="menu-toggle-close" aria-label="Close menu">
<span class="ast-svg-iconset">
<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg></span> </span>
</button>
                    </div>
                    <div class="ast-mobile-popup-content">
                        <div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
                            <div class="ast-main-header-bar-alignment">
                                <div class="main-header-bar-navigation">
                                    <nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="primary-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                        <div class="main-navigation ast-inline-flex">
                                            <ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile ast-mega-menu-enabled">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-41"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Cooperate</span><span class="ast-icon icon-arrow"></span><span class="sub-arrow"></span></a>
                                                    <button class="ast-menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span><span class="ast-icon icon-arrow"></span></button>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-587"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Our Company</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Our Facilities</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-585"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Mission &amp; Vision</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-586"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Our Team</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-591"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Honour</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1479"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Partners</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Our Services</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">News</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-has-children menu-item-40"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Products</span><span class="ast-icon icon-arrow"></span><span class="sub-arrow"></span></a>
                                                    <button class="ast-menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span><span class="ast-icon icon-arrow"></span></button>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-620"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Press Brake</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-619"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Hydraulic Shear</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-618"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Fiber Laser Machine</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3896"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">FMS System</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3917"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Punch Press</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Testimonial</span><span class="sub-arrow"></span></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Project</span><span class="sub-arrow"></span></a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-899"><a class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Resources</span><span class="ast-icon icon-arrow"></span><span class="sub-arrow"></span></a><button class="ast-menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span><span class="ast-icon icon-arrow"></span></button>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-886"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">FAQ</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Videos</span></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Brochures</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text">Contact</span><span class="sub-arrow"></span></a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6202"><a class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><i class="fa fa-globe" aria-hidden="true"></i></span><span class="ast-icon icon-arrow"></span><span class="sub-arrow"></span></a>
                                                    <button class="ast-menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span><span class="ast-icon icon-arrow"></span></button>
                                                    <ul class="sub-menu">
                                                        <li class="trp-language-switcher-container menu-item menu-item-type-post_type menu-item-object-language_switcher current-language-menu-item menu-item-6201"><a href="" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><span data-no-translation=""><img class="trp-flag-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E" width="18" height="12" alt="en_US" title="English" data-lazy-src="https://www.adhmt.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png" loading="lazy"><noscript><img class="trp-flag-image" src="static/picture/en_US.png" width="18" height="12" alt="en_US" title="English"></noscript><span class="trp-ls-language-name">EN</span></span></span></a></li>
                                                        <li class="trp-language-switcher-container menu-item menu-item-type-post_type menu-item-object-language_switcher menu-item-6200"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><span data-no-translation=""><img class="trp-flag-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E" width="18" height="12" alt="es_ES" title="Spanish" data-lazy-src="https://www.adhmt.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/es_ES.png" loading="lazy"><noscript><img class="trp-flag-image" src="static/picture/es_ES.png" width="18" height="12" alt="es_ES" title="Spanish"></noscript><span class="trp-ls-language-name">ES</span></span></span></a></li>
                                                        <li class="trp-language-switcher-container menu-item menu-item-type-post_type menu-item-object-language_switcher menu-item-6237"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><span data-no-translation=""><img class="trp-flag-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E" width="18" height="12" alt="ru_RU" title="Russian" data-lazy-src="https://www.adhmt.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/ru_RU.png" loading="lazy"><noscript><img class="trp-flag-image" src="static/picture/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian"></noscript><span class="trp-ls-language-name">RU</span></span></span></a></li>
                                                        <li class="trp-language-switcher-container menu-item menu-item-type-post_type menu-item-object-language_switcher menu-item-6241"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><span data-no-translation=""><img class="trp-flag-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E" width="18" height="12" alt="pt_PT" title="Portuguese" data-lazy-src="https://www.adhmt.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/pt_PT.png" loading="lazy"><noscript><img class="trp-flag-image" src="static/picture/pt_PT.png" width="18" height="12" alt="pt_PT" title="Portuguese"></noscript><span class="trp-ls-language-name">PT</span></span></span></a></li>
                                                        <li class="trp-language-switcher-container menu-item menu-item-type-post_type menu-item-object-language_switcher menu-item-6245"><a href="javascript:;" class="menu-link"><span class="ast-icon icon-arrow"></span><span class="menu-text"><span data-no-translation=""><img class="trp-flag-image" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2018%2012'%3E%3C/svg%3E" width="18" height="12" alt="fr_FR" title="French" data-lazy-src="https://www.adhmt.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/fr_FR.png" loading="lazy"><noscript><img class="trp-flag-image" src="static/picture/fr_FR.png" width="18" height="12" alt="fr_FR" title="French"></noscript><span class="trp-ls-language-name">FR</span></span></span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-button-1" data-section="section-hb-button-1">
                            <div class="ast-builder-button-wrap ast-builder-button-size-sm">
                                <a class="ast-custom-button-link" href="javascript:;" target="_self">
                                    <div class="ast-custom-button">Get Quote</div>
                                </a><a class="menu-link" href="javascript:;" target="_self">Get Quote</a></div>
                        </div>
                    </div>
                    <div class="ast-desktop-popup-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="rocketlazyloadscript" src="static/js/8hyjuqjfcpp49kny8glii0blzfd3qebj.js" async=""></script>
    <a id="ast-scroll-top" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both">
        <span class="ast-icon icon-arrow"></span> <span class="screen-reader-text">Scroll to Top</span>
    </a>
    <div data-elementor-type="popup" data-elementor-id="3968" class="elementor elementor-3968 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;classes&quot;:&quot;getquote&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;triggers&quot;:{&quot;click&quot;:&quot;yes&quot;},&quot;timing&quot;:[]}">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-25426574 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="25426574" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12d3cf7e" data-id="12d3cf7e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-347732c elementor-widget elementor-widget-heading" data-id="347732c" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Get In Touch</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e7d6f23 elementor-widget elementor-widget-wpforms" data-id="e7d6f23" data-element_type="widget" data-widget_type="wpforms.default">
                                <div class="elementor-widget-container">
                                    <div class="wpforms-container wpforms-container-full" id="wpforms-13">
                                        <form id="wpforms-form-13" class="wpforms-validate wpforms-form" data-formid="13" method="post" enctype="multipart/form-data" action="/products/press-brake/robotic-press-brake/" data-token="4bee8af33ac17a8877d2e559258ac422"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
                                            <div class="wpforms-field-container">
                                                <div id="wpforms-13-field_5-container" class="wpforms-field wpforms-field-hidden" data-field-id="5"><input type="hidden" id="wpforms-13-field_5" name="wpforms[fields][5]" value="https://www.adhmt.com/products/press-brake/robotic-press-brake/"></div>
                                                <div id="wpforms-13-field_0-container" class="wpforms-field wpforms-field-name wpforms-one-half wpforms-first" data-field-id="0"><label class="wpforms-field-label" for="wpforms-13-field_0">Name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-13-field_0" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][0]" required=""></div>
                                                <div id="wpforms-13-field_4-container" class="wpforms-field wpforms-field-email wpforms-one-half" data-field-id="4"><label class="wpforms-field-label" for="wpforms-13-field_4">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-13-field_4" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][4]" required=""></div>
                                                <div id="wpforms-13-field_13-container" class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first" data-field-id="13"><label class="wpforms-field-label" for="wpforms-13-field_13">Country</label><input type="text" id="wpforms-13-field_13" class="wpforms-field-large" name="wpforms[fields][13]"></div>
                                                <div id="wpforms-13-field_12-container" class="wpforms-field wpforms-field-text wpforms-one-half" data-field-id="12"><label class="wpforms-field-label" for="wpforms-13-field_12">Phone/Whatsapp</label><input type="text" id="wpforms-13-field_12" class="wpforms-field-large" name="wpforms[fields][12]"></div>
                                                <div id="wpforms-13-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-13-field_2">Your message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-13-field_2" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][2]" required=""></textarea></div>
                                                <div id="wpforms-13-field_6-container" class="wpforms-field wpforms-field-hidden" data-field-id="6"><input type="hidden" id="wpforms-13-field_6" name="wpforms[fields][6]" value="137.184.14.204"></div>
                                            </div>
                                            <div class="wpforms-field wpforms-field-hp"><label for="wpforms-13-field-hp" class="wpforms-field-label">Email</label><input type="text" name="wpforms[hp]" id="wpforms-13-field-hp" class="wpforms-field-medium"></div>
                                            <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="13"><input type="hidden" name="wpforms[author]" value="1"><input type="hidden" name="wpforms[post_id]" value="3467"><button type="submit" name="wpforms[submit]" id="wpforms-submit-13" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Send Message" aria-live="assertive" value="wpforms-submit">Send Message</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div data-elementor-type="popup" data-elementor-id="5412" class="elementor elementor-5412 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;slideInLeft&quot;,&quot;close_button_delay&quot;:3,&quot;prevent_close_on_esc_key&quot;:&quot;yes&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;triggers&quot;:{&quot;exit_intent&quot;:&quot;yes&quot;},&quot;timing&quot;:{&quot;times_times&quot;:1,&quot;times&quot;:&quot;yes&quot;}}">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-851b203 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="851b203" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-124e6804" data-id="124e6804" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7b8239ff elementor-widget elementor-widget-heading" data-id="7b8239ff" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Request A Quick Quote…</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-37866615 elementor-widget elementor-widget-text-editor" data-id="37866615" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Just write down some details and our sales experts will get back to you within 24 hours!</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4e1cc5c elementor-widget elementor-widget-wpforms" data-id="4e1cc5c" data-element_type="widget" data-widget_type="wpforms.default">
                                <div class="elementor-widget-container">
                                    <div class="wpforms-container wpforms-container-full" id="wpforms-13">
                                        <form id="wpforms-form-13" class="wpforms-validate wpforms-form" data-formid="13" method="post" enctype="multipart/form-data" action="/products/press-brake/robotic-press-brake/" data-token="4bee8af33ac17a8877d2e559258ac422"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
                                            <div class="wpforms-field-container">
                                                <div id="wpforms-13-field_5-container" class="wpforms-field wpforms-field-hidden" data-field-id="5"><input type="hidden" id="wpforms-13-field_5" name="wpforms[fields][5]" value="https://www.adhmt.com/products/press-brake/robotic-press-brake/"></div>
                                                <div id="wpforms-13-field_0-container" class="wpforms-field wpforms-field-name wpforms-one-half wpforms-first" data-field-id="0"><label class="wpforms-field-label" for="wpforms-13-field_0">Name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-13-field_0" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][0]" required=""></div>
                                                <div id="wpforms-13-field_4-container" class="wpforms-field wpforms-field-email wpforms-one-half" data-field-id="4"><label class="wpforms-field-label" for="wpforms-13-field_4">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-13-field_4" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][4]" required=""></div>
                                                <div id="wpforms-13-field_13-container" class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first" data-field-id="13"><label class="wpforms-field-label" for="wpforms-13-field_13">Country</label><input type="text" id="wpforms-13-field_13" class="wpforms-field-large" name="wpforms[fields][13]"></div>
                                                <div id="wpforms-13-field_12-container" class="wpforms-field wpforms-field-text wpforms-one-half" data-field-id="12"><label class="wpforms-field-label" for="wpforms-13-field_12">Phone/Whatsapp</label><input type="text" id="wpforms-13-field_12" class="wpforms-field-large" name="wpforms[fields][12]"></div>
                                                <div id="wpforms-13-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-13-field_2">Your message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-13-field_2" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][2]" required=""></textarea></div>
                                                <div id="wpforms-13-field_6-container" class="wpforms-field wpforms-field-hidden" data-field-id="6"><input type="hidden" id="wpforms-13-field_6" name="wpforms[fields][6]" value="137.184.14.204"></div>
                                            </div>
                                            <div class="wpforms-field wpforms-field-hp"><label for="wpforms-13-field-hp" class="wpforms-field-label">Phone</label><input type="text" name="wpforms[hp]" id="wpforms-13-field-hp" class="wpforms-field-medium"></div>
                                            <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="13"><input type="hidden" name="wpforms[author]" value="1"><input type="hidden" name="wpforms[post_id]" value="3467"><button type="submit" name="wpforms[submit]" id="wpforms-submit-13" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Send Message" aria-live="assertive" value="wpforms-submit">Send Message</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1"></feFuncR>
                    <feFuncG type="table" tableValues="0 1"></feFuncG>
                    <feFuncB type="table" tableValues="0 1"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1"></feFuncR>
                        <feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG>
                        <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB>
                        <feFuncA type="table" tableValues="1 1"></feFuncA>
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in"></feComposite>
                </filter>
            </defs>
            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                <defs>
                    <filter id="wp-duotone-magenta-yellow">
                        <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
                        <feComponentTransfer color-interpolation-filters="sRGB">
                            <feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR>
                            <feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG>
                            <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB>
                            <feFuncA type="table" tableValues="1 1"></feFuncA>
                        </feComponentTransfer>
                        <feComposite in2="SourceGraphic" operator="in"></feComposite>
                    </filter>
                </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-blue-orange">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR>
                                <feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG>
                                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB>
                                <feFuncA type="table" tableValues="1 1"></feFuncA>
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in"></feComposite>
                        </filter>
                    </defs>
                    </svg>
    <link rel="preload" href="static/css/animations.min.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all">
    <script id="astra-theme-js-js-extra">
        var astra = {
            "break_point": "921",
            "isRtl": "",
            "edit_post_url": "https:\/\/www.adhmt.com\/wp-admin\/post.php?post={{id}}&action=edit",
            "ajax_url": "https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php",
            "infinite_count": "2",
            "infinite_total": "0",
            "pagination": "number",
            "infinite_scroll_event": "scroll",
            "no_more_post_message": "No more posts to show.",
            "grid_layout": "1",
            "site_url": "https:\/\/www.adhmt.com",
            "show_comments": "Show Comments",
            "masonryEnabled": "",
            "blogMasonryBreakPoint": "921"
        };
    </script>
    <script type="rocketlazyloadscript" src="static/js/frontend.min.js" id="astra-theme-js-js" defer=""></script>
    <script id="astra-addon-js-js-extra">
        var astraAddon = {
            "sticky_active": "1",
            "svgIconClose": "<span class=\"ast-icon icon-close\"><\/span>",
            "header_main_stick": "1",
            "header_above_stick": "0",
            "header_below_stick": "0",
            "stick_header_meta": "",
            "header_main_stick_meta": "",
            "header_above_stick_meta": "",
            "header_below_stick_meta": "",
            "sticky_header_on_devices": "desktop",
            "sticky_header_style": "none",
            "sticky_hide_on_scroll": "0",
            "break_point": "921",
            "tablet_break_point": "921",
            "mobile_break_point": "544",
            "header_main_shrink": "1",
            "header_logo_width": "",
            "responsive_header_logo_width": {
                "desktop": 110,
                "tablet": 120,
                "mobile": 100
            },
            "stick_origin_position": "",
            "site_layout": "ast-full-width-layout",
            "site_content_width": "1400",
            "site_layout_padded_width": "1200",
            "site_layout_box_width": "1200",
            "header_builder_active": "1",
            "component_limit": "10",
            "is_header_builder_active": "1"
        };
    </script>
    <script type="rocketlazyloadscript" data-minify="1" src="static/js/astra-addon-61f1085d140852-84267143.js" id="astra-addon-js-js" defer=""></script>
    <script id="uael-frontend-script-js-extra">
        var uael_script = {
            "ajax_url": "https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script type="rocketlazyloadscript" src="static/js/uael-frontend.min.js" id="uael-frontend-script-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/tooltipster.min.js" id="uael-hotspot-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/frontend-modules.min.js" id="elementor-frontend-modules-js" defer=""></script>
    <script type="rocketlazyloadscript" id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php","nonce":"45dc6dd514","urls":{"assets":"https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/www.adhmt.com\/wp-json\/"},"i18n":{"toc_no_headings_found":"No
        headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
    </script>
    <script type="rocketlazyloadscript" src="static/js/frontend.min1.js" id="elementor-pro-frontend-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/waypoints.min.js" id="elementor-waypoints-js" defer=""></script>
    <script src="static/js/core.min.js" id="jquery-ui-core-js"></script>
    <script type="rocketlazyloadscript" id="elementor-frontend-js-before">
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download
        image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile
        Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.5.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"a11y_improvements":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":3467,"title":"Robotic%20Press%20Brake%20-%20ADH","excerpt":"","featuredImage":false}};
    </script>
    <script type="rocketlazyloadscript" src="static/js/frontend.min2.js" id="elementor-frontend-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/elements-handlers.min.js" id="pro-elements-handlers-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/underscore.min.js" id="underscore-js" defer=""></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script type="rocketlazyloadscript" src="static/js/wp-util.min.js" id="wp-util-js" defer=""></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "none",
            "recaptcha_type": "v3"
        };
    </script>
    <script type="rocketlazyloadscript" src="static/js/frontend.min3.js" id="wpforms-elementor-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/jquery.validate.min.js" id="wpforms-validation-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/mailcheck.min.js" id="wpforms-mailcheck-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/punycode.min.js" id="wpforms-punycode-js" defer=""></script>
    <script type="rocketlazyloadscript" src="static/js/wpforms.min.js" id="wpforms-js" defer=""></script>
    <script type="rocketlazyloadscript">
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wpforms_settings = {
                "val_required": "This field is required.",
                "val_email": "Please enter a valid email address.",
                "val_email_suggestion": "Did you mean {suggestion}?",
                "val_email_suggestion_title": "Click to accept this suggestion.",
                "val_email_restricted": "This email address is not allowed.",
                "val_number": "Please enter a valid number.",
                "val_number_positive": "Please enter a valid positive number.",
                "val_confirm": "Field values do not match.",
                "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
                "val_limit_characters": "{count} of {limit} max characters.",
                "val_limit_words": "{count} of {limit} max words.",
                "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
                "val_empty_blanks": "Please fill out all blanks.",
                "uuid_cookie": "1",
                "locale": "en",
                "wpforms_plugin_url": "https:\/\/www.adhmt.com\/wp-content\/plugins\/wpforms\/",
                "gdpr": "",
                "ajaxurl": "https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php",
                "mailcheck_enabled": "1",
                "mailcheck_domains": [],
                "mailcheck_toplevel_domains": ["dev"],
                "is_ssl": "1",
                "currency_code": "USD",
                "currency_thousands": ",",
                "currency_decimals": "2",
                "currency_decimal": ".",
                "currency_symbol": "$",
                "currency_symbol_pos": "left",
                "val_requiredpayment": "Payment is required.",
                "val_creditcard": "Please enter a valid credit card number.",
                "val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
                "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
                "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
                "val_time_limit": "Please enter time between {minTime} and {maxTime}.",
                "val_url": "Please enter a valid URL.",
                "val_fileextension": "File type is not allowed.",
                "val_filesize": "File exceeds max size allowed. File was not uploaded.",
                "post_max_size": "104857600",
                "val_password_strength": "A stronger password is required. Consider using upper and lower case letters, numbers, and symbols.",
                "val_phone": "Please enter a valid phone number.",
                "richtext_add_media_button": "",
                "entry_preview_iframe_styles": ["https:\/\/www.adhmt.com\/wp-includes\/js\/tinymce\/skins\/lightgray\/content.min.css?ver=5.9", "https:\/\/www.adhmt.com\/wp-includes\/css\/dashicons.min.css?ver=5.9", "https:\/\/www.adhmt.com\/wp-includes\/js\/tinymce\/skins\/wordpress\/wp-content.css?ver=5.9"]
            }
            /* ]]> */
    </script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async="" src="static/js/lazyload.min.js"></script>
    <script type="rocketlazyloadscript">"use strict";var wprRemoveCPCSS=function wprRemoveCPCSS(){var elem;document.querySelector('link[data-rocket-async="style"][rel="preload"]')?setTimeout(wprRemoveCPCSS,200):(elem=document.getElementById("rocket-critical-css"))&&"remove"in elem&&elem.remove()};window.addEventListener?window.addEventListener("load",wprRemoveCPCSS):window.attachEvent&&window.attachEvent("onload",wprRemoveCPCSS);
    </script>
    <script>
        class RocketElementorAnimation {
            constructor() {
                this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode)
            }
            _detectAnimations() {
                let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
                this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t => {
                    const e = t.getBoundingClientRect();
                    if (e.bottom >= 0 && e.top <= window.innerHeight) try {
                        this._animateElement(t)
                    } catch (t) {}
                })
            }
            _animateElement(t) {
                const e = JSON.parse(t.dataset.settings),
                    i = e._animation_delay || e.animation_delay || 0,
                    n = e[this.animationSettingKeys.find(t => e[t])];
                if ("none" === n) return void t.classList.remove("elementor-invisible");
                t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n;
                let s = setTimeout(() => {
                    t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this._removeAnimationSettings(t, e)
                }, i);
                window.addEventListener("rocket-startLoading", function() {
                    clearTimeout(s)
                })
            }
            _listAnimationSettingsKeys(t = "mobile") {
                const e = [""];
                switch (t) {
                    case "mobile":
                        e.unshift("_mobile");
                    case "tablet":
                        e.unshift("_tablet");
                    case "desktop":
                        e.unshift("_desktop")
                }
                const i = [];
                return ["animation", "_animation"].forEach(t => {
                    e.forEach(e => {
                        i.push(t + e)
                    })
                }), i
            }
            _removeAnimationSettings(t, e) {
                this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e)
            }
            static run() {
                const t = new RocketElementorAnimation;
                requestAnimationFrame(t._detectAnimations.bind(t))
            }
        }
        document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);
    </script><noscript><link rel="stylesheet" href="static/css/css.css"><link rel='stylesheet' id='wp-block-library-css' href='static/css/style.min.css' media='all'><link rel='stylesheet' id='astra-theme-css-css' href='https://www.adhmt.com/wp-content/themes/astra/assets/css/minified/frontend.min.css?ver=3.7.7' media='all'><link data-minify="1" rel='stylesheet' id='astra-google-fonts-css' href='static/css/astra-local-fonts.css' media='all'><link data-minify="1" rel='stylesheet' id='trp-language-switcher-style-css' href='static/css/trp-language-switcher.css' media='all'><link data-minify="1" rel='stylesheet' id='astra-addon-css-css' href='static/css/astra-addon-61f1085d129cf8-25040518.css' media='all'><link data-minify="1" rel='stylesheet' id='elementor-icons-css' href='static/css/elementor-icons.min.css' media='all'><link rel='stylesheet' id='elementor-frontend-css' href='static/css/frontend.min.css' media='all'><link rel='stylesheet' id='elementor-pro-css' href='static/css/frontend.min1.css' media='all'><link rel='stylesheet' id='uael-frontend-css' href='static/css/uael-frontend.min.css' media='all'><link rel='stylesheet' id='wpforms-full-css' href='static/css/wpforms-full.min.css' media='all'><link data-minify="1" rel='stylesheet' id='font-awesome-5-all-css' href='static/css/all.min.css' media='all'><link rel='stylesheet' id='font-awesome-4-shim-css' href='static/css/v4-shims.min.css' media='all'><link rel='stylesheet' id='adh-theme-css-css' href='https://www.adhmt.com/wp-content/themes/adh/style.css?ver=1.0.0' media='all'><link rel='stylesheet' id='elementor-icons-shared-0-css' href='static/css/fontawesome.min.css' media='all'><link data-minify="1" rel='stylesheet' id='elementor-icons-fa-regular-css' href='static/css/regular.min.css' media='all'><link data-minify="1" rel='stylesheet' id='elementor-icons-fa-solid-css' href='static/css/solid.min.css' media='all'><link data-minify="1" rel='stylesheet' id='elementor-icons-fa-brands-css' href='static/css/brands.min.css' media='all'><link rel='stylesheet' id='e-animations-css' href='static/css/animations.min.css' media='all'></noscript>

</body></html>