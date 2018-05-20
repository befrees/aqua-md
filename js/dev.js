$(function() {

    // Filters sliders

    var sliderInit = function(el, step, idFrom, idTo){
        var step = step || 100,
            min = $(el).data('min'),
            max = $(el).data('max'),
            valStart = $(idFrom).val(),
            valFinish = $(idTo).val();
        $(el).slider({
            range: true,
            min: min,
            max: max,
            step: step,
            values: [ valStart, valFinish ],
            slide: function( event, ui ) {
                $(idFrom).val(ui.values[ 0 ]);
                $(idTo).val(ui.values[ 1 ] );
            }
        });
    }

    sliderInit('#slider-price', 100, '#price-from', '#price-to');
    sliderInit('#slider-length', 10, '#length-from', '#length-to');
    sliderInit('#slider-width', 10, '#width-from', '#width-to');
    sliderInit('#slider-volume', 100, '#volume-from', '#volume-to');


    $('input.color-checkbox').styler({
        onFormStyled: function(){
            // console.log(this);
            $('input.color-checkbox').each(function(i, el){
                // console.log($('#' + $(el).attr('id') + '-styler'), '#' + $(el).attr('id') + '-styler');
                $('#' + $(el).attr('id') + '-styler').css({
                    'background': $(el).data('color')
                });
            });
        }
    })
    // просмотр заказа 
    $('body').on('click', '.order-info a.order-btn', function(e) {
        e.preventDefault();
        var order = $(this).data('order');

        $(order)
            .toggleClass('open')
            .find('.toggle')
            .slideToggle(100);

    })


    // Переключение формы или списка отзывов в карточке товара
    $('body').on('click', '.btn-open-add-review', function(e) {
        e.preventDefault();
        $('#block-reviews-list').hide();
        $('#block-reviews-form').show();
    });
    $('body').on('click', '.open-reviews-list', function(e) {
        e.preventDefault();
        $('#block-reviews-list').show();
        $('#block-reviews-form').hide();
    });

    // Общий рейтинг
    (function() {
        var blockRating = $('[data-rating]');
        var rating = blockRating.data('rating') + '';
        var rDivide = rating.split('.');
        var r1 = parseInt(rDivide[0]) + 1;;
        var r2 = parseFloat(0 + '.' + rDivide[1]) * 100;
        $('.stars-cover').find('.star-' + r1).find('.star-inner-bg').css({ width: r2 + '%' });
        $('.stars-cover').find('.star-' + r1).nextAll().hide();
    }())


    // Рейтинг товара
    var changeRating = (function changeRating(rating, activeClass) {
        rating = +rating || +$('.radio-stars input:radio:checked').val();
        activeClass = activeClass || 'active';
        $('.lbl-rating').removeClass(activeClass);
        var stars = $('.radio-stars input:radio');

        for (var i = 0; i < stars.length; i++) {
            if (i < rating) {
                $(stars[i]).parents('.lbl-rating').addClass(activeClass);
            }
        }
        return changeRating;
    }())

    $('body').on('change', '.radio-stars input:radio', function(e) {
        e.preventDefault();
        changeRating(this.value);
    });
    $('body').on('mouseenter', '.lbl-rating', function(e) {
        $(this).addClass('hover');
        changeRating($(this).find('input:radio').val(), 'hover');
    });

    // Обработчик формы заказа по телефону

    $('body').on('click', '.btn-buy-phone', function(e){
        e.preventDefault();
        $('#modal-order-phone').modal('show');
    });

    $('body').on('submit', '#phone-order-form', function(e) {
        e.preventDefault();
        $('#modal-order-phone').modal('hide');
        $('#modal-order-phone-status').modal('show');
    })



    // Обработчик формы заказа товара	

    $('body').on('click', '.btn-goods-buy', function(e) {
        e.preventDefault();
        $('#modal-add-to-cart').modal('show');
        
    });

    // Новый сптсок желаний 

    $('body').on('click', '.btn-add-wishlist', function(e) {
        e.preventDefault();
        $('#modal-wishlist').mmodal('open');
    });

    // Timer


    var clock;
    try {
        // Grab the current date
        var currentDate = new Date();

        // Set some date in the future. In this case, it's always Jan 1
        var futureDate = new Date(currentDate.getFullYear() + 0, 6, 1);

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        // Instantiate a coutdown FlipClock
        clock = $('.clock').FlipClock(diff, {
            clockFace: 'DailyCounter',
            countdown: true,
            language: 'ru',
            showSeconds: true,
            onCreate: function() {},
            onInit: function() {
                var dividers = this.face.dividers;
                // console.log(dividers);
                for (var i = 0; i < dividers.length; i++) {
                    if ($(dividers[i]).hasClass('days')) {
                        var flips = $('.days ~ .flip').length - (i * 2);
                        $(dividers[i]).find('.flip-clock-label').addClass('days-lbl lbl-' + flips);
                    }
                    if ($(dividers[i]).hasClass('hours')) {
                        var flips = $('.hours ~ .flip').length - (i * 2);
                        $(dividers[i]).find('.flip-clock-label').addClass('hours-lbl lbl-' + flips);
                    }
                    if ($(dividers[i]).hasClass('minutes')) {
                        var flips = $('.minutes ~ .flip').length - (i * 2);
                        $(dividers[i]).find('.flip-clock-label').addClass('minutes-lbl lbl-' + flips);
                    }
                    if ($(dividers[i]).hasClass('seconds')) {
                        var flips = $('.seconds ~ .flip').length - (i * 2);
                        $(dividers[i]).find('.flip-clock-label').addClass('seconds-lbl lbl-' + flips);
                    }

                }
            }
        });
        clock.onCreate(function(e) {
            // console.log(clock);
        });
        clock.onInit(function() {
            // console.log(clock);
        });
    } catch (e) {
        console.log(e);
    }

    try{
        $(".input-phone-number").inputmask({
            mask: "(999) 999 99 99", 
            greedy: false, 
            placeholder:"(___) ___ __ __"
        });
    } catch(e){
        
    }
    try{
    	$("#promo-code").inputmask({mask: "999-999-999-999", greedy: false, placeholder:"   -   -   -   "});
    } catch(e){
    	
    }

})