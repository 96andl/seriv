<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="fb-root"></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9&appId=1400453193368792";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/seriv23/" data-hide-cover="false"  data-show-posts="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/seriv23/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/seriv23/">Сергей Иванов</a></blockquote></div>
                 </div>
            <div class="col-md-3">
                <aside id="text-2" class="widget footer-widget widget_text"><h3 class="widget-title"><span>Contacts</span></h3>
                    <div class="textwidget"><p style="text-align: right"><p style="float: left"><b>Mobile: </b></p>
                            <p style="float: right">@foreach($footer['mobile'] as $item)

                                   {{ $item['Mobile']  }}<br>

                            @endforeach
                            </p>
                        </p>
                        <div class="clearfix"></div>
            <p><b>Skype: </b>{{ $footer['contactinfo']['Skype']  }}</p>
            <p><b>E-mail: </b>{{ $footer['contactinfo']['email'] }}</p>
                  </div>
                 </aside>
            </div><div class="col-md-3"><aside id="mondo_recent_posts_widget-2" class="widget footer-widget widget_mondo_recent_posts_widget"><h3 class="widget-title"><span>Recent posts </span></h3><ul class="post-widget-list"><li class="clearfix"><a href="workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"></span></a><div class="entry-content"><h4 class="entry-title"><a href="workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/index.html" rel="bookmark">WORKSHOP в ТАШКЕНТE (Узбекистан) 10-11 июля 2017 года.</a></h4><span class="entry-meta" title="Sun, 04 Jun 2017 14:59:29 +0000"><time class="entry-date published updated" datetime="2017-06-04T14:59:29+00:00">1 неделя назад</time></span></div></li><li class="clearfix"><a href="workshop-v-g-tbilisi-gruziya-3-4-iyulya-2017-goda/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"></span></a><div class="entry-content"><h4 class="entry-title"><a href="workshop-v-g-tbilisi-gruziya-3-4-iyulya-2017-goda/index.html" rel="bookmark">WORKSHOP в ТБИЛИСИ (Грузия) 3-4 июля 2017 года.</a></h4><span class="entry-meta" title="Sun, 04 Jun 2017 14:56:05 +0000"><time class="entry-date published updated" datetime="2017-06-04T14:56:05+00:00">1 неделя назад</time></span></div></li><li class="clearfix"><a href="9551-2/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"></span></a><div class="entry-content"><h4 class="entry-title"><a href="9551-2/index.html" rel="bookmark"></a></h4><span class="entry-meta" title="Fri, 02 Jun 2017 15:46:45 +0000"><time class="entry-date published updated" datetime="2017-06-02T15:46:45+00:00">2 недели назад</time></span></div></li></ul></aside></div>					</div>
    </div>
</div>

<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">
                    Sergey Ivanov artphotografer													</div>
            </div>
            <div class="col-md-6 text-right">

                <div class="social-icons">



                    <a href="{{ $footer['contactinfo']['facebook_link'] }}" class="facebook"><i class="mdi mdi-facebook-box"></i></a>


                    <a href="{{ $footer['contactinfo']['youtube_link'] }}" class="youtube"><i class="mdi mdi-youtube-play"></i></a>




                    <a href="{{ $footer['contactinfo']['vk_link'] }}" class="dribbble"><i class="mdi mdi-dribbble-box"></i></a>


                    <a href="{{ $footer['contactinfo']['instagram_link'] }}" class="instagram"><i class="mdi mdi-instagram"></i></a>









                </div>

            </div>
        </div>
    </div>
</div>
