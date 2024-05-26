<?php
session_start(); // Начало сессии

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Получение данных из формы
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Защита от SQL-инъекций
        $login = mysqli_real_escape_string($conn, $login);
        $password = mysqli_real_escape_string($conn, $password);

        // Поиск пользователя в базе данных
        $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
        $result = $conn->query($sql);

        // Проверка наличия пользователя в базе данных
        if ($result->num_rows > 0) {
            // Пользователь найден, сохраняем id_user в сессии
            $row = $result->fetch_assoc();
            $_SESSION['id_user'] = $row['id_user'];

            // Пользователь найден, переход на страницу lk.html
            header("Location: lk.php");
            exit();
        } else {
        // Пользователь не найден, вывод окна с ошибкой
        echo '<script>alert("Неправильный логин или пароль.")</script>';
        }

        // Закрытие соединения с базой данных
        $conn->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="lk">
        <a href="entry.php"><img src="image/LK.png"></a>
    </div>

    <div class="header">
        <div class="tabs">
          <a href="types_of_makeup.php">Виды макияжей</a>
          <a href="eye_makeup_techniques.php">Макияж глаз</a>
          <a href="index.html" class="logo">
              <img src="image/icon.png">
          </a>
          <a href="products.php">Продукты</a>
          <a href="beauty-web-master\virtualmake.html">Виртуальный макияж</a>
        </div>
    </div>
        

    <div class = "row">

        <div class="columnone">
        <div class="card">
            <div class="square">
                <img src="image/maik6.jpg" alt="Image">
            </div>
        </div>
        </div>

        <div class="columntwo">
        <div class="card">
            <div class="text-block">
                <div class="text">
                    <form method="post">
                        <p align="center" style="font-size: 26px; width: auto;">Войти в личный кабинет</p>
                        <input type="email" id="login" name="login">
                        <p style="font-size: 23px; padding-top: 10px;">Почта </p>
                        <input type="text" id="password" name="password">
                        <p style="font-size: 23px; padding-top: 10px;">Пароль</p>
                        <button type="submit" id="entry">Войти</button>
                        <p align="center" style="padding-bottom: 0px; padding-top: 30px;">Ещё не создали учётную запись?</p>
                        <a href="reg.php" style="color: #7e1078; margin-left: 70px;">Зарегистрируйтесь!</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>



    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Пузырёва Дарья Евгеньевна 09-153</p>
        </div>
    </footer>
  

    

    <!-- Добавленный canvas для анимации -->
    <canvas id="canvas"></canvas>

    <!-- Добавленный скрипт -->
    <script src="scripts.js"></script>
</body>
</html>

