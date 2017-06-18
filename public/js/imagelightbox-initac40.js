jQuery(function ($) {
    var activityIndicatorOn = function () {
            $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
        },
        activityIndicatorOff = function () {
            $('#imagelightbox-loading').remove();
        },

        overlayOn = function () {
            $('<div id="imagelightbox-overlay"></div>').appendTo('body');
        },
        overlayOff = function () {
            $('#imagelightbox-overlay').remove();
        },

        closeButtonOn = function (instance) {
            $('<a href="#" id="imagelightbox-close">Close</a>').appendTo('body').on('click touchend', function () {
                instance.quitImageLightbox();
                return false;
            });
        },

        closeButtonOff = function () {
            $('#imagelightbox-close').remove();
        },

        infoOn = function () {

            var ilb = $('#imagelightbox');

            var info = $('<div id="imagelightbox-info"/>'),
                a = $('a[href="' + $('#imagelightbox').attr('src') + '"]');


            var caption = a.find('.vls-gf-info-caption');
            if (caption)
                info.append('<h2 id="imagelightbox-info-caption">' + caption.text() + '</h2>');

            var description = a.find('.vls-gf-info-description');
            if (description)
                info.append('<div id="imagelightbox-info-description">' + description.text() + '</div>');


            info.appendTo('body');
        },

        infoOff = function () {
            $('#imagelightbox-info').remove();
        },

        navigationOn = function (instance, selector) {
            var images = $(selector);
            if (images.length) {
                var nav = $('<div id="imagelightbox-nav"></div>');
                for (var i = 0; i < images.length; i++)
                    nav.append('<a href="#"></a>');

                nav.appendTo('body');
                nav.on('click touchend', function () {
                    return false;
                });

                var navItems = nav.find('a');
                navItems.on('click touchend', function () {
                    var $this = $(this);
                    if (images.eq($this.index()).attr('href') != $('#imagelightbox').attr('src'))
                        instance.switchImageLightbox($this.index());

                    navItems.removeClass('active');
                    navItems.eq($this.index()).addClass('active');

                    return false;
                })
                    .on('touchend', function () {
                        return false;
                    });
            }
        },
        navigationUpdate = function (selector) {
            var items = $('#imagelightbox-nav a');
            items.removeClass('active');
            items.eq($(selector).filter('[href="' + $('#imagelightbox').attr('src') + '"]').index(selector)).addClass('active');
        },
        navigationOff = function () {
            $('#imagelightbox-nav').remove();
        };


    $('.vls-gf-album').each(function () {

        var $this = $(this);

        var vlsGfImageLightbox = $this.imageLightbox(
            {
                container: $this.find('.vls-gf-page:first-child'),
                onStart: function () {
                    overlayOn();
                    closeButtonOn(vlsGfImageLightbox);
                },
                onEnd: function () {
                    infoOff();
                    closeButtonOff();
                    overlayOff();
                    activityIndicatorOff();
                },
                onLoadStart: function () {
                    infoOff();
                    activityIndicatorOn();
                },
                onLoadEnd: function () {
                    infoOn();
                    activityIndicatorOff();
                }
            });

        $this.data('vlsGfLightbox', vlsGfImageLightbox);

    });


});
