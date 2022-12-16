<?php
//Запускаем сессию для работы с куками
session_start();
//Так как пользователь хотел выйти,
//удаляем ему логин и id из кукисов
unset($_SESSION['login']);
unset($_SESSION['id']);
session_unset();
session_destroy();
//Переадресовываем на главную
header("location: index/index.php");
?>