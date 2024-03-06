<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible article h-0 w-full bg-white opacity-0 xl:bg-transparent')>
    <span class="absolute left-4 top-4 z-10 text-black shadow md:left-8 md:top-8 xl:hidden">
        @include('components.btn-close')
    </span>
    <section
        class="prose prose-sm relative flex h-full w-full max-w-none flex-col gap-6 overflow-y-auto py-20 md:px-12 md:pt-32 xl:gap-12 xl:px-24 xl:pb-40 2xl:pl-32 2xl:pr-24">
        <header class="article-header wrapper-sm border-light-gray max-w-sm border-b pb-12">

            <h1 class="mb-0 pb-0 xl:mb-12 xl:text-4xl">
                @title<span class="accent">.</span>
            </h1>

            <ul
                class="*:p-0 *:flex *:items-center *:gap-2 *:my-0 *:text-sm border-light-gray *:xl:text-base flex flex-wrap items-center gap-5 border-y p-0 py-4 xl:mb-6">
                <li class="w-full md:w-auto">
                    @include('components.item-category')
                </li>
                <li class="">
                    @include('components.item-location')
                </li>
                @hasfield('location_type')
                <li>
                    @include('components.item-location-type')
                </li>
                @endfield
                <li class="ml-auto">
                    @include('components.item-date')
                </li>
            </ul>

            @hasfield('project_subtitle')
            <div class="prose xl:mb-6">
                <h2 class="mt-0 text-black">Overview.</h2>
                <p class="mb-4 mt-0">
                    @field('project_subtitle')
                    </p>
                </div>
            @endfield

            @include('components.btn-apply')
        </header>

        @include('ads.ad-content')

        <article class="wrapper-sm">
            <h2 class="mt-0">Job Description.</h2>

            <div
                class="prose prose-sm xl:prose-base marker:text-orange h-full first-letter:float-left first-letter:mr-3 first-letter:font-serif first-letter:text-7xl first-letter:font-bold first-letter:text-black first-line:uppercase first-line:tracking-widest">
                @content
            </div>
        </article>
        <footer class="wrapper-sm border-light-gray mt-auto border-t pt-6 text-base">
            <ul class="*:p-0 *:m-0 m-0 list-none p-0">
                <li>@include('components.item-pay-range')</li>
                <li>@include('components.item-apply-cta')</li>
            </ul>
        </footer>
    </section>
</article>
