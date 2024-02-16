<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible article h-0 w-full bg-white opacity-0 lg:rounded-lg')>
    <section class="prose relative h-full max-w-none overflow-y-auto lg:overflow-visible">
        @include('components.btn-close')
        <header class="article-header lg:top:0 border-b-4 p-4 md:p-8 lg:sticky xl:p-12">
            <div>
                <h3
                    class="article__cat font-inter-bold mb-4 mt-0 border-none text-xs font-extrabold uppercase tracking-wider no-underline">
                    @category</h3>
                <h1 class="mb-0 pb-0 uppercase leading-relaxed tracking-wide">@title<span class="accent">.</span>
                </h1>
                @hasfield('project_subtitle')
                <p class="mt-0">
                    @field('project_subtitle')
                    </p>
                @endfield
            </div>

            <ul class="flex list-outside gap-3 p-0 text-sm">
                <li class="mr-4 list-none p-0">@include('components.item-location')</li>
                @hasfield('location_type')
                <li class="mr-4 p-0">
                    @field('location_type')
                    </li>
                @endfield
                <li>@published</li>
            </ul>
            @include('components.btn-apply')
        </header>

        <div class="p-4 md:p-8 lg:h-[calc(100vh-375px)] lg:overflow-y-auto xl:p-12 2xl:p-16">
            @include('ads.ad-content')
            <h2 class="uppercase">Job Description</h2>

            <div class="prose xl:pl-8">
                @content

                @hasfield('pay_range')
                <h3>Pay Range - @field('pay_range')
                    </h3>
                @endfield
            </div>
        </div>
    </section>
</article>
