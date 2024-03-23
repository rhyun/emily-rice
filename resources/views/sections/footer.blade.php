<footer class="prose border-light-gray w-full max-w-none border-t bg-white">
    <section class="wrapper-l w-full">
        <div class="wrapper flex flex-col gap-14 px-6 py-8 placeholder:justify-between md:flex-row md:gap-24 md:py-24">
            <aside>
                @include('components.logo-footer')

                <p class="mt-4 text-lg text-black">
                    @include('components.tagline')
                </p>

                {{-- <h2 class="mb-2 mt-0 2xl:text-4xl">Let's Talk<span class="text-orange">.</span></h2> --}}
                @include('components.btn-contact')
            </aside>
            <div class="md:ml-auto">
                <h3 class="2xl:text-3xl">Browse<span class="text-orange">.</span></h3>
                @if (has_nav_menu('sub_footer_navigation'))
                    <nav class="footer-sub-nav md:order-2"
                        aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                        {!! wp_nav_menu([
                            'theme_location' => 'sub_footer_navigation',
                            'menu_class' => 'footer-nav group',
                            'echo' => false,
                        ]) !!}
                    </nav>
                @endif
            </div>

            <nav>
                <h3 class="2xl:text-3xl">Contact<span class="text-orange">.</span></h3>
                <ul class="not-prose *:mb-2 *:xl:mb-4">
                    <li class="xl:text-xl">
                        @include('components.cta-email')
                    </li>
                    <li class="xl:text-xl">
                        @include('components.cta-phone')
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    @include('forms.newsletter-footer')

    <section class="wrapper-l border-light-gray border-t p-6 lg:p-8">
        <div class="wrapper flex flex-col gap-4 md:flex-row md:items-center md:justify-between">


            <p class="copyright m-0 p-0 text-sm leading-none text-[#858e97]"><span>&copy; </span>
                {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>
        </div>
    </section>
</footer>
