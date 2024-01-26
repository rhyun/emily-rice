<article id="post-id-@php(the_ID())"
    class="tabs-article js-tabs-article invisible h-0 w-full bg-white opacity-0">
    <div class="h-full overflow-y-auto overscroll-y-contain">
        <section class="prose relative max-w-none">
            <button class="tabs-close js-tabs-close m:p-8 p-4 lg:hidden" onclick="event.preventDefault();">Back</button>
            <header class="border-b-2 p-4 md:p-8 xl:p-12 2xl:p-16">
                <h1>@title</h1>
                <h3 class="">Project Title</h3>
                <ul class="flex list-inside flex-wrap p-0">
                    <li class="list-none">Job Category</li>
                    <li class="">Los Angeles, CA</li>
                    <li>@published</li>
                </ul>
                <a class="btn rounded-lg" href="#" onclick="event.preventDefault(); target="_blank">Quick
                    Apply</a>
            </header>
            <div class="p-4 md:p-8 xl:p-12 2xl:p-16">
                <h2>Description</h2>

                <div>
                    @content
                </div>
            </div>
        </section>
    </div>
</article>
