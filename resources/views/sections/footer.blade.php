{{-- @include('partials.cta-contact') --}}

<footer class="footer prose flex w-full max-w-none flex-col gap-0 bg-[#17191F]">
    <section class="w-full">
        <div class="wrapper flex justify-between">
            <aside class="">
                @include('components.logo-footer')


            </aside>

            <div>
                <ul class="list-none">
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                    <li><a class="list-link list-link--dark">Link 1</a></li>
                </ul>
            </div>

            <div class="">
                <h3>List a Job</h3>

                <a class="btn bg-white text-black">
                    List a Job
                </a>
            </div>
        </div>
    </section>

    @include('forms.newsletter-footer')

    <section class="wrapper-l p-4 lg:p-8">
        <div class="wrapper flex items-end justify-between">

            @if (has_nav_menu('sub_footer_navigation'))
                <nav class="footer-sub-nav" aria-label="{{ wp_get_nav_menu_name('sub_footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'sub_footer_navigation',
                        'menu_class' => 'footer-nav link-list group',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif

            <p class="copyright m-0 p-0 text-xs leading-none"><span>&copy;</span> {{ get_bloginfo('name', 'display') }}
                2001 <span>-</span> 2024
            </p>
        </div>
    </section>
</footer>
