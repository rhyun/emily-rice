<section class="hero min-h-[50vh] bg-white xl:min-h-[65vh]">
    <div class="wrapper mx-auto w-full px-8">
        <div class="hero-content prose max-w-none lg:grid lg:grid-cols-12">
            <article
                class="border-light-gray border-b-4 border-dotted lg:col-span-8 lg:gap-8 lg:border-b-0 lg:border-r-4 lg:px-8 lg:py-4 xl:px-16 xl:py-12">
                <header class="">
                    <h1 class="hero-title font-circular-bold mb-0 block">
                        <span class="before:content relative flex items-center gap-2 text-base uppercase">
                            <span class="border-light-gray grow border-t-2 border-dashed"></span>
                            Welcome to
                            <span class="border-light-gray grow border-t-2 border-dashed"></span>
                        </span>
                        <div class="hero-title__text flex justify-between text-8xl uppercase lg:text-[425%]">
                            <span>The</span>
                            <span class="">l</span>
                            <span>i</span>
                            <span>s</span>
                            <span>t</span>
                        </div>
                    </h1>

                    <p class="font-eina-semi flex flex-col text-center"><span class="italic">By</span> <span
                            class="text-[#00b6b4]">Emily
                            Rice</span>
                    </p>
                </header>

                <section class="">
                    <p class="tracking-none text-black/[.75]">The List is a global resource created and maintained
                        by Emily Rice & Co to support the production accounting community.</p>

                    <p>Use TheList to find your next role or post an open position in the production accounting or
                        production finance community.</p>
                </section>
            </article>

            {{-- <h1>@include('components.logo-thelist')</h1> --}}
            <aside class="py-6 lg:col-span-4 lg:px-8 xl:pl-16">
                <article class="">
                    <p class="tracking-none text-black/[.75]">The List is a global resource created and maintained
                        by Emily Rice & Co to support the production accounting community.</p>

                    <p>Use TheList to find your next role or post an open position in the production accounting or
                        production finance community.</p>

                    @include('components.cta-list-job')
                </article>
            </aside>
        </div>
        <footer class="wrapper-sm *:grow grid gap-4 p-4 pt-32 lg:flex">
            <section>
                @include('partials.list-newsletter')
            </section>
            <section>
                @include('partials.list-advertise')
            </section>
        </footer>
    </div>
</section>
