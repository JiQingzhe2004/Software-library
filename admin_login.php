<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员登录</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="bt.css">
    <style>
        /* 灯箱样式 */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }
        
        .lightbox img {
            display: block;
            margin: 50px auto; /* 调整图片在灯箱中的位置 */
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* 添加阴影效果 */
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>管理员登录</h1>
    </header>

    <div class="container">
        <form action="admin_authenticate.php" method="post">
            <div class="form-group">
                <label for="username">用户名:</label>
                <input type="text" id="username" name="username" required placeholder="默认为：admin">
            </div>     
            <div class="form-group">
                <label for="password">密码:</label>
                <input type="password" id="password" name="password" required placeholder="默认密码到公众号（爱奇吉AiQiji）回复“软件库密码”获取" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 11px; box-sizing: border-box; font-size: 16px; outline: none;">
            </div>
            <button type="submit">登录</button>
        </form>
        <button type="wjmm" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 50px; cursor: pointer; width: 100%; text-align: center; text-decoration: none; display: inline-block; margin-top: 10px;"
    onmouseover="this.style.backgroundColor='#0056b3';"
    onmouseout="this.style.backgroundColor='#007bff';"
    onfocus="this.style.outline='none'; this.style.boxShadow='0 0 0 3px rgba(0, 123, 255, 0.5)';"
    onblur="this.style.boxShadow='';"
>
    <a href="forget_the_password.html" style="color: inherit; text-decoration: none;">忘记密码</a>
</button>

        <div style="text-align: center; margin-top: 10px; border-radius: 10px;">
                    <a href="#" id="lightboxTrigger">
                        <img src="img/gzh.jpg" alt="文件" width="30%" height="auto">
                    </a>
                </div>
                <!-- 灯箱部分 -->
                <div class="lightbox" id="lightbox">
                    <img src="" alt="放大查看的图片" id="lightboxImg">
                </div>
    </div>
    <script>
        // 获取元素
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxTrigger = document.getElementById('lightboxTrigger');

        // 点击链接显示灯箱
        lightboxTrigger.addEventListener('click', function(event) {
            event.preventDefault(); // 阻止默认链接行为
            const imgUrl = this.querySelector('img').src;
            lightbox.style.display = 'block';
            lightboxImg.src = imgUrl;
        });

        // 点击灯箱外部区域隐藏灯箱
        lightbox.addEventListener('click', function(event) {
            if (event.target === this) {
                lightbox.style.display = 'none';
            }
        });
    </script>
</body>
</html>
