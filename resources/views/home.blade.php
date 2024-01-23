@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <main class="container">

        {!! get_search_form(false) !!}

        <section id="the-list" class="listings js-listings">
            <div class="wrapper">
                @noposts
                    <x-alert type="warning">
                        {!! __('Sorry, no results were found.', 'sage') !!}
                    </x-alert>

                    {{-- {!! get_search_form(false) !!} --}}
                @endnoposts

                @hasposts
                    <nav class="listings-nav js-tabs-nav">
                        <div>
                            @posts
                                @include('partials.content-listing-card')
                            @endposts
                        </div>

                        {!! get_the_posts_navigation() !!}
                    </nav>

                    <div class="listings-main tabs-main">
                        @posts
                            @include('partials.content-listing')
                        @endposts
                    </div>
                @endhasposts
            </div>
        </section>
    </main>
@endsection
