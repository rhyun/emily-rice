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
