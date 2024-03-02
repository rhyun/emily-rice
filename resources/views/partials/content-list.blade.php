<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible article h-0 w-full bg-white opacity-0')>
    @include('components.btn-close')
    <section
        class="prose prose-sm relative flex h-full w-full max-w-none flex-col gap-6 overflow-y-auto py-20 text-[#282a32] xl:px-24 2xl:pl-32 2xl:pr-24">
        <header class="article-header wrapper-sm max-w-sm">
            <div class="mb-4">
                {{-- @include('components.item-category-badge') --}}
                {{-- @include('components.item-category') --}}
            </div>

            <h1 class="mb-0 pb-0">
                @title<span class="accent">.</span>
            </h1>

            <ul
                class="*:p-0 *:flex *:items-center *:gap-2 *:my-0 *:text-sm border-light-gray *:xl:text-base flex items-center gap-5 border-y p-0 py-4">
                <li class="">
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
            <div class="prose">
                <h2 class="mt-0 text-black">Overview.</h2>
                <p class="mt-0">
                    @field('project_subtitle')
                    </p>
                </div>
            @endfield

            @include('components.btn-apply')
        </header>

        @include('ads.ad-content')

        <article class="wrapper-sm pt-12">
            <h2 class="mt-0">Job Description.</h2>

            <div class="prose prose-sm xl:prose-base text-color h-full text-[#282a32]">
                @content
            </div>
        </article>
        <footer class="wrapper-sm">
            @include('components.item-pay-range')
            @include('components.item-apply-cta')
        </footer>
    </section>
</article>
