<article id="post-id-@php(the_ID())"
    class="tabs-article js-tabs-article invisible fixed top-0 h-0 w-full overflow-visible bg-white opacity-0 shadow-md lg:static lg:rounded-lg">
    <div class="h-full w-full overflow-y-auto">
        <section class="prose max-w-full">
            <header class="border-b-2 p-4 md:p-8 xl:p-12 2xl:p-16">
                <h1>@title</h1>
                <ul>
                    <li>Company Name</li>
                    <li>Job Category</li>
                    <li>location</li>
                    <li>@published</li>
                </ul>
                <a class="btn rounded-lg" href="#" onclick="event.preventDefault(); target="_blank">Quick Apply</a>
            </header>
            <div class="p-4 md:p-8 xl:p-12 2xl:p-16">
                <h2>About The Job</h2>

                @content
            </div>
        </section>

        <button class="tabs-close js-tabs-close block lg:hidden" onclick="event.preventDefault();">Back</button>
    </div>
</article>
