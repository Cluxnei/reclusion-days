<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="{{ request()->route()->getName() === 'work-of-art' ? url('/') : '' }}#welcome">@lang('messages.welcome')</a></li>
                <li><a href="{{ request()->route()->getName() === 'work-of-art' ? url('/') : '' }}#regulation">@lang('messages.regulation')</a></li>
                <li><a href="{{ request()->route()->getName() === 'work-of-art' ? url('/') : '' }}#about">@lang('messages.about')</a></li>
                <li><a href="{{ request()->route()->getName() === 'work-of-art' ? url('/') : '' }}#team">@lang('messages.team')</a></li>
                <li><a href="{{ request()->route()->getName() === 'work-of-art' ? url('/') : '' }}#works-of-arts">@lang('messages.works-of-arts')</a></li>
                <li class="language-switcher">
                    <a href="{{ route('language', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                    <a href="{{ route('language', 'es') }}" class="{{ app()->getLocale() === 'es' ? 'active' : '' }}">ES</a>
                    <a href="{{ route('language', 'ge') }}" class="{{ app()->getLocale() === 'ge' ? 'active' : '' }}">GE</a>
                    <a href="{{ route('language', 'pt-br') }}" class="{{ app()->getLocale() === 'pt-br' ? 'active' : '' }}">PT</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
