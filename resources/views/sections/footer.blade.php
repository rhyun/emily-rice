{{-- @include('partials.cta-contact') --}}
<footer class="prose w-full max-w-none bg-white">
    @include('forms.newsletter-footer')

    <section class="wrapper-l w-full">
        <div class="wrapper flex flex-col justify-between px-6 pt-14 md:flex-row">
            <aside class="mb-14">
                @include('components.logo-footer')

                <p class="mt-4 text-lg">
                    @include('components.tagline')
                </p>
            </aside>

            <nav class="mb-14">
                <h2 class="mb-2 mt-0">Drop us a line.</h2>
                <ul class="not-prose *:mb-2">
                    <li>
                        <span class="block">Email</span>
                        @include('components.cta-email')
                    </li>
                    <li>
                        <span class="block">Phone</span>
                        @include('components.cta-phone')
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="wrapper-l border-light-gray border-t p-6 lg:p-8">
        <div class="wrapper flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <p class="copyright order-2 m-0 p-0 text-sm leading-none text-[#858e97] md:order-1"><span>&copy; </span>
                {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>

            @if (has_nav_menu('sub_footer_navigation'))
                <nav class="footer-sub-nav md:order-2" aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'sub_footer_navigation',
                        'menu_class' => 'footer-nav group',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif
        </div>
    </section>
</footer>
