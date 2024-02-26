<footer class="footer prose flex w-full max-w-none flex-col gap-0">
    <section class="footer__contact w-full p-4">
        <div class="wrapper rounded-lg bg-black py-12 text-center">
            <h2 class="text-white">Say Hello</h2>
            <p>Blah Blah Blah</p>
            <ul class="m-0 mx-auto flex list-none p-0">
                <li class="basis-6/12">
                    <h3 class="text-white">Message Us</h3>
                    @hasoption('contact')
                    <a class="text-white" href="mailto:@option('contact', 'email')
" target="_blank">
                        @option('contact', 'email')
                    </a>
                    @endoption
                </li>
                <li class="basis-6/12 border-l">
                    <h3 class="text-white">Call Us</h3>
                    @hasoption('contact')
                    <a class="# text-white" href="tel:@option('contact', 'phone')
" target="_blank">
                        @option('contact', 'phone')
                        </a>
                    @endoption
                </li>
            </ul>
        </div>
    </section>

    <div class="w-full bg-black p-8">
        @include('forms.newsletter-footer')
    </div>

    <section class="w-full bg-white px-4 py-6 md:px-6 md:py-12 lg:px-12 lg:py-24">
        <div class="wrapper-sm">
            <aside class="">
                @include('components.logo-footer')

                <p class="mt-4 text-xs">{{ get_bloginfo('description', 'display') }}</p>
            </aside>
        </div>
    </section>
    <section class="border-light-gray wrapper-l border-t bg-white p-4 lg:p-8">
        <div class="wrapper flex items-end justify-between">
            <p class="copyright m-0 p-0 text-xs leading-none"><span>&copy;</span> {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>

            @if (has_nav_menu('sub_footer_navigation'))
                <nav class="footer-sub-nav" aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'sub_footer_navigation',
                        'menu_class' => 'footer-sub-nav__list',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif
        </div>
    </section>
</footer>
