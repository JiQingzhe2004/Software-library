<?php
session_start();

// 检查管理员是否已经登录，如果没有，重定向到登录页面
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员面板</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="bt.css">
</head>
<body>
    <header class="header">
        <h1>AiQiji软件库软件添加面板</h1>
    </header>
    
    <div class="quanbu">
        <a href="manage_software.html"><button class="qbrj">全部软件</button></a>
    </div>

    <div class="container">
        <form id="software-form" action="add_software.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="software-name">软件名称:</label>
                <input type="text" id="software-name" name="software-name" required placeholder="请输入软件名称">
            </div>     
            <div class="form-group">
                <label for="software-download-link">下载链接:</label>
                <input type="text" id="software-download-link" name="software-download-link" required placeholder="必须是下载链接">
            </div>
            <div class="form-group">
                <label for="software-icon">软件图标:</label>
                <div class="drag-drop-area" id="drag-drop-area">
                    <svg t="1715332698728" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1859" width="100" height="100"><path d="M918.954 325.046l-250-250.4c-6-6-14.1-9.4-22.6-9.4h-400.1c-83.1 0.1-150.5 67.5-150.5 150.7v592.2c0.1 83 67.4 150.4 150.5 150.6h531.5c83.1-0.1 150.5-67.5 150.5-150.7v-460.4c0-8.5-3.3-16.6-9.3-22.6z" fill="#958DFE" p-id="1860" data-spm-anchor-id="a313x.collections_detail.0.i1.60903a812LSeL5" class="selected"></path><path d="M669.354 514.646l-156.9-196.2-156.9 196.2h98v187.5h117.7v-187.5h98.1z" fill="#FFFFFF" p-id="1861"></path><path d="M919.054 324.946h-151.7c-55.5 0-100.6-45-100.6-100.6v-151.7l127.8 126.3 124.5 126z" fill="#C6C9FF" p-id="1862"></path></svg><p>拖拽文件至此处或者点击下方按钮上传</p>
                </div>
                <input type="file" id="software-icon" name="software-icon" accept="image/*" required style="display: none;">
                <label for="software-icon" class="custom-file-upload">选择文件</label>
                <button id="delete-file-btn" class="delete-file-btn" style="display: none;">删除文件</button>
            </div>
            <button type="submit">提交软件</button>
        </form>
        <a href="admin_change_credentials.php"><button type="ggmm">更改密码</button></a>
    </div>

    <script src="bt.js"></script>
</body>
</html>
