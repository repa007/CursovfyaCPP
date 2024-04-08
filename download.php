<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];
    $path = 'D:\Gitrep\CursovfyaCPP\repository/'.$file;
    if (file_exists($path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        readfile($path);
        exit;
    } else {
        echo "Файл не найден";
    }
}
?>