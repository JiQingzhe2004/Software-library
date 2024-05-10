<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更改账户和密码</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="bt.css">
</head>
<body>
    <header class="header">
        <h1>更改账户和密码</h1>
    </header>

    <div class="container">
        <form action="admin_change_credential.php" method="post">
            <div class="form-group">
                <label for="username">新用户名:</label>
                <input type="text" id="username" name="username" required placeholder="输入新的用户名">
            </div>     
            <div class="form-group">
                <label for="password" style="display: block; margin-bottom: 5px;">新密码:</label>
                <input type="password" id="password" name="password" required placeholder="输入新的密码" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 11px; box-sizing: border-box; font-size: 16px; outline: none;">
            </div>

            <button type="submit">保存更改</button>
        </form>
    </div>
</body>
</html>
