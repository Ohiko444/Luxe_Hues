<?php
  // Соединяемся с базой данных
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "make";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Запрос к базе данных для получения данных о макияжах
  $sql = "SELECT name_techniques, description_techniques, image_techniques FROM techniques";
  $result = $conn->query($sql);
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

    <div class = "row" style="margin-right: 150px;">

        <div class="ant-carousel">
            <div class="ant-carousel-hider">
              <ul class="ant-carousel-list">
                <li class="ant-carousel-element" data-description='    <p align="center" style="font-size: 26px; width: auto; padding-bottom: 5px; height: auto;">СОВЕТЫ ПО НАНЕСЕНИЮ ТЕНЕЙ</p>

<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Используйте базу под тени</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Для того, чтобы тени держались долго, всегда используйте специальный праймер для век. Второй вариант – использовать тени нейтрального оттенка, которые будут служить своеобразной базой: самым оптимальным оттенком будет бежевый. Многие девушки предпочитают использовать белую основу: так тени будут выглядеть более пигментированными.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Если под рукой нет оптимальной светло-бежевой основы под тени, то ее можно заменить тональным кремом.</p>


<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Тщательно выбирайте кисть для теней</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Не используйте узкие маленькие кисточки для нанесения и растушевки теней: для каждой из этих задач у вас должна быть своя, особенная, кисть. Не забывайте о том, что для каждого оттенка теней нужно брать отдельную кисть.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Если у вас только одна кисть для теней, то наносите сначала светлые оттенки на всю поверхность подвижного века, а затем уже делайте акценты более темными.</p>


<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Правильно определите «свой» цвет</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Совсем необязательно использовать два или три цвета для того, чтобы сделать эффектный макияж глаз. Выразительными глаза можно сделать и при помощи одного цвета.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Для этой цели визажисты советуют выбирать оттенок со сложными пигментами, например, с шиммером. Обычно такие тени скрывают в себе несколько подтонов и светоотражающие частицы.</p>


<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Держите под рукой стикеры</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Используйте бумажные нелипкие стикеры для записок для того, чтобы проводить на внешних краях глаз четкие линии. Это подойдет для тех случаев, когда вы не хотите использовать карандаш для глаз, но при этом хотите сделать ваш взгляд более выразительным.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Бумажный стикер избавит вас от ошибок в макияже глаз и сэкономит вам время. Для этой же цели можете использовать малярный скотч.</p>


