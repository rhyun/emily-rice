@hasoption('settings', 'footer_newsletter_shortcode')
<section class="w-full bg-purple-950 p-8">
    <h3 class="wrapper-sm text-center text-white">Subscribe to our newsletter to stay in touch with the latest.</h3>
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['footer_newsletter_shortcode'] . '')
    </div>
</section>
@endoption
