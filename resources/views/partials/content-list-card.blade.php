<button @postclass('tabs-nav__item js-tabs-nav__item') data-tab-id="post-id-@php the_ID() @endphp">
    <article
        class="card card-post border-medium-gray flex h-full w-full max-w-none flex-col rounded-lg border bg-white text-left transition ease-in-out">
        <section class="card-body py-x prose prose-sm flex flex-col">
            <header class="flex grow flex-col">
                <h5
                    class="card-post__cat font-inter-semi mb-3 mt-0 border-none text-xs uppercase tracking-widest no-underline">
                    @category</h5>
                <h2 class="card-title font-bran-bold m-0 line-clamp-2 text-ellipsis whitespace-normal uppercase">
                    @title<span class="accent">.</span></h2>

                @hasfield('project_subtitle')
                <div class="grow">
                    <p class="m-0 line-clamp-3">
                        @field('project_subtitle')
                        </p>
                    @endfield
                    <div>
            </header>


            <ul class="mt-2 flex gap-2.5 px-0 text-xs">
                <li class="mr-4 list-none p-0">@include('components.item-location')</li>
                @hasfield('location_type')
                <li class="mr-4 p-0">
                    @field('location_type')
                    </li>
                @endfield
                <li class="p-0">@published</li>
            </ul>
        </section>
    </article>
</button>
