@hasoption('settings', 'footer_newsletter_shortcode')
<section class="bg-star-blue w-full px-8 py-14 lg:py-24">
    <h3 class="wrapper-sm my-0 mb-12 text-center text-white 2xl:text-3xl">Subscribe to The<strong>List<span
                class="text-orange">.</span></strong></h3>
    <div class="wrapper-sm">
        @shortcode('' . get_field('settings', 'option')['footer_newsletter_shortcode'] . '')
    </div>
</section>
@endoption
