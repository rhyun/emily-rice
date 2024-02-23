@include('ads.ad-header')
<header class="banner bg-white px-4 py-2 md:p-4 lg:p-8">
    {{-- @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
    @endif --}}

    <div class="navbar">
        <div class="navbar-start">
            <a class="navbar-link" href="/list-a-job">
                <span class="icon"></span>
                <span class="uppercase">List a Job</span>
            </a>
        </div>
        <div class="navbar-center">
            <a class="brand block border-none" href="{{ home_url('/') }}">
                @hasoption('branding', 'logo')
                <img class="h-full max-h-12 w-full lg:max-h-16" src="@option('branding', 'logo')
"
                    alt="{{ get_bloginfo('name', 'display') }}" />
            @else
                {!! $siteName !!}
            @endoption
        </a>
    </div>
    <div class="navbar-end">
        @include('components.contact')
    </div>
</div>
</header>
