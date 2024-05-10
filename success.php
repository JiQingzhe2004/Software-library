<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提交成功</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            max-width: 400px;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .header {
            background: linear-gradient(to right, #b8f322, #3b44f8); /* 渐变颜色 */
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        .container {
            padding: 20px;
        }
        a {
            color: #fff;
            text-decoration: none;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            text-decoration: underline;
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="card">
        <header class="header">
            <h1>提交成功</h1>
        </header>

        <div class="container">
            <p>您已成功提交软件信息。</p>
            <a href="admin.php">返回</a>
            <a href="index.html">查看</a>
        </div>
    </div>

</body>
</html>
