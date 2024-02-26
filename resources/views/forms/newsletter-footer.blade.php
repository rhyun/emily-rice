@hasoption('settings', 'footer_newsletter_shortcode')
<section class="w-full">
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['footer_newsletter_shortcode'] . '')
    </div>
</section>
@endoption
