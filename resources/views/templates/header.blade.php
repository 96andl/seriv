<header id="masthead" class="site-header" role="banner">

    <nav id="site-navigation" class="main-navigation sticky" role="navigation">
        <div class="nav-wrapper container">
            <a href="index.html" class="brand-logo normal">

                <img src="wp-content/uploads/2016/03/logo05.jpg" alt="Seriv">

            </a>
            <ul id="menu-menyu" class="nav-list float-right hidden-xs hidden-sm">
        @foreach($menu as $key => $item)

             @if(is_array($item) and count($item) > 0 and !is_numeric($key))
            <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-91"><span><a>{{ $key }}</a></span>
                <ul class="sub-menu">

                    @foreach($item as  $inneritem)

                        @if(is_array($inneritem) and key_exists('name',$inneritem) and key_exists('translite_name',$inneritem))

                            <li id="menu-item-253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-253"><span class="waves-effect waves-block waves-classic"><a href="{{ route(strtolower($key),[$inneritem['translite_name']])  }}">{{ $inneritem['name']  }}</a></span></li>

                        @elseif(is_array($inneritem))

                            @foreach($inneritem as $inneritemmore)

                                <li id="menu-item-253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-253"><span class="waves-effect waves-block waves-classic"><a href="{{ route(strtolower($key),[str_slug($inneritemmore)])  }}">{{ $inneritemmore }}</a></span></li>

                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </li>
        @else
            <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93"><span><a href="{{ route(strtolower($item))  }}">{{  $item }}</a></span></li>
            @endif
        @endforeach
            </ul>
        </div>
    </nav>
</header>

