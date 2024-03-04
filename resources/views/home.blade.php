{{--
  Template Name: The List Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.list-hero')

    <div id="container" class="bg-star-gray">
        @include('partials.page-search')

        @include('ads.ad-content-full')
        @noposts
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
        @endnoposts

        <section id="the-list" class="the-list tabs js-tabs bg-star-gray h-full w-full">
            <div class="wrapper-l h-full bg-white xl:mb-12 xl:grid xl:grid-cols-12 xl:gap-12 xl:rounded-b-2xl">
                @php $counter = 0; @endphp
                @hasposts
                    <nav class="tabs-nav js-tabs-nav py-14 xl:col-span-5 xl:pl-12 2xl:col-span-4">
                        {{-- <header class="">
                            All Results
                        </header> --}}
                        <div
                            class="cards-list mx-auto grid w-full max-w-sm auto-rows-fr grid-cols-1 gap-4 md:max-w-none md:grid-cols-2 md:gap-8 md:py-8 lg:grid-cols-3 xl:flex xl:flex-col">

                            @posts
                                @php $counter++; @endphp
                                @include('partials.list-card')

                                @if ($counter === 3)
                                    @include('ads.ad-square-primary')
                                @endif

                                @if ($counter === 6)
                                    @include('ads.ad-square-secondary')
                                @endif

                                @if ($counter === 9)
                                    @include('ads.ad-square-tertiary')
                                @endif
                            @endposts
                        </div>

                        @include('partials.pagination')
                    </nav>

                    <section
                        class="tabs-main xl:border-light-gray w-full bg-white xl:sticky xl:top-0 xl:col-span-7 xl:h-screen xl:rounded-br-2xl xl:border-l 2xl:col-span-8">
                        <div class="tabs-wrapper xl:h-screen xl:overflow-hidden">
                            @posts
                                @include('partials.list-article')
                            @endposts
                        </div>
                    </section>
                @endhasposts
            </div>
        </section>

        {{-- @include('partials.list-faq') --}}
    @endsection
