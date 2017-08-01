<div id="instafeed">
    <div class="container">
    @foreach( $content['instagram_img']  as $key => $item )
        @foreach($item as $innerKey=>$innerItem)

                <div class="col-md-4">
                    <img src="{{$innerItem}}" alt="{{$key}}" >
                </div>

        @endforeach
    @endforeach
    </div>
</div>