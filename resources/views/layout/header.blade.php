<!-- header
    ================================================== -->
    <header class="s-header">
    <div class="header-logo">
        <a class="site-logo" href="index.html">
            <img src="{{asset('/images/logo.png')}}" alt="Homepage">
        </a>
    </div>
    <nav class="header-nav">
        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
        <div class="header-nav__content">
            <ul class="header-nav__list">
                @php
                $request = \Request::getRequestUri();
                @endphp
                @if($request == '/')
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                @else
                    <li><a class="smoothscroll" href="{{ url('/') }}" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                @endif
            </ul>
            <ul class="header-nav__social">
                {{--<li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>--}}
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                {{--<li>
                    <a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>--}}
                <li>
                    <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div> <!-- end header-nav__content -->
    </nav> <!-- end header-nav -->
    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>
</header> <!-- end s-header -->