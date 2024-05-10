// JavaScript 代码
document.addEventListener('DOMContentLoaded', function() {
    const softwareIconInput = document.getElementById('software-icon');
    const dragDropArea = document.getElementById('drag-drop-area');
    const fileInfoDisplay = document.createElement('p');
    const deleteFileBtn = document.getElementById('delete-file-btn');

    dragDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dragDropArea.classList.add('active');
    });

    dragDropArea.addEventListener('dragleave', () => {
        dragDropArea.classList.remove('active');
    });

    dragDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dragDropArea.classList.remove('active');
        const file = e.dataTransfer.files[0];
        updateFileInfo(file);
        softwareIconInput.files = e.dataTransfer.files;
        showDeleteButton(); // 显示删除文件按钮
    });

    softwareIconInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        updateFileInfo(file);
        showDeleteButton(); // 显示删除文件按钮
    });

    // 监听删除文件按钮的点击事件
    deleteFileBtn.addEventListener('click', function() {
        clearFileInput(); // 清除文件输入框的内容
        hideDeleteButton(); // 隐藏删除文件按钮
        clearFileInfo(); // 清除文件信息显示
    });

    function updateFileInfo(file) {
        if (file) {
            fileInfoDisplay.textContent = `已选择文件：${file.name}，大小：${formatBytes(file.size)}`;
            dragDropArea.appendChild(fileInfoDisplay);
        }
    }

    function formatBytes(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    function showDeleteButton() {
        deleteFileBtn.style.display = 'inline-block';
    }

    function hideDeleteButton() {
        deleteFileBtn.style.display = 'none';
    }

    function clearFileInput() {
        softwareIconInput.value = ''; // 清除文件输入框的内容
    }

    function clearFileInfo() {
        fileInfoDisplay.textContent = ''; // 清除文件信息显示
    }
});
