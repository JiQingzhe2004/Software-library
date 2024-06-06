<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];

    // 从JSON文件中读取数据
    $json_data = file_get_contents('software_data.json');
    $data = json_decode($json_data, true);

    // 删除对应的图片文件
    $icon_path = 'img/' . $data[$index]['icon'];
    if (file_exists($icon_path)) {
        unlink($icon_path);
    }

    // 删除对应的软件数据
    array_splice($data, $index, 1);

    // 将更新后的数据写回JSON文件
    file_put_contents('software_data.json', json_encode($data));

    echo '删除成功';
}
?>
