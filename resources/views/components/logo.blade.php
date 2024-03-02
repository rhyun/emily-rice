<a class="brand block border-none" href="{{ home_url('/') }}">
    @hasoption('branding', 'logo')
    <img class="max-w-40 md:max-w-48 lg:max-w-56 xl:max-w-80 h-full w-full" src="@option('branding', 'logo')
"
        alt="{{ get_bloginfo('name', 'display') }}" />
@else
    {!! $siteName !!}
@endoption
</a>