<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Используйте тени вместо подводки</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">В качестве подводки для глаз можно использовать тени: они помогают достичь более мягкого эффекта по сравнению с карандашом или подводкой для глаз.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Профессиональные визажисты часто используют тени в качестве подводки, предварительно смачивая кисточку для теней небольшим количеством воды. Так тени будут распределяться легче и ровнее.</p>' onclick="showDescription(this.getAttribute('data-description'))">
                  <img class="square" src="image/eye.jpg" alt="0"> 
                  <p>Советы</p> 
                </li>
                <?php
                  if ($result->num_rows > 0) {
                    $index = 1;
                    while($row = $result->fetch_assoc()) {
                      echo "<li class='ant-carousel-element' data-description='" . $row["description_techniques"] . "' onclick=\"showDescription(this.getAttribute('data-description'))\">";
                      echo "<img class='square' src='" . $row["image_techniques"] . "' alt='" . $index . "'>";
                      echo "<p>" . $row["name_techniques"] . "</p>";
                      echo "</li>";
                      $index++;
                    }
                  } else {
                    echo "0 results";
                  }
                ?>
              </ul>
            </div>
            <div class="ant-carousel-arrow-left"></div><div class="ant-carousel-arrow-right"></div>
            <div class="ant-carousel-dots"></div>
          </div>

          <div class="text-block" style="margin-left: 150px; width: 1300px; margin-top: 30px">
              <div id="makeup-description" class="text">
                <p style='width: auto; font-size: 22px; line-height: 1.6;'>Нажмите на фото, чтобы увидеть описание к выбранной технике макижа глаз!</p>
              </div>
          </div>
      
    </div>

    <footer class="footer" style="margin-top: 100px;">
      <div class="container">
          <p>&copy; 2024 Пузырёва Дарья Евгеньевна 09-153</p>
      </div>
    </footer>

    <!-- Добавленный canvas для анимации -->
    <canvas id="canvas"></canvas>

    <!-- Добавленный скрипт -->
    <script src="scripts.js"></script>
    <script>

      // Функция для вывода описания макияжа
      function showDescription(description) {
          document.getElementById('makeup-description').innerHTML = description ;
        }

        // Добавляем обработчики событий для каждого элемента карусели
        document.addEventListener('DOMContentLoaded', function () {
          var elements = document.querySelectorAll('.ant-carousel-element');
          elements.forEach(function (element, index) {
            element.addEventListener('click', function () {
              var description = this.getAttribute('data-description');
              showDescription(description);
            });
          });
        });

      function Ant(crslId) {

      let id = document.getElementById(crslId);
      if(id) {
        this.crslRoot = id
      }
      else {
        this.crslRoot = document.querySelector('.ant-carousel')
      };

      // Carousel objects
      this.crslList = this.crslRoot.querySelector('.ant-carousel-list');
      this.crslElements = this.crslList.querySelectorAll('.ant-carousel-element');
      this.crslElemFirst = this.crslList.querySelector('.ant-carousel-element');
      this.leftArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-left');
      this.rightArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-right');
      this.indicatorDots = this.crslRoot.querySelector('div.ant-carousel-dots');

      // Initialization
      this.options = Ant.defaults;
      Ant.initialize(this)
      };

      Ant.defaults = {

      // Default options for the carousel
      elemVisible: 3, // Кол-во отображаемых элементов в карусели
      loop: true,     // Бесконечное зацикливание карусели 
      auto: true,     // Автоматическая прокрутка
      interval: 5000, // Интервал между прокруткой элементов (мс)
      speed: 750,     // Скорость анимации (мс)
      touch: true,    // Прокрутка  прикосновением
      arrows: true,   // Прокрутка стрелками
      dots: true      // Индикаторные точки
      };

      Ant.prototype.elemPrev = function(num) {
      num = num || 1;

      if(this.options.dots) this.dotOn(this.currentElement);
      this.currentElement -= num;
      if(this.currentElement < 0) this.currentElement = this.dotsVisible-1;
      if(this.options.dots) this.dotOff(this.currentElement);

      if(!this.options.loop) {  // сдвиг вправо без цикла
        this.currentOffset += this.elemWidth*num;
        this.crslList.style.marginLeft = this.currentOffset + 'px';
        if(this.currentElement == 0) {
          this.leftArrow.style.display = 'none'; this.touchPrev = false
        }
        this.rightArrow.style.display = 'block'; this.touchNext = true
      }
      else {                    // сдвиг вправо с циклом
        let elm, buf, this$ = this;
        for(let i=0; i<num; i++) {
          elm = this.crslList.lastElementChild;
          buf = elm.cloneNode(true);
          this.crslList.insertBefore(buf, this.crslList.firstElementChild);
          this.crslList.removeChild(elm)
        };
        this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
        let compStyle = window.getComputedStyle(this.crslList).marginLeft;
        this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
        this.crslList.style.marginLeft = '0px';
        setTimeout(function() {
          this$.crslList.style.cssText = 'transition:none;'
        }, this.options.speed)
      }
      };

      Ant.prototype.elemNext = function(num) {
      num = num || 1;

      if(this.options.dots) this.dotOn(this.currentElement);
      this.currentElement += num;
      if(this.currentElement >= this.dotsVisible) this.currentElement = 0;
      if(this.options.dots) this.dotOff(this.currentElement);

      if(!this.options.loop) {  // сдвиг влево без цикла
        this.currentOffset -= this.elemWidth*num;
        this.crslList.style.marginLeft = this.currentOffset + 'px';
        if(this.currentElement == this.dotsVisible-1) {
          this.rightArrow.style.display = 'none'; this.touchNext = false
        }
        this.leftArrow.style.display = 'block'; this.touchPrev = true
      }
      else {                    // сдвиг влево с циклом
        let elm, buf, this$ = this;
        this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
        this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
        setTimeout(function() {
          this$.crslList.style.cssText = 'transition:none;';
          for(let i=0; i<num; i++) {
            elm = this$.crslList.firstElementChild;
            buf = elm.cloneNode(true); this$.crslList.appendChild(buf);
            this$.crslList.removeChild(elm)
          };
          this$.crslList.style.marginLeft = '0px'
        }, this.options.speed)
      }
      };

      Ant.prototype.dotOn = function(num) {
      this.indicatorDotsAll[num].style.cssText = 'background-color:#BBB; cursor:pointer;'
      };

      Ant.prototype.dotOff = function(num) {
      this.indicatorDotsAll[num].style.cssText = 'background-color:#556; cursor:default;'
      };

      Ant.initialize = function(that) {

      // Constants
      that.elemCount = that.crslElements.length; // Количество элементов
      that.dotsVisible = that.elemCount;         // Число видимых точек
      let elemStyle = window.getComputedStyle(that.crslElemFirst);
      that.elemWidth = that.crslElemFirst.offsetWidth +  // Ширина элемента (без margin)
        parseInt(elemStyle.marginLeft) + parseInt(elemStyle.marginRight);

      // Variables
      that.currentElement = 0; that.currentOffset = 0;
      that.touchPrev = true; that.touchNext = true;
      let xTouch, yTouch, xDiff, yDiff, stTime, mvTime;
      let bgTime = getTime();

      // Functions
      function getTime() {
        return new Date().getTime();
      };
      function setAutoScroll() {
        that.autoScroll = setInterval(function() {
          let fnTime = getTime();
          if(fnTime - bgTime + 10 > that.options.interval) {
            bgTime = fnTime; that.elemNext()
          }
        }, that.options.interval)
      };

      // Start initialization
      if(that.elemCount <= that.options.elemVisible) {   // Отключить навигацию
        that.options.auto = false; that.options.touch = false;
        that.options.arrows = false; that.options.dots = false;
        that.leftArrow.style.display = 'none'; that.rightArrow.style.display = 'none'
      };

      if(!that.options.loop) {       // если нет цикла - уточнить количество точек
        that.dotsVisible = that.elemCount - that.options.elemVisible + 1;
        that.leftArrow.style.display = 'none';  // отключить левую стрелку
        that.touchPrev = false;    // отключить прокрутку прикосновением вправо
        that.options.auto = false; // отключить автопркрутку
      }
      else if(that.options.auto) {   // инициализация автопрокруки
        setAutoScroll();
        // Остановка прокрутки при наведении мыши на элемент
        that.crslList.addEventListener('mouseenter', function() {
          clearInterval(that.autoScroll)
        }, false);
        that.crslList.addEventListener('mouseleave', setAutoScroll, false)
      };

      if(that.options.touch) {   // инициализация прокрутки прикосновением
        that.crslList.addEventListener('touchstart', function(e) {
          xTouch = parseInt(e.touches[0].clientX);
          yTouch = parseInt(e.touches[0].clientY);
          stTime = getTime()
        }, false);
        that.crslList.addEventListener('touchmove', function(e) {
          if(!xTouch || !yTouch) return;
          xDiff = xTouch - parseInt(e.touches[0].clientX);
          yDiff = yTouch - parseInt(e.touches[0].clientY);
          mvTime = getTime();
          if(Math.abs(xDiff) > 15 && Math.abs(xDiff) > Math.abs(yDiff) && mvTime - stTime < 75) {
            stTime = 0;
            if(that.touchNext && xDiff > 0) {
              bgTime = mvTime; that.elemNext()
            }
            else if(that.touchPrev && xDiff < 0) {
              bgTime = mvTime; that.elemPrev()
            }
          }
        }, false)
      };

      if(that.options.arrows) {  // инициализация стрелок
        if(!that.options.loop) that.crslList.style.cssText =
          'transition:margin '+that.options.speed+'ms ease;';
        that.leftArrow.addEventListener('click', function() {
          let fnTime = getTime();
          if(fnTime - bgTime > that.options.speed) {
            bgTime = fnTime; that.elemPrev()
          }
        }, false);
        that.rightArrow.addEventListener('click', function() {
          let fnTime = getTime();
          if(fnTime - bgTime > that.options.speed) {
            bgTime = fnTime; that.elemNext()
          }
        }, false)
      }
      else {
        that.leftArrow.style.display = 'none';
        that.rightArrow.style.display = 'none'
      };

      if(that.options.dots) {  // инициализация индикаторных точек
        let sum = '', diffNum;
        for(let i=0; i<that.dotsVisible; i++) {
          sum += '<span class="ant-dot"></span>'
        };
        that.indicatorDots.innerHTML = sum;
        that.indicatorDotsAll = that.crslRoot.querySelectorAll('span.ant-dot');
        // Назначаем точкам обработчик события 'click'
        for(let n=0; n<that.dotsVisible; n++) {
          that.indicatorDotsAll[n].addEventListener('click', function() {
            diffNum = Math.abs(n - that.currentElement);
            if(n < that.currentElement) {
              bgTime = getTime(); that.elemPrev(diffNum)
            }
            else if(n > that.currentElement) {
              bgTime = getTime(); that.elemNext(diffNum)
            }
            // Если n == that.currentElement ничего не делаем
          }, false)
        };
        that.dotOff(0);  // точка[0] выключена, остальные включены
        for(let i=1; i<that.dotsVisible; i++) {
          that.dotOn(i)
        }
      }
      };

      new Ant();
    </script>
      
</body>
</html>
<?php
// Закрываем соединение с базой данных
$conn->close();
?>