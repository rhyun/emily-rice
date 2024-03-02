{{-- @include('partials.cta-contact') --}}
<footer class="prose w-full max-w-none bg-[#17191F]">
    @include('forms.newsletter-footer')

    <section class="w-full">
        <div class="wrapper flex flex-col justify-between pb-4 pt-14 md:flex-row md:p-16 lg:py-24 2xl:px-0">
            <aside class="mb-14">
                @include('components.logo-footer')

                <p class="font-eina mt-4 text-3xl text-white">
                    Post Production Accounting Services<br> Los Angeles
                    &
                    New
                    York</p>
            </aside>

            <nav class="mb-14">
                <h2 class="mb-2 mt-0 text-white">Drop a Line.</h2>
                <ul class="not-prose *:mb-2 text-white">
                    <li>
                        @include('components.cta-email')
                    </li>
                    <li>
                        @hasoption('contact')
                        <a class="list-link list-link--dark" href="tel:@option('contact', 'phone')
" target="_blank">
                            @option('contact', 'phone')
                            </a>
                        @endoption
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="wrapper-l border-t p-6 lg:p-8">
        <div class="wrapper flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <p class="copyright order-2 m-0 p-0 text-sm leading-none text-[#858e97] md:order-1"><span>&copy;</span>
                {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>

            @if (has_nav_menu('sub_footer_navigation'))
                <nav class="footer-sub-nav md:order-2" aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'sub_footer_navigation',
                        'menu_class' => 'footer-nav link-list group',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif
        </div>
    </section>
</footer>
