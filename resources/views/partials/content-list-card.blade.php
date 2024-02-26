<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post border-light-gray flex h-full w-full max-w-none flex-col rounded-2xl border bg-white text-left shadow transition ease-in-out">
        <section class="card-body prose prose-sm flex max-w-none flex-col px-6 pb-4">
            <header class="flex flex-col xl:flex-row xl:gap-4">
                @include('components.item-category-badge')

                <div class="">
                    <h3 class="card-title m-0 line-clamp-1 text-ellipsis whitespace-normal font-semibold">
                        @title<span class="accent">.</span></h3>

                    <ul class="">
                        <li class="m-0 flex items-end gap-1 p-0">@include('components.item-location')</li>
                        @hasfield('location_type')
                        <li class="m-0 flex items-end gap-1 p-0">
                            @include('components.item-location-type')
                        </li>
                        @endfield
                    </ul>
                </div>
            </header>

            @hasfield('project_subtitle')
            <p class="m-0 mt-2 line-clamp-3 font-light tracking-wide">
                @field('project_subtitle')
                </p>
            @endfield

            <ul class="not-prose border-light-gray mt-auto flex list-none gap-2.5 px-0 pt-4 text-xs">
                <li class="m-0 flex items-end gap-1 p-0">@include('components.item-category')</li>
                <li class="flex-end m-0 ml-auto flex gap-1 p-0">@include('components.item-date')
                </li>
            </ul>
        </section>
    </article>
</button>
