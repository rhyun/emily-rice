@hasoption('settings', 'newsletter_shortcode')
<section class="w-full">
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['newsletter_shortcode'] . '')
    </div>
</section>
@endoption
