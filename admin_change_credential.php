<?php
session_start();

// 检查管理员是否已经登录，如果没有，重定向到登录页面
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: admin_login.php");
    exit();
}

// 检查是否有 POST 请求提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取新的用户名和密码
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];

    // 读取管理员凭据文件
    $credentials_file = 'admin_credentials.json';
    $credentials_data = json_decode(file_get_contents($credentials_file), true);

    // 更新用户名和密码
    $credentials_data['username'] = $new_username;
    $credentials_data['password'] = $new_password;

    // 将更新后的凭据写入凭据文件
    file_put_contents($credentials_file, json_encode($credentials_data, JSON_PRETTY_PRINT));

    // 重定向到管理员面板页面
    header("Location: admin.php");
    exit();
}
?>
