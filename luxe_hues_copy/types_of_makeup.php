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
  $sql = "SELECT view, description_make, image_make FROM reason_makeup";
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
              <li class="ant-carousel-element" data-description='<p align="center" style="font-size: 26px; width: auto; padding-bottom: 5px; height: auto;">СОВЕТЫ ПО МАКИЯЖУ ДЛЯ ВАШЕГО ЦВЕТОТИПА</p>

<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Цветотип «зима» и выбор макияжа</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Обладательницы данного вида имеют эффектную и выразительную внешность. В каждой детали глубина и контраст красок. Цвет волос чаще черный или темно-каштановый с холодным пепельным оттенком. Цвет глаз – от глубоких синих до карих. Кожа либо очень светлая и без румянца, либо смуглая с холодным оливковым отливом. Макияж для зимнего цветотипа выбирается в зависимости от подтипа: яркого, темного и холодного.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В ярком заметно преобладание пепельных светлых тонов до достаточно темных. Глаза голубого, синего, серого цвета. Волосы как русые, так и прохладно-черные. Коже из-за высокой степени бледности желательно воздерживаться от солнца. Девушки подобного типа искрятся «морозной» свежестью. Макияж глаз для цветотипа «зима» следует создавать с помощью голубых и синих оттенков. Нюдовые тона сделают образ блеклым.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В темном преимущественно оттенки коричневого, синего, черного. Глаза серо-карие либо черные. Волосы от темного шатена до черного. Кожа плотного светлого тона – хорошо реагирует на ультрафиолет. Цветотип «темная зима» подразумевает соответствующий макияж: девушек не делает мрачным даже черный цвет. С теплыми красками лучше не водиться, а перейти на густые, прохладные и яркие тона.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В холодном более светлые оттенки, чем в темном варианте. На арене все те же голубые и синие краски, но более нежной яркости. Глаза серо-карие, серые, голубые с синевой. Волосы от темно-русых до черных. Кожа чувствительна к солнцу – имеет красный полутон. Макияж цветотипу «холодная зима» нужно создавать с помощью синего полутона. Но добавлять при этом цветовые акценты – яркую подводку, помаду красного или прохладно-розового оттенка.</p>

<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Макияж для цветотипа «весна»</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Для весеннего вида характерны светлые оттенки, нежность в сочетании с яркостью. Его разделяют на подтипы: светлый, теплый и яркий.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В светлом отмечается воплощение тепла и нежности. Цвет глаз от лазурного, серого до зеленого, волос – от светлого блонда до теплых оттенков русого. Кожа бледная с теплым акцентом, розовеет от ультрафиолета. На лице могут быть веснушки. Подобные цветотипы не терпят в макияже оранжевые или желтоватые тона и резких линий при скульптурировании. Для макияжа глаз можно использовать янтарные оттенки, зеленую и бежевую гамму. Подходит черная и коричневая тушь, которая сделает взгляд более мягким и чувственным. Цвета помады – алый, приглушенная роза, коралловые оттенки. Важно подчеркивать солнечность образа.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В теплом во всем заметен золотой оттенок: светлые волосы, кожа слоновой кости или нежно-бежевых тонов. Холодные тона отсутствуют в любых деталях. Глаза обычно серого или небесного цвета, реже светло-карие. Идеально лягут нежно-золотистые оттенки тональной основы и пудры, которые освежат лицо, но не сделают его бледным. Розовые и коричневатые румяна лучше отложить, предпочитая коралловые и персиковые. Цветотип «весна» не терпит в макияже глаз черные линии, будь аккуратна со стрелками. Наноси тени коричневых, темно-зеленых, даже болотных оттенков, бежевые и сиреневые цвета. Не стесняйся выделить губы красной, маковой помадой, но избегай винных оттенков. Полупрозрачные блески для губ тоже хороши в мекапе.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В яркой умело уживаются мягкость, свежесть и буйство красок. На то она и просыпающаяся весна! Таких девушек видно за версту: их внешность легкая, воздушная и в меру яркая. Взгляни на фото Меган Фокс, у которой нанесен макияж согласно цветотипу «весна». Коже присущи светлые и бежевые тона. Волосы имеют рыжие нотки, порой даже медные. Глаза выразительные – от голубого до карего и зеленого. Обладательницы яркого подтипа не потеряются как в пастельных, так и в более интенсивных тонах. Подчеркнуть свежесть лица могут персиковые румяна, а глаза – коричневые, серые, зеленые цвета. Подойдет и бирюза, если глаза голубые или зеленые. «Примеряй» фиолетовые и сиреневые тона. Тушь может быть классической черной и цветной. Для губ выбирай оттенки золотистого, кораллового, персикового.</p>

