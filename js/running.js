  function runing() {
      var w = $(window).width() - 15;
      var h = $(window).height() - 15;
      var r = Math.floor(Math.random() * (254)),
          g = Math.floor(Math.random() * (254)),
          b = Math.floor(Math.random() * (254)),
          x = Math.floor(Math.random() * (w)),
          y = Math.floor(Math.random() * (h)),
          color = "rgba(" + r + ", " + g + ", " + b + ", 0.5)",
          filled = true,
          radius = 1;
      jc.circle(x, y, radius, color, filled).animate({
          radius: 100,
          opacity: 0
      }, 1500, function () {
          this.del();
      });
  }