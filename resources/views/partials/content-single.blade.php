<article id="post-id-@php the_ID() @endphp" @postclass('visible article h-full w-full relative')>
    <section class="prose h-full max-w-none py-20 lg:py-0">
        @include('components.btn-close')
        <header class="lg:top:0 border-b-2 p-4 md:p-8 lg:p-12">
            <div class="mx-auto max-w-3xl">
                <h5
                    class="article__cat font-inter-semi mt-0 border-none text-xs uppercase tracking-widest no-underline lg:mb-4">
                    @category</h3>
                    <h1 class="mb-0 pb-0 uppercase leading-relaxed tracking-wide">@title<span class="accent">.</span>
                    </h1>
                    @hasfield('project_subtitle')
                    <p class="mt-0">
                        @field('project_subtitle')
                        </p>
                    @endfield
            </div>

            <section class="mx-auto max-w-3xl md:flex md:items-center md:justify-between">
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
            </section>
        </header>

        <div class="mx-auto max-w-3xl p-4 md:p-8 xl:p-12 2xl:p-16">
            @include('ads.ad-content')
            <h2>Job Description</h2>

            <div class="prose h-full">
                @content

                @hasfield('pay_range')
                <h3>Pay Range - @field('pay_range')
                    </h3>
                @endfield
            </div>
        </div>
    </section>
</article>
