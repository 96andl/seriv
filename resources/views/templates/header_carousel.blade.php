<div class="owl-carousel owl-theme container">
        @foreach($content['carousel'] as $item)
        <article class="item" style="background-image: url({{asset('storage/carousel/'.$item->image)}});">
            <h3 >
                <a class="carousel-article-title mondo-grid-content" href="posts/{{$item->translit_name}}" title="{{$item->title}}">{{$item->name}}</a>
            </h3>
        </article>
        @endforeach


</div>