@hasoption('top_header')
    <div class="border-b px-4 py-2 md:p-4 lg:p-8">
        <div class="wrapper">
            @options('top_header')
                <a class="" href="@sub('ad_link')" target="_blank">
                    <img class="w-full" src="@sub('ad_image', 'url')
" alt="@sub('ad_image', 'alt')" />
                </a>
            @endoptions
        </div>
    </div>
@endhasoptions
