<a class="brand block border-none" href="{{ home_url('/') }}">
    @hasoption('branding', 'logo')
    <img class="max-w-24 lg:max-w-40 xl:max-w-56h-full w-full" src="@option('branding', 'logo')
"
        alt="{{ get_bloginfo('name', 'display') }}" />
@else
    {!! $siteName !!}
@endoption
</a>
