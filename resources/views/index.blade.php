@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <main class="container">
        @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
        @endwhile
    </main>

    {!! get_the_posts_navigation() !!}
@endsection
