<?php
session_start(); // Начало сессии

if (!isset($_SESSION['id_user'])) {
    // Если пользователь не авторизован, перенаправьте его на страницу входа или выполните другие действия
    header("Location: entry.php");
    exit();
}

// Получение ID пользователя из сессии
$id_user = $_SESSION['id_user'];

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

// Запрос к базе данных для получения данных пользователя
$sql_select = "SELECT name, colortype, notes FROM user WHERE id_user='$id_user'";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    // Если данные пользователя найдены
    $row = $result->fetch_array();
    $name1 = $row["name"];
    $colortype1 = $row["colortype"];
    $notes1 = $row["notes"];
} 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Получение данных из формы
    $name = $_POST["name"];
    $notes = $_POST["myTextArea"];
    $colortype = $_POST["colortype"];

    // Обновление данных пользователя в базе данных
    $sql_update = "UPDATE user SET name='$name', notes='$notes', colortype='$colortype' WHERE id_user='$id_user'";

    if ($conn->query($sql_update) === TRUE) {
        // Данные успешно обновлены
        echo '<script>window.location.href="lk.php";</script>';
    } else {
        // Возникла ошибка при обновлении данных
        echo '<script>alert("Ошибка при сохранении данных: ' . $conn->error . '"); window.location.href="lk.php";</script>';
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>

    .question {
        margin-bottom: 20px;
    }
    .answer-label {
        display: block;
        padding: 10px 15px;
        margin-bottom: 10px;
        background-color: #d1aee7;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .answer-label:hover {
        background-color: #CC9CEA;
    }
    .answer-label input[type="radio"] {
        display: none;
    }
    .selected {
        background-color: #CC9CEA; /* Цвет при выборе */
    }

</style>
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
        <div class="columntwo">
            <div class="card">
                <div class="text-block" style="width: 1600px; height: 700px;">
                    <div class="text" style="margin-left: 100px">
                        <form method="post">
                            <p align="center" style="font-size: 26px; width: auto; padding-bottom: 20px;">Личный кабинет</p>

                            <input type="text" style="margin-right: 500px;" id="name" name="name" disabled value="<?php echo $name1 ?>" <?php if(!isset($_SESSION['id_user'])) { echo 'disabled'; } ?>>
                            <p style="font-size: 23px; width: auto; padding-bottom: 20px; padding-top: 5px;">Имя</p>

                            <input type="text" style="margin-right: 500px;" id="colortype" name="colortype" disabled value="<?php echo $colortype1 ?>" <?php if(!isset($_SESSION['id_user'])) { echo 'disabled'; } ?>>
                            <p style="font-size: 23px; width: auto; padding-bottom: 20px; padding-top: 5px;">Цветотип</p>

                            <textarea id="myTextArea" name="myTextArea" rows="4" disabled cols="50" <?php if(!isset($_SESSION['id_user'])) { echo 'disabled'; } ?>><?php echo $notes1; ?></textarea>
                            <p style="font-size: 23px; width: auto; padding-top: 5px;">Заметки</p>

                            <button style="margin-right: 0px;" id="save" type="submit">Сохранить</button>
                            <button type="button" id="redact" onclick="enableFields()">Редактировать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="columntwo">
            <div class="card">
                <div class="text-block" style="width: 1600px; height: 1900px;">
                    <div class="text" style="margin-left: 100px">
                        <p align="center" style="font-size: 26px; width: auto; padding-bottom: 20px;">Определение цветотипа</p>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">1. Какой цвет вашей кожи?</p>
                            <label class="answer-label">
                                <input type="radio" name="question1" value="A">
                                <span class="answer-text">Очень светлая, с розовым или персиковым оттенком</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question1" value="B">
                                <span class="answer-text">Светлая, но без розового или персикового оттенка</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question1" value="C">
                                <span class="answer-text">Средне-светлая, с легким золотистым оттенком</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question1" value="D">
                                <span class="answer-text">Средне-темная или темная, с оливковым или бронзовым оттенком</span>
                            </label>
                        </div>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">2. Какой цвет ваших естественных волос?</p>
                            <label class="answer-label">
                                <input type="radio" name="question2" value="A">
                                <span class="answer-text">Очень светлые (почти платиновые) или рыжие</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question2" value="B">
                                <span class="answer-text">Светло-русые или светло-коричневые</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question2" value="C">
                                <span class="answer-text">Темно-русые, каштановые или золотисто-рыжие</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question2" value="D">
                                <span class="answer-text">Темные или черные</span>
                            </label>
                        </div>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">3. Какого цвета ваши глаза?</p>
                            <label class="answer-label">
                                <input type="radio" name="question3" value="A">
                                <span class="answer-text">Голубые, серые или зеленые</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question3" value="B">
                                <span class="answer-text">Голубые, серые или светло-зеленые</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question3" value="C">
                                <span class="answer-text">Оливковые, коричневые или янтарные</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question3" value="D">
                                <span class="answer-text">Темные коричневые, черные или ореховые</span>
                            </label>
                        </div>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">4. Как ваша кожа реагирует на солнце?</p>
                            <label class="answer-label">
                                <input type="radio" name="question4" value="A">
                                <span class="answer-text">Легко обгорает, редко загорает</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question4" value="B">
                                <span class="answer-text">Обгорает сначала, потом медленно загорает</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question4" value="C">
                                <span class="answer-text">Загорает быстро, но может быть ожог</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question4" value="D">
                                <span class="answer-text">Легко загорает, почти никогда не обжигается</span>
                            </label>
                        </div>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">5. Какой у вас тип кожи?</p>
                            <label class="answer-label">
                                <input type="radio" name="question5" value="A">
                                <span class="answer-text">Сухая, часто требует увлажнения</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question5" value="B">
                                <span class="answer-text">Обычная или комбинированная</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question5" value="C">
                                <span class="answer-text">Жирная, склонная к блеску</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question5" value="D">
                                <span class="answer-text">Нормальная, без проблем</span>
                            </label>
                        </div>

                        <div class="question">
                            <p style="font-size: 23px; width: auto; padding-bottom: 0px;">6. Какова ваша реакция на холодные оттенки (синий, фиолетовый) и теплые оттенки (оранжевый, желтый)?</p>
                            <label class="answer-label">
                                <input type="radio" name="question6" value="A">
                                <span class="answer-text">Холодные оттенки выглядят лучше</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question6" value="B">
                                <span class="answer-text">Оба варианта могут быть подходящими</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question6" value="C">
                                <span class="answer-text">Теплые оттенки выглядят лучше</span>
                            </label>
                            <label class="answer-label">
                                <input type="radio" name="question6" value="D">
                                <span class="answer-text">Нейтральные оттенки (черный, серый) подходят лучше всего</span>
                            </label>
                        </div>

                        <button onclick="calculateResult()">Получить результат</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Добавленный canvas для анимации -->
    <canvas id="canvas"></canvas>

    <!-- Добавленный скрипт -->
    <script src="scripts.js"></script>

    <script>
        function enableFields() {
            document.getElementById("name").disabled = false;
            document.getElementById("colortype").disabled = true;
            document.getElementById("myTextArea").disabled = false;
        }

        // Функция, которая применяет класс "selected" к выбранному элементу
        function applySelected(element) {
            // Удаляем класс "selected" у всех элементов в текущем блоке
            var answerLabels = element.parentNode.querySelectorAll('.answer-label');
            answerLabels.forEach(function(label) {
                label.classList.remove('selected');
            });
            // Добавляем класс "selected" к выбранному элементу
            element.classList.add('selected');
        }

        // Получаем все элементы с классом "answer-label"
        var answerLabels = document.querySelectorAll('.answer-label');

        // Добавляем обработчик событий для каждого элемента
        answerLabels.forEach(function(label) {
            label.addEventListener('click', function() {
                // Применяем класс "selected" к выбранному элементу
                applySelected(label);
            });
        });

        function calculateResult() {
            var answers = {
                'A': 0,
                'B': 0,
                'C': 0,
                'D': 0
            };

            var questions = document.querySelectorAll('.question');

            questions.forEach(function(question) {
                var selectedOption = question.querySelector('input[type="radio"]:checked');
                if (selectedOption) {
                    answers[selectedOption.value]++;
                }
            });

            var result = '';

            if (answers['A'] > answers['B'] && answers['A'] > answers['C'] && answers['A'] > answers['D']) {
                result = 'Весна';
            } else if (answers['B'] > answers['A'] && answers['B'] > answers['C'] && answers['B'] > answers['D']) {
                result = 'Лето';
            } else if (answers['C'] > answers['A'] && answers['C'] > answers['B'] && answers['C'] > answers['D']) {
                result = 'Осень';
            } else if (answers['D'] > answers['A'] && answers['D'] > answers['B'] && answers['D'] > answers['C']) {
                result = 'Зима';
            }

            document.getElementById('colortype').value = result;

            alert('Ваш цветотип: ' + result);       
            $.ajax({
                url: 'save_color_type.php',
                method: 'POST',
                data: { colorType: result },
                success: function(response) {
                    alert('Ваш цветотип: ' + result);
                },
                error: function(xhr, status, error) {
                    console.error('Ошибка при отправке запроса на сервер:', error);
                }
            });   
        }
  </script>
</body>
</html>


