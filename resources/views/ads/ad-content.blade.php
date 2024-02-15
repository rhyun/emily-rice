@hasoption('content')
    <div class="class">
        <div class="wrapper">
            @options('content')
                <a class="" href="@sub('ad_link')" target="_blank">
                    <img class="m-0 w-full" src="@sub('ad_image', 'url')
" alt="@sub('ad_image', 'alt')" />
                </a>
            @endoptions
        </div>
    </div>
@endhasoptions
