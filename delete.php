<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];
    $path = 'D:\Gitrep\CursovfyaCPP\repository/'.$file;
    if (file_exists($path)) {
        unlink($path);
        echo "Файл успешно удален";
    } else {
        echo "Файл не найден";
    }
}
?>