<a class="brand block border-none" href="{{ home_url('/') }}">
    @hasoption('branding', 'footer_logo')
    <img class="max-w-60 m-0 h-full w-full" src="@option('branding', 'footer_logo')
" alt="{{ get_bloginfo('name', 'display') }}" />
@else
    {!! $siteName !!}
@endoption
</a>
