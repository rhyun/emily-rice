<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article class="card card-post border-light-gray h-full w-full rounded-2xl border bg-white shadow transition">
        <section class="card-body prose prose-sm flex max-w-none flex-col p-6 text-left">
            <header class="">
                @include('components.item-category-badge')

                <h2 class="card-title mt-4 line-clamp-1 text-ellipsis">
                    @title<span class="accent">.</span></h2>
            </header>

            @include('components.item-excerpt')

            <ul class="*:flex *:m-0 *:p-0 *:gap-1 *:items-center not-prose mt-4 flex list-none gap-4 p-0 text-xs">
                @hasfield('country')
                <li>
                    @include('components.item-location')
                </li>
                @endfield
                @hasfield('location_type')
                <li>
                    @include('components.item-location-type')
                </li>
                @endfield
            </ul>

            <ul
                class="*:flex *:m-0 *:p-0 *:gap-1 *:items-center not-prose m-0 mt-auto flex list-none justify-between gap-4 p-0 text-xs">
                <li>
                    @include('components.item-category')
                </li>
                <li>
                    @include('components.item-date')
                </li>
            </ul>
        </section>
    </article>
</button>
