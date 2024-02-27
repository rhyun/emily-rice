@hasoption('settings', 'footer_newsletter_shortcode')
<section class="w-full bg-[#F7F7F7] p-8">
    <h3 class="wrapper-sm">Subscribe to our newsletter to stay in touch with the latest.</h3>
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['footer_newsletter_shortcode'] . '')
    </div>
</section>
@endoption
