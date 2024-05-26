"use strict";

        var canvas = document.getElementById('canvas'),
          ctx = canvas.getContext('2d'),
          w = canvas.width = window.innerWidth,
          h = canvas.height = window.innerHeight,
            
          hue = 277,
          stars = [],
          count = 0,
          maxStars = 500;

        var canvas2 = document.createElement('canvas'),
            ctx2 = canvas2.getContext('2d');
            canvas2.width = 100;
            canvas2.height = 100;
        var half = canvas2.width/2,
            gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
            gradient2.addColorStop(0.025, '#fff');
            gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
            gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
            gradient2.addColorStop(1, 'transparent');

            ctx2.fillStyle = gradient2;
            ctx2.beginPath();
            ctx2.arc(half, half, half, 0, Math.PI * 2);
            ctx2.fill();

        // End cache

        function random(min, max) {
          if (arguments.length < 2) {
            max = min;
            min = 0;
          }
          
          if (min > max) {
            var hold = max;
            max = min;
            min = hold;
          }

          return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function maxOrbit(x,y) {
          var max = Math.max(x,y),
              diameter = Math.round(Math.sqrt(max*max + max*max));
          return diameter/2;
        }

        var Star = function() {

          this.orbitRadius = random(maxOrbit(w,h));
          this.radius = random(60, this.orbitRadius) / 12;
          this.orbitX = w / 2;
          this.orbitY = h / 2;
          this.timePassed = random(0, maxStars);
          this.speed = random(this.orbitRadius) / 1900000; // Уменьшенная скорость вращения
          this.alpha = random(2, 10) / 10;

          count++;
          stars[count] = this;
        }

        Star.prototype.draw = function() {
          var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
              y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
              twinkle = random(10);

          if (twinkle === 1 && this.alpha > 0) {
            this.alpha -= 0.05;
          } else if (twinkle === 2 && this.alpha < 1) {
            this.alpha += 0.05;
          }

          ctx.globalAlpha = this.alpha;
            ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
          this.timePassed += this.speed;
        }

        for (var i = 0; i < maxStars; i++) {
          new Star();
        }

        function animation() {
            ctx.globalCompositeOperation = 'source-over';
            ctx.globalAlpha = 0.8;
            ctx.fillStyle = '#222'; // Цвет фона неба
            ctx.fillRect(0, 0, w, h)
          
          ctx.globalCompositeOperation = 'lighter';
          for (var i = 1, l = stars.length; i < l; i++) {
            stars[i].draw();
          };  
          
          window.requestAnimationFrame(animation);
        }

        animation();

        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var header = document.querySelector('.header');

            if (scrollPosition > 100) { // Или любое другое значение, когда вы хотите начать изменение
                header.style.backgroundColor = 'rgba(34, 34, 34, 0.93)'; // Новый цвет фона с прозрачностью
            } else {
                header.style.backgroundColor = 'rgba(34, 34, 34, 0.8)'; // Исходный цвет фона
            }
        });

        const tabs = document.querySelectorAll('.tabs a');

        tabs.forEach(tab => {
            tab.addEventListener('mouseenter', () => {
                tab.style.color = '#DEA9FF'; // Пурпурный цвет
            });

            tab.addEventListener('mouseleave', () => {
                tab.style.color = '#fff'; // Белый цвет
            });
        });
      