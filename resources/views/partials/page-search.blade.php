<section class="search w-full">
    <div class="wrapper-l rounded p-12 xl:p-24">
        @hasoption('settings', 'search_shortcode')
        @shortcode('' . get_field('settings', 'option')['search_shortcode'] . '')
    @else
        {!! get_search_form(false) !!}
        @endoption
    </div>
</section>
