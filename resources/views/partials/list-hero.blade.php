<section class="hero flex min-h-screen flex-col bg-white md:min-h-[50vh] xl:min-h-[65vh]">
    <div class="hero-main wrapper prose max-w-none px-8">
        <article class="">
            <header class="flex flex-col py-10">
                {{-- <div class="relative flex items-center gap-2">
                    <span class="text-light-gray h-5 w-5">
                        @include('icons.icon-tassle')
                    </span>
                    <p
                        class="after:border-light-gray before:border-light-gray m-0 flex grow items-center gap-2 before:block before:grow before:border-t-2 before:border-dashed after:block after:grow after:border-t-2 after:border-dashed">
                        <span class="flex flex-col items-center text-xs">
                            <span class="font-circular-bold uppercase" data-shadow='Emily Rice'>Emily
                                Rice </span>
                            <span>Presents</span>
                        </span>
                    </p>
                    <span class="text-light-gray h-5 w-5 rotate-180">
                        @include('icons.icon-tassle')
                    </span>
                </div> --}}

                <h1
                    class="font-circular-black *:text-[200%] *:lg:text-[425%] mb-0 flex flex-col items-center gap-3 uppercase lg:flex-row lg:gap-12">
                    <div class="hero-title__text ml-auto">
                        <span>T</span>
                        <span>h</span>
                        <span>e</span>
                    </div>
                    <div class="hero-title__text mr-auto">
                        <span>L</span>
                        <span>i</span>
                        <span>s</span>
                        <span>t</span>
                        <span class="text-orange">.</span>
                    </div>
                </h1>
            </header>

            <section class="py-6 xl:col-span-4 xl:px-8 2xl:pl-16">
                <article>
                    <p>TheList is a global resource created and maintained
                        by Emily Rice & Co to support the production accounting community.</p>

                    <p>Use TheList to find your next role or post an open position in the production accounting or
                        production finance community.</p>

                    <div class="">
                        <h3>Looking to post a job?</h3>

                        @include('components.cta-list-job')
                    </div>
                </article>
            </section>
        </article>
    </div>
    <aside class="wrapper grid gap-4 p-4 py-32 xl:grid-cols-2">
        <section>
            @include('partials.list-newsletter')
        </section>
        <section>
            @include('partials.list-advertise')
        </section>
    </aside>
</section>
