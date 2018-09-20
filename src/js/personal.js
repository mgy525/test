    $("#btnOnOff").on('click', function () {
      $(".mycontent").toggleClass('active');

      if ($(".mycontent").hasClass("active")) {
        $(this).text('显示')
      } else {
        $(this).text('隐藏')
      }

    })


    $(window).on('touchstart', function (e) {
      x1 = e.originalEvent.changedTouches[0].clientX;
      y1 = e.originalEvent.changedTouches[0].clientY;
    })

    $(window).on('touchend', function (e) {
      var x2 = e.originalEvent.changedTouches[0].clientX;
      var y2 = e.originalEvent.changedTouches[0].clientY;

      var dx = x2 - x1;
      if (Math.abs(dx) >= 100) {
        $('#btnOnOff').trigger('click');
      }
    })