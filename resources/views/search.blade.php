@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    {{-- @if (!have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!} --}}

    <div id="container" class="class">
        @include('partials.page-search')

        <section id="the-list" class="the-list tabs js-tabs h-full w-full">
            @noposts
                <x-alert type="warning">
                    {!! __('Sorry, no results were found.', 'sage') !!}
                </x-alert>
            @endnoposts

            <div class="wrapper h-full px-4 py-2 md:p-4 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:p-8 xl:p-12 2xl:gap-x-8">
                @php $counter = 0; @endphp
                @hasposts
                    <nav class="tabs-nav js-tabs-nav w-full">
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
                            {!! get_the_posts_navigation() !!}
                        </div>
                    </nav>

                    <section class="tabs-main w-full rounded-lg bg-white lg:sticky lg:top-0 lg:col-span-2 lg:h-screen">
                        <div class="tabs-wrapper lg:h-screen lg:overflow-hidden lg:shadow-[0px_6px_10px_rgba(33,33,33,0.25)]">
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
