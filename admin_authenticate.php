<?php
session_start();

// 读取管理员凭据文件
$credentials_file = 'admin_credentials.json';
$credentials_data = json_decode(file_get_contents($credentials_file), true);

// 获取登录表单提交的用户名和密码
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// 检查用户名和密码是否匹配
if ($input_username === $credentials_data['username'] && $input_password === $credentials_data['password']) {
    // 验证成功，设置登录状态
    $_SESSION['authenticated'] = true;
    header("Location: admin.php");
    exit();
} else {
    // 验证失败，重定向到登录页面
    header("Location: admin_login.php");
    exit();
}
?>
