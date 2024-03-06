<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post border-light-gray h-full w-full rounded-2xl border-2 bg-white transition hover:border-[#c6c2db]">
        <section class="card-body prose prose-sm flex max-w-none flex-col gap-0 p-6 text-left">
            <header>
                <div class="relative my-2 mb-2 flex items-center justify-between">
                    @include('components.item-category')
                </div>
                <h2 class="card-title font-circular-med my-0 line-clamp-2 text-ellipsis text-xl">
                    @title<span>.</span></h2>

                <span class="spacer bg-light-gray my-4 block h-1 w-6 rounded-sm"></span>
            </header>

            <div class="*:line-clamp-2 *:tracking-wide *:m-0 *text-sm mb-6">
                @include('components.item-excerpt')
            </div>

            <ul class="*:flex *:gap-1 *:p-0 *:items-center not-prose mt-auto flex flex-wrap gap-2 p-0 text-xs">
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
            <footer
                class="*:flex *:gap-1 *:p-0 *:items-center not-prose mt-6 flex list-none flex-wrap gap-2 p-0 text-xs">
                <li class="ml-auto">
                    @include('components.item-date')
                </li>
            </footer>
        </section>
    </article>
</button>
