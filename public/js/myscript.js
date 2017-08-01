(function ($) {
    jQuery('.owl-carousel').owlCarousel(
        {
            loop:true,
            margin:10,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        }
    );
    var feed = new Instafeed({
        get: 'user',
        tagName:'ugly',
        clientId:'b1dbd98fa3c2450588d000ea38df07aa',
        'userId':'2905492294'
    });
    feed.run();
    // jQuery.getJSON("instagram/getJson",function(data) {
    //     var imgObj = {
    //         smallImg : [],
    //         middleImg: [],
    //         bigImg : []
    //     };
    //     var obj = JSON.parse(data);
    //     for(var i = 0; i< obj.items.length; i++) {
    //         imgObj.smallImg.push( obj.items[i].images.thumbnail.url);
    //         imgObj.middleImg.push(obj.items[i].images.low_resolution.url);
    //         imgObj.bigImg.push(obj.items[i].images.standard_resolution.url);
    //     }
    //     console.log(imgObj);
    // }).fail(function( jqxhr, textStatus, error ) {
    //     var err = textStatus + ", " + error;
    //     console.log("Request Failed: " + err);
    // });
})();