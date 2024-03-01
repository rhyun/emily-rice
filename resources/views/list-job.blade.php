{{--
  Template Name: TheList Job Template
--}}

<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app" class="flex min-h-screen flex-col overflow-hidden lg:overflow-visible">
        <a class="sr-only focus:not-sr-only" href="#main">
            {{ __('Skip to content') }}
        </a>

        {{-- <header class="text-center">
            @include('components.logo')
        </header> --}}

        <div id="main" class="main grow">
            <div class="fixed left-4 top-9 z-10">
                @include('components.btn-back')
            </div>
            @while (have_posts())
                @php(the_post())
                {{-- @include('partials.page-header') --}}
                <section class="list-job">
                    @php(the_content())
                </section>
            @endwhile
        </div>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>

</html>
