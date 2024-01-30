<article id="post-id-@php(the_ID())"
    class="tabs-article js-tabs-article invisible h-0 w-full bg-white opacity-0">

    <section class="prose relative h-full max-w-none overflow-y-auto lg:overflow-visible">
        <button class="tabs-close js-tabs-close m:p-8 p-4 lg:hidden" onclick="event.preventDefault();"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
        </button>
        <header class="lg:top:0 border-b-2 p-4 md:p-8 lg:sticky xl:p-12 2xl:p-16">
            <div class="">
                <h1 class="mb-0 pb-0 uppercase leading-relaxed tracking-wide">@title<span
                        class="text-[#009072]">.</span>
                </h1>
                <p class="font-bran-me mt-0">Subtitle</p>
            </div>

            <ul class="flex list-inside flex-wrap p-0">
                <li>Features</li>
                <li class="">Los Angeles, CA</li>
                <li>@published</li>
            </ul>
            <a class="btn btn-primary rounded-lg" href="#" onclick="event.preventDefault(); target="_blank">Quick
                Apply</a>
        </header>
        <div class="p-4 md:p-8 lg:h-[calc(100vh-375px)] lg:overflow-y-auto xl:p-12 2xl:p-16">
            <h2 class="mb-28 uppercase">Description</h2>

            <div class="prose 2xl:pl-28">
                @content

                @hasfield('pay_range')
                <div>
                    @field('pay_range')
                    </div>
                @endfield
            </div>
        </div>
    </section>

</article>
