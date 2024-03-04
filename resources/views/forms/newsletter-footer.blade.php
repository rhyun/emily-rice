@hasoption('settings', 'footer_newsletter_shortcode')
<section class="bg-blue-gray w-full px-8 py-14">
    <h3 class="wrapper-sm mb-12">Subscribe to our newsletter to stay in touch with the latest.</h3>
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['footer_newsletter_shortcode'] . '')
    </div>
</section>
@endoption
