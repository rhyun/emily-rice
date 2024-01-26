<button class="tabs-nav__item js-tabs-nav__item card w-full rounded-lg bg-white"
    data-tab-id="post-id-@php(the_ID())">
    <article class="card-body prose prose-sm flex h-full w-full max-w-none flex-col text-left">
        <header>
            <h3 class="card-title mt-0">
                @title
            </h3>
            <h4>Project Title</h4>
        </header>

        <ul class="flex list-inside flex-wrap gap-4 px-0 text-xs">
            <li class="px-0">Project Type</li>
            <li class="px-0">Los Angeles, CA (Hybrid)</li>
            <li class="px-0">@published</li>
        </ul>
        <div class="card-actions flex grow flex-col justify-end">
            <a href="#" class="btn w-full rounded no-underline" target="_blank">Apply Now</a>
        </div>
    </article>
</button>
