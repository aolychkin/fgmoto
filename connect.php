<?php
    $host = 'localhost'; // адрес сервера 
    $database = 'fgmoto'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль

    // подключаемся к серверу
    $db = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($db));
        $db->set_charset('utf8'); //установка кодировки
