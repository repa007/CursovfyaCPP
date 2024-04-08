

<!DOCTYPE html>
<html>
<head>
    <title>Простое Облачное Хранилище</title>
</head>
<body>
    <h2>Загрузка Файлов и Папок</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" multiple directory webkitdirectory mozdirectory />
        <input type="submit"/>
    </form>

    <h2>Управление Файлами и Папками</h2>
    <ul>
        <?php
        $files = scandir('D:\Gitrep\CursovfyaCPP\repository');
        foreach($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "<li>$file <a href='download.php?file=$file'>Скачать</a> <a href='delete.php?file=$file'>Удалить</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>