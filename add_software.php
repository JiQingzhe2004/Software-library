<?php

// 定义软件数据文件路径
$filename = 'software_data.json';

// 检查表单是否提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $software_name = $_POST['software-name'];
    $software_download_link = str_replace('\\', '', $_POST['software-download-link']); // 去除斜杠字符

    // 处理上传的图片文件
    $uploadDir = 'img/'; // 上传文件保存的目录
    $uploadFile = $uploadDir . uniqid() . '.' . pathinfo($_FILES['software-icon']['name'], PATHINFO_EXTENSION); // 生成唯一的文件名

    // 移动上传的文件到目标目录
    if(move_uploaded_file($_FILES['software-icon']['tmp_name'], $uploadFile)) {
        // 创建新的软件数组
        $new_software = array(
            'name' => $software_name,
            'icon' => $uploadFile, // 保存图片文件的路径
            'download_link' => $software_download_link // 将下载链接存储到数组中
        );

        // 读取现有的软件数据
        $current_data = file_get_contents($filename);

        // 如果文件不存在，则创建一个空数组
        if (empty($current_data)) {
            $current_data = "[]";
        }

        // 解码 JSON 数据为 PHP 数组
        $current_data = json_decode($current_data, true);

        // 将新的软件添加到数组中
        array_push($current_data, $new_software);

        // 将数组转换回 JSON 格式并写入文件
        file_put_contents($filename, json_encode($current_data, JSON_UNESCAPED_UNICODE));

        // 重定向到成功页面
        header("Location: success.php");
        exit();
    } else {
        echo "文件上传失败。";
    }
}

?>
