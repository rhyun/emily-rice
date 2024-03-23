@include('ads.ad-header')
<header class="banner bg-white">
    <div class="navbar px-2 py-8 md:px-6 lg:px-8">
        <div class="navbar-start">

            @include('components.logo')

            {{-- @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
        @endif --}}
        </div>
        <div class="navbar-center">
            <p class="font-circular-bold m-0 hidden text-center text-2xl text-black lg:block">
                @include('components.tagline')
            </p>
        </div>
        <div class="navbar-end pr-2">
            <div class="">
                @include('components.contact')
            </div>

            <div class="hidden">
                @include('components.btn-menu')
            </div>
        </div>
    </div>
</header>

@include('sections.nav')
