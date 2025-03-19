
            if (['jiaogeiwo.cn', 'caihongjianzhan.com'].some(item => location.hostname.indexOf(item) !== -1)) {
                document.querySelector('body')
                    .insertAdjacentHTML('beforeEnd', `<div class="top-tips" style="background-color: #646473;color: #eee;padding: 4px;text-align: center;font-size: 12px;">临时域名仅用于网站测试使用，禁止将此域名用于生产环境。<span style="color: #ddd;font-size: 12px;cursor: pointer;position: absolute;right: 20px;" onclick="event.target.parentElement.style.display = 'none'">X</span></div>`);
            }
        