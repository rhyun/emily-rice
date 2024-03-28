<header class="banner bg-white">
    <div class="navbar px-2 py-8 md:px-6 lg:px-8">
        <div class="navbar-start">
            <p class="font-poppins m-0 hidden text-black lg:block">
                @include('components.tagline')
                {{-- {{ html_entity_decode(get_bloginfo('description')) }} --}}
            </p>
        </div>
        <div class="navbar-center">
            @include('components.logo')
        </div>
        <div class="navbar-end flex gap-4">
            <div class="">
                @include('components.contact')
            </div>

            @include('sections.nav')
        </div>
    </div>
</header>

@include('sections.footer-nav')
