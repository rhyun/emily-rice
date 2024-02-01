<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post h-full w-full max-w-none rounded-lg border border-t-4 border-t-[#7a8793] bg-white text-left">
        <section class="card-body prose prose-sm flex flex-col">
            <header class="flex grow flex-col">
                <h3
                    class="card-post__cat font-inter mb-4 mt-0 border-none text-xs font-bold uppercase tracking-wider no-underline">
                    @category(true)</h3>
                <h2 class="card-title font-bran-bold mt-0 line-clamp-2 grow text-ellipsis whitespace-normal uppercase">
                    @title
                </h2>
            </header>

            @hasfield('project_subtitle')
            <p class="mt-0">
                @field('project_subtitle')
                </p>
            @endfield
            <ul class="flex list-inside flex-wrap gap-4 px-0 text-xs">
                <li class="list-none px-0">
                    Los Angeles, CA
                    @hasfield('location_type')
                    (@field('location_type')
                        )
                    @endfield
                </li>
                <li class="px-0">@published</li>
            </ul>
        </section>
        {{-- <div class="card-actions flex grow flex-col justify-end">
            <a href="#" class="btn w-full rounded no-underline" target="_blank">Details</a>
        </div> --}}
    </article>
</button>
