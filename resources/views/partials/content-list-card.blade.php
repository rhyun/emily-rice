<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post border-light-gray group h-full w-full rounded-2xl border bg-white shadow transition hover:border-[#776EA7]">
        <section class="card-body prose prose-sm flex max-w-none flex-col gap-0 p-6 text-left">
            <header>
                <div class="relative mb-2 flex items-center justify-between">
                    @include('components.item-category')
                    @include('components.item-see-listing')
                </div>

                <h2 class="card-title font-eina-semi font-sm my-0 line-clamp-1 text-ellipsis">
                    @title<span class="">.</span></h2>
            </header>

            <div class="*:line-clamp-2 *:tracking-wide *:m-0 *text-sm mb-6 mt-1">
                @include('components.item-excerpt')
            </div>

            <ul class="*:flex *:gap-1 *:p-0 *:items-center not-prose mt-auto flex list-none gap-0 p-0 text-xs">
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
                <li class="ml-auto">
                    @include('components.item-date')
                </li>
            </ul>
        </section>
    </article>
</button>
