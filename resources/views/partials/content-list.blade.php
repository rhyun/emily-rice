<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible article h-0 w-full bg-white opacity-0')>
    @include('components.btn-close')
    <section
        class="prose prose-sm relative flex h-full w-full max-w-none flex-col gap-6 overflow-y-auto py-20 text-[#282a32] xl:pl-24 2xl:pl-32">
        <header class="article-header wrapper">
            <div class="mb-4">
                @include('components.item-category-badge')
                {{-- @include('components.item-category') --}}
            </div>

            <h1 class="mb-0 pb-0">
                @title<span class="accent">.</span>
            </h1>

            <ul class="*:flex *:items-center *:gap-1 *p-0 *:text-sm flex list-none items-center gap-5 p-0">
                <li class="">@include('components.item-location')</li>
                @hasfield('location_type')
                <li class="">
                    @include('components.item-location-type')
                </li>
                @endfield
                <li>@include('components.item-pay-range')</li>
                <li>@include('components.item-date')</li>
            </ul>

            @hasfield('project_subtitle')
            <div class="prose">
                <h2 class="mt-0 text-black">Overview</h2>
                <p class="mt-0">
                    @field('project_subtitle')
                    </p>
                </div>
            @endfield

            @include('components.btn-apply')
        </header>

        @include('ads.ad-content')

        <article class="wrapper pt-12">
            <h2 class="mt-0">Job Description</h2>

            <div class="prose prose-sm text-color h-full text-[#282a32]">
                @content
            </div>
        </article>
        <div class="sm:wrapper-xs md:wrapper">
            @include('components.item-pay-range')
            @include('components.item-apply-cta')
        </div>
    </section>
</article>
