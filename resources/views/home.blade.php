@extends('layouts.app')

@section('content')

    @include('partials.page-header')

    <div id="container" class="class">
        @include('partials.page-search')

        <section id="the-list" class="the-list tabs js-tabs h-full w-full bg-white">
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

                    <section class="tabs-main w-full rounded-lg bg-white lg:sticky lg:top-0 lg:col-span-2 lg:h-screen">
                        <div class="tabs-wrapper h-full">
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
