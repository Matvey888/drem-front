(function ($) {
    $(function () {
        // Menu
        $('.open-menu.one').click(function (e) {
            e.preventDefault();
            $('.open-menu.two').removeClass('active');
            $('.drop-menu__two').fadeOut(400,'linear');
            $('.menu__arrow.two').removeClass('active');

            $(this).toggleClass('active');
            $('.menu__arrow.one').toggleClass('active');
            $('.drop-menu__one').fadeToggle(400,'linear');
        });
        $('.open-menu.two').click(function (e) {
            e.preventDefault();
            $('.open-menu.one').removeClass('active');
            $('.drop-menu__one').fadeOut(400,'linear');
            $('.menu__arrow.one').removeClass('active');

            $(this).toggleClass('active');
            $('.menu__arrow.two').toggleClass('active');
            $('.drop-menu__two').fadeToggle(400,'linear');
        });

        $('#drop-menu__brand').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 2,
            dots: true,
            arrows: false,
            variableWidth: true,
        });
        $('#drop-menu__brand-two').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 2,
            dots: true,
            arrows: false,
            // variableWidth: true,
        });

        // Timer
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
              'total': t,
              'days': days,
              'hours': hours,
              'minutes': minutes,
              'seconds': seconds
            };
        }
        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);
                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }
        // var deadline = '31/12/2022';
        var countdown = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        var counterMin = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        if($("div").is("#countdown")){
            initializeClock('countdown', countdown);
        }
        if($("div").is("#counter-m") ){
            initializeClock('counter-m', counterMin);
        }
        // Timer end

        // В top-header кружки
        $('.header__tools-count').each(function () {
            if($(this).text() != ''){
                $(this).css('display','flex')
            }
        });

        // Home
        $('#main-baner').slick({
            // autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            // variableWidth: true,
        });
        $('#main-brand').slick({
            slidesToShow: 7,
            slidesToScroll: 2,
            dots: true,
            arrows: false,
            // variableWidth: true,
        });
        $('#main-baner__big').slick({
            // autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            arrows: false,
        });
        $('#main-reviews').slick({
            // autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: false,
        });
        $('#main-articles').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: true,
        });
        $('#main-poster').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
        });
        // Product
        $('#our-recommend__slider').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: true,
        });
        $('#watch-products__slider').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: true,
        });
        $('.product__img-block').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // infinity: true,
            fade: true,
            // focusOnSelect: true,
            asNavFor: '.product__img-slider',
            dots: false,
            arrows: false,
            
        });
        $('.product__img-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinity: true,
            focusOnSelect: true,
            asNavFor: '.product__img-block',
            dots: false,
            arrows: true,
        });
        $('.main-classif__accardion').click(function (e) {
            e.preventDefault();
            $(this).find('.main-classif__accardion-bottom').fadeToggle();
            $(this).toggleClass('active');

        });
        // Sitebar filter
        $('.smartfilter__size-button').click(function (e) {
            e.preventDefault();
            $(this).css('display','none');
            $('.smartfilter__size-list').each(function() {
                $(this).toggleClass('active');
            });
            $('.size200').css('display','block');
            $('.smartfilter__size-whot ').fadeIn();
            $('.smartfilter__size-hide ').fadeIn();

        });
        $('.smartfilter__size-hide').click(function (e) {
            e.preventDefault();
            $('.smartfilter__size-button').css('display','block');
            $('.smartfilter__size-list').each(function() {
                $(this).toggleClass('active');
            });
            $('.size200').css('display','none');
            $(this).css('display','none');
            $('.smartfilter__size-whot ').css('display','none');
        });

        $('.product__description-text-more').on('click', function(){
            $('.product__description-text--hidden').slideToggle('hidden');
            $(this).toggleClass('shown'); 
            if (!$(this).hasClass('shown')) {
                $(this).text('Свернуть');
            } else {
                $(this).text('Читать еще');
            }
        });
        // $('.product__img-block-img').on('click', function () {
        //     console.log('Hi');
        // });
        $('#send-review').on('click', function () {
            $('.product__review-send').slideToggle('hid');
            $(this).toggleClass('hid');
        });

        $('.send-review__cancel').on('click', function () {
            $('.product__review-send').slideToggle('hid');
            $('#send-review').removeClass('hid');
        });
        $('input:radio[name="rating"]').on('click', function() {
            let idRadio = $("input[type='radio'][name='rating']:checked").attr('id');
              let result = $("label[for='"+idRadio+"']").attr('title');
              $(".rating-value").text(result);
          });

          $('.pay-click').on('click', function (e) {
              e.preventDefault();
            //   console.log('hi');
              $('.modal__order').css('display', 'block');

          });

          $(document).on('click', '.close-modal', function () {
            //   console.log();
              $('.modal__order').css('display', 'none');
          })
    });
})(jQuery);















































// Svg inline is img
// $('img.filter__type-img').each(function(){
//     var $img = $(this);
//     var imgClass = $img.attr('class');
//     var imgURL = $img.attr('src');
//     $.get(imgURL, function(data) {
//       var $svg = $(data).find('svg');
//       if(typeof imgClass !== 'undefined') {
//         $svg = $svg.attr('class', imgClass+' replaced-svg');
//       }
//       $svg = $svg.removeAttr('xmlns:a');
//       if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
//         $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
//       }
//       $img.replaceWith($svg);
//     }, 'xml');
// });
