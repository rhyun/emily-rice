@extends('layouts.app')

@section('content')

    @include('partials.page-header')

    <main id="main" class="main block">
        {!! get_search_form(false) !!}

        <section id="the-list" class="the-list listings tabs js-tabs h-full w-full bg-gray-100 p-4 md:p-8 xl:p-12 2xl:p-16">
            @noposts
                <x-alert type="warning">
                    {!! __('Sorry, no results were found.', 'sage') !!}
                </x-alert>
            @endnoposts

            <div class="wrapper mx-auto block h-full w-full max-w-screen-xl lg:col-start-1 lg:flex lg:gap-x-6 2xl:gap-x-8">
                @hasposts
                    <nav class="tabs-nav js-tabs-nav w-full lg:max-w-sm">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-5 lg:grid-cols-1 lg:gap-6 2xl:gap-y-8">
                            @posts
                                @include('partials.content-list-card')
                            @endposts
                        </div>

                        <div class="pagination">
                            {!! get_the_posts_navigation() !!}
                        </div>
                    </nav>

                    <div class="tabs-main h-full w-full grow rounded-lg bg-white lg:row-auto lg:grid lg:grid-cols-1">
                        @posts
                            @include('partials.content-list')
                        @endposts
                    </div>
                @endhasposts
            </div>
        </section>
    </main>
@endsection