<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Палитра для макияжа цветотипа «лето»</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Холодные ненасыщенные цвета должны обязательно присутствовать в макияже цветотипа «лето». Его традиционно делят на подтипы: светлый, мягкий и холодный.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В светлом цветотипе «лето» должно быть минимум контрастных решений и максимум серых прохладных тонов. Краски приглушенные, спокойные, ассоциируются с нежным летним утром. Выгорая на солнце, волосы становятся платиновыми. Глаза светлые, как и кожа, которая плохо воспринимает загар. В макияже под цветотип «светлое лето» сохраняй прохладу и свежесть, не переборщи с коричневыми тонами и воздержись от золотистых.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В холодном присутствует много серых тонов в ущерб ярким. Глаза серых, голубых, синих цветов. Волосы – от русых холодных оттенков до ореховых или карамельных тоном выгорают на солнце. Добиться ровного загара таким девушкам непросто. В макияже для цветотипа «холодное лето» следует использовать тени аналогичных тонов, без теплых. Акцент ставь на губах или глазах, создав легкий нежно-розовый румянец. Для девушек с серыми глазами макияж цветотипа «лето» не приемлет морковные, неоново-зеленые и помидорные краски.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">- В мягком помимо серого заметны оливковые тона, смягчающие неприступную холодность. Здесь больше двух других летних видов преобладает тепло. Кожа не смуглая, бежевая, загар ложится ровно. Глаза часто темно-серого, серо-зеленого, темно-зеленого цветов – смешанных вариантов. Какой бы макияж для глаз для цветотипа «лето» ты бы не выбрала, не переборщи с теплотой тонов – пример фото Жизель Бюндхен. Лучше всего подойдут «мягким» девушкам прохладные оттенки коричневого, хаки, темно-зеленые и темно-шоколадные цвета. В целом макияж цветотипа «мягкое лето» допускает многообразие красок, поэтому создавать эффектные образы легко, в том числе в одежде.</p>

<p align="center" style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Макияж глаз и губ для цветотипа «осень»</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">Фундамент этого типа внешности в золотом, янтарном и бронзовом цветах. Есть три подтипа «осени»: мягкий, темный и теплый.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">В мягком преимущественно бежевый и ореховый оттенки. Глаза зеленые и карие во всевозможных вариациях. Волосы рыжие, русые с золотым и песочным тоном. Кожа бежевая, может отливать красноватым оттенком, который может усилить активное солнце. Макияж цветотипа «мягкая осень» желательно создавать без кричащих красок, отдавая предпочтение теплым оттенкам, без темных вариантов.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">В темном, судя по названию, гораздо больше места для коричневых ноток, красных и прочих насыщенных. Глаза серо-карие, шоколадные, темно-зеленые, иногда янтарные. Волосы темные, даже черные, но с выдержанными теплыми тонами. Кожа золотистая, хорошо вбирает ультрафиолет. В макияже цветотипа «темная осень» важно подчеркнуть глубину шоколадных оттенков.</p>
<p style="font-size: 24px; width: auto; padding-bottom: 5px; height: auto;">В теплом есть место рыжему, медному, терракотовому. Хотя много смешанных вариаций, чистых оттенков мало. Глаза от карего, зеленого до синего и голубого. Волосы рыжие и каштановые. Кожа чаще светлая, может быть с веснушками, прозрачная, тонкая – обрати внимание на фото Джулианны Мур. В макияже для теплого цветотипа должны присутствовать сочные пигменты, густые, выразительные.</p>' onclick="showDescription(this.getAttribute('data-description'))">
                <img class="square" src="image/vie.jpg" alt="1">
                <p>Цветотипы</p>
              </li>
              <?php
              if ($result->num_rows > 0) {
                $index = 1;
                while($row = $result->fetch_assoc()) {
                  echo "<li class='ant-carousel-element' data-description='" . $row["description_make"] . "' onclick=\"showDescription(this.getAttribute('data-description'))\">";
                  echo "<img class='square' src='" . $row["image_make"] . "' alt='" . $index . "'>";
                  echo "<p>" . $row["view"] . "</p>";
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
                  <p style='width: auto; font-size: 22px; line-height: 1.6;'>Нажмите на фото, чтобы увидеть описание к выбранному виду макияжа!</p>
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
          document.getElementById('makeup-description').innerHTML = description;
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