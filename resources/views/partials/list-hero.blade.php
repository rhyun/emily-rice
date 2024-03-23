<section class="hero flex min-h-screen flex-col bg-white md:min-h-[50vh] xl:min-h-[65vh]">
    <div class="hero-main wrapper prose max-w-none px-8">
        <article>
            <header class="wrapper-l flex flex-col gap-2 py-10 xl:gap-4">
                <h1
                    class="font-circular-black *:text-[200%] *:lg:text-[300%] *:xl:text-[425%] mb-0 flex flex-col items-center gap-3 md:flex-row md:gap-12">
                    <div class="hero-title__text md:ml-auto">
                        <span>T</span>
                        <span>h</span>
                        <span>e</span>
                    </div>
                    <div class="hero-title__text md:mr-auto">
                        <span>L</span>
                        <span>i</span>
                        <span>s</span>
                        <span>t</span>
                        <span class="text-orange">.</span>
                    </div>
                </h1>
            </header>

            <section class="wrapper-l">

                <article class="*:mt-0 prose-sm max-w-none text-center">
                    <div class="relative flex w-full items-center gap-2 xl:max-w-screen-lg">
                        <span class="text-light-gray h-5 w-5">
                            @include('icons.icon-tassle')
                        </span>
                        <p
                            class="after:border-light-gray before:border-light-gray gap- m-0 flex grow items-center before:block before:grow before:border-t-2 before:border-dashed after:block after:grow after:border-t-2 after:border-dashed">
                            <span class="flex flex-col items-center gap-1 px-4 text-xs">
                                <span class="text-base">The Entertainment
                                    Industry's Production Accounting & Finance Resource.</span>
                            </span>
                        </p>
                        <span class="text-light-gray h-5 w-5 rotate-180">
                            @include('icons.icon-tassle')
                        </span>
                    </div>
                </article>
            </section>
        </article>
    </div>
    <aside class="mx-auto w-full max-w-4xl py-20">
        <article class="wrapper prose mx-auto text-center">
            <h3>Looking to post a job?</h3>

            <p>TheLIST has you covered.</p>

            <a class="btn btn-secondary" href="/list-a-job">List a Job</a>
        </article>
    </aside>
    <footer class="bg-star-gray w-full py-14 xl:py-32">
        <div class="wrapper-l grid max-w-screen-xl gap-4 xl:grid-cols-2">
            <section class="test">
                @include('partials.list-newsletter')
            </section>

            <section>
                @include('partials.list-advertise')
            </section>
        </div>
    </footer>
</section>
