{{-- @include('partials.cta-contact') --}}

<footer class="prose w-full max-w-none bg-[#17191F]">
    @include('forms.newsletter-footer')

    <section class="w-full">
        <div class="wrapper flex flex-col p-4 lg:p-8">
            <aside>
                @include('components.logo-footer')

                <nav class="contact hidden md:flex md:gap-2 lg:gap-4">
                    @include('components.btn-phone')
                    @include('components.btn-contact')
                </nav>
            </aside>
            <div>
                <ul class="not-prose text-white">
                    <li class="">
                        <h3 class="">Message Us</h3>
                        @hasoption('contact')
                        <a class="list-link list-link--dark text-white" href="mailto:@option('contact', 'email')
"
                            target="_blank">
                            @option('contact', 'email')
                        </a>
                        @endoption
                    </li>
                    <li class="">
                        <h3 class="">Call Us</h3>
                        @hasoption('contact')
                        <a class="list-link list-link--dark" href="tel:@option('contact', 'phone')
" target="_blank">
                            @option('contact', 'phone')
                            </a>
                        @endoption
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-white">List a Job</h3>

                <a class="btn bg-white text-black">
                    List a Job
                </a>
            </div>
        </div>
    </section>

    <section class="wrapper-l p-6 lg:p-8">
        <div class="wrapper flex flex-col gap-4 md:items-center md:justify-between">
            @if (has_nav_menu('sub_footer_navigation'))
                <nav class="footer-sub-nav" aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'sub_footer_navigation',
                        'menu_class' => 'footer-nav link-list group',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif

            <p class="copyright m-0 p-0 text-sm leading-none text-white"><span>&copy;</span>
                {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>
        </div>
    </section>
</footer>
