@extends('layouts.app')

@section('content')

    @include('partials.page-header')

    <div id="container" class="class">
        {!! get_search_form(false) !!}

        <section id="the-list" class="the-list tabs js-tabs h-full w-full bg-gray-100 p-4 md:p-8 xl:p-12 2xl:p-16">
            @noposts
                <x-alert type="warning">
                    {!! __('Sorry, no results were found.', 'sage') !!}
                </x-alert>
            @endnoposts

            <div class="wrapper h-full lg:grid lg:grid-cols-3 lg:gap-x-6 2xl:gap-x-8">
                @hasposts
                    <nav class="tabs-nav js-tabs-nav w-full">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-5 lg:grid-cols-1 lg:gap-6 2xl:gap-y-8">
                            @posts
                                @include('partials.content-list-card')
                            @endposts
                        </div>

                        <div class="pagination">
                            {!! get_the_posts_navigation() !!}
                        </div>
                    </nav>

                    <section class="tabs-main w-full rounded-lg bg-white shadow-md lg:col-span-2">
                        <div class="tabs-wrapper">
                            @posts
                                @include('partials.content-list')
                            @endposts
                        </div>
                    </section>
                @endhasposts
            </div>
        </section>
    </div>
@endsection
