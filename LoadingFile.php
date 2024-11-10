<?php
/*
    https://www.php.net/manual/ru/features.file-upload.post-method.php
    https://metanit.com/php/tutorial/5.4.php

$_FILES['myfile']['name'] - имя, которое имел файл на машине клиента.
$_FILES['myfile']['type'] - тип отправленного файла, если браузер предоставил эту информацию.
$_FILES['myfile']['size'] - размер загруженного файла в байтах.
$_FILES['myfile']['tmp_name'] - временное имя файла, под которым он был сохранен на сервере.
$_FILES['myfile']['error'] - код ошибки, появившейся при загрузке.
*/
$uploaddir = 'd://Images/'; // будем сохранять загружаемые  файлы в эту директорию
$destination = $uploaddir . $_FILES['myfile']['name'];    // имя файла оставим неизменным
/* перемещаем файл из временной папки в выбранную директорию для хранения */
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $destination))
{
    print "Файл успешно загружен <br>";
}
else
{
    echo "Произошла ошибка при загрузке файла.  Некоторая отладочная информация:<br>";
    print_r($_FILES);
}

?>