<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $name = $_POST['softwareName'];
    $link = $_POST['softwareLink'];
    $icon = $_FILES['uploadIcon']['name'] ? $_FILES['uploadIcon']['name'] : basename($_POST['softwareIcon']);

    // 从JSON文件中读取数据
    $json_data = file_get_contents('software_data.json');
    $data = json_decode($json_data, true);

    // 更新数据
    $data[$index]['name'] = $name;
    $data[$index]['download_link'] = $link;
    $data[$index]['icon'] = $icon;

    // 处理上传的图标
    if ($_FILES['uploadIcon']['name']) {
        move_uploaded_file($_FILES['uploadIcon']['tmp_name'], 'img/' . $icon);
    }

    // 将更新后的数据写回JSON文件
    file_put_contents('software_data.json', json_encode($data));

    echo '编辑成功';
}
?>
