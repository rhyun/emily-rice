<article id="post-id-@php the_ID() @endphp" @postclass('tabs-article js-tabs-article invisible article h-0 w-full bg-white opacity-0 lg:rounded-lg')>
    <section class="prose relative h-full max-w-none overflow-y-auto py-20 lg:py-0">
        @include('components.btn-close')
        <header class="article-header lg:top:0 p-4 md:p-20">

            @include('components.item-category-badge')

            <h1 class="mb-0 pb-0">
                @title<span class="accent">.</span>
            </h1>

            @hasfield('project_subtitle')
            <p class="mt-0">
                @field('project_subtitle')
                </p>
            @endfield

            <ul class="flex list-none items-center gap-5 p-0 text-sm">
                <li class="flex items-center gap-1 p-0">@include('components.item-category')</li>
                <li class="flex items-center gap-1 p-0">@include('components.item-location')</li>
                @hasfield('location_type')
                <li class="flex items-center gap-1 p-0">
                    @include('components.item-location-type')
                </li>
                @endfield
                <li class="flex items-center gap-1 p-0">@include('components.item-date')</li>
            </ul>

            @include('components.btn-apply')
        </header>

        <div class="p-4 md:px-20">
            @include('ads.ad-content')
            <h2 class="mt-0">Job Description</h2>

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
