<?php
session_start(); // Начало сессии

if (!isset($_SESSION['id_user'])) {
    // Если пользователь не авторизован, верните ошибку или выполните другие действия
    exit('Ошибка: Пользователь не авторизован');
}

// Получите значение colorType из POST-запроса
if (isset($_POST['colorType'])) {
    $colorType = $_POST['colorType'];

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера базы данных
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "make"; // Имя базы данных

    // Создание соединения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Получение ID пользователя из сессии
    $id_user = $_SESSION['id_user'];

    // Обновление поля colortype в базе данных
    $sql_update = "UPDATE user SET colortype='$colorType' WHERE id_user='$id_user'";

    if ($conn->query($sql_update) === TRUE) {
        // Данные успешно обновлены
        echo "Цветотип успешно обновлен в базе данных";
    } else {
        // Возникла ошибка при обновлении данных
        echo "Ошибка при обновлении цветотипа: " . $conn->error;
    }

    $conn->close();
} else {
    // Если значение colorType не было отправлено, верните ошибку
    exit('Ошибка: Не удалось получить значение цветотипа');
}
?>
