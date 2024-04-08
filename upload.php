<?php
if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"D:\Gitrep\CursovfyaCPP\repository".$file_name);
       echo "Файл успешно загружен";
    } else {
       print_r($errors);
    }
}
?>