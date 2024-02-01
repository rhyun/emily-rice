<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible h-0 w-full bg-white opacity-0 lg:rounded-lg')>
    <section class="prose relative h-full max-w-none overflow-y-auto lg:overflow-visible">
        @include('components.btn-close')
        <header class="lg:top:0 border-b-2 p-4 md:p-8 lg:sticky xl:p-12 2xl:p-16">
            <div class="">
                <h3
                    class="article__cat font-inter-bold mb-4 mt-0 border-none text-xs font-extrabold uppercase tracking-wider no-underline">
                    @category</h3>
                <h1 class="mb-0 pb-0 uppercase leading-relaxed tracking-wide">@title<span class="accent">.</span>
                </h1>
                @hasfield('project_subtitle')
                <p class="font-bran-me mt-0">
                    @field('project_subtitle')
                    </p>
                @endfield
            </div>

            <ul class="flex list-inside flex-wrap p-0 text-sm">
                <li class="list-none">Los Angeles, CA</li>
                @hasfield('location_type')
                <li class="">
                    @field('location_type')
                    </li>
                @endfield
                <li>@published</li>
            </ul>
            @include('components.btn-apply')
        </header>
        <div class="p-4 md:p-8 lg:h-[calc(100vh-375px)] lg:overflow-y-auto xl:p-12 2xl:p-16">
            <h2 class="uppercase">Job Description</h2>

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
