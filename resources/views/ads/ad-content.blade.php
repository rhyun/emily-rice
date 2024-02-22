@hasoption('content_toggle')
    @options('content')
        <div>
            <div class="wrapper">
                @hassub('ad_link')<a href="@sub('ad_link')
" target="_blank">
                @endsub
                @hassub('ad_image')
                <img class="w-full" src="@sub('ad_image', 'url')
" alt="@sub('ad_image', 'alt')
" />
            @endsub
        @hassub('ad_link')</a>@endsub
</div>
</div>
@endoptions
@endhasoptions
