@include('ads.ad-header')
<header class="banner bg-white">
    <div class="navbar px-2 py-2 md:px-6 md:py-6 lg:px-8">
        <div class="navbar-start">
            <div class="hidden md:block">
                @include('components.tagline')
            </div>
            {{-- @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
        @endif --}}
        </div>
        <div class="navbar-center">
            {{-- <p class="text-sm">{{ get_bloginfo('description', 'display') }}</p> --}}
            @include('components.logo')
        </div>
        <div class="navbar-end pr-2">
            @include('components.contact')
        </div>
    </div>
</header>

@include('sections.nav')
