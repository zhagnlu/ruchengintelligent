<div id="google_translate_element"></div>
<button id="translate-button">🌍 Language</button>

<style>
  #google_translate_element {
        display: None;
        position: absolute;
        top: 40px; /* 调整浮动窗口的位置 */
        right: 0px; /* 调整浮动窗口的位置 */
        background: white;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        z-index: 1000;
    }

    #translate-button {
        font-size: 14px; /* 调整字体大小 */
        padding: 0px 2px; /* 调整按钮内边距 */
        border-radius: 2px; /* 圆角 */
        background-color:transparent; /* 按钮背景颜色 */
        color: black; /* 文字颜色 */
        border: none;
        cursor: pointer;
        line-height: 1;
        /* display: inline-block; */
    }

    #translate-button:hover {
        /* background-color: #0056b3; */
        background-color: transparent
    }

    /*  隐藏 Google 翻译工具栏 */
    .goog-te-banner-frame,
    #goog-gt-tt, 
    .goog-te-balloon-frame {
        display: none !important;
    }

    /* 防止 Google 翻译调整 body 样式 */
    body {
        top: 0px !important;
        position: static !important;
    }

    /*  隐藏 iframe 防止 Google 翻译注入 */
    iframe {
        display: none !important;
    }
</style>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en', includedLanguages: 'zh-CN,zh-TW,zh-HK,fr,de,ja,ko,es,ru,en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL},
            'google_translate_element'
        );

        //  // 隐藏 Google 翻译的默认下拉框
        //  setTimeout(() => {
        //     const googleTranslateFrame = document.querySelector('.goog-te-menu-frame');
        //     if (googleTranslateFrame) {
        //         googleTranslateFrame.style.display = 'none';
        //     }
        // }, 1000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        let button = document.getElementById("translate-button");
        let translateElement = document.getElementById("google_translate_element");

        // 切换语言选择框的显示/隐藏
        button.addEventListener("click", function() {
            translateElement.style.display = translateElement.style.display === "none" ? "block" : "none";
            event.stopPropagation()
        });

        // 悬停时显示语言选择框
        button.addEventListener("mouseover", function() {
            translateElement.style.display = "block";
        });

        // 鼠标移出按钮时，延迟隐藏，避免不小心移到旁边就消失
        button.addEventListener("mouseleave", function() {
            setTimeout(() => {
                if (!translateElement.matches(":hover")) {
                    translateElement.style.display = "none";
                }
            }, 300);
        });

        // 鼠标移入选择框时保持显示
        translateElement.addEventListener("mouseover", function() {
            translateElement.style.display = "block";
        });

        // 鼠标移出选择框时隐藏
        translateElement.addEventListener("mouseleave", function() {
            translateElement.style.display = "none";
        });

        // 点击页面其他地方时，隐藏翻译选择框
        document.addEventListener("click", function(event) {
            if (!translateElement.contains(event.target) && event.target !== button) {
                translateElement.style.display = "none";
            }
        });

        // 延迟执行，确保 Google 翻译下拉框加载完成
        setTimeout(() => {
            let select = document.querySelector(".goog-te-combo");
            if (select) {
                // 监听语言变化，存入 localStorage
                select.addEventListener("change", function() {
                    localStorage.setItem("selectedLanguage", select.value);
                    select.dispatchEvent(new Event("change")); // 立即触发翻译
                });

                // 页面加载时恢复语言
                let savedLang = localStorage.getItem("selectedLanguage");
                if (savedLang) {
                    select.value = savedLang;
                    select.dispatchEvent(new Event("change"));
                }
            }
        }, 2000);
    });
</script>

<!-- 引入 Google 翻译 API -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>