<div id="content" class="site-content container">
    <div class="row">
        <div class="col-md-8">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    @foreach($content['workshop'] as  $item)
                    <article class="mondo-standard post type-post status-publish format-standard hentry category-bez-rubriki">

                        <h2 class="entry-header">
                            <h1 class="entry-title">
                                <a href="workshops/{{$item->translite_name}}" rel="bookmark">{{$item->name}}
                                </a>
                            </h1>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <a href="workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/index.html" title="Sun, 04 Jun 2017 14:59:29 +0000">
                                        <time class="entry-date published updated" datetime="2017-06-04T14:59:29+00:00">1 неделя ago</time>
                                    </a>
                                </span>
                                <span class="separator">
                                    &bull;
                                </span>
                                <span class="comments-link">
                                    <i class="mdi mdi-comment visible-xs-inline-block">

                                    </i>
                                    <a href="workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/index.html#respond">
                                        0 Комментариев
                                    </a>
                                </span>
                                <span class="separator">
                                    &bull;
                                </span>
                                <span class="cat-links">
                                    <a href="category/bez-rubriki/index.html" rel="category tag">
                                        Без рубрики
                                    </a>
                                </span>
                                <span class="separator">
                                    &bull; </span>
                                <span class="love-link">
					<a href="#" class="mondo-love-button" title="Нажми, чтобы лайкнуть эту запись." data-id="9567">
				<i class="mdi mdi-heart-outline"></i>
				<span class="love-count">1</span>
			</a>
				</span>
                            </div>	</h2><!-- .entry-header -->

                        <div class="entry-content">
                           {{$item->title}}
                                <a href="wp-content/uploads/2017/06/Tashkent.jpg">
                                    <img class="alignnone size-full wp-image-9568" src="{{asset('storage/workshops/'.$item->image)}}" alt="" width="1200" height="800" srcset="http://seriv.com/wp-content/uploads/2017/06/Tashkent.jpg 1200w, http://seriv.com/wp-content/uploads/2017/06/Tashkent-300x200.jpg 300w, http://seriv.com/wp-content/uploads/2017/06/Tashkent-768x512.jpg 768w, http://seriv.com/wp-content/uploads/2017/06/Tashkent-1024x683.jpg 1024w" sizes="(max-width: 1200px) 100vw, 1200px" />
                                </a>
                            </p>
                            <p>
                                <a href="workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/index.html#more-9567" class="more-link">
                                    <span aria-label="Читать далее WORKSHOP в ТАШКЕНТE (Узбекистан) 10-11 июля 2017 года.">(далее&hellip;)
                                    </span>
                                </a>
                            </p>

                        </div><!-- .entry-content -->

                        <footer class="entry-footer">

                            <a href="workshops/{{$item->translite_name}}" class="read-more waves-effect waves-button waves-float button-primary" rel="bookmark">Читать</a>

                            <div class="entry-share">
                                <span class="label">Поделиться:</span>
                                <ul class="links">
                                    <li class="facebook"><a href="httZp://www.facebook.com/sharer.php?u=http://seriv.com/workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/"><i class="mdi mdi-facebook-box"></i></a></li><li class="twitter"><a href="https://twitter.com/share?url=http://seriv.com/workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/&amp;text=WORKSHOP%20%d0%b2%20%d0%a2%d0%90%d0%a8%d0%9a%d0%95%d0%9d%d0%a2E%20(%d0%a3%d0%b7%d0%b1%d0%b5%d0%ba%d0%b8%d1%81%d1%82%d0%b0%d0%bd)%2010-11%20%d0%b8%d1%8e%d0%bb%d1%8f%202017%20%d0%b3%d0%be%d0%b4%d0%b0."><i class="mdi mdi-twitter-box"></i></a></li><li class="google-plus"><a href="https://plus.google.com/share?url=http://seriv.com/workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/"><i class="mdi mdi-google-plus-box"></i></a></li><li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=http://seriv.com/workshop-v-tashkente-uzbekistan-10-11-iyulya-2017-goda/&amp;description=WORKSHOP%20%d0%b2%20%d0%a2%d0%90%d0%a8%d0%9a%d0%95%d0%9d%d0%a2E%20(%d0%a3%d0%b7%d0%b1%d0%b5%d0%ba%d0%b8%d1%81%d1%82%d0%b0%d0%bd)%2010-11%20%d0%b8%d1%8e%d0%bb%d1%8f%202017%20%d0%b3%d0%be%d0%b4%d0%b0."><i class="mdi mdi-pinterest"></i></a></li>			</ul>
                            </div>

                        </footer><!-- .entry-footer -->
                    </article><!-- #post-## -->
            @endforeach








                </main><!-- #main -->
            </div><!-- #primary -->
        </div>


        <div class="col-md-4">

            <div id="secondary" class="widget-area" role="complementary">
                <aside id="mondo_most_commented_posts_widget-2" class="widget widget_mondo_most_commented_posts_widget"><h3 class="widget-title"><span>Most commented posts</span></h3><ul class="post-widget-list"><li class="clearfix"><a href="english-version/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"></span></a><div class="entry-content"><h4 class="entry-title"><a href="english-version/index.html" rel="bookmark">English version</a></h4><span class="entry-meta">4 комментария</span></div></li><li class="clearfix"><a href="textures/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2016/03/textures-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2016/03/textures-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2016/03/textures-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2016/03/textures-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2016/03/textures-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="textures/index.html" rel="bookmark">TEXTURES</a></h4><span class="entry-meta">2 комментария</span></div></li><li class="clearfix"><a href="raznoe/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2015/08/1D4_9320-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2015/08/1D4_9320-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2015/08/1D4_9320-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2015/08/1D4_9320-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2015/08/1D4_9320-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="raznoe/index.html" rel="bookmark">Various pictures</a></h4><span class="entry-meta">1 комментарий</span></div></li></ul></aside><aside id="mondo_most_loved_posts_widget-2" class="widget widget_mondo_most_loved_posts_widget"><h3 class="widget-title"><span>Popular posts</span></h3><ul class="post-widget-list"><li class="clearfix"><a href="textures/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2016/03/textures-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2016/03/textures-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2016/03/textures-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2016/03/textures-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2016/03/textures-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="textures/index.html" rel="bookmark">TEXTURES</a></h4><span class="entry-meta">9 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li><li class="clearfix"><a href="svadby/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2016/03/belts-1-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2016/03/belts-1-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2016/03/belts-1-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2016/03/belts-1-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2016/03/belts-1-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="svadby/index.html" rel="bookmark">BELTS</a></h4><span class="entry-meta">6 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li><li class="clearfix"><a href="workshop-pocket/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2016/03/workshop-pocket-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2016/03/workshop-pocket-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2016/03/workshop-pocket-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2016/03/workshop-pocket-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2016/03/workshop-pocket-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="workshop-pocket/index.html" rel="bookmark">WORKSHOP POCKET</a></h4><span class="entry-meta">5 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li><li class="clearfix"><a href="portret-2/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2015/08/inetBranKatya03-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2015/08/inetBranKatya03-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2015/08/inetBranKatya03-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2015/08/inetBranKatya03-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2015/08/inetBranKatya03-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="portret-2/index.html" rel="bookmark">Portraits</a></h4><span class="entry-meta">5 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li><li class="clearfix"><a href="rostislav_nadejda_moskva/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"><img width="150" height="150" src="wp-content/uploads/2015/07/033-150x150.jpg" class="opacity-element wp-post-image" alt="" srcset="http://seriv.com/wp-content/uploads/2015/07/033-150x150.jpg 150w, http://seriv.com/wp-content/uploads/2015/07/033-180x180.jpg 180w, http://seriv.com/wp-content/uploads/2015/07/033-300x300.jpg 300w, http://seriv.com/wp-content/uploads/2015/07/033-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></span></a><div class="entry-content"><h4 class="entry-title"><a href="rostislav_nadejda_moskva/index.html" rel="bookmark">Kirill+Kalina (Kiev)</a></h4><span class="entry-meta">3 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li><li class="clearfix"><a href="svadby-2016/index.html" class="thumbnail-link" rel="bookmark"><span class="thumbnail-container float-left"></span></a><div class="entry-content"><h4 class="entry-title"><a href="svadby-2016/index.html" rel="bookmark">Weddings 2016</a></h4><span class="entry-meta">3 <i class="mdi mdi-heart" style="color: #ffc107;"></i></span></div></li></ul></aside></div><!-- #secondary -->
        </div>



    </div><!-- .row -->
</div><!-- #content -->