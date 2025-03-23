<html>

<head>
    <style>
        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/themes/twentynineteen/style.css?ver=2.1 ; media=all */
        @media all {
            input:lang(zh-CN) {
                font-family: -apple-system, BlinkMacSystemFont, "PingFang SC", "Helvetica Neue", "Microsoft YaHei New", STHeiti Light, sans-serif;
            }

            a {
                background-color: transparent;
            }

            img {
                border-style: none;
            }

            input {
                font-family: inherit;
                font-size: 100%;
                line-height: 1.15;
                margin: 0;
            }

            input {
                overflow: visible;
            }

            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }

            input {
                color: #111;
                font-family: "NonBreakingSpaceOverride", "Hoefler Text", Garamond, "Times New Roman", serif;
                font-weight: 400;
                line-height: 1.8;
                text-rendering: optimizeLegibility;
            }

            img:after {
                font-size: 0.71111em;
            }

            i {
                font-style: italic;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }

            a:focus {
                text-decoration: underline;
            }

            ::-moz-selection {
                background-color: #bfdcea;
            }

            ::selection {
                background-color: #bfdcea;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            a {
                transition: color 110ms ease-in-out;
                color: #0073aa;
            }

            a:hover,
            a:active {
                color: #005177;
                outline: 0;
                text-decoration: none;
            }

            a:focus {
                outline: thin;
                outline-style: dotted;
                text-decoration: underline;
            }

            ul {
                padding-left: 1rem;
            }

            ul {
                list-style: disc;
            }

            ul ul {
                list-style-type: circle;
            }

            li {
                line-height: 1.8;
            }

            li>ul {
                padding-left: 2rem;
            }

            img {
                height: auto;
                max-width: 100%;
                position: relative;
            }

            input[type="search"] {
                -webkit-backface-visibility: hidden;
                background: #fff;
                border: solid 1px #ccc;
                box-sizing: border-box;
                outline: none;
                padding: 0.36rem 0.66rem;
                -webkit-appearance: none;
                outline-offset: 0;
                border-radius: 0;
            }

            input[type="search"]:focus {
                border-color: #0073aa;
                outline: thin solid rgba(0, 115, 170, 0.15);
                outline-offset: -4px;
            }

            a {
                transition: color 110ms ease-in-out;
                color: #0073aa;
            }

            a:visited {
                color: #0073aa;
            }

            a:hover,
            a:active {
                color: #005177;
                outline: 0;
                text-decoration: none;
            }

            a:focus {
                outline: thin dotted;
                text-decoration: underline;
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/themes/twentynineteen/print.css?ver=2.1 ; media=print */
        @media print {
            @media print {
                a {
                    page-break-inside: avoid;
                }

                img {
                    page-break-inside: avoid;
                    page-break-after: avoid;
                }

                ul {
                    page-break-before: avoid;
                }

                a:link,
                a:visited,
                a {
                    background: transparent;
                    font-weight: bold;
                    text-decoration: underline;
                    text-align: left;
                }

                a {
                    page-break-inside: avoid;
                }

                .image-filters-enabled *:after {
                    display: none !important;
                }
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.13.0 ; media=all */
        @media all {
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
                -moz-osx-font-smoothing: grayscale;
            }

            .eicon-menu-bar:before {
                content: '\e816';
            }

            .eicon-close:before {
                content: '\e87f';
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.4.7 ; media=all */
        @media all {
            .dialog-close-button {
                cursor: pointer;
                position: absolute;
                margin-top: 15px;
                right: 15px;
                font-size: 15px;
                line-height: 1;
            }

            .elementor-screen-only {
                position: absolute;
                top: -10000em;
                width: 1px;
                height: 1px;
                margin: -1px;
                padding: 0;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                border: 0;
            }

            .elementor *,
            .elementor :after,
            .elementor :before {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .elementor a {
                -webkit-box-shadow: none;
                box-shadow: none;
                text-decoration: none;
            }

            .elementor img {
                height: auto;
                max-width: 100%;
                border: none;
                -webkit-border-radius: 0;
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .elementor-section {
                position: relative;
            }

            .elementor-section .elementor-container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-right: auto;
                margin-left: auto;
                position: relative;
            }

            @media (max-width:1024px) {
                .elementor-section .elementor-container {
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }
            }

            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1140px;
            }

            .elementor-widget-wrap {
                position: relative;
                width: 100%;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-line-pack: start;
                align-content: flex-start;
            }

            .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .elementor-widget-wrap>.elementor-element {
                width: 100%;
            }

            .elementor-widget {
                position: relative;
            }

            .elementor-column {
                min-height: 1px;
            }

            .elementor-column {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
                padding: 10px;
            }

            @media (min-width:768px) {
                .elementor-column.elementor-col-33 {
                    width: 33.333%;
                }
            }

            @media (max-width:767px) {
                .elementor-column {
                    width: 100%;
                }
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
                -moz-osx-font-smoothing: grayscale;
            }

            .eicon-menu-bar:before {
                content: "\e816";
            }

            .eicon-close:before {
                content: "\e87f";
            }

            .elementor-element .elementor-widget-container {
                -webkit-transition: background .3s, border .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s;
                transition: background .3s, border .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s;
                -o-transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
                transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
                transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s;
            }

            @media (max-width:767px) {
                .elementor .elementor-hidden-mobile {
                    display: none;
                }
            }

            .elementor-widget-image {
                text-align: center;
            }

            .elementor-widget-image img {
                vertical-align: middle;
                display: inline-block;
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/uploads/elementor/css/post-6.css?ver=1639183943 ; media=all */
        @media all {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1140px;
            }

            @media (max-width:1024px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width: 1024px;
                }
            }

            @media (max-width:767px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width: 767px;
                }
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.3.6 ; media=all */
        @media all {
            .elementor-search-form {
                display: block;
                -webkit-transition: .2s;
                -o-transition: .2s;
                transition: .2s;
            }

            .elementor-search-form input[type=search] {
                margin: 0;
                border: 0;
                padding: 0;
                display: inline-block;
                vertical-align: middle;
                white-space: normal;
                background: none;
                line-height: 1;
                min-width: 0;
                font-size: 15px;
                -webkit-appearance: none;
                -moz-appearance: none;
            }

            .elementor-search-form input[type=search]:focus {
                outline: 0;
                color: inherit;
            }

            .elementor-search-form__container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-transition: .2s;
                -o-transition: .2s;
                transition: .2s;
                overflow: hidden;
                border: 0 solid transparent;
                min-height: 50px;
            }

            .elementor-search-form__container:not(.elementor-search-form--full-screen) {
                background: #eceeef;
            }

            .elementor-search-form__input {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                color: #55595c;
                -webkit-transition: color .2s;
                -o-transition: color .2s;
                transition: color .2s;
            }

            .elementor-search-form__input::-webkit-input-placeholder {
                color: inherit;
                font-family: inherit;
                opacity: .6;
            }

            .elementor-search-form__input:-ms-input-placeholder {
                color: inherit;
                font-family: inherit;
                opacity: .6;
            }

            .elementor-search-form__input:-moz-placeholder,
            .elementor-search-form__input::-moz-placeholder {
                color: inherit;
                font-family: inherit;
                opacity: .6;
            }

            .elementor-search-form__input::-ms-input-placeholder {
                color: inherit;
                font-family: inherit;
                opacity: .6;
            }

            .elementor-search-form__input::placeholder {
                color: inherit;
                font-family: inherit;
                opacity: .6;
            }

            .elementor-search-form--skin-full_screen .elementor-search-form input[type=search].elementor-search-form__input {
                font-size: 50px;
                text-align: center;
                border: solid #fff;
                border-width: 0 0 1px;
                line-height: 1.5;
                color: #fff;
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__toggle {
                display: inline-block;
                cursor: pointer;
                vertical-align: middle;
                color: var(--e-search-form-toggle-color, #494c4f);
                font-size: var(--e-search-form-toggle-size, 33px);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__toggle i {
                position: relative;
                display: block;
                -webkit-transition: .2s;
                -o-transition: .2s;
                transition: .2s;
                width: var(--e-search-form-toggle-size, 33px);
                height: var(--e-search-form-toggle-size, 33px);
                background-color: var(--e-search-form-toggle-background-color, rgba(0, 0, 0, .05));
                border: var(--e-search-form-toggle-border-width, 0) solid var(--e-search-form-toggle-color, #494c4f);
                border-radius: var(--e-search-form-toggle-border-radius, 3px);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before {
                font-size: var(--e-search-form-toggle-icon-size, .55em);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__container {
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                position: fixed;
                z-index: 9998;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                height: 100vh;
                padding: 0 15%;
                background-color: rgba(0, 0, 0, .8);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) {
                overflow: hidden;
                opacity: 0;
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
            }

            .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) .dialog-lightbox-close-button {
                display: none;
            }

            .elementor-item:after,
            .elementor-item:before {
                display: block;
                position: absolute;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                -webkit-transition-timing-function: cubic-bezier(.58, .3, .005, 1);
                -o-transition-timing-function: cubic-bezier(.58, .3, .005, 1);
                transition-timing-function: cubic-bezier(.58, .3, .005, 1);
            }

            .elementor-item-active:after,
            .elementor-item-active:before,
            .elementor-item:focus:after,
            .elementor-item:focus:before,
            .elementor-item:hover:after,
            .elementor-item:hover:before {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            .elementor-nav-menu--main .elementor-nav-menu a {
                -webkit-transition: .4s;
                -o-transition: .4s;
                transition: .4s;
            }

            .elementor-nav-menu--main .elementor-nav-menu a,
            .elementor-nav-menu--main .elementor-nav-menu a:focus,
            .elementor-nav-menu--main .elementor-nav-menu a:hover {
                padding: 13px 20px;
            }

            .elementor-nav-menu--main .elementor-nav-menu ul {
                position: absolute;
                width: 16em;
                border-width: 0;
                border-style: solid;
                padding: 0;
            }

            .elementor-nav-menu--layout-horizontal {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .elementor-nav-menu--layout-horizontal .elementor-nav-menu a {
                white-space: nowrap;
            }

            .elementor-nav-menu__align-right .elementor-nav-menu {
                margin-left: auto;
            }

            .elementor-nav-menu__align-right .elementor-nav-menu {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .elementor-widget-nav-menu .elementor-widget-container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .elementor-nav-menu {
                position: relative;
                z-index: 2;
            }

            .elementor-nav-menu:after {
                content: "\00a0";
                display: block;
                height: 0;
                font: 0/0 serif;
                clear: both;
                visibility: hidden;
                overflow: hidden;
            }

            .elementor-nav-menu,
            .elementor-nav-menu li,
            .elementor-nav-menu ul {
                display: block;
                list-style: none;
                margin: 0;
                padding: 0;
                line-height: normal;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }

            .elementor-nav-menu ul {
                display: none;
            }

            .elementor-nav-menu ul ul a,
            .elementor-nav-menu ul ul a:active,
            .elementor-nav-menu ul ul a:focus,
            .elementor-nav-menu ul ul a:hover {
                border-left: 16px solid transparent;
            }

            .elementor-nav-menu a,
            .elementor-nav-menu li {
                position: relative;
            }

            .elementor-nav-menu li {
                border-width: 0;
            }

            .elementor-nav-menu a {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .elementor-nav-menu a,
            .elementor-nav-menu a:focus,
            .elementor-nav-menu a:hover {
                padding: 10px 20px;
                line-height: 20px;
            }

            .elementor-nav-menu--dropdown .elementor-item.elementor-item-active,
            .elementor-nav-menu--dropdown .elementor-item:focus,
            .elementor-nav-menu--dropdown .elementor-item:hover,
            .elementor-sub-item:focus,
            .elementor-sub-item:hover {
                background-color: #55595c;
                color: #fff;
            }

            .elementor-menu-toggle {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                font-size: 22px;
                padding: .25em;
                cursor: pointer;
                border: 0 solid;
                border-radius: 3px;
                background-color: rgba(0, 0, 0, .05);
                color: #494c4f;
            }

            .elementor-nav-menu--dropdown {
                background-color: #fff;
                font-size: 13px;
            }

            .elementor-nav-menu--dropdown.elementor-nav-menu__container {
                margin-top: 10px;
                -webkit-transition: max-height .3s, -webkit-transform .3s;
                transition: max-height .3s, -webkit-transform .3s;
                -o-transition: max-height .3s, transform .3s;
                transition: max-height .3s, transform .3s;
                transition: max-height .3s, transform .3s, -webkit-transform .3s;
                -webkit-transform-origin: top;
                -ms-transform-origin: top;
                transform-origin: top;
                overflow: auto;
            }

            .elementor-nav-menu--dropdown.elementor-nav-menu__container .elementor-sub-item {
                font-size: .85em;
            }

            .elementor-nav-menu--dropdown a {
                color: #494c4f;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            ul.elementor-nav-menu--dropdown a,
            ul.elementor-nav-menu--dropdown a:focus,
            ul.elementor-nav-menu--dropdown a:hover {
                text-shadow: none;
                border-left: 8px solid transparent;
            }

            .elementor-nav-menu--toggle .elementor-menu-toggle:not(.elementor-active)+.elementor-nav-menu__container {
                -webkit-transform: scaleY(0);
                -ms-transform: scaleY(0);
                transform: scaleY(0);
                max-height: 0;
            }

            @media (min-width:1025px) {

                .elementor-nav-menu--dropdown-tablet .elementor-menu-toggle,
                .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
                    display: none;
                }
            }

            @media (max-width:1024px) {
                .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main {
                    display: none;
                }
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/uploads/elementor/css/global.css?ver=1639183943 ; media=all */
        @media all {
            .elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
                font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                font-weight: var(--e-global-typography-primary-font-weight);
            }

            .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item {
                color: var(--e-global-color-text);
                fill: var(--e-global-color-text);
            }

            .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover,
            .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active,
            .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus {
                color: var(--e-global-color-accent);
                fill: var(--e-global-color-accent);
            }

            .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
            .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
                background-color: var(--e-global-color-accent);
            }

            .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item,
            .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-sub-item {
                font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                font-weight: var(--e-global-typography-accent-font-weight);
            }

            .elementor-widget-search-form input[type="search"].elementor-search-form__input {
                font-family: var(--e-global-typography-text-font-family), Sans-serif;
                font-weight: var(--e-global-typography-text-font-weight);
            }

            .elementor-widget-search-form .elementor-search-form__input,
            .elementor-widget-search-form.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input {
                color: var(--e-global-color-text);
                fill: var(--e-global-color-text);
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/uploads/elementor/css/post-98.css?ver=1639183944 ; media=all */
        @media all {
            .elementor-98 .elementor-element.elementor-element-d003c66:not(.elementor-motion-effects-element-type-background) {
                background-color: #FFFFFF;
            }

            .elementor-98 .elementor-element.elementor-element-d003c66 {
                box-shadow: 0px 0px 4px -1px rgba(0, 0, 0, 0.5);
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 10px 0px 10px 0px;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-menu-toggle {
                margin-left: auto;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu .elementor-item {
                font-family: "Roboto", Sans-serif;
                font-size: 16px;
                font-weight: 500;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main .elementor-item {
                color: #444444;
                fill: #444444;
                padding-left: 12px;
                padding-right: 12px;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main .elementor-item:hover,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main .elementor-item.elementor-item-active,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main .elementor-item:focus {
                color: #2862B5;
                fill: #2862B5;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main .elementor-item.elementor-item-active {
                color: #2862B5;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown {
                background-color: #FFFFFF;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown a:hover,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown a.elementor-item-active,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-menu-toggle:hover {
                color: #444444;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown a:hover,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown a.elementor-item-active {
                background-color: #FFFFFF;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-family: "Roboto", Sans-serif;
                font-weight: 500;
            }

            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-98 .elementor-element.elementor-element-269a059 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 1px !important;
            }

            .elementor-98 .elementor-element.elementor-element-95079e7 .elementor-search-form {
                text-align: left;
            }

            .elementor-98 .elementor-element.elementor-element-95079e7 .elementor-search-form__toggle {
                --e-search-form-toggle-size: 33px;
                --e-search-form-toggle-background-color: #FFFFFF;
                --e-search-form-toggle-border-width: 0px;
            }

            .elementor-98 .elementor-element.elementor-element-95079e7 input[type="search"].elementor-search-form__input {
                font-family: "Roboto", Sans-serif;
                font-weight: 400;
            }

            .elementor-98 .elementor-element.elementor-element-95079e7.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input {
                border-radius: 3px;
            }

            @media (min-width:768px) {
                .elementor-98 .elementor-element.elementor-element-952ff51 {
                    width: 19.821%;
                }

                .elementor-98 .elementor-element.elementor-element-47e0e60 {
                    width: 62.563%;
                }

                .elementor-98 .elementor-element.elementor-element-640b616 {
                    width: 17.28%;
                }
            }

            @media (max-width:767px) {
                .elementor-98 .elementor-element.elementor-element-d003c66 {
                    margin-top: 0px;
                    margin-bottom: 0px;
                    padding: 10px 0px 10px 0px;
                }

                .elementor-98 .elementor-element.elementor-element-952ff51 {
                    width: 46%;
                }

                .elementor-98 .elementor-element.elementor-element-47e0e60 {
                    width: 50%;
                }
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.3.7 ; media=all */
        @media all {
            :focus {
                outline: 0;
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3 ; media=all */
        @media all {
            .fas {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                display: inline-block;
                font-style: normal;
                font-variant: normal;
                text-rendering: auto;
                line-height: 1;
            }

            .fa-search:before {
                content: "\f002";
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3 ; media=all */
        @media all {
            .fas {
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
            }
        }

        /*! CSS Used from: http://zhang3794.temp.cn2.caihongjianzhan.com/css/customer.css */
        .disnone {
            display: none !important;
        }

        #menu-1-269a059 li.menu-item>.sub-menu {
            top: 44px;
        }

        #menu-1-269a059 li.menu-item:hover>.sub-menu {
            display: block;
        }

        #menu-1-269a059 li.menu-item>.sub-menu>li .sub-menu {
            width: 28em;
            top: 0;
            left: 100%;
        }

        #menu-1-269a059 li.menu-item .sub-menu li:hover>a {
            color: #2862B5;
        }

        /*! CSS Used fontfaces */
        @font-face {
            font-family: 'NonBreakingSpaceOverride';
            src: url(data:application/font-woff2;charset=utf-8;base64,d09GMgABAAAAAAMoAA0AAAAACDQAAALTAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP0ZGVE0cGh4GYACCahEICjx3CywAATYCJANUBCAFhiEHgWwbXQfILgpsY+rQRRARwyAs6uL7pxzYhxEE+32b3aeHmifR6tklkS9hiZA0ewkqGRJE+H7/+6378ASViK/PGeavqJyOzsceKi1s3BCiQsiOdn1r/RBgIJYEgCUhbm/8/8/h4saPssnTNkkiWUBrTRtjmQSajw3Ui3pZ3LYDPD+XG2C3JA/yKAS8/rU5eNfuGqRf4eNNgV4YAlIIgxglEkWe6FYpq10+wi3g+/nUgvgPFczNrz/RsTgVm/zfbPuHZlsuQECxuyqBcQwKFBjFgKO8AqP4bAN9tFJtnM9xPcbNjeXS/x1wY/xU52f5W/X1+9cnH4YwKIaoRRAkUkj/YlAAeF/624foiIDBgBmgQBeGAyhBljUPZUm/l2dTvmpqcBDUOHdbPZWd8JsBAsGr4w8/EDn82/bUPx4eh0YNrQTBuHO2FjQEAGBwK0DeI37DpQVqdERS4gZBhpeUhWCfLFz7J99aEBgsJCHvUGAdAPp4IADDCAPCEFMGpMZ9AQpTfQtQGhLbGVBZFV8BaqNyP68oTZgHNj3M8kBPfXTTC9t90UuzYhy9ciH0grVlOcqyCytisvbsERsEYztiznR0WCrmTksJwbSNK6fd1Rvr25I9oLvctUoEbNOmXJbqgYgPXEHJ82IUsrCnpkxh23F1rfZ2zcRnJYoXtauB3VTFkFXQg3uoZYD5qE0kdjDtoDoF1h2bulGmev5HbYhbrjtohQSRI4aNOkffIcT+d3v6atpaYh3JvPoQsztCcqvaBkppDSPcQ3bw3KaCBo1f5CJWTZEgW3LjLofYg51MaVezrx8xZitYbQ9KYeoRaqQdVLwSEfrKXLK1otCWOKNdR/YwYAfon5Yk8O2MJfSD10dPGA5PIJJQMkah0ugMJiv6x4Dm7LEa8xnrRGGGLAg4sAlbsA07sAt76DOsXKO3hIjtIlpnnFrt1qW4kh6NhS83P/6HB/fl1SMAAA==) format("woff2"), url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAAAUQAA0AAAAACDQAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAE9AAAABwAAAAchf5yU0dERUYAAATYAAAAHAAAAB4AJwAbT1MvMgAAAaAAAABJAAAAYJAcgU5jbWFwAAACIAAAAF4AAAFqUUxBZ2dhc3AAAATQAAAACAAAAAgAAAAQZ2x5ZgAAApAAAAAyAAAAPL0n8y9oZWFkAAABMAAAADAAAAA2Fi93Z2hoZWEAAAFgAAAAHQAAACQOSgWaaG10eAAAAewAAAAzAAAAVC7TAQBsb2NhAAACgAAAABAAAAAsAOQBAm1heHAAAAGAAAAAHQAAACAAWQALbmFtZQAAAsQAAAF6AAADIYvD/Adwb3N0AAAEQAAAAI4AAADsapk2o3jaY2BkYGAA4ov5mwzj+W2+MnCzXwCKMNzgCBSB0LfbQDQ7AxuI4mBgAlEAFKQIRHjaY2BkYGD3+NvCwMDBAALsDAyMDKhAFAA3+wH3AAAAeNpjYGRgYBBl4GBgYgABEMnIABJzAPMZAAVmAGUAAAB42mNgZlJhnMDAysDCKsKygYGBYRqEZtrDYMT4D8gHSmEHjgUFOQwODAqqf9g9/rYwMLB7MNUAhRlBcsxBrMlASoGBEQAj8QtyAAAAeNrjYGBkAAGmWQwMjO8gmBnIZ2NA0ExAzNjAAFYJVn0ASBsD6VAIDZb7AtELAgANIgb9AHjaY2BgYGaAYBkGRgYQSAHyGMF8FgYPIM3HwMHAxMDGoMCwQIFLQV8hXvXP//9AcRCfAcb///h/ygPW+w/vb7olBjUHCTCyMcAFGZmABBO6AogThgZgIUsXAEDcEzcAAHjaY2BgECMCyoEgACZaAed42mNgYmRgYGBnYGNgYAZSDJqMgorCgoqCjECRXwwNrCAKSP5mAAFGBiRgyAAAi/YFBQAAeNqtkc1OwkAUhU/5M25cEhcsZick0AwlBJq6MWwgJkAgYV/KAA2lJeUn+hY+gktXvpKv4dLTMqKycGHsTZNv7px7z50ZAFd4hYHjdw1Ls4EiHjVncIFnzVnc4F1zDkWjrzmPW+NNcwGlzIRKI3fJlUyrEjZQxb3mDH2fNGfRx4vmHKqG0JzHg6E0F9DOlFBGBxUI1GEzLNT4S0aLuTtsGAEUuYcQHkyg3KmIum1bNUvKlrjbbAIleqHHnS4iSudpQcySMYtdFiXlAxzSbAwfMxK6kZoHKhbjjespMTioOPZnzI+4ucCeTVyKMVKLfeAS6vSWaTinuZwzyy/Dc7vaed+6KaV0kukdPUk6yOcctZPvvxxqksq2lEW8RvHjMEO2FCl/zy6p3NEm0R9OFSafJdldc4QVeyaaObMBO0/5cCaa6d9Ggyubxire+lEojscdjoWUR1xGOy8KD8mG2ZLO2l2paDc3A39qmU2z2W5YNv5+u79e6QfGJY/hAAB42m3NywrCMBQE0DupWp/1AYI7/6DEaLQu66Mrd35BKUWKJSlFv1+rue4cGM7shgR981qSon+ZNwUJ8iDgoYU2OvDRRQ99DDDECAHGmGCKmf80hZSx/Kik/LliFbtmN6xmt+yOjdg9GztV4tROnRwX/Bsaaw51nt4Lc7tWaZYHp/MlzKx51LZs5htNri+2AAAAAQAB//8AD3jaY2BkYGDgAWIxIGZiYARCESBmAfMYAAR6AEMAAAABAAAAANXtRbgAAAAA2AhRFAAAAADYCNuG) format("woff");
        }

        @font-face {
            font-family: eicons;
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.13.0);
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.13.0#iefix) format("embedded-opentype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.13.0) format("woff2"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.13.0) format("woff"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.13.0) format("truetype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.13.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: eicons;
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEz0dL_nz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzQdL_nz.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzwdL_nz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzMdL_nz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEz8dL_nz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc3CsTKlA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc-CsTKlA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc2CsTKlA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc5CsTKlA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc1CsTKlA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot);
            src: url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2) format("woff2"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff) format("woff"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"), url(http://zhang3794.temp.cn2.caihongjianzhan.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg");
        }
    </style>
    <title>隐私政策 - </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">
    <!-- twitter分享 -->
    <meta property="twitter:url" content="/privacy.php">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="null">

    <!-- facebook分享 -->
    <meta property="og:url" content="/privacy.php">
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
                document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
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

<body>
    <div component="header.php">
        <link rel="stylesheet" type="text/css" href="/css/customer.css">
        <script type="text/javascript" src="/js/jiaogeiwocommon.js"></script>

        <div data-elementor-type="header" data-elementor-id="98"
            class="elementor elementor-98 elementor-location-header" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d003c66 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d003c66" data-element_type="section" data-settings="{"
                    background_background":"classic","sticky":"top","sticky_effects_offset":2,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}"="">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-952ff51"
                            data-id="952ff51" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-418bccb elementor-widget elementor-widget-image"
                                    data-id="418bccb" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="154" height="60"
                                            src="//cdn.xuansiwei.com/zhang3794/1648384271459/111.png?x-oss-process=style/png_small"
                                            class="attachment-large size-large" alt="" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-47e0e60"
                            data-id="47e0e60" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-269a059 elementor-nav-menu__align-right elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu">



                                    <div component="menus.js">

                                        <div class="elementor-widget-container">
                                            <nav migration_allowed="1" migrated="0" role="navigation"
                                                class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                                <ul id="menu-1-269a059" class="elementor-nav-menu">

                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13752">
                                                        <a href="/index.php" class="elementor-item">Home</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13753">
                                                        <a href="/about.php" class="elementor-item">About Us</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                                        <a href="/product.php" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="elementor-item elementor-item-anchor">Product</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                                <a href="/product.php?c=1"
                                                                    class="elementor-sub-item">Press Brake</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                        <a href="/product_1_1.php"
                                                                            class="elementor-sub-item">Electro-hydraulic
                                                                            CNC Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                        <a href="/product_1_2.php"
                                                                            class="elementor-sub-item">Torsion-synchro
                                                                            CNC Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                        <a href="/product_1_3.php"
                                                                            class="elementor-sub-item">Tandem Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                        <a href="/product_1_4.php"
                                                                            class="elementor-sub-item">Heavy-duty Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                        <a href="/product_1_5.php"
                                                                            class="elementor-sub-item">Robotic Press
                                                                            Brake</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                                <a href="/product.php?c=2"
                                                                    class="elementor-sub-item">Hydraulic Shear</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                        <a href="/product_2_1.php"
                                                                            class="elementor-sub-item">Swing Beam
                                                                            Shear</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                        <a href="/product_2_2.php"
                                                                            class="elementor-sub-item">Guillotine
                                                                            Shear</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                                <a href="/product.php?c=3"
                                                                    class="elementor-sub-item">Fiber Laser Cutter</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                        <a href="/product_3_1.php"
                                                                            class="elementor-sub-item">T1 Single Table
                                                                            Fiber Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                        <a href="/product_3_2.php"
                                                                            class="elementor-sub-item">T2 Double Table
                                                                            Fiber Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                        <a href="/product_3_3.php"
                                                                            class="elementor-sub-item">T3 Fully Enclosed
                                                                            Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                        <a href="/product_3_4.php"
                                                                            class="elementor-sub-item">TR1 Single Panel
                                                                            Tube Integrated Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                        <a href="/product_3_5.php"
                                                                            class="elementor-sub-item">TR2 Exchange
                                                                            Table Plate and Tube Integrated Laser
                                                                            Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                        <a href="/product_3_6.php"
                                                                            class="elementor-sub-item">TR3
                                                                            Full-protection Interactive Table Panel Tube
                                                                            Integrated Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                        <a href="/product_3_7.php"
                                                                            class="elementor-sub-item">Tube Laser
                                                                            Cutting Machine</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                                <a href="/product.php?c=4"
                                                                    class="elementor-sub-item">Veneer Reeling
                                                                    Machine</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                        <a href="/product_4_1.php"
                                                                            class="elementor-sub-item">W11 Three-roller
                                                                            symmetrical Veneer Reeling Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                        <a href="/product_4_2.php"
                                                                            class="elementor-sub-item">W11S Universal
                                                                            Veneer Reeling Machine</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                                <a href="/product.php?c=5"
                                                                    class="elementor-sub-item">Hand-Opeeated
                                                                    Ironworker</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                        <a href="/product_5_1.php"
                                                                            class="elementor-sub-item">Hand-Opeeated
                                                                            Ironworker</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                                <a href="/product.php?c=6"
                                                                    class="elementor-sub-item">Four-Column Hydraulic
                                                                    Press</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                        <a href="/product_6_1.php"
                                                                            class="elementor-sub-item">Four-Column
                                                                            Hydraulic Press</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                                <a href="/product.php?c=7"
                                                                    class="elementor-sub-item">Mechanical Blade</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                        <a href="/product_7_1.php"
                                                                            class="elementor-sub-item">Rolling Shear
                                                                            Slitting Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                        <a href="/product_7_2.php"
                                                                            class="elementor-sub-item">Slitting round
                                                                            blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                        <a href="/product_7_3.php"
                                                                            class="elementor-sub-item">Shearing Machine
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                        <a href="/product_7_4.php"
                                                                            class="elementor-sub-item">Ink Doctor
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                        <a href="/product_7_5.php"
                                                                            class="elementor-sub-item">Rolled Steel
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                        <a href="/product_7_6.php"
                                                                            class="elementor-sub-item">Slow Shredder
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                        <a href="/product_7_7.php"
                                                                            class="elementor-sub-item">Saw Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                        <a href="/product_7_8.php"
                                                                            class="elementor-sub-item">Chipper Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                        <a href="/product_7_9.php"
                                                                            class="elementor-sub-item">Corrugated Paper
                                                                            Cutting Slitter Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                        <a href="/product_7_10.php"
                                                                            class="elementor-sub-item">Crusher Blade</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                                <a href="/product.php?c=8"
                                                                    class="elementor-sub-item">Press Brake Tools</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                        <a href="/product_8_1.php"
                                                                            class="elementor-sub-item">Die of CNC Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                        <a href="/product_8_2.php"
                                                                            class="elementor-sub-item">Press Brake
                                                                            Flattening Die</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                        <a href="/product_8_3.php"
                                                                            class="elementor-sub-item">Upper Die of
                                                                            Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                        <a href="/product_8_4.php"
                                                                            class="elementor-sub-item">Single/Multi V
                                                                            Lower Die of Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                        <a href="/product_8_5.php"
                                                                            class="elementor-sub-item">Arc Die of Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                        <a href="/product_8_6.php"
                                                                            class="elementor-sub-item">Gooseneck
                                                                            Scimitar</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                        <a href="/product_8_7.php"
                                                                            class="elementor-sub-item">Traceless Bending
                                                                            Mould</a>
                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13755">
                                                        <a href="/services.php" class="elementor-item">Services</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13756">
                                                        <a href="/blog.php" class="elementor-item">Blog</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13758">
                                                        <a href="/contact.php" class="elementor-item">Contact us</a>

                                                    </li>

                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0"
                                                aria-label="Menu Toggle" aria-expanded="false">
                                                <i class="eicon-menu-bar" aria-hidden="true" role="presentation"></i>
                                                <span class="elementor-screen-only">Menu</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                role="navigation" aria-hidden="true">
                                                <ul id="menu-2-269a059" class="elementor-nav-menu">

                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13752">
                                                        <a href="/index.php" class="elementor-item">Home</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13753">
                                                        <a href="/about.php" class="elementor-item">About Us</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                                        <a href="/product.php" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="elementor-item elementor-item-anchor">Product</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                                <a href="/product.php?c=1"
                                                                    class="elementor-sub-item">Press Brake</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                        <a href="/product_1_1.php"
                                                                            class="elementor-sub-item">Electro-hydraulic
                                                                            CNC Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                        <a href="/product_1_2.php"
                                                                            class="elementor-sub-item">Torsion-synchro
                                                                            CNC Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                        <a href="/product_1_3.php"
                                                                            class="elementor-sub-item">Tandem Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                        <a href="/product_1_4.php"
                                                                            class="elementor-sub-item">Heavy-duty Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                        <a href="/product_1_5.php"
                                                                            class="elementor-sub-item">Robotic Press
                                                                            Brake</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                                <a href="/product.php?c=2"
                                                                    class="elementor-sub-item">Hydraulic Shear</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                        <a href="/product_2_1.php"
                                                                            class="elementor-sub-item">Swing Beam
                                                                            Shear</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                        <a href="/product_2_2.php"
                                                                            class="elementor-sub-item">Guillotine
                                                                            Shear</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                                <a href="/product.php?c=3"
                                                                    class="elementor-sub-item">Fiber Laser Cutter</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                        <a href="/product_3_1.php"
                                                                            class="elementor-sub-item">T1 Single Table
                                                                            Fiber Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                        <a href="/product_3_2.php"
                                                                            class="elementor-sub-item">T2 Double Table
                                                                            Fiber Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                        <a href="/product_3_3.php"
                                                                            class="elementor-sub-item">T3 Fully Enclosed
                                                                            Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                        <a href="/product_3_4.php"
                                                                            class="elementor-sub-item">TR1 Single Panel
                                                                            Tube Integrated Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                        <a href="/product_3_5.php"
                                                                            class="elementor-sub-item">TR2 Exchange
                                                                            Table Plate and Tube Integrated Laser
                                                                            Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                        <a href="/product_3_6.php"
                                                                            class="elementor-sub-item">TR3
                                                                            Full-protection Interactive Table Panel Tube
                                                                            Integrated Laser Cutting Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                        <a href="/product_3_7.php"
                                                                            class="elementor-sub-item">Tube Laser
                                                                            Cutting Machine</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                                <a href="/product.php?c=4"
                                                                    class="elementor-sub-item">Veneer Reeling
                                                                    Machine</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                        <a href="/product_4_1.php"
                                                                            class="elementor-sub-item">W11 Three-roller
                                                                            symmetrical Veneer Reeling Machine</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                        <a href="/product_4_2.php"
                                                                            class="elementor-sub-item">W11S Universal
                                                                            Veneer Reeling Machine</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                                <a href="/product.php?c=5"
                                                                    class="elementor-sub-item">Hand-Opeeated
                                                                    Ironworker</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                        <a href="/product_5_1.php"
                                                                            class="elementor-sub-item">Hand-Opeeated
                                                                            Ironworker</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                                <a href="/product.php?c=6"
                                                                    class="elementor-sub-item">Four-Column Hydraulic
                                                                    Press</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                        <a href="/product_6_1.php"
                                                                            class="elementor-sub-item">Four-Column
                                                                            Hydraulic Press</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                                <a href="/product.php?c=7"
                                                                    class="elementor-sub-item">Mechanical Blade</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                        <a href="/product_7_1.php"
                                                                            class="elementor-sub-item">Rolling Shear
                                                                            Slitting Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                        <a href="/product_7_2.php"
                                                                            class="elementor-sub-item">Slitting round
                                                                            blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                        <a href="/product_7_3.php"
                                                                            class="elementor-sub-item">Shearing Machine
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                        <a href="/product_7_4.php"
                                                                            class="elementor-sub-item">Ink Doctor
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                        <a href="/product_7_5.php"
                                                                            class="elementor-sub-item">Rolled Steel
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                        <a href="/product_7_6.php"
                                                                            class="elementor-sub-item">Slow Shredder
                                                                            Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                        <a href="/product_7_7.php"
                                                                            class="elementor-sub-item">Saw Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                        <a href="/product_7_8.php"
                                                                            class="elementor-sub-item">Chipper Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                        <a href="/product_7_9.php"
                                                                            class="elementor-sub-item">Corrugated Paper
                                                                            Cutting Slitter Blade</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                        <a href="/product_7_10.php"
                                                                            class="elementor-sub-item">Crusher Blade</a>
                                                                    </li>

                                                                </ul>

                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                                <a href="/product.php?c=8"
                                                                    class="elementor-sub-item">Press Brake Tools</a>

                                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                        <a href="/product_8_1.php"
                                                                            class="elementor-sub-item">Die of CNC Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                        <a href="/product_8_2.php"
                                                                            class="elementor-sub-item">Press Brake
                                                                            Flattening Die</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                        <a href="/product_8_3.php"
                                                                            class="elementor-sub-item">Upper Die of
                                                                            Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                        <a href="/product_8_4.php"
                                                                            class="elementor-sub-item">Single/Multi V
                                                                            Lower Die of Press Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                        <a href="/product_8_5.php"
                                                                            class="elementor-sub-item">Arc Die of Press
                                                                            Brake</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                        <a href="/product_8_6.php"
                                                                            class="elementor-sub-item">Gooseneck
                                                                            Scimitar</a>
                                                                    </li>


                                                                    <li
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                        <a href="/product_8_7.php"
                                                                            class="elementor-sub-item">Traceless Bending
                                                                            Mould</a>
                                                                    </li>

                                                                </ul>

                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13755">
                                                        <a href="/services.php" class="elementor-item">Services</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13756">
                                                        <a href="/blog.php" class="elementor-item">Blog</a>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-custom page_item menu-item-13758">
                                                        <a href="/contact.php" class="elementor-item">Contact us</a>

                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>


                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-640b616 elementor-hidden-mobile disnone"
                            data-id="640b616" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-95079e7 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form"
                                    data-id="95079e7">
                                    <div class="elementor-widget-container">
                                        <form class="elementor-search-form" role="search" action="" method="get">
                                            <div class="elementor-search-form__toggle">
                                                <i aria-hidden="true" class="fas fa-search"></i> <span
                                                    class="elementor-screen-only">Search</span>
                                            </div>
                                            <div class="elementor-search-form__container">
                                                <input placeholder="Search..." class="elementor-search-form__input"
                                                    type="search" name="s" title="Search" value="">
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
            $('.elementor-menu-toggle').click(function () {
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
            (function () {
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

    <div class="relative py-16 bg-white overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">

            </div>
        </div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span
                        class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Privacy
                        Policy</span>
                </h1>
            </div>
            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                <p>Your privacy is important to us. It is Our's policy to respect your privacy and comply with any
                    applicable law and regulation regarding any personal information we may collect about you, including
                    across our website, and other sites we own and operate.
                </p>
                <p>This policy is effective as of 8 August 2017 and was last updated on 8 November 2021.</p>
                <h3>Information We Collect</h3>
                <p>Information we collect includes both information you knowingly and actively provide us when using or
                    participating in any of our services and promotions, and any information automatically sent by your
                    devices in the course of accessing our products and services.</p>
                <h4>Log Data</h4>
                <p>When you visit our website, our servers may automatically log the standard data provided by your web
                    browser. It may include your device’s Internet Protocol (IP) address, your browser type and version,
                    the pages you visit, the time and date of your visit, the time spent on each page, other details
                    about your visit, and technical details that occur in conjunction with any errors you may encounter.
                </p>
                <p>Please be aware that while this information may not be personally identifying by itself, it may be
                    possible to combine it with other data to personally identify individual persons.</p>
                <h4>Personal Information</h4>
                <p>We may ask for personal information which may include one or more of the following:</p>
                <ul>
                    <li>Name</li>
                    <li>Email</li>
                </ul>
                <h4>Legitimate Reasons for Processing Your Personal Information</h4>
                <p>We only collect and use your personal information when we have a legitimate reason for doing so. In
                    which instance, we only collect personal information that is reasonably necessary to provide our
                    services to you.</p>
                <h4>Collection and Use of Information</h4>
                <p>We may collect personal information from you when you do any of the following on our website:</p>
                <ul>
                    <li>Use a mobile device or web browser to access our content</li>
                    <li>Contact us via email, social media, or on any similar technologies</li>
                    <li>When you mention us on social media</li>
                </ul>
                <p>We may collect, hold, use, and disclose information for the following purposes, and personal
                    information will not be further processed in a manner that is incompatible with these purposes:</p>
                <p>We may collect, hold, use, and disclose information for the following purposes, and personal
                    information will not be further processed in a manner that is incompatible with these purposes:</p>
                <ul>
                    <li>to enable you to customise or personalise your experience of our website</li>
                    <li>for analytics, market research, and business development, including to operate and improve our
                        website, associated applications, and associated social media platforms</li>
                </ul>
                <p>Please be aware that we may combine information we collect about you with general information or
                    research data we receive from other trusted sources.</p>
                <h4>Security of Your Personal Information</h4>
                <p>When we collect and process personal information, and while we retain this information, we will
                    protect it within commercially acceptable means to prevent loss and theft, as well as unauthorized
                    access, disclosure, copying, use, or modification.</p>
                <p>Although we will do our best to protect the personal information you provide to us, we advise that no
                    method of electronic transmission or storage is 100% secure, and no one can guarantee absolute data
                    security. We will comply with laws applicable to us in respect of any data breach.</p>
                <p>You are responsible for selecting any password and its overall security strength, ensuring the
                    security of your own information within the bounds of our services.</p>
                <h4>How Long We Keep Your Personal Information</h4>
                <p>We keep your personal information only for as long as we need to. This time period may depend on what
                    we are using your information for, in accordance with this privacy policy. If your personal
                    information is no longer required, we will delete it or make it anonymous by removing all details
                    that identify you.</p>
                <p>However, if necessary, we may retain your personal information for our compliance with a legal,
                    accounting, or reporting obligation or for archiving purposes in the public interest, scientific, or
                    historical research purposes or statistical purposes.</p>
                <h3>Children’s Privacy</h3>
                <p>We do not aim any of our products or services directly at children under the age of 13, and we do not
                    knowingly collect personal information about children under 13.</p>
                <h3>International Transfers of Personal Information</h3>
                <p>The personal information we collect is stored and/or processed where we or our partners, affiliates,
                    and third-party providers maintain facilities. Please be aware that the locations to which we store,
                    process, or transfer your personal information may not have the same data protection laws as the
                    country in which you initially provided the information. If we transfer your personal information to
                    third parties in other countries: (i) we will perform those transfers in accordance with the
                    requirements of applicable law; and (ii) we will protect the transferred personal information in
                    accordance with this privacy policy.</p>
                <h3>Your Rights and Controlling Your Personal Information</h3>
                <p>You always retain the right to withhold personal information from us, with the understanding that
                    your experience of our website may be affected. We will not discriminate against you for exercising
                    any of your rights over your personal information. If you do provide us with personal information
                    you understand that we will collect, hold, use and disclose it in accordance with this privacy
                    policy. You retain the right to request details of any personal information we hold about you.</p>
                <p>If we receive personal information about you from a third party, we will protect it as set out in
                    this privacy policy. If you are a third party providing personal information about somebody else,
                    you represent and warrant that you have such person’s consent to provide the personal information to
                    us.</p>
                <p>If you have previously agreed to us using your personal information for direct marketing purposes,
                    you may change your mind at any time. We will provide you with the ability to unsubscribe from our
                    email-database or opt out of communications. Please be aware we may need to request specific
                    information from you to help us confirm your identity.</p>
                <p>If you believe that any information we hold about you is inaccurate, out of date, incomplete,
                    irrelevant, or misleading, please contact us using the details provided in this privacy policy. We
                    will take reasonable steps to correct any information found to be inaccurate, incomplete,
                    misleading, or out of date.</p>
                <p>If you believe that we have breached a relevant data protection law and wish to make a complaint,
                    please contact us using the details below and provide us with full details of the alleged breach. We
                    will promptly investigate your complaint and respond to you, in writing, setting out the outcome of
                    our investigation and the steps we will take to deal with your complaint. You also have the right to
                    contact a regulatory body or data protection authority in relation to your complaint.</p>
                <h3>Use of Cookies</h3>
                <p>We use “cookies” to collect information about you and your activity across our site. A cookie is a
                    small piece of data that our website stores on your computer, and accesses each time you visit, so
                    we can understand how you use our site. This helps us serve you content based on preferences you
                    have specified.</p>
                <h3>Limits of Our Policy</h3>
                <p>Our website may link to external sites that are not operated by us. Please be aware that we have no
                    control over the content and policies of those sites, and cannot accept responsibility or liability
                    for their respective privacy practices.</p>
                <h3>Changes to This Policy</h3>
                <p>At our discretion, we may change our privacy policy to reflect updates to our business processes,
                    current acceptable practices, or legislative or regulatory changes. If we decide to change this
                    privacy policy, we will post the changes here at the same link by which you are accessing this
                    privacy policy.</p>
                <p>If required by law, we will get your permission or give you the opportunity to opt in to or opt out
                    of, as applicable, any new uses of your personal information.</p>
            </div>
        </div>
    </div>
</body>

</html>