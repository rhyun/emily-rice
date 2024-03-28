<div class="js-nav group">
    @include('components.btn-menu')

    <div
        class="pointer-events-none fixed left-0 top-0 z-40 h-screen w-screen overflow-hidden group-[.is-nav]:pointer-events-auto">

        <div
            class="bg-star-blue absolute right-0 top-0 z-0 h-[224vh] w-[224vw] origin-center transition-all duration-[600ms] ease-in-out [clip-path:circle(0%_at_100%_0%)] group-[.is-nav]:z-40 group-[.is-nav]:[clip-path:circle(100%_at_100%_0%)]">
        </div>
        <div class="wrapper hidden">
            @if (has_nav_menu('primary_navigation'))
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
                </nav>
            @endif
        </div>
    </div>
</div>
