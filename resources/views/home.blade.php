{{--
  Template Name: The List Template
--}}

@extends('layouts.app')

@section('content')

    <section class="hero min-h-[50vh] bg-white">
        <div class="wrapper px-8">
            <div class="hero-content rounded-2xl bg-green-200 text-center">
                <div class="prose max-w-none">
                    <h1 class="title">
                        <span>the</span>
                        <div class="flex justify-between text-8xl uppercase">
                            <span>l</span>
                            <span>i</span>
                            <span>s</span>
                            <span>t</span>
                        </div>
                    </h1>
                    {{-- <h1>@include('components.logo-thelist')</h1> --}}

                    <p class="tracking-none py-6 text-lg text-black/[.75]">The List is a global resource created and
                        maintained by Emily Rice & Co to support the production accounting community. Use TheList to find
                        your next role or post an open position in the production accounting or production finance
                        community. Reach out if you are interested -in advertising on TheList.</p>
                </div>
            </div>

            <aside class="wrapper-sm grid gap-4 p-4">
                @include('partials.list-newsletter')

                @include('partials.list-advertise')
                <aside>
        </div>
    </section>

    <div id="container" class="bg-[#EFEFEF]">
        @include('partials.page-search')

        @include('ads.ad-content-full')
        @noposts
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
        @endnoposts

        <section id="the-list" class="the-list tabs js-tabs h-full w-full bg-[#FAF9F5]">
            <div class="wrapper-l lxl:gap-12 h-full xl:grid xl:grid-cols-12 xl:gap-12 2xl:gap-16">
                @php $counter = 0; @endphp
                @hasposts
                    <nav class="tabs-nav js-tabs-nav xl:col-span-5 2xl:col-span-4">
                        {{-- <header class="">
                            All Results
                        </header> --}}
                        <div
                            class="cards-list mx-auto grid w-full max-w-sm auto-rows-fr grid-cols-1 gap-4 py-4 md:max-w-none md:grid-cols-2 md:gap-8 md:py-8 lg:grid-cols-3 xl:flex xl:flex-col">

                            @posts
                                @php $counter++; @endphp
                                @include('partials.content-list-card')

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

                        <div class="pagination">
                            {!! get_the_posts_pagination() !!}
                        </div>
                    </nav>

                    <section
                        class="tabs-main xl:border-light-gray w-full bg-white xl:sticky xl:top-0 xl:col-span-7 xl:h-screen xl:border-l 2xl:col-span-8">
                        <div class="tabs-wrapper xl:h-screen xl:overflow-hidden">
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
