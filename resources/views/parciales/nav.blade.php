
<nav>
		
        <ul>
            <li class="{{ setActive('home')}}"><a href="{{route('home')}}">@lang('Home')</a></li>
            <li class="{{setActive('acerca')}}"><a href="{{route('acerca')}}">@lang('About')</a></li>
            <li class="{{setActive('project.*')}}"><a href="{{route('project.index')}}">@lang('Portfolio')</a></li>
            <li class="{{setActive('contacto')}}"><a href="{{route('contacto')}}">@lang('Contact')</a></li>
        </ul>
    </nav>