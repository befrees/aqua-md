jQuery(function($) {

    var detectMob = 900;

    if (window.innerWidth < detectMob) {
        try {
            $('.products-list-slider-mob').slick({
                slidesToShow: 2,
                dots: false,
                arrows: false
            });
        } catch (e) {

        }
    }

    $('.hint-container').hoverIntent({
        over: function(e) {
            $(this).addClass('hover');
            $(this).find('.hint-popup').fadeIn(100);
            openMenu.heightMenu();

        },
        out: function() {
            $(this).removeClass('hover');
            $(this).find('.hint-popup').fadeOut(100);
        },
        timeout: 150
    });

    $('body').on('click', '.filter-header', function(e) {
        e.preventDefault();
        var block = $(this).parents('.filter-box');
        block.find('.filter-content').slideToggle(300, function() {
            block.toggleClass('open');
        })
    });

    $('body').on('click', '.accordion-toggle', function(e){
        e.preventDefault();
        var box = $($(this).data('target')).length ? $($(this).data('target')) : $(this).parents('.accordion-box');
        console.log(box);
        box.children('.accordion-content').slideToggle(200, function(){
            console.log(box);
            box.toggleClass('open');
        });
    });

    $('body').on('click', '.btn-toggle-data', function(e) {
        e.preventDefault();
        let par = $(this).parents('.goods-data');
        if (par.hasClass('open')) {
            par.animate({ top: '273px' }, 200, function() {
                par.find('.goods-data-drop').animate({ height: '0px' }, 200);
            });
        } else {
            par.animate({ top: '35px' }, 200, function() {
                par.find('.goods-data-drop').animate({ height: '230px' }, 200);

            });
        }
        
        par.find('.btn-toggle-data').fadeToggle(200);
        // par.find('.goods-data-drop').slideToggle(200);

        par.toggleClass('open');
    })

    var scrollbarInit = (function scrollbarInit(els) {
        try {

            els.each(function(i, el) {
                $(el).mCustomScrollbar({
                    setHeight: 300,
                    theme: "dark-thick"
                });
            })

        } catch (e) {
            console.log(e);
        }
        return scrollbarInit;
    }($('.scrollbar')))

    $('body').on('click', 'a.toggle-link', function(e) {
        e.preventDefault();
        var block = $(this).parents('.toggle-text-block');
        block.find('a.toggle-link').toggle();
        block.find('.hide-text-block').slideToggle(300, function() {});
        return false;
    });

    $('body').on('click', '.btn-toggle-form-reviews', function(e){
        e.preventDefault();
        $('#block-reviews-form').slideToggle(200);
        $('.btn-toggle-form-reviews').toggle();
    });

    $('body').on('click', '.container-product .rating-block a.reviews', function(e) {
        e.preventDefault();
        var reviewsBlock = $('.item-tab-reviews');
        $('#tab-link-reviews').trigger('click');
        if (!reviewsBlock.length) return false;
        var top = reviewsBlock.offset().top;
        $('html, body').animate({ scrollTop: top }, 500);
    })
    var dataSlickInTab = function(tab) {
        if (window.innerWidth < 900) {
            return {
                rows: 1,
                slidesPerRow: 1,
                slidesToShow: 2,
                initialSlide: 0,
                dots: false,
                arrows: false,
                infinite: false,
                draggable: true,
                // lazyLoad: 'progressive',
                appendArrows: '.arrows-in-tab-' + tab
            }
        }
        return {
            rows: 2,
            slidesPerRow: 1,
            slidesToShow: 4,
            initialSlide: 0,
            dots: false,
            arrows: true,
            infinite: false,
            draggable: false,
            // lazyLoad: 'progressive',
            appendArrows: '.arrows-in-tab-' + tab
            // responsive: [
            // // {
            // //       breakpoint: 2520,
            // //       settings: {
            // //         rows: 2,
            // //         slidesPerRow: 1,
            // //         slidesToShow: 4
            // //       }
            // //   },
            //     {
            //       breakpoint: 1024,
            //       settings: {
            //         rows: 1,
            //         slidesPerRow: 1,
            //         slidesToShow: 2,
            //         slidesToScroll: 2
            //       }
            //     },
            //     {
            //       breakpoint: 899,
            //       settings: "unslick"
            //     },
            //     {
            //       breakpoint: 898,
            //       settings: {
            //         rows: 1,
            //         slidesPerRow: 1,
            //         slidesToShow: 2,
            //         slidesToScroll: 2,
            //         variableWidth: true
            //       }
            //     },
            //     {
            //         breakpoint: 480,
            //         settings: {
            //             rows: 1,
            //             dots: false,
            //             arrows: false,
            //             slidesPerRow: 1,
            //             slidesToShow: 1,
            //             initialSlide: 0,
            //             infinite: false,
            //             draggable: true,
            //             // lazyLoad: 'progressive',
            //             appendArrows: '.arrows-in-tab-' + tab
            //         }
            //     }
            // ]
        }
    }

    try {
        $('select').styler();
        // $('select').select2({
        //     minimumResultsForSearch: Infinity
        // });
    } catch (e) {}

    try {

        setTimeout(function() {
            $('input[type=number]').styler();
        }, 100)
    } catch (e) {}

    try {
        $('input:checkbox').not('input.color-checkbox').styler();
    } catch (e) {}

    try {
        $('input:radio').styler();
    } catch (e) {}

    // $(".open-cart-btn").sideNav({
    //     menuWidth: 425, 
    //     edge: 'right',
    //     closeOnClick: true,
    //     draggable: true,
    //     onOpen: function(el) {},
    //     onClose: function(el) {}
    // });

    $('body').on('click', '.open-cart-btn', function(e) {
        e.preventDefault();
        $('.side-cart').sideNav('show');
    });

    try {
        $('.slider-main').slick({
            dots: true,
            arrows: false
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('.slider-catalog').slick({
            dots: true,
            arrows: false
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('.slider-catalog-brands').slick({
            dots: true,
            arrows: false
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('.slider-subcategories-top').slick({
            dots: false,
            arrows: true,
            slidesToShow: 12
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('.slider-categories').slick({
            dots: false,
            arrows: true,
            focusOnSelect: true,
            slidesToShow: 9
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('ul.tabs').tabs({
            onShow: function(tab) {
                // console.log(tab);
                var t = $(tab).find('.slider-goods').data('tab');
                // console.log(t, $(this).parents('.tabs-nav'));
                $(tab).find('.arrows-in-tab').html('');
                $(tab).find('.slider-goods').slick('unslick').slick(dataSlickInTab(t));
                // console.log($(tab).find('.slider-goods').slick('getSlick'));
                $(this).parents('.tabs-nav').removeClass('open');
            }
        });
    } catch (e) {
        console.log(e);
    }

    try {
        $('.tabs-goods .slider-goods').each(function(idx, el) {
            var tab = $(el).data('tab');

            $(el).slick(dataSlickInTab(tab));
        });

    } catch (e) {}
    try {
        $('.brand-slider').slick({
            dots: false,
            arrows: true,
            variableWidth: true,
            slidesToShow: 8,
            appendArrows: '.brand-slider-arrows',
            responsive: [{
                breakpoint: 900,
                settings: {
                    slidesToShow: 4,
                    arrows: false
                }
            }, ]
        });
    } catch (e) {}

    var paramsBigImg = {
        asNavFor: '.thumbs-slider',
        fade: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 900,
            settings: {
                // dots: true,
                // arrows: false,
                // fade: false
            }
        }, ]
    };
    // var paramsBigImgModal = paramsBigImg;
    // paramsBigImgModal.arrows = true;
    var paramsThumbs = {
        slidesToShow: 4,
        // vertical: true,
        focusOnSelect: true,
        asNavFor: '.images-big-slider',
        dots: false,
        arrows: true,
        // verticalSwiping: true,
        // infinite: false,     
        prevArrow: '<button type="button" class="slick-prev"><i class="icon-ic-arrow-up"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="icon-ic-arrow-up"></i></button>'
    };
    var paramsThumbsMain = paramsThumbs;
    paramsThumbsMain.responsive = [{
        breakpoint: 1610,
        settings: {
            slidesToShow: 4,
            prevArrow: '<button type="button" class="slick-prev"><i class="icon-ic-arrow-up"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="icon-ic-arrow-up"></i></button>'
        }
    }, ];
    try {

        $('.thumbs-slider').slick(paramsThumbsMain);
        $('.images-big-slider').slick(paramsBigImg);
        // $('.modal-thummbs-list').slick(paramsThumbs);
        // $('.modal-big-images-list').slick(paramsBigImgModal);
    } catch (e) {
        console.log(e);
    }

    // $('body').on('click', '.big-images-list .big-image', function(e) {
    //     e.preventDefault();
    //     var slide = $('.big-images-list').slick('slickCurrentSlide');
    //     // $('#modal-images').mmodal('open');
    //     $('#modal-images').modal('show');
    //     setTimeout(function() {

    //         $('.modal-big-images-list').slick('destroy').slick(paramsBigImg).slick('slickGoTo', slide);
    //         $('.modal-thummbs-list').slick('destroy').slick(paramsThumbs).slick('slickGoTo', slide);
    //     }, 200);
    // });

    $('body').on('click', '.title-filter', function(e) {
        e.preventDefault();
        var f = $(this).parents('.block-filter');
        f.toggleClass('open')
            .find('.filter')
            .slideToggle(300);
    });

    $('body').on('click', '.more-filter', function(e) {
        e.preventDefault();
        var a = $(this),
            text = a.text(),
            plc = a.data('placeholder'),
            f = $(this).parents('.block-filter');
        f.find('.hidden-filter').slideToggle(200);
        a.text(plc).attr('data-placeholder', text);
    });

    $('body').on('click', '.open-drop-tooltip', function(e) {
        e.preventDefault();
        var a = $(this);
        $(a.data('target')).fadeIn(200);
    });
    $('body').on('click', '.close-drop', function(e) {
        e.preventDefault();
        $('.drop-tooltip').fadeOut(200);
    })

    $('.menu-btn').on('click', function(e) {
        e.preventDefault();
        $('.site-header').toggleClass('open');
    })

    $('body').on('click', '.popup', function(e) {
        e.stopPropagation();
    });
    $('body').on('click', '.close-popup, .popup-mask', function(e) {
        e.preventDefault();
        $('.popup-mask').fadeOut(250);
    });
    try {
        $('body').on('click', '.fancy-img', function(e) {
            e.preventDefault();
            var a = this;
            $.fancybox.open({
                href: a.href
            });
        })
    } catch (e) {

    }
    $('body').on('mouseenter', '.attribute-row', function(e) {
        $(this).find('.attribute-hover-data').fadeIn(200);
    });

    $('body').on('mouseleave', '.attribute-row', function(e) {
        $(this).find('.attribute-hover-data').fadeOut(200);
    });

    $('.attr-color').each(function(idx, el) {
        var color = $(el).data('color');
        $(el).find('.jq-radio').css({ "background": color });
    })

    $('[data-toggle="tooltip"]').tooltip();

    $('body').on('mouseleave', '.lbl-rating', function(e) {
        $('.lbl-rating').removeClass('hover');
    });
    $('body').on('mouseenter', '.radio-stars', function() {
        $(this).addClass('hovers');
    });

    $('body').on('mouseleave', '.radio-stars', function() {
        $(this).removeClass('hovers');
    });

    /**
     *  Menu hover
     */

    var openMenu = {
        init: function() {},
        open: function() {},
        showBlockMenu: function(hoverItem) {
            var innerMenu = $(hoverItem).find('.level-1.hover > .menu_block');
            var innerHeight = innerMenu.height();
            $('.catalog-drop').css('min-height', innerHeight + 'px');

        },
        heightMenu: function() {
            var height = $('.menu-catalog-drop').height();
            $('.menu-catalog-drop .col:visible').each(function(i, el) {
                if ($(el).height() > height) {
                    height = $(el).height();
                }
                console.log(el);
            });
            $('.menu-catalog-drop').height(height);
        }
    }


    $(' .wrapper-catalog, .wrapper-catalog li').hoverIntent({
        over: function(e) {
            $(this).addClass('hover');
            $(this).find('.catalog-drop').fadeIn(100);
            openMenu.heightMenu();

        },
        out: function() {
            $(this).removeClass('hover');
            $(this).find('.catalog-drop').fadeOut(100);
        },
        timeout: 150
    });

    $('body').on('mouseenter', '.wrapper-catalog, .top-links-menu > li', function(e) {
        e.preventDefault();
        if (!$(this).find('.level-1.hover').length) {
            $(this).find('.level-1:first').addClass('hover');
        }
        openMenu.showBlockMenu(this);
    })
    $('body').on('mouseenter', '.level-1', function(e) {
        e.preventDefault();
        $('.level-1').removeClass('hover');
        $(this).addClass('hover');
        openMenu.showBlockMenu($(this).parent());
    });
    $('body').on('mouseleave', '.level-1', function(e) {
        // $('.level-1').removeClass('hover');
    });

    try {
        $('.modal').mmodal({
            inDuration: 100,
            outDuration: 100,
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                // alert("Ready");
                // console.log(modal, trigger);
                $('.modal').not(modal).mmodal('close');
            },
        });
    } catch (e) {}

    $('body').on('click', '.close-modal', function(e) {
        e.preventDefault();
        $('.modal').mmodal('close');
        $('.modal').modal('hide');
    })

    try {
        $('.ui-slider-handle').draggable();
    } catch (e) {}

    // Открыть-закрыть кредиты
    $('body').on('click', '.credit-open', function(e) {
        e.preventDefault();
        var th = $(this).parents('.tr-head');
        th.addClass('open');
        th.next('.tr-body').slideDown();
    });
    $('body').on('click', '.credit-close', function(e) {
        e.preventDefault();
        var tb = $(this).parents('.tr-body');
        var th = tb.prev('.tr-head');
        th.removeClass('open');
        tb.slideUp();
    });

    $('body').on('click', '.brands-accordion > li > a', function(e) {
        e.preventDefault();
        var b = $(this).parents('li');
        var bid = $(b).attr('id');
        var bs = $('.brands-accordion > li').not(b);
        $('.chars-buttons li a').not('[data-brand=' + bid + ']').removeClass('active');
        $('.chars-buttons li a[data-brand=' + bid + ']').toggleClass('active');

        toggleBrands();
    });
    $('body').on('click', '.chars-buttons li a', function(e) {
        e.preventDefault();
        $('.chars-buttons li a').removeClass('active');
        $(this).addClass('active');
        toggleBrands();
    });
    var toggleBrands = (function toggleBrands() {
        var a = $('.chars-buttons li a.active') || null;
        if (a) {
            var b = a.data('brand');
            var c = $('#' + b);
            var bs = $('.brands-accordion li').not(c);

            $(bs).removeClass('open').find('.brands-box').slideUp();
            $(c).toggleClass('open').find('.brands-box').slideToggle(360, function() {
                var pos = c.offset().top;
                $('html, body').animate({ scrollTop: pos });
            });

        }
        return toggleBrands;
    }())

    $('body').click(function(e) {
        // e.preventDefault();
        // console.log(this.offsetWidth);
        // if(this.offsetWidth <= 980){
        // }
        // $('.open').removeClass('open');
    })
    // open search
    $('body').on('click', '.btn-open-search, .search-mask', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.search-container').toggleClass('open');
    });
    $('body').on('click', '.btn-top-menu', function(e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('.menu-line').toggleClass('open');
    });
    // open menu-pages
    $('body').on('click', '.btn-open-menu', function(e) {
        e.stopPropagation();
        $('.pages-menu').toggleClass('open');
    });
    $('body').on('click', '.open', function(e) {
        e.stopPropagation();
    });
    $('body').on('click', '.menu-line .catalog-menu .icon-menu', function(e) {
        // $('.menu-line .catalog-menu').removeClass('hover').trigger('mouseleave');
    });
    /// Open-close tabs
    $('body').on('click', '.btn-open-tabs', function(e) {
        e.preventDefault();
        $(this).parents('.tabs-nav').toggleClass('open');
    });

    // open mobile form user
    $('body').on('click', '.login-form-link', function(e) {
        e.preventDefault();
        $(this).addClass('active');
        var target = $(this).data('box');
        $('.user-form-mob').removeClass('active');
        $(target).addClass('active');
    })
    $('body').on('click', '.link-to-form', function(e) {
        e.preventDefault();
        var target = $(this).data('box');
        $('.user-form-mob').removeClass('active');
        $(target).addClass('active');
    });

    // Catalog open close popup
    $('body').on('click', '.btn-open-popup', function(e) {
        e.preventDefault();
        var target = $(this).data('open');
        $('.mobile-popup').removeClass('open');
        $(target).addClass('open');
    });
    $('body').on('click', '.close-mob-popup', function(e) {
        e.preventDefault();
        $('.mobile-popup, .open').removeClass('open');
    })


    $('.found-cheaper-wrap').hoverIntent({
        over: function() {
            $('.fc-hint').fadeIn(200);
        },
        out: function() {
            $('.fc-hint').fadeOut(200);
        },
        timeout: 150
    });

    $('.search-form').hoverIntent({
        over: function(e) {
            console.log(this);
            $(this).addClass('opened');
            $(this).find('.jq-selectbox__dropdown').show();
        },
        out: function() {
            $(this).removeClass('opened');
            $(this).find('.jq-selectbox__dropdown').hide();
        },
        timeout: 120,
        selector: '.jq-selectbox'
    });

// Product page 

try{
    $('.slider-cheaper').slick({
        prevArrow: '<button type="button" class="slick-prev"><i class="icon-ic-arrow-up"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="icon-ic-arrow-up"></i></button>'
    });
} catch (e){
    console.log(e);
}


})