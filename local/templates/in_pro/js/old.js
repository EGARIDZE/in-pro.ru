var $preloader = $('#preloader-wrapper');
var footerPosition;
window.onload = function () {
    // Preloader
    if ($preloader.length)
        setTimeout(function () { $preloader.fadeOut(); $('.main').css('opacity', 1) }, 1000);

    setTimeout(function(){
        hashScroll();
    }, 1010);
};

function isMobile()  {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function attachFooter(updateFooterPos) {
    var $footer = $('.b-footer__wrapper');
    if (!$footer.length) return;
    if (updateFooterPos == true) {
        $footer.removeClass('to-bottom');
        footerPosition = $footer.offset().top + $footer.height();
    } 
    if ((window.outerHeight) > footerPosition + 11) {
        $footer.addClass('to-bottom');
        $('#to-top').hide()
    } else {
        $footer.removeClass('to-bottom');
        $('#to-top').show()
    }
}

function hashScroll(hash) {
    var h;
    if (hash) {
        h = hash;
    } else if (window.location.hash) {
        h = window.location.hash;
    }
    if (h) {
         setTimeout(function() {
            if (h.indexOf('filter') != -1) {
                var filter = h.split('-')[1];
                $('[data-filter="' + filter + '"]').click();
                $('html,body').animate({'scrollTop' : 0}, 1000);
                return;
            }
             var menuHeight = $('.b-header-set-bg').outerHeight();
            var p = $(h).offset().top - menuHeight;
            if (window.outerWidth < 1366) {
                p += 17;
            }
             if (isMobile())
                p += menuHeight - 15;
            if (hash) {
                $('html,body').animate({'scrollTop' : p}, 1000);
            } else {
                $("html, body").scrollTop(p)
            }
        }, 50)   
    }

}

function fancyboxGallery(elem, data) {
    var anchor = $(elem);
    var review = anchor.data(data);
    var random = parseInt(Math.random()*1000);
    if(review && review != ''){
        var parent = anchor.parent()
        parent.find('.fancybox-review[data-' + data + ']').remove();
        review = review.split(';');
        for(var r in review){
            parent.append('<a href="'+review[r]+'" rel="review' + random + '-' + data + '" style="display:none" class="fancybox-review"></a>');
        }
        parent.find('.fancybox-review[rel="review' + random + '-' + data + '"]').first().click();
    }
    return false;
}

$(function () {
    'use strict';
    hashScroll();

    // Project filter
    $('.b-projects__filter__item').click(function() {

        var $this = $(this);
        var filterString = $this.data('filter');
        var filterArray = filterString.split(', ');
        var $items = $('[data-filter-selector]');
        var checkParity = function () {
            var j = 0;
            $('[data-filter-selector]:visible').each(function() {
                var item = $(this);
                if (j % 2 != 0)
                    item.addClass('even').removeClass('odd');
                else
                    item.addClass('odd').removeClass('even');
                j++;
            })
        }
        $('.b-projects__filter__item').removeClass('active');
        $this.addClass('active');
        if (filterString == 'all') {
            $items.show();
            checkParity();
            return;
        }
        $items.hide();

        $items.each(function() {
            var item = $(this);
            for (var i in filterArray) {
                if (item.data('filter-selector').indexOf(filterArray[i]) != -1) {
                    item.show();
                }
            }
        })
        checkParity();
        attachFooter(true);
    })

    // Submenu
    if (!isMobile()) {
        var hoverState = false;
        $('.b-header__nav').hover(null, function() {
            $(this).data('menuItemActive', false);
        })

        $('.b-header__nav__item').hover(function() {
            var $this = $(this);
            var $prev = $('.active-hover');
            var $submenu = $this.find('.b-header__nav__submenu');
            var show = function() {
                if ($this.hasClass('active'))
                    $this.data('class', 'active').removeClass('active');
                $submenu.fadeIn();
            };

            if ($this.hasClass('active-hover') || hoverState == true) return;

            
            $prev.find('.next-item-helper').remove();

            $('.b-header__nav__item').removeClass('active-hover');
            if ($submenu.length) {
                $this.next().prepend('<div class="next-item-helper">');
                if ($this.parents('.b-header__nav').data('menuItemActive') == true)
                    show();
                else {
                    var t = setTimeout(show, 200);
                    $this.data('timeout', t);
                }
                $this.parents('.b-header__nav').data('menuItemActive', true);
            } else {
                $this.parents('.b-header__nav').data('menuItemActive', false);
                $this.addClass('without-submenu');
            }
            $this.addClass('active-hover');
            $this.find('.next-item-helper').remove();
            hoverState = true;
        }, function() {
            var $this = $(this);
            var $prev = $('.active-hover');
            var $submenuPrev = $prev.find('.b-header__nav__submenu');
            clearTimeout($this.data('timeout'));
            hoverState = false;
            $this.removeClass('without-submenu');
            $prev.addClass($prev.data('class'));
            $submenuPrev.fadeOut('medium', function() {
                $prev.removeClass('active-hover');
            });

            if (!$submenuPrev.length)
                $prev.removeClass('active-hover');
        });
        
        $('.b-header__nav__item span').click(function(){
            $("html, body").animate({scrollTop:0}, '700', 'swing');
        });
    }
    
    // Set anchor for phone or not
    var phoneElem = $('.b-footer__contact__text, .b-contact-info__tel').first().find('a');
    if (isMobile()) {
        phoneElem.attr('href', 'tel:' + phoneElem.text().replace(/[^\d+]/g, ''));
    } else {
        phoneElem.attr('href', '#').click(function () {
            return false;
        }).addClass('empty');
    }

    // Hash URL change event
    $('.page-nav').click(function() {
        hashScroll($(this).attr('href'));
        return false;
    });

    // Attach footer to bottom if window.height > content height after init page
    $(document).ready(function() {
        attachFooter(true);
    })

    // Attach footer to bottom if window.height > content height after window resize
    $(window).resize(function() {
        attachFooter();
    })


    // Fixed menu
    $('.b-header-set-bg').append("<div class='fixed-overlay'>");
    $(window).scroll(function() {
        if (isMobile())
            return;
        var top = $(document).scrollTop();
        var menu = $('.b-header-set-bg');
        var parent = $(".main");
        var menuHeight = menu.outerHeight();
        if ($('.b-home-page').length || menu.hasClass('not-fixed')) return;
        if (top > 0 && !menu.hasClass('fixed')) {
            menu.addClass('fixed');
            menu.prependTo('body');
            //menu.find('.fixed-overlay').fadeIn(400);
            menu.find('.fixed-overlay').show();
            parent.css('padding-top', menuHeight);
        } else if (top <= 0 && menu.hasClass('fixed')) {
            menu.prependTo('.main');
            menu.removeClass('fixed');
            parent.css({'padding-top': 0});
            //menu.find('.fixed-overlay').fadeOut(400);
            menu.find('.fixed-overlay').hide();
        }
    });

    // Change address
    var addressState = false;
    setInterval(function() {
        if (!addressState) {
            $('#st-peterburg-address').fadeOut('medium', function () {
                $('#moscow-address').fadeIn();
            });
            addressState = !addressState;
        } else {
            $('#moscow-address').fadeOut('medium', function() {
                $('#st-peterburg-address').fadeIn();
            });
            addressState = !addressState;
        }
    }, 5000)

    // Show search
    $(document).on('click', '.js-search-icon', function() {
        $('.js-search').fadeIn('fast');
        $(this).hide();
    });

    // To bottom button
    $('#to-bottom').click(function() {
        var menu = $('.b-header-set-bg');
        var height = menu.innerHeight();
        var t = $('.b-statistics').height() - height * 2;
        // mobile (ipad) magic
        if(isMobile()){
            // РєСЂСѓС‚РёРј СЃСЂР°Р·Сѓ Рє СЌР»РµРјРµРЅС‚Сѓ

            t += height - 15;

            //$("html, body").animate({scrollTop: $('.b-statistics').height()-10}, '700', 'swing'); 
        }
        
        // Magic
        if (window.outerWidth < 1366) {
            $("html, body").animate({scrollTop: t - 10}, '700', 'swing');
        } else {
            $("html, body").animate({scrollTop: t + 65}, '700', 'swing');

        }

    })

    // To top button
    $('#to-top').click(function() {
        $("html, body").animate({scrollTop:0}, '700', 'swing');
    })

    $(document).ready(function() {

        // Hide search
        $("body").on('click', ':not(.js-search)', function (e) {
            if (!$(e.target).parents('.js-search').length) {
                $('.js-search-icon').show();
                $('.js-search').hide();
                $('.js-search').find('input').val('');
            }
        });

        // Project review
        $('.project-review').click(function() {
            fancyboxGallery(this, 'reviews');
            return false;
        })

        // Project photos
        $('.project-photos').click(function() {
            fancyboxGallery(this, 'photos');
            return false;
        })

        // Fancybox init image window
        $(".fancybox-review").fancybox({
            'type': 'image',
            'margin': [60, 100, 130, 100],
            'helpers': {
                overlay: {
                    locked: false
                }
            },
            tpl: {
                wrap: '<div class="fancybox-wrap" tabIndex="-1"><a class="client-review-close" href="javascript:$.fancybox.close();">&times;</a><div class="more-project-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                next     : '<a title="Next" class="fancybox-review-nav fancybox-review-next" href="javascript:;"><span></span></a>',
                prev     : '<a title="Previous" class="fancybox-review-nav fancybox-review-prev" href="javascript:;"><span></span></a>'
            }
        });

        // Fancybox init modal window
        $(".fancybox-project, .fancybox-news").fancybox({
            'type': 'inline',
            'autoSize': false,
            'width': '900',
            'autoHeight': true,
            //'scrolling': 'yes',
            helpers: {
                overlay: {
                    locked: false
                }
            },
            tpl: {
                wrap     : '<div class="fancybox-wrap" tabIndex="-1"><a class="modal-window-close" href="javascript:$.fancybox.close();">&times;</a><div class="more-project-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>'
            },
            beforeShow: function() {
                if ($(this)[0].element.hasClass('fancybox-news')) {
                    $('#news-more').find('.news-more-description').html($(this)[0].element.data('news'));
                    return
                }

                var $modal = $('#more-project');
                $modal.width('auto');
                if ($(this)[0].element.data('description'))
                    $modal.find('.more-project-description').show().html($(this)[0].element.data('description'));
                else
                    $modal.find('.more-project-description').hide();

                if (!$(this)[0].element.data('tasks')) {
                    $modal.find('.more-project-tasks').hide();
                    return;
                }

                var tasks = $(this)[0].element.data('tasks').split('; ');
                var i = 0;
                var column = '';

                $modal.find('ul').empty();
                for (var task in tasks) {
                    if (i % 2 == 0) {
                        column = 'left';
                    } else
                        column = 'right';

                    var li = $('<li>').html(tasks[task]);
                    $modal.find('.more-project-tasks-' + column).find('ul').append(li)

                    i++;
                }
                $modal.find('.more-project-tasks').show();
            }
        });
    });
    
    
});

