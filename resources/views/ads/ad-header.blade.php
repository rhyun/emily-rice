@hasoption('top_header_toggle')
    @options('top_header')
        <div class="top-header border-light-gray hidden border-b px-4 py-2 md:p-4 lg:p-8">
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
