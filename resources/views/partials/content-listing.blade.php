<article id="post-id-@php(the_ID())" class="listings-article js-listings-article">
    <div class="p-4 md:p-8 xl:p-12 2xl:p-16">
        <header class="listings-article__hdr">
            <h1>@title</h1>
            <ul>
                <li>location</li>
                <li>@published</li>
            </ul>
            <a class="btn" href="#" target="_blank">Quick Apply</a>
            <span><a class="js-tabs-close" href="#" onclick="event.preventDefault();">Back</a></span>
        </header>
        <div class="listings-article__entry">
            @content
        </div>
    </div>
</article>
