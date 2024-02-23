<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post flex h-full w-full max-w-none flex-col rounded-lg border-2 border-transparent bg-white text-left transition ease-in-out">
        <section class="card-body py-x prose prose-sm flex flex-col px-6">
            <header class="grow">
                @include('components.item-category')
                <h2 class="card-title m-0 line-clamp-2 text-ellipsis whitespace-normal uppercase tracking-wide">
                    @title<span class="accent">.</span></h2>

                @hasfield('project_subtitle')
                <p class="m-0 line-clamp-3 tracking-widest">
                    @field('project_subtitle')
                    </p>
                @endfield
            </header>

            <ul class="not-prose border-light-gray mt-2 flex list-none gap-2.5 border-t px-0 pt-4 text-xs">
                <li class="m-0 flex items-end gap-1 p-0">@include('components.item-location')</li>
                @hasfield('location_type')
                <li class="m-0 flex items-end gap-1 p-0">
                    @include('components.item-location-type')
                </li>
                @endfield
                <li class="flex-end m-0 flex grow items-end gap-1 justify-self-end p-0">@include('components.item-date')
                </li>
            </ul>
        </section>
    </article>
</button>
