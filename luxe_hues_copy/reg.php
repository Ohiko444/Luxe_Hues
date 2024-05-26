<?php
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
        $confirmPassword = $_POST['confirm_password'];

        // Защита от SQL-инъекций
        $login = mysqli_real_escape_string($conn, $login);
        $password = mysqli_real_escape_string($conn, $password);
        $confirmPassword = mysqli_real_escape_string($conn, $confirmPassword);

        // Проверка совпадения паролей
        if ($password !== $confirmPassword) {
            echo '<script>alert("Пароли не совпадают."); window.location.href="reg.php";</script>';
            exit();
        }


        // Проверка существования пользователя с такой почтой в базе данных
        $sql_check = "SELECT * FROM user WHERE login = '$login'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows > 0) {
            echo '<script>alert("Пользователь с такой почтой уже зарегистрирован."); window.location.href="reg.php";</script>';
            exit();
        }

        // Хэширование пароля
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $login = $_POST["login"];
        $confirm_password = $_POST["confirm_password"];
        // Вставка новой записи в базу данных
        $sql_insert = "INSERT INTO user (login, password) VALUES ('$login', '$confirm_password')";
        if ($conn->query($sql_insert) === TRUE) {
            echo '<script> window.location.href="entry.php";</script>';
        } else {
            echo '<script>alert"Ошибка: " . $sql_insert . "<br>" . $conn->error</script>';
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
                <div class="text-block" style="width: 400px;">
                    <div class="text">
                        <p align="center" style="font-size: 26px; width: auto; padding-bottom: 20px;">Введите код:</p>
                        <img  style="width: 195px; margin-bottom: 30px" src="image/captcha.png">
                        <input type="text" id="code" name="code" style="width: 200px">
                    </div>
                        <button style="margin-right: 50px;" name="checkCodeBtn" id="checkCodeBtn">Проверить код</button>

                </div>
            </div>
        </div>

        <div class="columntwo">
        <div class="card">
            <div class="text-block">
                <div class="text">
                    <form method="post">
                        <p align="center" style="font-size: 26px; width: auto; padding-bottom: 20px;">Регистрация</p>
                        <input type="email" id="login" name="login">
                        <p style="font-size: 23px; padding-top: 10px; padding-bottom: 10px;">Почта </p>
                        <input type="text" id="password" name="password">
                        <p style="font-size: 23px; padding-top: 8px; padding-bottom: 10px;">Пароль</p>
                        <input type="text" id="confirm_password" name="confirm_password">
                        <p style="font-size: 23px; padding-top: 0px; padding-bottom: 10px;">Подтвердите пароль</p>
                        <button type="submit" name="registerBtn" id="registerBtn" disabled>Зарегистрироваться</button>
                        <p align="center" style="padding-bottom: 0px; padding-top: 30px;">Уже создали учётную запись?</p>
                        <a href="entry.php" style="color: #7e1078; margin-left: 110px;">Войдите!</a>
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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var codeInput = document.getElementById('code');
        var checkCodeBtn = document.getElementById('checkCodeBtn');
        var registerBtn = document.getElementById('registerBtn');

        // Обработчик события клика на кнопку проверки кода
        checkCodeBtn.addEventListener('click', function() {
            // Получаем введенный пользователем код
            var enteredCode = codeInput.value.trim();

            // Проверяем, равен ли введенный код "z87q7"
            if (enteredCode === "z87q7") {
                // Если код верный, разблокируем кнопку регистрации
                registerBtn.disabled = false;
            } else {
                // Если код неверный, отображаем предупреждение при наведении на кнопку регистрации
                registerBtn.title = "Подтвердите, что вы не робот";
            }
        });
    });
</script>
</body>
</html>


