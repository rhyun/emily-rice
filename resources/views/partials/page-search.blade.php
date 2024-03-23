<section class="search wrapper-l bg-star-blue rounded p-12 xl:p-24">
    @hasoption('settings', 'search_shortcode')
    @shortcode('' . get_field('settings', 'option')['search_shortcode'] . '')
@else
    {!! get_search_form(false) !!}
    @endoption

    <aside class="">
        @php(dynamic_sidebar('sidebar-search'))
    </aside>
</section>
