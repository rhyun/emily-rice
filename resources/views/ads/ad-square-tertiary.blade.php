@hasoption('square_tertiary')
<div>
    <section class="glide js-glide js-glide--3 max-w-80 mx-auto">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                @layouts('square_tertiary', 'options')
                    <li class="glide__slide">
                        @hassub('ad_link')<a href="@sub('ad_link')
" target="_blank">
                        @endsub
                        @hassub('ad_image')
                        <img class="w-full" src="@sub('ad_image', 'url')" alt="@sub('ad_image', 'alt')
" />
                    @endsub
                @hassub('ad_link')</a>@endsub
        </li>
    @endlayouts
</ul>
</div>
</section>
</div>
@endoption
