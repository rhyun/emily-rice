<section class="search bg-[#222222] p-8 md:px-12 md:py-12 lg:px-16 lg:py-16 xl:px-20 xl:py-20">
    <div class="wrapper">
        @hasoption('settings', 'search_shortcode')
        @shortcode('' . get_field('settings', 'option')['search_shortcode'] . '')
    @else
        {!! get_search_form(false) !!}
        @endoption
    </div>
</section>