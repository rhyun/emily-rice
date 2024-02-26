{{--
  Template Name: The List Template
--}}

@extends('layouts.app')

@section('content')

    <section class="hero min-h-[50vh] bg-white">
        <div class="wrapper px-8">
            <div class="hero-content bg-green-200 text-center">
                <div class="prose max-w-none">
                    <h1 class="title">
                        <span>The</span>
                        <div class="flex justify-between text-8xl uppercase">
                            <span>L</span>
                            <span>i</span>
                            <span>s</span>
                            <span>t</span>
                        </div>
                    </h1>
                    {{-- <h1>@include('components.logo-thelist')</h1> --}}

                    <p class="tracking-none py-6 text-lg text-black/[.75]">The List is a global resource created and
                        maintained by Emily Rice & Co to support the production accounting community. Use TheList to find
                        your next role or post an open position in the production accounting or production finance
                        community. Reach out if you are interested in advertising on TheList.</p>

                    @include('components.btn-list-job')
                </div>
            </div>

            <aside class="wrapper-sm flex flex-col gap-4 p-4 lg:flex-row lg:justify-between">
                @include('partials.the-list-newsletter')

                @include('partials.the-list-advertise')
                <aside>

        </div>
    </section>

    <div id="container" class="bg-accent">
        {{-- 
        <section class="intro w-full bg-white py-12">
            <article class="prose wrapper">
                <h1>@include('components.logo-thelist')</h1>
                <p class="py-6">The List is a global resource created and maintained by Emily Rice & Co to support the
                    production accounting community. Use TheList to find your next role or post an open position in the
                    production accounting or production finance community. Reach out if you are interested in
                    advertising on TheList.</p>
            </article>
           
        </section> --}}

        @include('partials.page-search')

        @include('ads.ad-content-full')
        @noposts
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
        @endnoposts

        <section id="the-list" class="the-list tabs js-tabs wrapper-l h-full w-full bg-white">
            <div class="wrapper h-full p-4 md:px-6 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:p-8 xl:py-12 2xl:gap-x-8">
                @php $counter = 0; @endphp
                @hasposts
                    <nav class="tabs-nav js-tabs-nav w-full">
                        {{-- <header class="">
                            All Results
                        </header> --}}
                        <div
                            class="grid auto-rows-fr grid-cols-1 gap-4 md:grid-cols-2 md:gap-5 lg:grid-cols-1 lg:gap-6 2xl:gap-y-8">

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
                        class="tabs-main w-full rounded-2xl bg-white lg:sticky lg:top-0 lg:col-span-2 lg:h-screen lg:border-l">
                        <div class="tabs-wrapper lg:h-screen lg:overflow-hidden">
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
