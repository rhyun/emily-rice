<button class="tabs-nav__item js-tabs-nav__item card w-full max-w-none rounded-lg bg-white shadow-md"
    data-tab-id="post-id-@php(the_ID())">
    <div class="card-body prose prose-sm flex h-full grow flex-col text-left">
        <h3 class="card-title mt-0 flex flex-col">
            <a class="block" href="#">@title</a>
        </h3>

        <ul class="flex list-inside gap-4 px-0">
            {{-- <li>Company Name</li>
            <li>Job Category</li> --}}
            <li class="list-none px-0">Los Angeles, CA</li>
            <li class="px-0">@published</li>
        </ul>
        <div class="card-actions flex grow flex-col justify-end">
            <a href="#" class="btn w-full rounded no-underline" target="_blank">Apply Now</a>
        </div>
    </div>
</button>
