<!DOCTYPE html><!-- saved from url=(0063)https://www.adhmt.com/products/press-brake/robotic-press-brake/ --><html lang="zh-CN" prefix="og: https://ogp.me/ns#" class="translated-ltr"><head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-VWRCJYQDF2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VWRCJYQDF2');
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script>
        if(navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
				var href = document.location.href;
				if(!href.match(/[?&]nowprocket/)) {
					if(href.indexOf("?") == -1) {
						if(href.indexOf("#") == -1) {
							document.location.href = href + "?nowprocket=1"
						} else {
							document.location.href = href.replace("#", "?nowprocket=1#")
						}
					} else {
						if(href.indexOf("#") == -1) {
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
						if(n) {
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
							if(n && n.fn && !e.allJQueries.includes(n)) {
								n.fn.ready = n.fn.init.prototype.ready = function(t) {
									e.domReadyFired ? t.bind(document)(n) : document.addEventListener("rocket-DOMContentLoaded", (() => t.bind(document)(n)))
								};
								const t = n.fn.on;
								n.fn.on = n.fn.init.prototype.on = function() {
									if(this[0] === window) {
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

    <title>Slitting round blade - </title>
    <link rel="preload" as="style" href="/product/fonts_googleapis.css">
    <style id="" media="all">
        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEz0dL_nz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEzQdL_nz.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEzwdL_nz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEzMdL_nz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEz8dL_nz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(/static/font/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/static/font/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/static/font/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(//fonts.gstatic.com/s/robotoslab/v16/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">

    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="/product/style.min.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/frontend.min.css" data-rocket-async="style" as="style" media="all">
    <style id="astra-theme-css-inline-css">
        html {
            font-size: 112.5%;
        }

        a,
        .page-title {
            color: #2B4B7C;
        }

        a:hover,
        a:focus {
            color: #2B4B7C;
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
            background-color: #2B4B7C;
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
            border-color: #2B4B7C;
            background-color: #2B4B7C;
        }

        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: #2B4B7C;
        }

        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: #2B4B7C;
            background-color: #2B4B7C;
            box-shadow: none;
        }

        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: #2B4B7C;
            border-color: #2B4B7C;
        }

        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: #2B4B7C;
        }

        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: #2B4B7C;
        }

        .entry-meta a:hover,
        .entry-meta a:hover *,
        .entry-meta a:focus,
        .entry-meta a:focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: #2B4B7C;
        }

        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: #2B4B7C;
        }

        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: #2B4B7C;
        }

        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: #2B4B7C;
            border-color: #2B4B7C;
        }

        .calendar_wrap #today>a {
            color: #ffffff;
        }

        .page-links .page-link,
        .single .post-navigation a {
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            border-color: #2B4B7C;
            background-color: rgba(0, 0, 0, 0);
        }

        .elementor-button-wrapper .elementor-button:hover,
        .elementor-button-wrapper .elementor-button:focus {
            color: #ffffff;
            background-color: #2b4b7c;
            border-color: #000000;
        }

        .wp-block-button .wp-block-button__link,
        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: #2b4b7c;
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
            background-color: #2b4b7c;
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
            border-color: #2B4B7C;
            background-color: rgba(0, 0, 0, 0);
            color: #2b4b7c;
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
            color: #2b4b7c;
            border-color: #2B4B7C;
            background-color: rgba(0, 0, 0, 0);
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
            background-color: #2b4b7c;
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
            src: url(/static/font/astra.woff) format("woff"), url(/static/font/astra.ttf) format("truetype"), url(/static/font/astra.svg#astra) format("svg");
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
            color: #2B4B7C;
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

        .ast-header-button-1 .ast-custom-button {
            color: #000000;
            background: #c1f222;
            border-top-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-radius: 0;
        }

        .ast-header-button-1 .ast-custom-button:hover {
            color: #000000;
            background: #c1f222;
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
            border-color: #2B4B7C;
            border-style: solid;
            border-radius: 0;
        }

        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }

        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
            height: calc(0px + 5px);
        }

        .ast-builder-menu-1 .main-header-menu,
        .ast-builder-menu-1 .main-header-menu .sub-menu {
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
                color: #2B4B7C;
            }

            .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
                color: #2B4B7C;
            }

            .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
            .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
            .ast-builder-menu-1 .current-menu-ancestor>.menu-link,
            .ast-builder-menu-1 .current-menu-ancestor>.ast-menu-toggle {
                color: #2B4B7C;
            }

            .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
                color: #2B4B7C;
            }

            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0px;
                right: calc(20px - 0.907em);
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
            background-color: #2B4B7C;
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
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(https://www.adhmt.com/wp-content/uploads/2021/06/about-bg-free-img.jpg);
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
            background-color: #2B4B7C;
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
            grid-template-columns: repeat(2, 1fr);
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
            box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.39);
        }

        .ast-desktop .ast-mega-menu-enabled .ast-builder-menu-1 div:not(.astra-full-megamenu-wrapper) .sub-menu,
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
            min-height: calc(1.2em + 24px);
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
            right: calc(20px - 0.907em);
        }

        .ast-mobile-popup-drawer.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            left: calc(20px - 0.907em);
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
            background-color: #2B4B7C;
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
            background: #2B4B7C;
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
    <link data-minify="1" rel="stylesheet" href="/product/astra-local-fonts.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/trp-language-switcher.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/astra-addon-61b1b636505ab3-92433527.css" data-rocket-async="style" as="style" media="all">
    <style id="astra-addon-css-inline-css">
        #content:before {
            content: "921";
            position: absolute;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
        }

        .single .ast-author-details .author-title {
            color: #2B4B7C;
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
            background: #2B4B7C;
            color: #ffffff;
        }

        .ast-article-post .ast-date-meta .posted-on .date-month,
        .ast-article-post .ast-date-meta .posted-on .date-year {
            color: #ffffff;
        }

        .ast-load-more:hover {
            color: #ffffff;
            border-color: #2B4B7C;
            background-color: #2B4B7C;
        }

        .ast-loader>div {
            background-color: #2B4B7C;
        }

        .ast-single-post .entry-title,
        .page-title {
            color: #2B4B7C;
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
                right: calc(20px - 0.907em);
            }

            .ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
                right: calc(20px - 0.907em);
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
                right: calc(20px - 0.907em);
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
            background: #2B4B7C;
        }

        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-fill,
        [CLASS*="-sticky-header-active"] .ast-header-sticked [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
            color: #ffffff;
            border: none;
        }

        #ast-scroll-top {
            background-color: #2B4B7C;
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

        .ast-header-button-1 .ast-builder-button-wrap .ast-custom-button {
            font-weight: normal;
            text-transform: capitalize;
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
            background: #2B4B7C;
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
    <link data-minify="1" rel="stylesheet" href="/product/elementor-icons.min.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/frontend.min1.css" data-rocket-async="style" as="style" media="all">
    <style id="elementor-frontend-inline-css">
        @font-face {
            font-family: eicons;
            src: url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
            src: url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://www.adhmt.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }

        .elementor-kit-5426 {
            --e-global-color-primary: #2B4B7C;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #C1F222;
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
            background-color: var(--e-global-color-primary);
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
            background-color: #2B4B7C;
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
            color: #C1F222;
        }

        .elementor-3467 .elementor-element.elementor-element-1af56af8 .elementor-icon-list-icon svg {
            fill: #C1F222;
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
            background-color: #C1F222;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #C1F222;
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
            margin-right: calc(20px / 2);
            margin-left: calc(20px / 2);
        }

        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-none .uael-dual-button-wrap {
            margin-right: calc(-20px / 2);
            margin-left: calc(-20px / 2);
        }

        .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper {
            margin-bottom: calc(20px / 2);
            margin-top: calc(20px / 2);
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
            background-color: #2B4B7C00;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-3467 .elementor-element.elementor-element-5ae8d687:not(.elementor-motion-effects-element-type-background),
        .elementor-3467 .elementor-element.elementor-element-5ae8d687>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            /* background-image: url("https://www.adhmt.com/wp-content/uploads/2021/06/blob-grad-1-1.png"); */
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
            /* background-image: url("https://www.adhmt.com/wp-content/uploads/2021/06/placeholder-25.png"); */
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness(100%) contrast(100%) saturate(100%) blur(40px) hue-rotate(0deg);
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
            background-color: #2B4B7C9E;
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
            background-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-1e92adac.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #2B4B7C;
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
            /* background-image: url("https://www.adhmt.com/wp-content/uploads/2021/06/placeholder-25.png"); */
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness(100%) contrast(100%) saturate(100%) blur(40px) hue-rotate(0deg);
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
            background-color: #2B4B7C9E;
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
            background-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-c75a9ae.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-3467 .elementor-element.elementor-element-c75a9ae>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }

        .elementor-3467 .elementor-element.elementor-element-8087382>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
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
            /* background-image: url("https://www.adhmt.com/wp-content/uploads/2021/06/placeholder-25.png"); */
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness(100%) contrast(100%) saturate(100%) blur(40px) hue-rotate(0deg);
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
            background-color: #2B4B7C9E;
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
            background-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-14823dfa.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #2B4B7C;
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
            /* background-image: url("https://www.adhmt.com/wp-content/uploads/2021/06/placeholder-25.png"); */
            background-position: bottom left;
            background-repeat: no-repeat;
            background-size: 80% auto;
            opacity: 0.4;
            filter: brightness(100%) contrast(100%) saturate(100%) blur(40px) hue-rotate(0deg);
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
            background-color: #2B4B7C9E;
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
            background-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip.tooltipster-noir.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #2B4B7C;
        }

        .tooltipster-sidetip.uael-tooltip-wrap-39d9dd0b.uael-hotspot-tooltip .tooltipster-box {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-3467 .elementor-element.elementor-element-39d9dd0b>.elementor-widget-container {
            box-shadow: 0px 32px 56px -24px rgba(0, 70.99999999999993, 186, 0.23921568627450981);
        }

        .elementor-3467 .elementor-element.elementor-element-1b144603>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
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
            background-color: #2B4B7C;
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
            background-color: #C1F222;
            border-radius: 0px 0px 0px 0px;
            padding: 15px 30px 15px 30px;
        }

        .elementor-3467 .elementor-element.elementor-element-6bd54ec6 .elementor-button:hover,
        .elementor-3467 .elementor-element.elementor-element-6bd54ec6 .elementor-button:focus {
            background-color: #C1F222;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
            color: #2B4B7C;
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
                margin-bottom: calc(20px / 2);
                margin-top: calc(20px / 2);
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
                padding: 20px 20px 20px 20px;
            }

            .elementor-3467 .elementor-element.elementor-element-68bef096 {
                border-width: 0px 0px 0px 0px;
                margin-top: 24px;
                margin-bottom: 0px;
            }

            .elementor-3467 .elementor-element.elementor-element-42216817>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
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
                margin-bottom: calc(20px / 2);
                margin-top: calc(20px / 2);
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
                margin-right: calc(20px / 2);
                margin-left: calc(20px / 2);
            }

            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-none .uael-dual-button-wrap {
                margin-right: calc(-20px / 2);
                margin-left: calc(-20px / 2);
            }

            .elementor-3467 .elementor-element.elementor-element-10a72533.uael-button-stack-desktop .uael-dual-button-wrap .uael-button-wrapper {
                margin-bottom: calc(20px / 2);
                margin-top: calc(20px / 2);
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

        .elementor-4181 .elementor-element.elementor-element-a048cd6:not(.elementor-motion-effects-element-type-background),
        .elementor-4181 .elementor-element.elementor-element-a048cd6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-primary);
        }

        .elementor-4181 .elementor-element.elementor-element-a048cd6 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 0px 50px 0px;
        }

        .elementor-4181 .elementor-element.elementor-element-a048cd6>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-4181 .elementor-element.elementor-element-37d0129.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-4181 .elementor-element.elementor-element-37d0129.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-4181 .elementor-element.elementor-element-ec83ff6 .elementor-heading-title {
            color: #FFFFFF;
            font-size: 48px;
            font-weight: 600;
        }

        .elementor-4181 .elementor-element.elementor-element-2d8ee05 {
            color: #FFFFFF;
        }

        .elementor-4181 .elementor-element.elementor-element-34edd7c>.elementor-element-populated {
            padding: 30px 30px 30px 30px;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-container select option {
            background-color: #fafafa;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style input[type="radio"]+label:before {
            background-color: #fafafa;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style input[type="radio"]:checked+label:before {
            background-color: #7a7a7a;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]:checked+label:before {
            box-shadow: inset 0px 0px 0px 4px #fafafa;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-indicator-steps,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-divider,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-divider h3,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-radio li label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-payment-multiple li label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-single-item-price,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-checkbox li label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-payment-total,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-indicator-page-title,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-captcha .wpforms-field-label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-likert_scale .wpforms-field-label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-field-file-upload input[type=file] {
            color: #FFFFFF;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field select {
            border-style: solid;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-style: solid;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-width: 1px 1px 1px 1px;
            border-color: #eaeaea;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label:hover,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-width: 1px 1px 1px 1px;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label:hover,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-indicator.circles {
            border-color: #eaeaea;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e.uael-wpf-style-underline .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form button[type=submit],
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form button[type=submit]:hover,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-button,
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-button:hover {
            color: #FFFFFF;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form button[type=submit],
        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style .wpforms-form .wpforms-page-button {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4181 .elementor-element.elementor-element-61dbd4e .uael-wpf-style label.wpforms-error {
            color: #ff0000;
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

        @media(min-width:768px) {
            .elementor-4181 .elementor-element.elementor-element-37d0129 {
                width: 41.499%;
            }

            .elementor-4181 .elementor-element.elementor-element-34edd7c {
                width: 58.113%;
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

        .elementor-5412 .elementor-element.elementor-element-851b203:not(.elementor-motion-effects-element-type-background),
        .elementor-5412 .elementor-element.elementor-element-851b203>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-ca3beb7);
        }

        .elementor-5412 .elementor-element.elementor-element-851b203 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 30px 30px 30px 30px;
        }

        .elementor-5412 .elementor-element.elementor-element-851b203>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-5412 .elementor-element.elementor-element-7b8239ff .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-size: 21px;
            font-weight: 800;
            text-transform: capitalize;
        }

        .elementor-5412 .elementor-element.elementor-element-37866615 {
            text-align: left;
            font-family: "Muli", Sans-serif;
            font-size: 14px;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-container select option {
            background-color: #fafafa;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style input[type="radio"]+label:before {
            background-color: #fafafa;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style input[type="radio"]:checked+label:before {
            background-color: #7a7a7a;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]:checked+label:before {
            box-shadow: inset 0px 0px 0px 4px #fafafa;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field select {
            border-style: solid;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-style: solid;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-width: 1px 1px 1px 1px;
            border-color: #eaeaea;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label:hover,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-width: 1px 1px 1px 1px;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form ul.wpforms-image-choices-modern label:hover,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-page-indicator.circles {
            border-color: #eaeaea;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-5412 .elementor-element.elementor-element-b978202.uael-wpf-style-underline .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-5412 .elementor-element.elementor-element-b978202 .uael-wpf-style label.wpforms-error {
            color: #ff0000;
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
            background-color: var(--e-global-color-ca3beb7);
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

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-container select option {
            background-color: #fafafa;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style input[type="radio"]+label:before {
            background-color: #fafafa;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style input[type="radio"]:checked+label:before {
            background-color: #7a7a7a;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input[type="radio"]:checked+label:before {
            box-shadow: inset 0px 0px 0px 4px #fafafa;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field select,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field textarea,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field-description.wpforms-disclaimer-description {
            border-width: 0 0 2px 0;
            border-style: solid;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form ul.wpforms-image-choices-modern label:hover {
            border-width: 2px;
            border-style: solid;
            box-sizing: content-box;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field select,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field textarea {
            border-color: #c4c4c4;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field input[type="radio"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-form ul.wpforms-image-choices-modern label:hover {
            border-color: #c4c4c4;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field textarea,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field select,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input[type="checkbox"]+label:before,
        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
        .elementor-3968 .elementor-element.elementor-element-6091d38.uael-wpf-style-underline .wpforms-container-full .wpforms-form ul.wpforms-image-choices-modern label {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style label.wpforms-error {
            color: #ff0000;
        }

        #elementor-popup-modal-3968 .dialog-message {
            width: 50vw;
            height: auto;
        }

        #elementor-popup-modal-3968 {
            justify-content: center;
            align-items: center;
            pointer-events: all;
            background-color: #2B4B7CE8;
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
            color: var(--e-global-color-primary);
        }

        #elementor-popup-modal-3968 .dialog-close-button svg {
            fill: var(--e-global-color-primary);
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

            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-radio li label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-checkbox li label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-page-indicator-steps,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-payment-multiple li label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-single-item-price,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-payment-total,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-divider,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-html,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-divider h3,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-page-indicator-steps,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-page-indicator-page-title,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-captcha .wpforms-field-label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-likert_scale .wpforms-field-label,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-file-upload input[type=file] {
                font-size: 14px;
            }

            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input:not([type=submit]):not([type=image]):not([type=button]):not([type=file]):not([type=radio]):not([type=checkbox]),
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field input::placeholder,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field textarea,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field textarea::placeholder,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field select,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-description.wpforms-disclaimer-description,
            .elementor-3968 .elementor-element.elementor-element-6091d38 .uael-wpf-style .wpforms-form .wpforms-field-likert_scale tbody tr th {
                font-size: 14px;
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
    <link rel="stylesheet" href="/product/frontend.min2.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/uael-frontend.min.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/wpforms-full.min.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/all.min.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/v4-shims.min.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/style.css" data-rocket-async="style" as="style" media="all">
    <link rel="stylesheet" href="/product/fontawesome.min.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/regular.min.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/solid.min.css" data-rocket-async="style" as="style" media="all">
    <link data-minify="1" rel="stylesheet" href="/product/brands.min.css" data-rocket-async="style" as="style" media="all">

    <script src="/product/jquery.min.js" id="jquery-core-js"></script>
    <script src="/product/jquery-migrate.min.js" id="jquery-migrate-js" defer=""></script>
    <script src="/product/v4-shims.min.js" id="font-awesome-4-shim-js" defer=""></script>

    <meta name="generator" content="WordPress 5.8.2">
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

        div.wpforms-container-full .wpforms-form input[type=email],
        div.wpforms-container-full .wpforms-form input[type=number],
        div.wpforms-container-full .wpforms-form input[type=text],
        div.wpforms-container-full .wpforms-form input[type=url],
        div.wpforms-container-full .wpforms-form textarea {
            padding: 15px !important;
        }

        #wpforms-submit-13 {
            background-color: #c1f222;
            color: #000000;
            border-style: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 3px;
        }

        #wpforms-submit-13:hover {
            background-color: #F2F2F4;
        }
    </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>
    <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
			(function(w) {
				"use strict";
				if(!w.loadCSS) {
					w.loadCSS = function() {}
				}
				var rp = loadCSS.relpreload = {};
				rp.support = (function() {
					var ret;
					try {
						ret = w.document.createElement("link").relList.supports("preload")
					} catch(e) {
						ret = !1
					}
					return function() {
						return ret
					}
				})();
				rp.bindMediaToggle = function(link) {
					var finalMedia = link.media || "all";

					function enableStylesheet() {
						link.media = finalMedia
					}
					if(link.addEventListener) {
						link.addEventListener("load", enableStylesheet)
					} else if(link.attachEvent) {
						link.attachEvent("onload", enableStylesheet)
					}
					setTimeout(function() {
						link.rel = "stylesheet";
						link.media = "only x"
					});
					setTimeout(enableStylesheet, 3000)
				};
				rp.poly = function() {
					if(rp.support()) {
						return
					}
					var links = w.document.getElementsByTagName("link");
					for(var i = 0; i < links.length; i++) {
						var link = links[i];
						if(link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
							link.setAttribute("data-loadcss", !0);
							rp.bindMediaToggle(link)
						}
					}
				};
				if(!rp.support()) {
					rp.poly();
					var run = w.setInterval(rp.poly, 500);
					if(w.addEventListener) {
						w.addEventListener("load", function() {
							rp.poly();
							w.clearInterval(run)
						})
					} else if(w.attachEvent) {
						w.attachEvent("onload", function() {
							rp.poly();
							w.clearInterval(run)
						})
					}
				}
				if(typeof exports !== "undefined") {
					exports.loadCSS = loadCSS
				} else {
					w.loadCSS = loadCSS
				}
			}(typeof global !== "undefined" ? global : this))
		</script>
    <link href="/product/jquery.min.js" rel="preload" as="script">
    <link href="/product/jquery-migrate.min.js" rel="preload" as="script">
    <link href="/product/v4-shims.min.js" rel="preload" as="script">
    <link href="/product/frontend.min.js" rel="preload" as="script">
    <link href="/product/astra-addon-61b1b63650d634-24606830.js" rel="preload" as="script">
    <link href="/product/uael-frontend.min.js" rel="preload" as="script">
    <link href="/product/tooltipster.min.js" rel="preload" as="script">
    <link href="/product/webpack-pro.runtime.min.js" rel="preload" as="script">
    <link href="/product/webpack.runtime.min.js" rel="preload" as="script">
    <link href="/product/frontend-modules.min.js" rel="preload" as="script">
    <link href="/product/frontend.min1.js" rel="preload" as="script">
    <link href="/product/waypoints.min.js" rel="preload" as="script">
    <link href="/product/core.min.js" rel="preload" as="script">
    <link href="/product/swiper.min.js" rel="preload" as="script">
    <link href="/product/share-link.min.js" rel="preload" as="script">
    <link href="/product/dialog.min.js" rel="preload" as="script">
    <link href="/product/frontend.min2.js" rel="preload" as="script">
    <link href="/product/preloaded-elements-handlers.min.js" rel="preload" as="script">
    <link href="/product/preloaded-modules.min.js" rel="preload" as="script">
    <link href="/product/jquery.sticky.min.js" rel="preload" as="script">
    <link href="/product/underscore.min.js" rel="preload" as="script">
    <link href="/product/wp-util.min.js" rel="preload" as="script">
    <link href="/product/frontend.min3.js" rel="preload" as="script">
    <link href="/product/jquery.validate.min.js" rel="preload" as="script">
    <link href="/product/mailcheck.min.js" rel="preload" as="script">
    <link href="/product/punycode.min.js" rel="preload" as="script">
    <link href="/product/wpforms.js" rel="preload" as="script">
    <link href="/product/8hyjuqjfcpp49kny8glii0blzfd3qebj.js" rel="preload" as="script">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="/product/translateelement.css">
    <style>
        hcfy-result.__hcfy__result__loaded__.__hcfy__result__both__ {
            border: 1px dotted
        }
    </style>
    <script src="/product/f(1).txt"></script>
    <style type="text/css" id="ast-site-identity-img" class="ast-site-identity-img">
        #masthead .ast-header-sticked .site-logo-img .astra-logo-svg {
            width: 110px;
        }

        @media (max-width: 921px) {
            #masthead .ast-header-sticked .site-logo-img .astra-logo-svg {
                width: 120px;
            }
        }

        @media (max-width: 544px) {
            #masthead .ast-header-sticked .site-logo-img .astra-logo-svg {
                width: 100px;
            }
        }
    </style>
    <!-- header footer -->
    <link rel="stylesheet" id="elementor-post-6-css" href="/wp-content/uploads/elementor/css/post-6.css?ver=1639183943" media="all">
    <link rel="stylesheet" id="elementor-pro-css" href="/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.3.6" media="all">
    <link rel="stylesheet" id="elementor-post-98-css" href="/wp-content/uploads/elementor/css/post-98.css?ver=1639183944" media="all">
    <link rel="stylesheet" id="elementor-post-125-css" href="/wp-content/uploads/elementor/css/post-125.css?ver=1639183944" media="all">
    <link rel="stylesheet" id="elementor-post-183-css" href="/wp-content/uploads/elementor/css/post-183.css?ver=1639184097" media="all">
    <meta name="keywords" content="">
<link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">
        <!-- twitter分享 -->
        <meta property="twitter:url" content="/product_7_2.php">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="null">

        <!-- facebook分享 -->
        <meta property="og:url" content="/product_7_2.php">
        <meta property="og:type" content="website">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="null">

        <script>
            function shareFacebook() {
                var _shareUrl = 'https://facebook.com/sharer/sharer.php?'; //真实的appkey，必选参数
                _shareUrl += '&u=' + encodeURIComponent(location.href); //参数url设置分享的内容链接|默认当前页location，可选参数
                window.open(_shareUrl, '_blank');
            }
            function shareTwitter() {
                var _shareUrl = 'https://twitter.com/intent/tweet/?'; //真实的appkey，必选参数
                _shareUrl += '&text=' + encodeURIComponent(''); 
                _shareUrl += '&url=' + encodeURIComponent(location.href); 
                window.open(_shareUrl, '_blank');
            }
            function sharePinterest() {
                var _shareUrl = 'https://pinterest.com/pin/create/button/?'; //真实的appkey，必选参数
                _shareUrl += '&media=' + encodeURIComponent('null'); 
                _shareUrl += '&description=' + encodeURIComponent(''); 
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

<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-3467 page-child parent-pageid-606 wp-custom-logo translatepress-en_US ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.5 ast-full-width-layout ast-sticky-main-shrink ast-sticky-header-shrink ast-inherit-site-logo-sticky ast-primary-sticky-enabled elementor-default elementor-kit-5426 elementor-page elementor-page-3467 astra-addon-3.6.3 e--ua-blink e--ua-chrome e--ua-webkit ast-mouse-clicked" data-elementor-device-mode="desktop">
    <a class="skip-link screen-reader-text" href="" role="link" title="跳到内容">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">跳到内容</font>
        </font>
    </a>
    <div class="hfeed site" id="page">







        
    <?php include 'header.php'; ?>
    







        <div id="content" class="site-content">
            <div class="ast-container">
                <div id="primary" class="content-area primary">
                    <main id="main" class="site-main">
                        <article class="post-3467 page type-page status-publish ast-article-single" id="post-3467" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
                            <header class="entry-header ast-header-without-markup">
                            </header>
                            <div class="entry-content clear" itemprop="text">
                                <div data-elementor-type="wp-page" data-elementor-id="3467" class="elementor elementor-3467" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-5f1adbd3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5f1adbd3" data-element_type="section" data-settings="{'background_background':'classic'}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6395c5e" data-id="6395c5e" data-element_type="column" data-settings="{'background_background':'classic'}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-671e90da elementor-widget elementor-widget-image animated fadeIn" data-id="671e90da" data-element_type="widget" data-settings="{}" data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <img width="1000" height="800" src="//cdn.xuansiwei.com/zhang3794/1646141238951/1.jpg" class="attachment-full size-full entered lazyloaded" alt="" data-lazy-sizes="(max-width: 1000px) 100vw, 1000px" data-ll-status="loaded" sizes="(max-width: 1000px) 100vw, 1000px" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ef2d8e4" data-id="2ef2d8e4" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-1a7f4b02 elementor-widget elementor-widget-heading animated fadeInDown" data-id="1a7f4b02" data-element_type="widget" data-settings="{}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Slitting round blade</font>
                                                                    </font>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-9683311 elementor-widget elementor-widget-text-editor animated fadeIn" data-id="9683311" data-element_type="widget" data-settings="{}" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>
																		<font style="vertical-align: inherit;">
																			<font style="vertical-align: inherit;">The product has no breakage, burrs, gaps, soft edges, etc.and the knife edge is smooth and flat, and the edge is sharp.</font>
																		</font>
																	</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1af56af8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1af56af8" data-element_type="widget" data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon">
<i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select materials to ensure product quality.</font></font></span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon">
<i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">From the selection of materials to the finished product, every step is very careful.</font></font></span>
                                                                    </li>
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon">
<i aria-hidden="true" class="far fa-check-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Support customization, timely delivery</font></font></span>
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
                                                        <div class="elementor-element elementor-element-10a72533 uael-button-halign-left uael-mobile-button-halign-justify uael-tablet-button-halign-justify uael-button-stack-tablet elementor-widget elementor-widget-uael-buttons animated fadeIn" data-id="10a72533" data-element_type="widget" data-settings="{}" data-widget_type="uael-buttons.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="uael-dual-button-outer-wrap">
                                                                    <div class="uael-dual-button-wrap">
                                                                        <div class="uael-button-wrapper elementor-button-wrapper uael-dual-button elementor-repeater-item-f96ab12 uael-dual-button-0">
                                                                            <a class="elementor-button-link elementor-button elementor-size-lg elementor-button-link elementor-animation-grow" href="/contact.php">
                                                                                <span class="elementor-button-content-wrapper uael-buttons-icon-">
<span class="elementor-align-icon- elementor-button-icon">
</span>
                                                                                <span class="elementor-button-text elementor-inline-editing" data-elementor-setting-key="buttons.0.text" data-elementor-inline-editing-toolbar="none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Request A Quote</font></font></span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="uael-button-wrapper elementor-button-wrapper uael-dual-button elementor-repeater-item-1a1fde5 uael-dual-button-1">
                                                                            <a class="elementor-button-link elementor-button elementor-size-lg elementor-button-link elementor-animation-grow" href="javascript:;" target="_blank">
                                                                                <span class="elementor-button-content-wrapper uael-buttons-icon- elementor-button-content-wrapper uael-buttons-icon-">
<span class="elementor-align-icon- elementor-button-icon">
</span>
                                                                                <span class="elementor-button-text elementor-inline-editing" data-elementor-setting-key="buttons.1.text" data-elementor-inline-editing-toolbar="none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Watch Video</font></font></span>
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
                                                                                <h6 class="uael-infobox-title-prefix elementor-inline-editing" data-elementor-setting-key="infobox_title_prefix" data-elementor-inline-editing-toolbar="basic">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">CHECK OUT</font>
                                                                                    </font>
                                                                                </h6>
                                                                                <div class="uael-separator-parent">
                                                                                    <div class="uael-separator"></div>
                                                                                </div>
                                                                                <h2 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Product display</font>
                                                                                    </font>
                                                                                </h2>
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
                                                                    <a href="" target="_blank" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                                                                        <span class="elementor-button-text"><font style="vertical-align: inherit;"></font></span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-5ae8d687 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5ae8d687" data-element_type="section" data-settings="{'background_background':'classic'}">
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
                                                                                    <span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ed93d92" data-id="4ed93d92" data-element_type="column" data-settings="{'background_background':'classic'}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-background-overlay"></div>
                                                                        <div class="elementor-element elementor-element-1e92adac elementor-widget elementor-widget-uael-hotspot animated fadeIn" data-id="1e92adac" data-element_type="widget" data-settings="{" _animation":"fadein","position":"top","trigger":"hover","anim_duration":{"unit":"px","size":350,"sizes":[]},"tooltip_height":{"unit":"px","size":"","sizes":[]},"tooltip_height_tablet":{"unit":"px","size":"","sizes":[]},"tooltip_height_mobile":{"unit":"px","size":"","sizes":[]}}"="" data-widget_type="uael-hotspot.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-hotspot  uael-hotspot-tooltip-yes ">
                                                                                    <img width="1024" height="683" src="//cdn.xuansiwei.com/zhang3794/1646141239017/2.jpg" class="attachment-large size-large entered lazyloaded" alt="" data-ll-status="loaded" loading="lazy">
                                                                                    <div class="uael-hotspot-container" data-side="top" data-hotspottrigger="hover" data-arrow="true" data-distance="6" data-delay="300" data-animation="fade" data-animduration="350" data-zindex="99" data-length="3" data-autoplay="" data-repeat="" data-tourinterval="4000" data-overlay="" data-autoaction="" data-hotspotviewport="90" data-tooltip-maxwidth="250" data-tooltip-minwidth="0">
                                                                                        <span class="uael-tooltip elementor-repeater-item-0ee1d19">
<span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-1e92adac-1" data-uaeltour="1" data-tooltip-content="#uael-tooltip-content-1e92adac-0ee1d19">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-0ee1d19"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中心对齐表</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 个中的 1 个</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-1e92adac" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-1e92adac" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        </span>
                                                                                        </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip elementor-repeater-item-e024718">
<span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-1e92adac-2" data-uaeltour="2" data-tooltip-content="#uael-tooltip-content-1e92adac-e024718">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-e024718"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">数控折弯机</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 个中的 2 个</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-1e92adac" data-tooltipid="2">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-1e92adac" data-tooltipid="2">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        </span>
                                                                                        </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip elementor-repeater-item-0cb9342">
<span class="uael-hotspot-main-1e92adac uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-1e92adac-3" data-uaeltour="3" data-tooltip-content="#uael-tooltip-content-1e92adac-0cb9342">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-1e92adac-0cb9342"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">机械手</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 中的 3</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-1e92adac" data-tooltipid="3">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-1e92adac" data-tooltipid="3">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-550a5915 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="550a5915" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-374dec96" data-id="374dec96" data-element_type="column" data-settings="{'background_background':'classic'}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-background-overlay"></div>
                                                                        <div class="elementor-element elementor-element-c75a9ae elementor-widget elementor-widget-uael-hotspot animated fadeIn" data-id="c75a9ae" data-element_type="widget" data-settings="{" _animation":"fadein","position":"top","trigger":"hover","anim_duration":{"unit":"px","size":350,"sizes":[]},"tooltip_height":{"unit":"px","size":"","sizes":[]},"tooltip_height_tablet":{"unit":"px","size":"","sizes":[]},"tooltip_height_mobile":{"unit":"px","size":"","sizes":[]}}"="" data-widget_type="uael-hotspot.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-hotspot  uael-hotspot-tooltip-yes ">
                                                                                    <img width="1024" height="683" src="//cdn.xuansiwei.com/zhang3794/1646141239049/3.jpg" class="attachment-large size-large entered lazyloaded" alt="" data-ll-status="loaded" loading="lazy">
                                                                                    <div class="uael-hotspot-container" data-side="top" data-hotspottrigger="hover" data-arrow="true" data-distance="6" data-delay="300" data-animation="fade" data-animduration="350" data-zindex="99" data-length="1" data-autoplay="" data-repeat="" data-tourinterval="4000" data-overlay="" data-autoaction="" data-hotspotviewport="90" data-tooltip-maxwidth="250" data-tooltip-minwidth="0">
                                                                                        <span class="uael-tooltip elementor-repeater-item-0ee1d19">
<span class="uael-hotspot-main-c75a9ae uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-c75a9ae-1" data-uaeltour="1" data-tooltip-content="#uael-tooltip-content-c75a9ae-0ee1d19">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-c75a9ae-0ee1d19"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">工件</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 中的 1</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-c75a9ae" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-c75a9ae" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
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
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8087382" data-id="8087382" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-5a67c77e elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5a67c77e" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-68bef096 elementor-section-content-middle elementor-reverse-mobile elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="68bef096" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-42216817" data-id="42216817" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-3a8771ba elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3a8771ba" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5006602a" data-id="5006602a" data-element_type="column" data-settings="{'background_background':'classic'}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-background-overlay"></div>
                                                                        <div class="elementor-element elementor-element-14823dfa elementor-widget elementor-widget-uael-hotspot animated fadeIn" data-id="14823dfa" data-element_type="widget" data-settings="{" _animation":"fadein","position":"top","trigger":"hover","anim_duration":{"unit":"px","size":350,"sizes":[]},"tooltip_height":{"unit":"px","size":"","sizes":[]},"tooltip_height_tablet":{"unit":"px","size":"","sizes":[]},"tooltip_height_mobile":{"unit":"px","size":"","sizes":[]}}"="" data-widget_type="uael-hotspot.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-hotspot  uael-hotspot-tooltip-yes ">
                                                                                    <img width="1024" height="683" class="attachment-large size-large entered lazyloaded" alt="" src="//cdn.xuansiwei.com/zhang3794/1646141239096/4.jpg" data-ll-status="loaded" loading="lazy">
                                                                                    <div class="uael-hotspot-container" data-side="top" data-hotspottrigger="hover" data-arrow="true" data-distance="6" data-delay="300" data-animation="fade" data-animduration="350" data-zindex="99" data-length="1" data-autoplay="" data-repeat="" data-tourinterval="4000" data-overlay="" data-autoaction="" data-hotspotviewport="90" data-tooltip-maxwidth="250" data-tooltip-minwidth="0">
                                                                                        <span class="uael-tooltip elementor-repeater-item-0ee1d19">
<span class="uael-hotspot-main-14823dfa uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-14823dfa-1" data-uaeltour="1" data-tooltip-content="#uael-tooltip-content-14823dfa-0ee1d19">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-14823dfa-0ee1d19"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">夹爪</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 中的 1</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-14823dfa" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-14823dfa" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-45bf93e5 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="45bf93e5" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4cf47740" data-id="4cf47740" data-element_type="column" data-settings="{'background_background':'classic'}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-background-overlay"></div>
                                                                        <div class="elementor-element elementor-element-39d9dd0b elementor-widget elementor-widget-uael-hotspot animated fadeIn" data-id="39d9dd0b" data-element_type="widget" data-settings="{" _animation":"fadein","position":"top","trigger":"hover","anim_duration":{"unit":"px","size":350,"sizes":[]},"tooltip_height":{"unit":"px","size":"","sizes":[]},"tooltip_height_tablet":{"unit":"px","size":"","sizes":[]},"tooltip_height_mobile":{"unit":"px","size":"","sizes":[]}}"="" data-widget_type="uael-hotspot.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-hotspot  uael-hotspot-tooltip-yes ">
                                                                                    <img width="1024" height="683" src="//cdn.xuansiwei.com/zhang3794/1646141239136/5.jpg" class="attachment-large size-large entered lazyloaded" alt="" data-ll-status="loaded" loading="lazy">
                                                                                    <div class="uael-hotspot-container" data-side="top" data-hotspottrigger="hover" data-arrow="true" data-distance="6" data-delay="300" data-animation="fade" data-animduration="350" data-zindex="99" data-length="2" data-autoplay="" data-repeat="" data-tourinterval="4000" data-overlay="" data-autoaction="" data-hotspotviewport="90" data-tooltip-maxwidth="250" data-tooltip-minwidth="0">
                                                                                        <span class="uael-tooltip elementor-repeater-item-0ee1d19">
<span class="uael-hotspot-main-39d9dd0b uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-39d9dd0b-1" data-uaeltour="1" data-tooltip-content="#uael-tooltip-content-39d9dd0b-0ee1d19">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-39d9dd0b-0ee1d19"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电器</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 中的 1</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-39d9dd0b" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-39d9dd0b" data-tooltipid="1">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        </span>
                                                                                        </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip elementor-repeater-item-e024718">
<span class="uael-hotspot-main-39d9dd0b uael-hotspot-content uael-hotspot-anim tooltipstered" id="uael-tooltip-id-39d9dd0b-2" data-uaeltour="2" data-tooltip-content="#uael-tooltip-content-39d9dd0b-e024718">
<i aria-hidden="true" class="fa fa-dot-circle-o"></i> </span>
                                                                                        </span>
                                                                                        <span class="uael-tooltip-container">
<span class="uael-tooltip-text uael-tour-inactive" id="uael-tooltip-content-39d9dd0b-e024718"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">控制器</font></font></p> <span class="uael-tour"><span class="uael-actual-step"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 的 2</font></font></span>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-prev-39d9dd0b" data-tooltipid="2">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">“ 以前的</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:;" class="uael-next-39d9dd0b" data-tooltipid="2">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">下一个 ”</font>
                                                                                                    </font>
                                                                                                </a>
                                                                                            </li>
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
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1b144603" data-id="1b144603" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-49bdb850 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="49bdb850" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
                                                                                    <span class="elementor-divider-separator">
</span>
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
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-696e47b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="696e47b3" data-element_type="section" data-settings="{'background_background':'classic'}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f7faac5" data-id="7f7faac5" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-5c71caff elementor-widget elementor-widget-heading" data-id="5c71caff" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Want to get the price?</font>
                                                                    </font>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-72f29589 elementor-widget elementor-widget-text-editor" data-id="72f29589" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>
																		<font style="vertical-align: inherit;">
																			<font style="vertical-align: inherit;">Our sales experts will contact you within 24 hours.
</font>
																		</font>
																	</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6bd54ec6 elementor-align-center elementor-widget elementor-widget-button animated zoomIn" data-id="6bd54ec6" data-element_type="widget" data-settings="{" _animation":"zoomin"}"="" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="javascript:;" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
<span class="elementor-button-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Get Free Quote
</font></font></span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-467f7e8a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="467f7e8a" data-element_type="section" data-settings="{'background_background':'classic'}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-347275a9" data-id="347275a9" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-21cdd8d1 elementor-widget elementor-widget-uael-infobox" data-id="21cdd8d1" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="uael-module-content uael-infobox  uael-infobox-center  uael-infobox-link-type-none">
                                                                    <div class="uael-infobox-left-right-wrap">
                                                                        <div class="uael-infobox-content">
                                                                            <div class="uael-infobox-title-wrap">
                                                                                <h6 class="uael-infobox-title-prefix elementor-inline-editing" data-elementor-setting-key="infobox_title_prefix" data-elementor-inline-editing-toolbar="basic">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Learn about the product</font>
                                                                                    </font>
                                                                                </h6>
                                                                                <div class="uael-separator-parent">
                                                                                    <div class="uael-separator"></div>
                                                                                </div>
                                                                                <h2 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Product Description</font>
                                                                                    </font>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="uael-infobox-text-wrap">
                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                    <p>
																							<font style="vertical-align: inherit;">
																								<font style="vertical-align: inherit;">Through the following product detailed display and text description, you can better understand the performance of the product</font>
																							</font>
																						</p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-3d8e7c7e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d8e7c7e" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-755fcbc5" data-id="755fcbc5" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-72fb2127 elementor-widget elementor-widget-image animated fadeIn" data-id="72fb2127" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1645964959655/xuancai.jpg" class="attachment-large size-large entered lazyloaded" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-ll-status="loaded" sizes="(max-width: 700px) 100vw, 700px" loading="lazy"> </div>
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
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">Choose high-quality raw materials</font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p>
																											<font style="vertical-align: inherit;">
																												<font style="vertical-align: inherit;">Choose high-quality materials,
It is the basis for ensuring product quality</font>
																											</font>
																										</p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-78892a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78892a" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-52e82609" data-id="52e82609" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-861c91a elementor-widget elementor-widget-image animated fadeIn" data-id="861c91a" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="600" height="420" src="//cdn.xuansiwei.com/zhang3794/1645964985257/jingxindamo.jpg" class="attachment-large size-large entered lazyloaded" alt="" data-lazy-sizes="(max-width: 600px) 100vw, 600px" data-ll-status="loaded" sizes="(max-width: 600px) 100vw, 600px" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-74fd56ef" data-id="74fd56ef" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-6630a2b5 elementor-widget elementor-widget-uael-infobox" data-id="6630a2b5" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">Fine grinding machine</font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">The high-precision grinding machine is used for fine grinding, so that the knife edge is sharp, and at the same time, it can be processed for some products to reduce the friction coefficient.</font>
                                                                                                    </font>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-9cdba65 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9cdba65" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-de2993d" data-id="de2993d" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-d48b1e9 elementor-widget elementor-widget-image animated fadeIn" data-id="d48b1e9" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" class="attachment-large size-large entered exited" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" src="//cdn.xuansiwei.com/zhang3794/1646139413796/x3.jpg" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-11ac913" data-id="11ac913" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-937172a elementor-widget elementor-widget-uael-infobox" data-id="937172a" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">Quenching process</font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p>
																											<font style="vertical-align: inherit;">
																												
																												
																											</font><span style="font-style: inherit;font-weight: inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is processed and forged by the quenching and tempering process, which has the advantages of high hardness, strong toughness and corrosion resistance.</font></font></span></p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-64dc3d7b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="64dc3d7b" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d87a79" data-id="2d87a79" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-794ae984 elementor-widget elementor-widget-image animated fadeIn" data-id="794ae984" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" class="attachment-large size-large entered exited" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" src="//cdn.xuansiwei.com/zhang3794/1646139413865/x4.jpg" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-401f963e" data-id="401f963e" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-29feabf9 elementor-widget elementor-widget-uael-infobox" data-id="29feabf9" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">Wide range of applications
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p><span style="font-style: inherit;font-weight: inherit"><font style="vertical-align: inherit;"></font></span><span style="font-style: inherit;font-weight: inherit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Our products are widely used in all walks of life!</font></font></span><span style="font-style: inherit;font-weight: inherit"><font style="vertical-align: inherit;"></font></span></p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-590a453f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="590a453f" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-401a051d" data-id="401a051d" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-69bde833 elementor-widget elementor-widget-image animated fadeIn" data-id="69bde833" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1646139413924/x5.jpg" class="attachment-large size-large" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7cb2fe92" data-id="7cb2fe92" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-3f76c416 elementor-widget elementor-widget-uael-infobox" data-id="3f76c416" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">
                                                                                                    <font style="vertical-align: inherit;">
                                                                                                        <font style="vertical-align: inherit;">Customize the process</font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p><span style="font-style: inherit;font-weight: inherit">In order to meet the different actual needs of each user, one-to-one non-standard tailor-made services are launched.</span><br></p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-d3295aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d3295aa" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1653dd7c" data-id="1653dd7c" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-740da2e8 elementor-widget elementor-widget-image animated fadeIn" data-id="740da2e8" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1646139413960/x6.jpg" class="attachment-large size-large" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-398ea43f" data-id="398ea43f" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-4898f153 elementor-widget elementor-widget-uael-infobox" data-id="4898f153" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Warehouse Packing</h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p><span style="font-style: inherit;font-weight: inherit">Every product that leaves the factory has been strictly tested by us.</span><br></p>
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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-2cbca2a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2cbca2a" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3fb4274" data-id="3fb4274" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-4e33a99a elementor-widget elementor-widget-image animated fadeIn" data-id="4e33a99a" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1646139414017/x7.jpg" class="attachment-large size-large" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c5d2c05" data-id="c5d2c05" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-141df51e elementor-widget elementor-widget-uael-infobox" data-id="141df51e" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Quality Inspection</h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">
                                                                                                    <p><span style="font-style: inherit;font-weight: inherit">Every product that leaves the factory has been strictly tested by us.</span><br></p>

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
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-566000d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="566000d1" data-element_type="section" data-settings="{'background_background':'classic'}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d588c7e" data-id="2d588c7e" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-30abb32a elementor-widget elementor-widget-image animated fadeIn" data-id="30abb32a" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img width="700" height="500" src="//cdn.xuansiwei.com/zhang3794/1646139414044/x8.jpg" class="attachment-large size-large" alt="" data-lazy-sizes="(max-width: 700px) 100vw, 700px" loading="lazy"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-172e7c14" data-id="172e7c14" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-783389f8 elementor-widget elementor-widget-uael-infobox" data-id="783389f8" data-element_type="widget" data-widget_type="uael-infobox.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="uael-module-content uael-infobox  uael-infobox-left  uael-infobox-link-type-none">
                                                                                    <div class="uael-infobox-left-right-wrap">
                                                                                        <div class="uael-infobox-content">
                                                                                            <div class="uael-infobox-title-wrap">
                                                                                                <h3 class="uael-infobox-title elementor-inline-editing" data-elementor-setting-key="infobox_title" data-elementor-inline-editing-toolbar="basic">Perfect after-sales</h3>
                                                                                            </div>
                                                                                            <div class="uael-infobox-text-wrap">
                                                                                                <div class="uael-infobox-text elementor-inline-editing" data-elementor-setting-key="infobox_description" data-elementor-inline-editing-toolbar="advanced">During the use process, we will follow up in time. If we find any problems, we will study and solve them in time.</div>
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
                                                                    <a href="javascript:;" class="elementor-button-link elementor-button elementor-size-xl elementor-button-content-wrapper" style="width:max-content;margin:auto;" role="button">
                                                                        <span class="elementor-button-text">Download brochure</span>
                                                                        <span class="elementor-button-icon elementor-align-icon-right"><i aria-hidden="true" class="fas fa-download"></i></span>
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







        
        <?php include 'footer.php'; ?>
    







    </div>

    <script src="/product/8hyjuqjfcpp49kny8glii0blzfd3qebj.js" async=""></script>
    <a id="ast-scroll-top" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both" style="display: none;">
        <span class="ast-icon icon-arrow"></span> <span class="screen-reader-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">滚动到顶部</font></font></span>
    </a>

    <link rel="stylesheet" href="/product/animations.min.css" data-rocket-async="style" as="style" media="all">
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
    <script src="/product/frontend.min.js" id="astra-theme-js-js" defer=""></script>
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
    <script data-minify="1" src="/product/astra-addon-61b1b63650d634-24606830.js" id="astra-addon-js-js" defer=""></script>
    <script src="/product/wp-embed.min.js" id="wp-embed-js" defer=""></script>
    <script id="uael-frontend-script-js-extra">
        var uael_script = {
            "ajax_url": "https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src="/product/uael-frontend.min.js" id="uael-frontend-script-js" defer=""></script>
    <script src="/product/tooltipster.min.js" id="uael-hotspot-js" defer=""></script>
    <script src="/product/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js" defer=""></script>
    <script src="/product/webpack.runtime.min.js" id="elementor-webpack-runtime-js" defer=""></script>
    <script src="/product/frontend-modules.min.js" id="elementor-frontend-modules-js" defer=""></script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/www.adhmt.com\/wp-admin\/admin-ajax.php",
            "nonce": "63b7c42d27",
            "urls": {
                "assets": "https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/www.adhmt.com\/wp-json\/"
            },
            "i18n": {
                "toc_no_headings_found": "No headings were found on this page."
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="/product/frontend.min1.js" id="elementor-pro-frontend-js" defer=""></script>
    <script src="/product/waypoints.min.js" id="elementor-waypoints-js" defer=""></script>
    <script src="/product/core.min.js" id="jquery-ui-core-js" defer=""></script>
    <script src="/product/swiper.min.js" id="swiper-js" defer=""></script>
    <script src="/product/share-link.min.js" id="share-link-js" defer=""></script>
    <script src="/product/dialog.min.js" id="elementor-dialog-js" defer=""></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.4.8",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "admin-top-bar": true,
                "form-submissions": true
            },
            "urls": {
                "assets": "https:\/\/www.adhmt.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 3467,
                "title": "Robotic%20Press%20Brake%20-%20ADH",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="/product/frontend.min2.js" id="elementor-frontend-js" defer=""></script>
    <script src="/product/preloaded-elements-handlers.min.js" id="pro-preloaded-elements-handlers-js" defer=""></script>
    <script src="/product/preloaded-modules.min.js" id="preloaded-modules-js" defer=""></script>
    <script src="/product/jquery.sticky.min.js" id="e-sticky-js" defer=""></script>
    <script src="/product/underscore.min.js" id="underscore-js" defer=""></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script src="/product/wp-util.min.js" id="wp-util-js" defer=""></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "none",
            "recaptcha_type": "v3"
        };
    </script>
    <script src="/product/frontend.min3.js" id="wpforms-elementor-js" defer=""></script>
    <script src="/product/jquery.validate.min.js" id="wpforms-validation-js" defer=""></script>
    <script src="/product/mailcheck.min.js" id="wpforms-mailcheck-js" defer=""></script>
    <script src="/product/punycode.min.js" id="wpforms-punycode-js" defer=""></script>
    <script data-minify="1" src="/product/wpforms.js" id="wpforms-js" defer=""></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
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
            "entry_preview_iframe_styles": ["https:\/\/www.adhmt.com\/wp-includes\/js\/tinymce\/skins\/lightgray\/content.min.css?ver=5.8.2", "https:\/\/www.adhmt.com\/wp-includes\/css\/dashicons.min.css?ver=5.8.2", "https:\/\/www.adhmt.com\/wp-includes\/js\/tinymce\/skins\/wordpress\/wp-content.css?ver=5.8.2"]
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
    <script data-no-minify="1" async="" src="/product/lazyload.min.js"></script>
    <script>
        "use strict";
        var wprRemoveCPCSS = function wprRemoveCPCSS() {
            var elem;
            document.querySelector('link[data-rocket-async="style"][rel="preload"]') ? setTimeout(wprRemoveCPCSS, 200) : (elem = document.getElementById("rocket-critical-css")) && "remove" in elem && elem.remove()
        };
        window.addEventListener ? window.addEventListener("load", wprRemoveCPCSS) : window.attachEvent && window.attachEvent("onload", wprRemoveCPCSS);
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
    </script>

    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="logo"><img src="/product/translate_24dp.png" width="20" height="20" alt="Google Translate" loading="lazy"></div>
            </div>
        </div>
        <div class="top" style="padding: 8px; float: left; width: 100%;">
            <h1 class="title gray">Original text</h1>
        </div>
        <div class="middle" style="padding: 8px;">
            <div class="original-text"></div>
        </div>
        <div class="bottom" style="padding: 8px;">
            <div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div>
            <div class="started-activity-container">
                <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                <div class="activity-root"></div>
            </div>
        </div>
        <div class="status-message" style="display: none;"></div>
    </div><span id="elementor-device-mode" class="elementor-screen-only"></span>
    <div class="goog-te-spinner-pos">
        <div class="goog-te-spinner-animation">
            <svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
            </svg>
        </div>
    </div>
    <span id="elementor-device-mode" class="elementor-screen-only"></span>

    <div id="tidio-chat"></div>

    <div style="all: initial;">
        <div id="__hcfy__" style="all: initial;"></div>
    </div>

























</body></html>