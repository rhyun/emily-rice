<footer class="footer content-info footer-center bg-black text-white">
    <section class="footer-contact">
        <h2 class="text-white">Say Hello</h2>

        <ul class="flex list-none">
            <li>
                <h3>Message Us</h3>
                @hasoption('contact')
                <a class="" href="mailto:@option('contact', 'email')
" target="_blank">
                    @option('contact', 'email')
                </a>
                @endoption
            </li>
            <li class="border-l">
                <h3>Call Us</h3>
                @hasoption('contact')
                <a class="" href="tel:@option('contact', 'phone')
" target="_blank">
                    @option('contact', 'phone')
                    </a>
                @endoption
            </li>
            <li class="border-l">
                <h3>List a Job</h3>
                <a href="/list-a-job">List a Job</a>
            </li>

        </ul>
    </section>
    <section class="w-full bg-black">
        <div class="wrapper border-t border-white/[.2] py-4">
            <p class="p-0 leading-none"><span>&copy;</span> Emily Rice & Co. <span>-</span> 2024
            </p>
        </div>
    </section>
    {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
